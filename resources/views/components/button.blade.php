@if($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'btn']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'btn']) }}>
        {{ $slot }}
    </button>
@endif