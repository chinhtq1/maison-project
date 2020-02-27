<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} {{ array_get( $field, 'class-root') }}">
    @isset($field['label'])
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset    

    <?php $name = "{$field['name']}[]"; ?>
    <article-selected 
        :name="{{ json_encode($name) }}"
        :value="{{ json_encode($result?App\Helper\Helper::getValueField($field['name'], $result):'')}}">
    </article-selected>
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif

</div>
