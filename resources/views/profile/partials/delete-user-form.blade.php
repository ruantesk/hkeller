<section class="space-y-6">
    <style>
        .text-register{
            color:  white;
        }
    </style>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Excluir conta') }}
        </h2>

        <p class="mt-1 text-sm text-register">
            {{ __('Uma ver que a conta é excluída, todos o seu conteúdo e dados serão permanentemente excluídos. Antes de excluir sua conta, por favor salve qualquer informação que você deseja manter.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Excluir conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form style="background-color:#184232" method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Você tem certeza em excluir a conta?') }}
            </h2>

            <p class="mt-1 text-sm text-register">
                {{ __('Uma vez que sua conta é excluída, todos os seu conteúdo e dados serão permanentemente excluídos. Por favor, insira sua senha para confirmar que você quer excluir sua conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Senha') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Excluir conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
