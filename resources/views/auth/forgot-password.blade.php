<x-guest-layout>
    <style>
        .text-register{
            color:  white;
        }
    </style>

    <div class="mb-4 text-sm text-register">
        {{ __('Esqueceu a senha? Sem problema. Apenas no diga seu endereço de e-mail que iremos enviar um e-mail com o link para redefir e escolher uma nova senha.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="text-register" for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar link de redefinição') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
