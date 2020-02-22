@extends('layouts.admin')

@section('admin-content')

<!-- Main Content -->
<form class="form-horizontal" action="{{ route('admin_article_store',  !is_null($article)? $article->id: '0') }}" method="POST">
  {!! csrf_field() !!}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ is_null($article)?'Create Form':'Update Form'}}</h3>
      <div class="card-tools">
        <button type="submit" class="btn btn-info" >Lưu bài viết</button>
        @if(!empty($article))
          <a href="{{ route('admin_article_delete', $article->id)}}" type="button" class="btn btn-danger" >Xóa bài viết</a>
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

                        <!-- Slug -->
                      <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Slug</label>
                        <input type="text" id="inputTitle" class="form-control col-sm-10" name="slug" value="{{ !empty($article)? $article->slug: null }}">
                        <span class="help-block">{{$errors->first('slug')}}</span>

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

                      @if(!empty($article))
                          <div class="form-group row">
                              <label for="inputFBLink" class="col-sm-2 col-form-label">Hình ảnh của trang</label>
                              <span class="col-sm-10 text-center">
                                <img  src="{{ asset($article->picture_data['main_picture_data']['url'])}}" alt="" style="margin-top:1rem; width:auto; height:200px; border: 1px solid #333">
                              </span>
                          </div>
                      @endif

                    </div>
                    <!-- /.card-body -->
                </div>
                  <!-- /.card -->
            </div>
            <div class="col-md-6 col-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <!-- Title -->
                        <div class="form-group row">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Project Description</label>
                            <textarea id="inputDescription" class="form-control col-sm-10" rows="4" name="description" >{{ html_entity_decode(!empty($article)?$article->description:'') }}</textarea>
                            
                            <span class="help-block">{{$errors->first('description')}}</span>

                          </div>

                        <!-- Slug -->
                      <div class="form-group row">
                        <label for="inputSeo" class="col-sm-2 col-form-label">Seo</label>
                        <input type="text" id="inputSeo" class="form-control col-sm-10" name="seo">
                      </div>

                      <div class="input-group">
                        <span class="input-group-prepend">
                          <a id="lfm" data-input="image" data-preview="holder" class="btn btn-info">
                            <i class="fa fa-picture-o"></i> Chọn ảnh
                          </a>
                        </span>
                        <input readonly id="image" class="form-control" type="text" name="picture_data[origin_url]" value="{{ !empty($article)? $article->picture_data['origin_url']:'' }}">
                      </div>
                      <img id="holder" style="margin-top:15px;max-height:100px; margin-bottom: 15px;">

                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Thumbnail Size</label>
                        <input type="number" class="form-control col-sm-3" 
                          name="picture_data[thumb_data][width]" 
                          value="{{ empty($article)?config('config.article.thumbnail_size.0.width'):$article->picture_data['thumb_data']['width']}}" min="20" max="1000">
                        <p class="col-sm-1 text-center"><span>x</span></p>
                        <input type="number" class="form-control col-sm-3" 
                          name="picture_data[thumb_data][height]"  
                          value="{{ empty($article)?config('config.article.thumbnail_size.0.height'):$article->picture_data['thumb_data']['height']}}" min="20" max="1000">
                      </div>

                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Main Picture Size</label>
                        <input type="number" class="form-control col-sm-3" 
                          name="picture_data[main_picture_data][width]" 
                          value="{{ empty($article)?config('config.article.picture_size.0.width'):$article->picture_data['main_picture_data']['width']}}" min="20" max="2000">
                        <p class="col-sm-1 text-center"><span>x</span></p>
                        <input type="number" class="form-control col-sm-3"  
                          name="picture_data[main_picture_data][height]" 
                          value="{{ empty($article)?config('config.article.picture_size.0.height'):$article->picture_data['main_picture_data']['height']}}" min="20" max="2000">
                      </div>

                      @if(!empty($article))                          
                      <div class="form-group row">
                              <label for="inputFBLink" class="col-sm-2 col-form-label">Thumbnail của trang</label>
                              <span class="col-sm-10 text-center">
                                  <img src="{{ asset($article->picture_data['thumb_data']['url'])}}" alt="" style="margin-top:1rem; width: auto; height:100px; border: 1px solid #333">
                              </span>
                      </div>
                      @endif

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