@extends('layouts.admin')

@section('extra-css')
<link rel="stylesheet" href="{{asset('admin-theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('admin-content')

<!-- Main Content -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Users List</h3>

      <div class="card-tools">
        @if(env('APP_ENV') === 'dev')
          <a href="{{ route('article_list_api')}}" type="button" class="btn btn-warning" >Api - List</a>
          <a href="{{ route('article_list_api')}}?public" type="button" class="btn btn-warning" >Api - List - Public</a>
        @endif
      </div>
    </div>
    <div class="card-body">

        <div class="mb-2">
          <a href="{{ route('admin_article','0')}}" class="btn btn-info"><i class="far fa-plus-square"></i> Thêm bài viết</a>
        </div>

        <div  class="">
          <div class="" style="overflow: hidden">
            <div class="table-responsive">
              <table id="articles-list" class="table table-bordered table-vcenter ">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th class="title-article-table">Tên bài viết</th>
                    <th class="col-200">Thumbnail</th>
                    <th class="col-200">Người tạo</th>
                    <th class="col-50">Trạng thái</th>
                    <th class="col-300">Thời gian</th>
                    <th class="col-300">Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($articles as $article)
                      <tr>
                          <td >{{ $article->id}}</th>
                          <td class="title-article-table" title="{{$article->title}}">{{ Illuminate\Support\Str::limit($article->title,$limit = 100,$end='...') }}</th>
                          <td class="col-200">              
                            <img src="{{ asset($article->picture_data['thumb_data']['url']) }}" class="thumbnail-article-small" >      
                          </th>
                          <td class="col-200">
                            {{ $article->auth->email }}
                            <span><i> ({{ $article->auth->role?'admin':'thành viên' }})</i></span>  
                          </th>
                          <td class="col-50">
                              <span class="badge badge-{{ config('config.boolean-colors.'.($article->is_public?1:0)) }}">{{ config('config.is_public.'.($article->is_public?1:0)) }}</span>
                          </th>

                          <td class="col-300">
                              <div>
                              <p><b>Ngày tạo: </b>{{ App\Helper\Helper::render_time_to_vietnamese($article->created_at) }}</p>
                              <p><b>Ngày cập nhật: </b>{{ App\Helper\Helper::render_time_to_vietnamese($article->updated_at) }}</p>
                              <p><b>Ngày xuất bản: </b>{{ App\Helper\Helper::render_time_to_vietnamese(!is_null($article->date_public)?$article->date_public:null) }}</p>

                              </div>
                          </td>
                          <td class="col-300">
                            <div class="btn-group">
                                <a type="button" class="btn btn-info" href="{{ route('admin_article',$article->id)}}"><i class="fas fa-edit" title="Edit"></i></a>
                                @if(!$article->is_public)
                                <a type="button" class="btn btn-warning"  href="{{ route('admin_article',$article->id)}}?public"  ><i class="fas fa-lock" title="Trạng thái: chưa xuất bản" style="color:#fff"></i></a>
                                @else
                                <a type="button" class="btn btn-success"  href="{{ route('admin_article',$article->id)}}?unpublic"><i class="fas fa-clock" title="Trạng thái: đã xuất bản"  style="color:#fff"></i></a>
                                @endif
                                <a type="button" class="btn btn-danger" href="{{ route('admin_article_delete', $article->id )}}"><i class="fas  fa-trash" title="Delete"></i></a>
                            </div>  
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Tên bài viết</th>
                    <th>Thumbnail</th>
                    <th>Người tạo</th>
                    <th>Trạng thái</th>
                    <th>Thời gian</th>
                    <th>Hành động</th>
                  </tr>
                  </tfoot>
                </table>
  
            </div>
          </div>
        </div>
        <!-- Article list -->
  
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