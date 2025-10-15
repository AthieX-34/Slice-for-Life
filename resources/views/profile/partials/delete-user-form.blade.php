<section class="space-y-6">
    <header class="flex items-center justify-center space-x-3 mb-6 text-center">
        <i class="fas fa-exclamation-triangle text-red-500 text-2xl"></i>
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Delete Account') }}
        </h2>
    </header>

    <p class="text-sm text-gray-600 mb-8 text-center max-w-md mx-auto">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>

    <div class="flex justify-center">
        <x-danger-button
            class="bg-red-600 hover:bg-red-700 focus:ring-red-500 px-8 py-3 text-sm"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >{{ __('Delete Account') }}</x-danger-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 flex flex-col items-center space-y-6">
            @csrf
            @method('delete')

            <h2 class="text-2xl font-bold text-gray-900 text-center">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="text-sm text-gray-600 text-center max-w-lg">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="w-full max-w-md">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition-all"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error class="mt-2 rounded-md p-2 bg-red-50 border border-red-200 text-red-600 text-center" :messages="$errors->userDeletion->get('password')" />
            </div>

            <div class="flex justify-center space-x-3 w-full max-w-md">
                <x-secondary-button x-on:click="$dispatch('close')" class="px-6 py-2">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="bg-red-600 hover:bg-red-700 focus:ring-red-500 px-6 py-2 ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
