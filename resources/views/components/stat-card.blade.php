@props(['name' => '', 'value' => '', 'increase' => null, 'decrease' => null, 'icon' => null])


<div
    class="flex flex-col px-6 py-10 overflow-hidden bg-neutral-200 hover:bg-zinc-600  rounded-xl shadow-lg duration-300 group">
    <div class="flex flex-row justify-between items-center">
        <div class="px-4 py-4 bg-zinc-400  rounded-xl bg-opacity-30">
            @svg($icon, 'h-6 w-6')

        </div>
        <div class="inline-flex text-sm text-black sm:text-base">
            @if ($increase)
            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                +{{ $increase }}%
            </span>
            @endif

            @if ($decrease)
            <span class="inline-block px-2 py-px ml-2 text-xs text-red-500 bg-red-100 rounded-md">
                -{{ $decrease }}%
            </span>
            @endif
        </div>
    </div>
    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-black mt-12">
        {{ $value }}
    </h1>
    <div class="flex flex-row justify-between text-black">
        <p>
            {{ $name }}
        </p>

    </div>
</div>