@extends('layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-body">
    <iframe src="/{{ config('lfm.url_prefix')}}?type=image" style="width: 100%; height: 500px; overflow: hidden; border: 1px solid #333;"></iframe>
    </div>
</div>
@endsection

