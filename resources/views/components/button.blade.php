<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-4 py-2 bg-zinc-800 dark:bg-zinc-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-zinc-800 capitalize tracking-widest hover:bg-zinc-700 focus:bg-zinc-700 hover:text-white dark:focus:bg-white active:bg-zinc-900 dark:active:bg-zinc-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
