@extends('layouts.admin')

@section('extra-css')
<link rel="stylesheet" href="{{asset('admin-theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('admin-content')

<!-- Main Content -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slides List</h3>

      <div class="card-tools">
        @if(env('APP_ENV') === 'dev')
          <a href="{{ route('slide_list_api','image')}}?public" type="button" class="btn btn-warning" >Api - List - Image</a>
          <a href="{{ route('slide_list_api','text')}}?public" type="button" class="btn btn-warning" >Api - List - Text</a>
        @endif
      </div>
    </div>
    <div class="card-body">
      <div class="mb-2">
        <a href="{{ route('admin_slide',['type'=>config('config.slides.types.0'),'id'=>'0'])}}" class="btn btn-info"><i class="far fa-plus-square"></i> Thêm slide chữ</a>
        <a href="{{ route('admin_slide',['type'=>config('config.slides.types.1'),'id'=>'0'])}}" class="btn btn-info"><i class="far fa-plus-square"></i> Thêm slide ảnh</a>
      </div>
        <!-- Slides list -->
        <div  class="">
          <div class="" style="overflow: hidden">
            <div class="table-responsive">
              <table id="articles-list" class="table table-bordered table-vcenter ">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th class="title-article-table">Tên Slides</th>
                    <th class="col-200">Người tạo</th>
                    <th class="col-50">Trạng thái</th>
                    <th class="col-300">Thời gian</th>
                    <th class="col-100">Loại slide</th>
                    <th class="col-300">Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($slides as $slide)
                      <tr>
                          <td >{{ $slide->id}}</th>
                          <td class="title-slide-table" title="{{$slide->title}}">{{ Illuminate\Support\Str::limit($slide->title,$limit = 100,$end='...') }}</th>
                          <td class="col-200">
                            {{ $slide->auth->email?? null }}
                            {{-- <span><i> ({{ $slide->auth->role?'admin':'thành viên' }})</i></span>   --}}
                          </th>
                          <td class="col-50">
                              <span class="badge badge-{{ config('config.boolean-colors.'.($slide->is_public?1:0)) }}">{{ config('config.is_public.'.($slide->is_public?1:0)) }}</span>
                          </th>

                          <td class="col-300">
                              <div>
                              <p><b>Ngày tạo: </b>{{ App\Helper\Helper::render_time_to_vietnamese($slide->created_at) }}</p>
                              <p><b>Ngày cập nhật: </b>{{ App\Helper\Helper::render_time_to_vietnamese($slide->updated_at) }}</p>
                              <p><b>Ngày xuất bản: </b>{{!is_null($slide->date_public)?$slide->date_public:null }}</p>

                              </div>
                          </td>
                          <td class="col-50">
                          <span class="badge badge-{{ config('config.boolean-colors.'.($slide->type==config('config.slides.types.0')?1:0)) }}">{{$slide->type}}</span>
                        </th>
                          <td class="col-300">
                            <div class="btn-group">
                                <a type="button" class="btn btn-info" href="{{ route('admin_slide',['type'=>$slide->type,'id'=>$slide->id])}}"><i class="fas fa-edit" title="Edit"></i></a>
                                @if(!$slide->is_public)
                                <a type="button" class="btn btn-warning"  href="{{ route('admin_slide',['type'=>$slide->type,'id'=>$slide->id])}}?public"  ><i class="fas fa-lock" title="Trạng thái: chưa xuất bản" style="color:#fff"></i></a>
                                @else
                                <a type="button" class="btn btn-success"  href="{{ route('admin_slide',['type'=>$slide->type,'id'=>$slide->id])}}?unpublic"><i class="fas fa-clock" title="Trạng thái: đã xuất bản"  style="color:#fff"></i></a>
                                @endif
                                <a type="button" class="btn btn-danger" href="{{ route('admin_slide_delete', $slide->id )}}"><i class="fas  fa-trash" title="Delete"></i></a>

                              </div>  
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Tên bài viết</th>
                    <th>Người tạo</th>
                    <th>Trạng thái</th>
                    <th>Thời gian</th>
                    <th>Loại slide</th>
                    <th>Hành động</th>
                  </tr>
                  </tfoot>
                </table>
  
            </div>
          </div>
        </div>
        <!-- Slides list -->
  
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection

@section('extra-script')
    <script src="{{ asset('admin-theme/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('admin-theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{ asset('admin-theme/js/demo.js')}}"></script>

    <script>
        $(function () {
          $('#articles-list').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
          });
        });
    </script>
@endsection