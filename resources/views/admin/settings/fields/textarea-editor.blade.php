<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    @isset($field['label'])
    <p>OK</p>
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset
    <textarea-editor></textarea-editor>
</div>