@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Chỉnh sửa cho từng phần</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
        <div id="settings-app">
    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <form method="post" action="{{ route('admin_settings_store') }}" class="form-horizontal" role="form">
                        {!! csrf_field() !!}
    
                        @if(count(config('setting_fields', [])) )
    
                            @foreach(config('setting_fields') as $section => $fields)
                                @includeIf('admin.settings.section.'.$fields['template'])
                            @endforeach
    
                        @endif
    
                        <div class="row m-b-md">
                            <div class="col-md-12">
                                <button class="btn-primary btn" type="submit">
                                    Save Settings
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