<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} {{ array_get( $field, 'class-root') }}">
    @isset($field['label'])
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset   
    @isset($field['desc']) <p class="text-muted">{{ $field['desc'] }}</p> @endisset
 
    <?php   $name_url = "{$field['name']}[url]"; 
            $name_main_url = "{$field['name']}[main_url]"; ?>

    <image-upload 
        :name="{{ json_encode($name_url) }}" 
        :width="{{ json_encode($field['width']) }}"
        :height="{{ json_encode($field['height']) }}"
        :value="{{json_encode($result?App\Helper\Helper::getValueField($name_url, $result):'')}}"
        :image_url="{{json_encode($result?App\Helper\Helper::getValueField($name_main_url, $result):'')}}">
    </image-upload>
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif

</div>
