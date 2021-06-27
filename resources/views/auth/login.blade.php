@extends('layouts.default')

@section('content')

@include('partials.navbar')




<x-guest-layout>
    <x-auth-card>
        
        <div class="text-center w-full">
            <h1 class="text-title text-center name_welcome title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Connexion</h1>
        </div>


        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>



        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <p class="text-xs text-gray-500 mt-3">Email pour l'admin : admin@admin.com</p>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <p class="text-xs text-gray-500 mt-3">Mot de passe pour l'admin : qwertyuiop</p>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-grey-600 shadow-sm focus:border-grey-300 focus:ring focus:ring-grey-800 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
                @endif

                <x-button class="btn_green ml-3">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


@include('partials.footer')

@endsection