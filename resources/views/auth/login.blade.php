<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                {{ __('auth.Email') }}<x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{ __('auth.Password') }}<x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="mt-10" style="display: flex; gap: 10px; justify-content: center; align-items: center; flex-wrap: wrap;">
                <a href="{{ route('social.google.login') }}" target="_blank">
                    <img src="{{ asset('assets/auth/google_login.png') }}" alt="" style="width: 80px; height: 80px;">
                </a>
                <a href="{{ route('social.naver.login') }}" target="_blank">
                    <img src="{{ asset('assets/auth/naver_login.png') }}" alt="" style="width: 80px; height: 80px;">
                </a>
                <a href="{{ route('social.kakao.login') }}" target="_blank">
                    <img src="{{ asset('assets/auth/kakao_login.png') }}" alt="" style="width: 80px; height: 80px;">
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
