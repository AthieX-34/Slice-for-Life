<section>
    <header class="flex items-center justify-center space-x-3 mb-6 text-center">
        <i class="fas fa-lock text-orange-500 text-2xl"></i>
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Update Password') }}
        </h2>
    </header>

    <p class="text-sm text-gray-600 mb-8 text-center max-w-md mx-auto">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 max-w-md mx-auto">
        @csrf
        @method('put')

        <div class="relative">
            <x-input-label for="update_password_current_password" class="flex items-center justify-center space-x-2 mb-2">
                <i class="fas fa-lock text-gray-500"></i>
                <span>{{ __('Current Password') }}</span>
            </x-input-label>
            <div class="relative">
                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full pl-10 pr-10 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all" autocomplete="current-password" />
                <button type="button" onclick="togglePassword('update_password_current_password')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <i id="eye-update_password_current_password" class="fas fa-eye"></i>
                </button>
            </div>
            <div class="mt-2 text-center">
                <x-input-error class="rounded-md p-2 bg-red-50 border border-red-200 text-red-600 inline-block" :messages="$errors->updatePassword->get('current_password')" />
            </div>
        </div>

        <div class="relative">
            <x-input-label for="update_password_password" class="flex items-center justify-center space-x-2 mb-2">
                <i class="fas fa-lock-open text-gray-500"></i>
                <span>{{ __('New Password') }}</span>
            </x-input-label>
            <div class="relative">
                <i class="fas fa-lock-open absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full pl-10 pr-10 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all" autocomplete="new-password" />
                <button type="button" onclick="togglePassword('update_password_password')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <i id="eye-update_password_password" class="fas fa-eye"></i>
                </button>
            </div>
            <div class="mt-2 text-center">
                <x-input-error class="rounded-md p-2 bg-red-50 border border-red-200 text-red-600 inline-block" :messages="$errors->updatePassword->get('password')" />
            </div>
        </div>

        <div class="relative">
            <x-input-label for="update_password_password_confirmation" class="flex items-center space-x-2 mb-2">
                <i class="fas fa-lock text-gray-500"></i>
                <span>{{ __('Confirm Password') }}</span>
            </x-input-label>
            <div class="relative">
                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full pl-10 pr-10 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all" autocomplete="new-password" />
                <button type="button" onclick="togglePassword('update_password_password_confirmation')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <i id="eye-update_password_password_confirmation" class="fas fa-eye"></i>
                </button>
            </div>
            <div class="mt-2 text-center">
                <x-input-error class="rounded-md p-2 bg-red-50 border border-red-200 text-red-600 inline-block" :messages="$errors->updatePassword->get('password_confirmation')" />
            </div>
        </div>

        <div class="flex items-center justify-center gap-4 mt-8">
            <x-primary-button class="bg-orange-500 hover:bg-orange-600 focus:ring-orange-500 px-8 py-3 text-sm">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-green-600 flex items-center rounded-md p-3 bg-green-50 border border-green-200 shadow-sm"
                >
                    <i class="fas fa-check mr-2"></i>
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>

        <script>
            function togglePassword(inputId) {
                const input = document.getElementById(inputId);
                const eye = document.getElementById('eye-' + inputId);
                if (input.type === 'password') {
                    input.type = 'text';
                    eye.classList.remove('fa-eye');
                    eye.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    eye.classList.remove('fa-eye-slash');
                    eye.classList.add('fa-eye');
                }
            }
        </script>
    </form>
</section>
