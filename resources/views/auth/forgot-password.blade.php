<x-guest-layout class="min-h-screen flex items-center justify-center">
    <x-authentication-card class="bg-black p-8 rounded-lg shadow-lg">
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    <style type="text/css">
        /* For guest-layout background */
        .min-h-screen {
            background-color: #c8a5a9;
            /* Custom background color for guest layout */
        }

        .ms-4 {
            background-color: #c8a5a9;
            border-radius: 30px;
        }

        .custom-link {
            color: #c8a5a9;
        }
    </style>
</x-guest-layout>
