<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">
        <i class="{{ array_get($fields, 'icon', 'far fa-angry') }}"></i>
        {{ $fields['title'] }}
      </h3>
    </div>
    <div class="card-body">
        @isset($fields['desc']) <p class="text-muted">{{ $fields['desc'] }}</p> @endisset
      <div class="{{ array_get( $fields, 'class') }}">
            @foreach($fields['elements'] as $field)
                @includeIf('admin.settings.fields.' . $field['type'] )
            @endforeach
      </div>

    </div>
    <!-- /.card-body -->
</div>