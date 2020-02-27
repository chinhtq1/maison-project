<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} {{ array_get( $field, 'class-root') }}">
    @isset($field['label'])
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset    
    <slide-selected 
        :name="{{ json_encode($field['name']) }}"
        :value="{{json_encode($result?App\Helper\Helper::getValueField($field['name'], $result):'')}}">
    </slide-selected>
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
