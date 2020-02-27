@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Chỉnh sửa cho từng phần</h3>

      <div class="card-tools">
      <button type="submit" class="btn btn-info" >Lưu chỉnh sửa</button>
        @if(env('APP_ENV') === 'dev')
        <a href="{{ route('settings_show_api', 'general')}}" type="button" class="btn btn-warning" >Api</a>
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
    
                    <form method="post" action="{{ route('admin_settings_general_store') }}" class="form-horizontal" role="form">
                        {!! csrf_field() !!}
    
                        @if(count(config('setting_fields', [])) )
    
                            @foreach(config('settings_general') as $section => $fields)
                                @includeIf('admin.settings.section.'.$fields['template'])
                            @endforeach
    
                        @endif
    
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