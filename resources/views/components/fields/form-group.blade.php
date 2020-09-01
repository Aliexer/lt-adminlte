<div class="form-group {{ $class }}">
    <label>{{ $label }}</label>
    {{$slot}}
    @error($errorField) <span class="error invalid-feedback">{{$errorMessage}}</span> @enderror
</div>