@extends('layouts.admin')
@section('admin-content')
 <!-- Horizontal Form -->
 <div class="card card-info" style="margin: 0px 2rem 0px 2rem">
    <div class="card-header">
      <h3 class="card-title">{{ is_null($user)?'Create Form':'Update Form'}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="col-sm-6 col-12">

        <form class="form-horizontal" action="{{ route('admin_user_store',  !is_null($user)? $user->id: 0) }}" method="POST">
            {!! csrf_field() !!}

            <div class="card-body">
            <div class="form-group row">

                <label for="inputName" class="col-sm-2 col-form-label">Tên quản trị viên</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{ !empty($user)? $user->name: null }}">
                    <span class="help-block">{{$errors->first('name')}}</span>

                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ !empty($user)? $user->email: null }}">
                    <span class="help-block">{{$errors->first('email')}}</span>

                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    <span class="help-block">{{$errors->first('password')}}</span>

                </div>
            </div>

            <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="password" name="phone" class="form-control" id="inputPhone" placeholder="Phone" value="{{ !empty($user)? $user->phone: null }}">
                </div>
            </div>

            <div class="form-group row" >
                <label for="inputRoles" class="col-sm-2 col-form-label">Loại</label>
                <div class="col-sm-10">
                    <?php $roles = config('auth.roles');  ?>
                    <select class="form-control" id="inputRoles" name="role">
                        @foreach($roles as $role => $name)
                        <?php $role = intval($role); ?>
                            <option {{ !is_null($user) && $role == $user->role? 'selected': null }} value="{{ $role }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">{{ is_null($user)?'Thêm quản trị viên':'Chỉnh sửa quản trị viên'}}</button>
            <a class="btn btn-default float-right" href="{{ route('admin_users')}}">Cancel</a>
        </div>
        <!-- /.card-footer -->
        </form>
    </div>
  </div>
  <!-- /.card -->
@endsection