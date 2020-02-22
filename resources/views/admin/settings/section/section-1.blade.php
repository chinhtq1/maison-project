<div class="card card-primary">
    <div class="box-header with-border">
      <h5 class="card-header">
        <i class="{{ array_get($fields, 'icon', 'far fa-angry') }}"></i>
        {{ $fields['title'] }}
      </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
      <div class="card-body">
        <p class="text-muted">{{ $fields['desc'] }}</p>
        @foreach($fields['elements'] as $field)
            @includeIf('admin.settings.fields.' . $field['type'] )
        @endforeach
      <!-- /.box-body -->
      </div>
</div>