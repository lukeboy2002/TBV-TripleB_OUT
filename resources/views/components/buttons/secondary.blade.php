{{--<buttons {{ $attributes->merge(['type' => 'buttons', 'class' => 'text-center text-gray-700 dark:text-white rounded-lg hover:bg-orange-500 hover:text-white border border-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 focus:bg-orange-500 transition ease-in-out duration-150']) }}>--}}
{{--    {{ $slot }}--}}
{{--</buttons>--}}

<button {{ $attributes->merge(['type' => 'buttons', 'class' => 'inline-flex items-center justify-center bg-transparent border border-orange-500 rounded-md text-white hover:bg-orange-500 active:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
