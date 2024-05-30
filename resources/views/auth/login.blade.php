<x-guest-layout>

    <x-auth-layout url="/register" label="Sign Up">

        <section class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-white text-black">

            {{--
            <x-validation-errors class="mb-4" /> --}}

            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
            @endsession

            <div class="flex flex-col gap-3">

                <div class="flex flex-row gap-3 items-center justify-center">
                    <x-application-logo class="w-8 h-8" />
                    <h2 class="text-2xl font-bold text-center text-black">
                        Sign In
                    </h2>
                </div>

                <span class="text-sm text-center text-neutral-600">
                    Enter your email and password to access your account.
                </span>

                <form method="POST" action="{{ route('login') }}" class=" flex flex-col gap-3">
                    @csrf
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                        placeholder="email@example.com" autofocus autocomplete="username" />
                    <x-input-error for="email" class="mt-2" />

                    <x-input id="password" class="block w-full" type="password" name="password" 
                        placeholder="password" autocomplete="current-password" />
                    <x-input-error for="password" class="mt-2" />

                    <x-button class="block w-full" type="submit">
                        Sign In
                    </x-button>
                </form>
        </section>
    </x-auth-layout>
</x-guest-layout>