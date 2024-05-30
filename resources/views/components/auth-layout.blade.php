@props(['url', 'label'])

<div class="bg-gray-500 flex-col items-center justify-center md:grid lg:max-w-none lg:grid-cols-2 lg:px-0">
    <a href="{{ $url }}" wire:navigate
        class="text-black  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 absolute right-4 top-4 md:right-8 md:top-8">
        {{ $label }}
    </a>
    <div class="relative items-center justify-center hidden h-full flex-col bg-muted p-10 text-white lg:flex">
        <div class="bg-neutral-200"></div>
        <div class="flex text-lg font-medium text-black">
            <x-application-logo class="w-8 h-8 mr-2" />

            <h2 class="text-4xl font-bold">
                Prime Education
            </h2>
        </div>
    </div>

    {{ $slot }}
</div>