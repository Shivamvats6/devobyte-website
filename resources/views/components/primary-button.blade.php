<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
    inline-flex items-center justify-center
    px-6 py-3
    bg-[#0D47A1] hover:bg-[#0B3A8A]
    text-white font-semibold text-sm
    rounded-lg
    focus:outline-none focus:ring-2 focus:ring-[#FFC107] focus:ring-offset-2
    transition duration-200'
]) }}>
    {{ $slot }}
</button>
