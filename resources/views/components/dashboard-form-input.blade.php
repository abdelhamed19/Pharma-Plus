@props(['name' ,'placeholder','type'=> 'text','value','label'])

<div class="form-group">
    <label for="exampleInputUsername1">{{ $label }}</label>
    <input type="text" value="{{ $value }}" class="form-control" name="{{ $name }}"
    id="exampleInputUsername1" placeholder="{{ $placeholder }}">
    @if($errors->has($name))
    <p class="text-danger">{{ $errors->first($name) }}</p>
    @endif
</div>
