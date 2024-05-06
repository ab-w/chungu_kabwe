<x-guest-layout>

    <form method="POST" action="{{ route('login') }}" class="w-full max-w-md bg-transparent border border-gray-700/20 backdrop-blur-9 rounded-lg px-8 py-10">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input 
                id="password" 
                class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" 
            />

            <div class="flex mt-2">
                <div class="flex-grow "></div>
                @if (Route::has('password.request'))
                <a class="text-green-800 link link-hover text-xs" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
        @endif

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mt-2">
            <div class="flex-grow">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="rounded " name="remember">
                    <span class="text-green-800 ms-2 text-mdtext-base-content ">{{ __('Remember me') }}</span>
                </label>
            </div>
           
        </div>

        <div class="text-green-800 w-full flex flex-col justify-center items-center mt-4 gap-3">
            <x-primary-button class="text-green-800 w-full ">
                {{ __('Log in') }}
            </x-primary-button>

            <div>
                <a class="text-green-800 link link-hover text-sm" href="{{ route('register') }}">
                    {{ __('Don’t have an account? Sign Up') }}
                </a>
            </div>
        </div>

        



</x-guest-layout>
