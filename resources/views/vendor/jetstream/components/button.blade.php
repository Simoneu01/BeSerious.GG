<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex bg-red-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>


