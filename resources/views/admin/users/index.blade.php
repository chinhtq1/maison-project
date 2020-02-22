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
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">

        <div class="mb-2">
          <a href="{{ route('admin_user', 0)}}" class="btn btn-info"><i class="far fa-plus-square"></i> Thêm thành viên</a>
        </div>

        <!-- Admin list -->
      <div class="row">
        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

          <div class="table-responsive">
            <table id="users-list" class="table table-bordered table-vcenter table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</th>
                        <td>{{ $user->name}}</th>
                        <td>{{ $user->email}}</th>
                        <td>{{ $user->phone }}</th>
                        <td>
                            <span class="badge badge-{{ config('config.colors.'.$user->role) }}">{{ config('auth.roles.'.$user->role) }}</span>
                        </th>
                        <td>
                            <span class="badge badge-{{ config('config.colors.'.$user->status) }}">{{ config('auth.status.'.$user->status) }}</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a type="button" class="btn btn-info" href="{{ route('admin_user', $user->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                                @if($user->status == 2)
                                <a type="button" class="btn btn-warning"  href="{{ route('admin_user', $user->id)}}?active"  ><i class="fas fa-lock" title="Lock" style="color:#fff"></i></a>
                                @elseif($user->status == 3)
                                <a type="button" class="btn btn-success"  href="{{ route('admin_user', $user->id)}}?lock"><i class="fas fa-check-circle" title="Unlock"  style="color:#fff"></i></a>
                                @else
                                <a type="button" class="btn btn-primary"  href="{{ route('admin_user', $user->id)}}?active"><i class="fas fa-clock" title="Pending"  style="color:#fff"></i></a>
                                @endif
                                <a type="button" class="btn btn-danger" href="{{ route('admin_user_delete',$user->id)}}"><i class="fas  fa-trash" title="Delete"></i></a>
                            </div>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>

          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
          <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
          <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
          <br>
          <div class="text-muted">
            <p class="text-sm">Client Company
              <b class="d-block">Deveint Inc</b>
            </p>
            <p class="text-sm">Project Leader
              <b class="d-block">Tony Chicken</b>
            </p>
          </div>

          <h5 class="mt-5 text-muted">Project files</h5>
          <ul class="list-unstyled">
            <li>
              <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
            </li>
            <li>
              <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
            </li>
            <li>
              <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
            </li>
            <li>
              <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
            </li>
            <li>
              <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
            </li>
          </ul>
          <div class="text-center mt-5 mb-3">
            <a href="#" class="btn btn-sm btn-primary">Add files</a>
            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
          </div>
        </div>
      </div>
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
          $('#users-list').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
          });
        });
    </script>
@endsection