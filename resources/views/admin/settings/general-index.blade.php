@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Vui lòng chọn đúng kích cỡ ảnh để website hiển thị đẹp nhất</h3>

        <div class="card-tools">
            @if(env('APP_ENV') === 'dev')
            <a href="{{ route('settings_show_api', 'general')}}" type="button" class="btn btn-warning">Api</a>
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

            <form enctype="multipart/form-data" method="post" action="{{ route('admin_settings_general_store') }}"
                class="form-horizontal" role="form">
                {!! csrf_field() !!}
                <?php $data = json_decode($result->content); ?>
                @inject('helper', 'App\Helper\Helper')
                <div class="row">
                    <div class="col-md-6">          
                        <div class="block">
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Title</label>
                                <input class="form-control" name="data[title]" value="{{ $data->title ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Keywords</label>
                                <input class="form-control" name="data[keywords]" value="{{$data->keywords ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Description</label>
                                <input class="form-control" name="data[description]"
                                    value="{{$data->description ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Link FB Trên Bannner</label>
                                <input class="form-control" name="data[fb_link]" value="{{$data->fb_link ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Link Company Trên Banner</label>
                                <input class="form-control" name="data[company_link]"
                                    value="{{$data->company_link ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Google Analytic ID</label>
                                <input class="form-control" name="data[google_analytic]"
                                    value="{{$data->google_analytic ?? ''}}">
                            </div>
                            <div class="form-group">
                                    <label class="control-label" for="example-text-input"> File PDF Hình Ảnh Dự Án </label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control"
                                        name="mau_biet_thu_moi" >
                                        <span class="text-danger"> {{$helper->replaceDomain($data->mau_biet_thu_moi ?? null)}}</span>
                                </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input"> File PDF Hình Ảnh Dự Án </label>
                                <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control"
                                    name="hinh_anh_du_an" >
                                    <span class="text-danger"> {{$helper->replaceDomain($data->hinh_anh_du_an ?? null)}}</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input"> File PDF Bản Đồ Vị Trí </label>
                                <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control"
                                    name="ban_do_vi_tri" >
                                    <span class="text-danger"> {{$helper->replaceDomain($data->ban_do_vi_tri ?? null)}}</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input"> Số Điện Thoại </label>
                                <input class="form-control" name="data[phone_number]"
                                    value="{{$data->phone_number ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="example-text-input"> Footer Text</label>
                                <input class="form-control" name="data[footer_text]"
                                    value="{{$data->footer_text ?? ''}}">
                            </div>
                            <div class="form-group">
                                <div class="block">
                                    <label class="control-label" for="example-text-input">Ảnh Niềm Tin Trọn Vẹn</label>
                                    <input type="file" accept="image/*" class="form-control" name="niem_tin_tron_ven">
                                    <img src="{{ $helper->replaceDomain($data->niem_tin_tron_ven)?? null}}" alt="Chưa có ảnh"
                                        style="max-width: 150px;" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group">
                                <div class="block">
                                    <label class="control-label" for="example-text-input">Ảnh Bản Đồ Desktop </label>
                                    <input type="file" accept="image/*" class="form-control" name="map_desktop">
                                    <img src=" {{ $helper->replaceDomain($data->map_desktop ?? null)}}" alt="Chưa có ảnh"
                                        style="max-width: 150px;" class="img-fluid">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="block">
                                    <label class="control-label" for="example-text-input">Ảnh Bản Đồ Mobile </label>
                                    <input type="file" accept="image/*" class="form-control" name="map_mobile">
                                    <img src="{{ $helper->replaceDomain($data->map_mobile ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="block">
                                    <label class="control-label" for="example-text-input">Ảnh Vị Trí Kim Cương ( Bên Phải) </label>
                                    <input type="file" accept="image/*" class="form-control" name="vi_tri_kim_cuong_image">
                                    <img src="{{ $helper->replaceDomain($data->vi_tri_kim_cuong_image ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                        class="img-fluid">
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="block">
                                <label class="control-label" for="example-text-input"> Ảnh Tiện Ích Toàn Mỹ </label>
                                <input type="file" accept="image/*" class="form-control" name="tien_ich_toan_my_image">
                                <img src="{{$helper->replaceDomain($data->tien_ich_toan_my_image ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="block">
                                <label class="control-label" for="example-text-input"> Ảnh Kiến Trúc Châu Âu</label>
                                <input type="file" accept="image/*" class="form-control" name="kien_truc_chau_au_image">
                                <img src="{{$helper->replaceDomain($data->kien_truc_chau_au_image ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                        <div class="block">
                                            <label class="control-label" for="example-text-input"> Ảnh Thưởng NGoạn Mỹ Cảnh (Lớn)</label>
                                            <input type="file" accept="image/*" class="form-control" name="thuong_ngoan_my_canh_big">
                                            <img src="{{$helper->replaceDomain($data->thuong_ngoan_my_canh_big ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="block">
                                            <label class="control-label" for="example-text-input"> Ảnh Thưởng Ngoạn Mỹ Cảnh (Nhỏ)</label>
                                            <input type="file" accept="image/*" class="form-control" name="thuong_ngoan_my_canh_small">
                                            <img src="{{$helper->replaceDomain($data->thuong_ngoan_my_canh_small ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                                class="img-fluid">
                                        </div>
                                    </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block" style="background-color: #eee;">
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Shortcut icon</label>
                                <img style="max-width: 50px;"class="img-fluid" src="{{asset('favicon.ico')}}">
                                <input type="file" accept=".ico" class="form-control" name="icon">
                                <span class="help-block">File định dạng (.ico)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label class="control-label" for="example-text-input">Thẻ image (hiển thị khi chia sẻ
                                    trang)</label>
                                <input type="file" accept="image/*" class="form-control" name="home_image">
                                <img src="{{$helper->replaceDomain($data->home_image ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <div class="block">
                                <label class="control-label" for="example-text-input">Logo Desktop</label>
                                <input type="file" accept="image/*" class="form-control" name="logo_desktop">
                                <img src="{{$helper->replaceDomain($data->logo_desktop) ?? null}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="block">
                                <label class="control-label" for="example-text-input">Logo Mobile</label>
                                <input type="file" accept="image/*" class="form-control" name="logo_mobile">
                                <img src="{{$data->logo_mobile ?? null}}" alt="Chưa có ảnh"
                                    style="max-width: 150px; background-color:grey;" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="block">
                                <label class="control-label" for="example-text-input">Ảnh Banner Desktop</label>
                                <input type="file" accept="image/*" class="form-control" name="banner_desktop">
                                <img src="{{$helper->replaceDomain($data->banner_desktop ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="block">
                                <label class="control-label" for="example-text-input">Ảnh Banner Mobile (750 x
                                    840)</label>
                                <input type="file" accept="image/*" class="form-control" name="banner_mobile">
                                <img src="{{$helper->replaceDomain($data->banner_mobile ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="">
                                <label class="control-label" for="example-text-input">Logo Phía Trên Bài Thơ</label>
                                <input type="file" accept="image/*" class="form-control" name="logo_poem">
                                <img src="{{$helper->replaceDomain($data->logo_poem ?? null)}}" alt="Chưa có ảnh" style="max-width: 150px;"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label class="control-label" for="example-text-input">Logo Footer</label>
                                <input type="file" accept="image/*" class="form-control" name="logo_footer">
                                <img src="{{$helper->replaceDomain($data->logo_footer ?? null)}}" alt="Chưa có ảnh"
                                    style="max-width: 150px;  background-color:grey;" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

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
<script src="{{ asset('js/settings.js') }}"></script>
@endsection