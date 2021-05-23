<title>Piew</title>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="logo" href="/">
                <img style="max-width: 300px;" src="{{ asset('img/logo.png') }}" class="logo">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Sandi')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Ulangi Kata Sandi')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>
            <input type="text" name="role" value="reviewer" hidden>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah Mendaftar?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Daftar') }}
                </x-button>
            </div>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('registerBisnis') }}">Daftarkan Bisnismu Disini</a>
        </form>
    </x-auth-card>
</x-guest-layout>