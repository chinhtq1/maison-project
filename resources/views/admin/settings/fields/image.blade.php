<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} {{ array_get( $field, 'class-root') }}">
    @isset($field['label'])
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset    
    <p>Hình ảnh</p>
</div>
