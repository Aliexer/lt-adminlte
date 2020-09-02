<div class="form-group {{ $class }}">
    <label>{{ $label }}</label>
    {{$slot}}
    @error($errorField) <span class="error invalid-feedback">{{$message}}</span> @enderror
</div>