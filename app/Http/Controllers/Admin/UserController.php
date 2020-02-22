<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator, Session, Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UserController extends Controller
{   
    private $INDEX_PAGE = "Danh sách quản trị viên";
    private $DELETE_PAGE = "Xóa quản trị viên";
    private $CREATE_PAGE = "Thêm quản trị viên";
    private $EDIT_PAGE = "Chỉnh sửa quản trị viên";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $sort = $request->has('sort')? explode('-', $request->sort): ['id', 'desc'];
        $users =  User::paginate(config('config.users_admin_perpage'));
        if ($request->has('q')) {
            $q = $request->q;
            $users->where(function($query) use ($q){
                $query->where('name', 'like', "%{$q}%")
                ->orWhere('phone', 'like', "%{$q}%")
                ->orWhere('email', 'like', "%{$q}%");
            });
        }
        $users->appends($request->all());
        return view('admin.users.index', ['users'=> $users, 'page_name' => $this->INDEX_PAGE]);
    }

    public function edit($id = null,Request $request){
        $user = User::where('id', $id)->first();

                // Active
            if ($request->has('active') && !is_null($user)) {
                $user->fill(['status' => 3])->save();
                session()->flash('message', ['text' => 'Đã cập nhật trạng thái thành viên '.$user->name, 'type' => 'success']);
                return redirect()->back();
            }

            //Lock
            if ($request->has('lock') && !is_null($user)) {
                $user->fill(['status' => 2])->save();
                session()->flash('message', ['text' => 'Đã cập nhật trạng thái thành viên '.$user->name, 'type' => 'success']);
                return redirect()->back();
            }
        

        $page_name = is_null($user)? $this->CREATE_PAGE: $this->EDIT_PAGE;
        return view('admin.users.edit', ['user' => $user, 'page_name' => $page_name]);
    }

    public function store($id = '0',Request $request) {
        $user = User::where('id', $id)->first();
        $unique = is_null($user)? null: ','.$user->id;
        $rules = [
            'role' => 'required',
            'name' => 'required|string|max:255|unique:users,name'.$unique,
            'email' => 'required|string|email|max:255|unique:users,email'.$unique,
        ];
        $data = $request->only(['role', 'phone', 'name', 'email', 'password']);
        if ($id == '0' || strlen($data['password'])) {
            $rules['password'] = 'required|string|min:6';
            $data['password'] = Hash::make($data['password']);
        }else{
            if (strlen($data['password']) == 0) {
                unset($data['password']);
            }
        }

        $validated = $request->validate($rules,[
            'required' => 'Không để trống',
            'string' => 'Không dùng ký tự lạ',
            'email' => 'Không đúng định dạng email',
            'max' => 'Quá nhiều ký tự',
            'min' => 'Không ngắn hơn 6 ký tự',
            'unique' => 'Đã có người sử dụng',
            'confirmed' => 'Nhập lại mật khẩu không đúng',
        ]);

        if (!is_null($user)) {
            if(Auth::user()->role != 1 ) {
                $data['role'] = Auth::user()->role;
            }
            $user->fill($data);
            $user->save();
        }else{
            $data['status'] = 1;
            $user = User::create($data);
        }
        $text = !is_null($user)? "Đã cập nhật thông tin thành viên {$user->name}": "Đã thêm mới thành viên {$user->name}";

        session()->flash('message', ['text' => $text, 'type' => 'success']);
        return redirect()->route('admin_users');
    }

    public function delete($id, Request $request) {
        $user = User::firstOrFail ($id);
        return view('admin.users.delete', ['user'=> $user, 'page_name' => $this->INDEX_PAGE]);
    }

    public function delete_comfirm($id, Request $request) {
        $user = User::firstOrFail ($id);
        $user->delete();
        Session::flash('message', ['text'=>'deleted!','type'=>'success' ]);

        return Redirect::route('admin_users');
    }
}