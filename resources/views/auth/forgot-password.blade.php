<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piew</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>

</html>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="logo" href="/">
                <img src="{{ asset('img/logo.png') }}" class="logo">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Lupa Kata sandi? Tidak masalah, Berikan alamat email anda dan kami akan mengirimkan sandi untuk menyunting ulang Kata sandi anda.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Kirimkan tautan reset sandi') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

</body>