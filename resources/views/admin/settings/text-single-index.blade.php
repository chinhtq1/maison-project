@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bôi đen, in nghiêng hoặc xuống dòng</h3>
    </div>
    <div class="card-body">
        <div id="settings-app">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form enctype="multipart/form-data" method="post" action="{{ route('admin_settings_text_single_store') }}"
                class="form-horizontal" role="form">
                {!! csrf_field() !!}
                <?php $data = json_decode($result->content); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Thơ</label>
                                <span class="text-danger"> ( Không được dùng thẻ heading , viết liền không xuống dòng) </span>
                                <textarea id="editor1" name="poem_text" rows="7" class="form-control ckeditor"
                                    placeholder="Write your text..."> {{$data->poem_text ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group">
                                <label class="control-label" for="example-text-input">Tiện Ích Toàn Mỹ</label>
                                <span class="text-danger"> ( Dùng Thẻ H1 làm tiêu đề ) </span>
                                <textarea id="editor2" name="tien_ich_toan_my" rows="7" class="form-control ckeditor"
                                    placeholder="Write your text..."> {{$data->tien_ich_toan_my ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="block">
                                <div class="form-group">
                                    <label class="control-label" for="example-text-input">Vị trí kim cương</label>
                                    <span class="text-danger"> ( Dùng Thẻ H1 làm tiêu đề ) </span>
                                    <textarea id="editor3" name="vi_tri_kim_cuong" rows="7" class="form-control ckeditor"
                                        placeholder="Write your text..."> {{$data->vi_tri_kim_cuong ?? ''}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="block">
                                    <div class="form-group">
                                        <label class="control-label" for="example-text-input">Kiến trúc châu âu </label>
                                        <span class="text-danger"> ( Dùng Thẻ H1 làm tiêu đề ) </span>
                                        <textarea id="editor4" name="kien_truc_chau_au" rows="7" class="form-control ckeditor"
                                            placeholder="Write your text..."> {{$data->kien_truc_chau_au ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="block">
                                        <div class="form-group">
                                            <label class="control-label" for="example-text-input">Thưởng Ngoạn Mỹ Cảnh </label>
                                            <span class="text-danger"> ( Dùng Thẻ H1 làm tiêu đề ) </span>
                                            <textarea id="editor4" name="thuong_ngoan_my_canh" rows="7" class="form-control ckeditor"
                                                placeholder="Write your text..."> {{$data->thuong_ngoan_my_canh ?? ''}}</textarea>
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