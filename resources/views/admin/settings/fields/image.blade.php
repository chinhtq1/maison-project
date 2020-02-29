<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} {{ array_get( $field, 'class-root') }}">
    @isset($field['label'])
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @endisset   
    @isset($field['desc']) <p class="text-muted">{{ $field['desc'] }}</p> @endisset
 
    <input type="file" accept="image/*" name="main_picture" class="form-control-file" >
    <img src="{{asset($article->thumbnail ?? 'admin-theme/img/placeholder_thumbnail.png')}}" alt="Chưa có ảnh" width="auto" height="200"
        style="margin-top:15px;margin-bottom: 15px;">
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif

</div>
