@props(['for'])

@error($for)
    <span style="display: block" {{ $attributes->merge(['class' => 'invalid-feedback']) }} role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
