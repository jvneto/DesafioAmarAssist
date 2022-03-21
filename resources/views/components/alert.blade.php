@props([
'to',
'type' => 'success',
'hasIcon' => false,
'colors' => [
'success' => 'bg-success text-white font-semibold',
'danger' => 'bg-danger text-white font-semibold',
'info' => 'bg-info text-white font-semibold',
'warning' => 'bg-warning text-white font-semibold',
],
])
<div {{ $attributes->merge(['class' => "d-flex align-items-center shadow-lg text-center p-4 {$colors[$type]}"]) }}>
    <div class="flex-grow text-left">
        {{ $slot }}
    </div>
    @isset($actions)
        <div class="d-flex aling-items-center justify-content-end">
            {{ $actions }}
        </div>
    @endisset
</div>
