<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="d-flex justify-content-center py-4">
                <a href="/login" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">THE TANZANIA ANNUAL ICT CONFERENCE (TAIC)</span>
                </a>
            </div><!-- End Logo -->
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Let us know your email address and we will email you a password reset link that will allow you to choose a new Password.') }}
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
                    {{ __('Submit Email') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
