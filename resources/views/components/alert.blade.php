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
    @if($hasIcon)
        @if($type === 'warning')
            <x-icons.exclamation class="h-8 w-8 text-warning mr-2"/>
        @elseif($type === 'danger')
            <x-icons.danger class="h-8 w-8 text-danger mr-2"/>
        @else
            <x-icons.info class="h-8 w-8 text-info mr-2"/>
        @endif
    @endif
    <div class="flex-grow text-left">
        {{ $slot }}
    </div>
    @isset($actions)
        <div class="d-flex aling-items-center justify-content-end">
            {{ $actions }}
        </div>
    @endisset
</div>
