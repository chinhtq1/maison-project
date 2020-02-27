@extends('layouts.admin')
@section('admin-content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Xóa Slide</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
        <p>Bạn có chắc muốn xóa bài viết: <b>{{ $slide->title }}</b></p>
        <p><b>Mô tả: </b><span>{{ $slide->description }}</span></p>

        <a href="{{ route('admin_slide_delete_comfirm', $slide->id)}}" class="btn btn-danger"> Chắc chắn xóa</a>
        <a href="{{ route('admin_slides') }}" class="btn btn-default">Hủy bỏ</a>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection