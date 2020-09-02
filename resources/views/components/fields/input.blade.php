<x-lte-fields-form-group :errorField="$name" :label="$label" :class="$formGroupClass">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" @if($required) required @endif value="{{$value}}" @if($readonly) readonly @endif>
</x-lte-fields-form-group>