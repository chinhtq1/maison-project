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
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">

        <div class="mb-2">
          <a href="{{ route('admin_slide','0')}}" class="btn btn-info"><i class="far fa-plus-square"></i> Thêm Slides</a>
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