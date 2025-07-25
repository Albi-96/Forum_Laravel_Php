@props([
    'type'=> 'button',
    'variant' => 'primary',
])
<button {{ $attributes->merge(['type' => $type, 'class' => "inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-900 transition ease-in-out duration-150 bg-$variant-600 hover:bg-$variant-700"]) }}>
    {{ $slot }}
</button>