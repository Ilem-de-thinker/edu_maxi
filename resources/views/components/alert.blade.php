@props([
    'variant' => 'success',
    'title' => null,
    'icon' => null,
])

@php
$variants = [
    'success' => [
        'bg' => 'bg-success/15',
        'text' => 'text-success',
        'border' => 'border-success/20',
    ],
    'danger' => [
        'bg' => 'bg-danger/15',
        'text' => 'text-danger',
        'border' => 'border-danger/20',
    ],
    'warning' => [
        'bg' => 'bg-warning/15',
        'text' => 'text-warning',
        'border' => 'border-warning/20',
    ],
    'info' => [
        'bg' => 'bg-info/15',
        'text' => 'text-info',
        'border' => 'border-info/20',
    ],
    'primary' => [
        'bg' => 'bg-primary/15',
        'text' => 'text-primary',
        'border' => 'border-primary/20',
    ],
    'secondary' => [
        'bg' => 'bg-secondary/15',
        'text' => 'text-secondary',
        'border' => 'border-secondary/20',
    ],
];

$style = $variants[$variant] ?? $variants['success'];
@endphp

<div
    {{ $attributes->merge([
        'class' => "{$style['bg']} {$style['text']} rounded p-6 flex gap-3"
    ]) }}
    role="alert"
>
    @if($icon)
        <i class="iconify {{ $icon }} size-8"></i>
    @endif

    <div class="flex-1">
        @if($title)
            <h4 class="mb-2 text-lg font-semibold">
                {{ $title }}
            </h4>
        @endif

        {{ $slot }}

        @isset($footer)
            <hr class="{{ $style['border'] }} my-4">

            {{ $footer }}
        @endisset

        @isset($actions)
            <div class="mt-4">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>
