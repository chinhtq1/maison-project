@extends('layouts.admin')

@section('admin-content')

<!-- Main Content -->
<form class="form-horizontal" action="{{ route('admin_article_store',  !is_null($article)? $article->id: '0') }}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ is_null($article)?'Create Form':'Update Form'}}</h3>
      <div class="card-tools">
        <button type="submit" class="btn btn-info" >Lưu bài viết</button>
        @if(!empty($article))
          <a href="{{ route('admin_article_delete', $article->id)}}" type="button" class="btn btn-danger" >Xóa bài viết</a>
        @endif
        @if(env('APP_ENV') === 'dev' && !empty($article))
        <a href="{{ route('article_show_api', $article->id)}}" type="button" class="btn btn-warning" >Api</a>
        @endif
        <a href="{{ route('admin_articles')}}" type="button" class="btn btn-default" >Hủy bỏ</a>
      </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <!-- Title -->
                      <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label" >Tên bài viết</label>
                        <input type="text" id="inputTitle" class="form-control col-sm-10" name="title" value="{{ !empty($article)? $article->title: null }}">
                        <span class="help-block">{{$errors->first('title')}}</span>

                      </div>

                      <div class="form-group row">
                        <label for="inputFBLink" class="col-sm-2 col-form-label">Facebook Link</label>
                        <input type="text" id="inputFBLink" class="form-control col-sm-10" name="fb_link" value="{{ !empty($article)? $article->fb_link: null }}">
                        <span class="help-block">{{$errors->first('fb_link')}}</span>
                      </div>

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="public" id="inputPublic" name="is_public" 
                            @if( !empty($article) && $article->is_public) 
                              checked    
                            @endif>
                        <label class="form-check-label" for="inputPublic">Đã xuất bản bài viết</label>
                      </div>

                                              <!-- Title -->
                        <div class="form-group row">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Project Description</label>
                            <textarea id="inputDescription" class="form-control col-sm-10" rows="4" name="description" >{{ html_entity_decode(!empty($article)?$article->description:'') }}</textarea>
                            
                            <span class="help-block">{{$errors->first('description')}}</span>

                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                  <!-- /.card -->
            </div>
            <div class="col-md-6 col-12">
                <div class="card card-primary">
                    <div class="card-body">
                            <label>Ảnh bài viết</label>
                            <input type="file" accept="image/*" name="main_picture" class="form-control-file" >
                            <img src="{{asset($article->thumbnail ?? 'admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                style="margin-top:15px;margin-bottom: 15px;">
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
        </div>

        <div class="card card-primary" style="margin:1rem">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputContent" class="col-form-label">Nội dung</label>
                    <textarea type="text" id="inputContent" class="form-control" name="content">{{html_entity_decode(!empty($article)?$article->content:'')}}</textarea>
                </div>
            </div>
        </div>

        <!-- Admin list -->
  
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</form>


@endsection

@section('extra-script')

@include('mceImageUpload::upload_form')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ asset('js/setup_tinymce.js')}}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script src="{{ asset('js/upload_photo.js')}}"></script>

@endsection