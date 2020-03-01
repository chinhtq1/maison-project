@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Vui lòng chọn đúng kích cỡ ảnh để website hiển thị đẹp nhất    </h3>

      <div class="card-tools">
        @if(env('APP_ENV') === 'dev')
        <a href="{{ route('settings_show_api', 'slides')}}" type="button" class="btn btn-warning" >Api</a>
        @endif
      </div>
    </div>
    <div class="card-body">
        <div id="settings-app">
    
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form enctype="multipart/form-data" method="post" action="{{ route('admin_slides_store') }}"
                class="form-horizontal" role="form">
                {!! csrf_field() !!}
                <?php $data = json_decode(json_encode($result->content)); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="slide_chu">Chọn slide chữ</label>
                                    <slide-selected 
                                    :name="{{ json_encode('slide_chu')}}"
                                    :type="{{json_encode(config('config.slides.types.0'))}}"
                                    :value="{{json_encode(array_key_exists('slide_chu',$data)?$data->slide_chu:'')}}">
                                    >
                                    </slide-selected>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label for="slide_chu">Slide 1</label>
                                <slide-selected 
                                    :name="{{ json_encode('slide_1')}}"
                                    :type="{{json_encode(config('config.slides.types.1'))}}"
                                    :value="{{json_encode(array_key_exists('slide_1',$data)?$data->slide_1:'')}}"
                                >
                                </slide-selected>
                                <input type="file" accept="image/*" name="anh_slide_1" class="form-control-file" >
                                <img src="{{array_key_exists('anh_slide_1', $data) ? asset($data->anh_slide_1) : asset('admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                    style="margin-top:15px;margin-bottom: 15px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label for="slide_chu">Slide 2</label>
                                <slide-selected 
                                    :name="{{ json_encode('slide_2')}}"
                                    :type="{{json_encode(config('config.slides.types.1'))}}"
                                    :value="{{json_encode(array_key_exists('slide_2',$data)?$data->slide_2:'')}}"
                                >
                                </slide-selected>
                                <input type="file" accept="image/*" name="anh_slide_2" class="form-control-file" >
                                <img src="{{array_key_exists('anh_slide_2',$data) ?asset($data->anh_slide_2) :asset('admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                    style="margin-top:15px;margin-bottom: 15px;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label for="slide_chu">Slide 3</label>
                                <slide-selected 
                                    :name="{{ json_encode('slide_3')}}"
                                    :type="{{json_encode(config('config.slides.types.1'))}}"
                                    :value="{{json_encode(array_key_exists('slide_3',$data)?$data->slide_3:'')}}"
                                >
                                </slide-selected>
                                <input type="file" accept="image/*" name="anh_slide_3" class="form-control-file" >
                                <img src="{{array_key_exists('anh_slide_3',$data) ?asset($data->anh_slide_3) : asset('admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                    style="margin-top:15px;margin-bottom: 15px;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label for="slide_chu">Slide 4</label>
                                <slide-selected 
                                    :name="{{ json_encode('slide_4')}}"
                                    :type="{{json_encode(config('config.slides.types.1'))}}"
                                    :value="{{json_encode(array_key_exists('slide_4',$data)?$data->slide_4:'')}}"
                                >
                                </slide-selected>
                                <input type="file" accept="image/*" name="anh_slide_4" class="form-control-file" >
                                <img src="{{array_key_exists('anh_slide_4',$data) ? asset($data->anh_slide_4) : asset('admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                    style="margin-top:15px;margin-bottom: 15px;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label for="slide_chu">Slide 5</label>
                                <slide-selected 
                                    :name="{{json_encode('slide_5')}}"
                                    :type="{{json_encode(config('config.slides.types.1'))}}"
                                    :value="{{json_encode(array_key_exists('slide_5',$data)?$data->slide_5:'')}}"
                                >
                                </slide-selected>
                                <input type="file" accept="image/*" name="anh_slide_5" class="form-control-file" >
                                <img src="{{array_key_exists('anh_slide_5',$data)? asset($data->anh_slide_5) : asset('admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
                                    style="margin-top:15px;margin-bottom: 15px;">
                            </div>
                        </div>
                    </div>

                </div>
                {{-- @if(count(config('setting_fields', [])) )
    
                            @foreach(config('settings_general') as $section => $fields)
                                @includeIf('admin.settings.section.'.$fields['template'])
                            @endforeach
    
                        @endif --}}

                <div class="row m-b-md">
                    <div class="col-md-12">
                        <button class="btn btn-info" type="submit">
                            Lưu chỉnh sửa
                        </button>
                    </div>
                </div>
            </form>


        </div>

        <!-- Article list -->
  
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection

@section('extra-script')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ asset('js/setup_tinymce.js')}}"></script>
<script src="{{ asset('js/settings.js') }}"></script>


@endsection