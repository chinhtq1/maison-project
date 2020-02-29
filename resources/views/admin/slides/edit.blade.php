@extends('layouts.admin')

@section('extra-css')
<link rel="stylesheet" href="{{asset('admin-theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('extra-header')
<script>
    window.slideId = "{{ $slide->id ?? '0'}}}}"
</script>
@endsection

@section('admin-content')
<!-- Main Content -->
<form class="form-horizontal"  enctype="multipart/form-data" action="{{ route('admin_slide_store',  !is_null($slide)? $slide->id: '0') }}" method="POST" id="slide-app" >
  {!! csrf_field() !!}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slides Form</h3>

      <div class="card-tools">
        <?php $types = config('config.slides.types');  ?>
        <button type="submit" class="btn btn-info" >Lưu bài viết</button>
         @if(!empty($slide))
          <a href="{{ route('admin_slide_delete', $slide->id)}}" type="button" class="btn btn-danger" >Xóa Slide</a>
        @endif
        @if(env('APP_ENV') === 'dev' && !empty($slide))
        <a href="{{ route('slide_show_api', $slide->id)}}" type="button" class="btn btn-warning" >Api</a>
        @endif
        <a href="{{ route('admin_slides')}}" type="button" class="btn btn-default" >Hủy bỏ</a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <!-- Title -->
                  <div class="form-group row">
                    <label for="inputTitle" class="col-sm-2 col-form-label" >Tên Slide</label>
                    <input type="text" id="inputTitle" class="form-control col-sm-10" name="title" value="{{ !empty($slide)? $slide->title: null }}">
                    <span class="help-block">{{$errors->first('title')}}</span>

                  </div>

                    <!-- Slug -->
                  <div class="form-group row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Slug</label>
                    <input type="text" id="inputTitle" class="form-control col-sm-10" name="slug" value="{{ !empty($slide)? $slide->slug: null }}">
                    <span class="help-block">{{$errors->first('slug')}}</span>

                  </div>

                  <div class="form-group row">
                    <label for="inputFBLink" class="col-sm-2 col-form-label">Facebook Link</label>
                    <input type="text" id="inputFBLink" class="form-control col-sm-10" name="fb_link" value="{{ !empty($slide)? $slide->fb_link: null }}">
                    <span class="help-block">{{$errors->first('fb_link')}}</span>

                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="public" id="inputPublic" name="is_public" 
                        @if( !empty($slide) && $slide->is_public) 
                          checked    
                        @endif>
                    <label class="form-check-label" for="inputPublic">Đã xuất bản bài viết</label>
                  </div>

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
                        <textarea id="inputDescription" class="form-control col-sm-10" rows="4" name="description" >{{ html_entity_decode(!empty($slide)?$slide->description:'') }}</textarea>
                        
                        <span class="help-block">{{$errors->first('description')}}</span>

                      </div>

                    <!-- Slug -->
                  <div class="form-group row">
                    <label for="inputSeo" class="col-sm-2 col-form-label">Seo</label>
                    <input type="text" id="inputSeo" class="form-control col-sm-10" name="seo">
                  </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>


        <?php $types = config('config.slides.types');  ?>

        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9">
                <button type="button" v-on:click="addSlide('{{ $types[0] }}',0)" 
                id="addBlock" class="btn btn-alt btn-default enable-tooltip" 
                title="Thêm mới slide">
                  <i class="fa fa-plus"></i> Thêm slide chữ
                </button>

                <button type="button" v-on:click="addSlide('{{ $types[1] }}',1)" 
                id="addBlock" class="btn btn-alt btn-default enable-tooltip" 
                title="Thêm mới slide">
                  <i class="fa fa-plus"></i> Thêm slide ảnh
                </button>
            </div>
        </div>
        <div class="row">
            <template v-for="(slide,index) in slides">
                <text-slide
                    v-if="slide.type == '{{$types[0]}}'"
                    v-bind:id="index" 
                    v-bind:value="slide.text"
                    v-bind:type="slide.type"
                    v-on:remove-slider="removeSlide(index)">
                </text-slide>

                <image-slide
                    v-if="slide.type == '{{$types[1]}}'"
                     v-bind:id="index"
                    v-bind:type="slide.type"
                    v-bind:value="slide.text"
                    v-bind:image_url="slide.imageUrl"
                    v-bind:placeholder="{{ json_encode(asset('admin-theme/img/placeholder_thumbnail.png'))}}"
                    v-on:remove-slider="removeSlide( index)"
                    >
                </image-slide>
            </template>
          </div>
          <div class="col-6 text-center" v-if="reload">
            <div class="lds-ripple"><div></div><div></div></div>
          </div>
          {{-- <div class="col-4" v-if="!reload">
              <label class="col-md-3 control-label">Sắp xếp slide</label>
              <br>

              <div class=" list-group">
                <draggable v-model="slides" @end="reLoading">
                  <transition-group>
                      <li v-for="(slide, index) in slides" :key="index + 1" class="list-group-item" draggable="false" style=""><i aria-hidden="true"></i>
                          Slide  @{{ index + 1}}   <span style="float:right">@{{ slide['type']}}</span>
                      </li>    
                  </transition-group>
                </draggable>
              </div>
            </div> --}}

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</form>

@endsection

@section('extra-script')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ asset('js/setup_tinymce.js')}}"></script>
<script src="{{ asset('js/slide.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script src="{{ asset('js/lib/Sortable.min.js') }}"></script>
<script src="{{ asset('js/lib/vuedraggable.umd.min.js') }}"></script>
<script src="{{ asset('js/upload_photo.js')}}"></script>


@endsection
