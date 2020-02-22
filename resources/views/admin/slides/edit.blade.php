@extends('layouts.admin')

@section('extra-css')
<link rel="stylesheet" href="{{asset('admin-theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('admin-content')

<!-- Main Content -->
<form class="form-horizontal" action="" method="POST" id="slide-app">
  {!! csrf_field() !!}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slides List</h3>

      <div class="card-tools">
        <?php $types = config('config.slides.types');  ?>
        <select class="btn btn-default" id="inputRoles" name="role">
        @foreach($types as $type => $name)
        <?php $type = intval($type); ?>
            <option  value="{{ $type }}">{{ $name }}</option>
        @endforeach
        </select>
        <button type="submit" class="btn btn-info" >Lưu bài viết</button>
        @if(!empty($article))
          <a href="{{ route('admin_slide_delete', $slide->id)}}" type="button" class="btn btn-danger" >Xóa bài viết</a>
        @endif
        <a href="{{ route('admin_slides')}}" type="button" class="btn btn-default" >Hủy bỏ</a>
      </div>
    </div>
    <div class="card-body">
            <?php $types = config('config.slides.types');  ?>

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-9">
                    <button type="button" v-on:click="addTextSlide('{{ $types[0] }}')" 
                    id="addBlock" class="btn btn-alt btn-default enable-tooltip" 
                    title="Thêm mới slide">
                      <i class="fa fa-plus"></i> Thêm slide chữ
                    </button>

                    <button type="button" v-on:click="addTextSlide('{{ $types[1] }}')" 
                    id="addBlock" class="btn btn-alt btn-default enable-tooltip" 
                    title="Thêm mới slide">
                      <i class="fa fa-plus"></i> Thêm slide ảnh
                    </button>
                </div>
            </div>
            
            <template v-for="(slide,index) in slides" >
                <text-slide 
                    v-if="slide.type == '{{$types[0]}}'"
                    v-bind:id="index" 
                    v-bind:value="slide.text"
                    v-bind:type="slide.type"
                    v-on:remove-text-slider="removeTextSlide($event, index)"
                    v-on:save-input="saveInput( $event, index)">
                </text-slide>

                <image-slide
                    v-if="slide.type == '{{$types[1]}}'"
                >
                
                </image-slide>
            </template>
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


@endsection
