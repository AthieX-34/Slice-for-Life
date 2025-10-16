<section class="text-center">
    <header class="flex items-center justify-center space-x-3 mb-6 text-center">
        <i class="fas fa-user text-orange-500 text-2xl"></i>
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Profile Information') }}
        </h2>
    </header>

    <p class="text-sm text-gray-600 mb-8 text-center max-w-md mx-auto">
        {{ __("Update your account's profile information and email address.") }}
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 max-w-md mx-auto">
        @csrf
        @method('patch')

        <div class="relative">
            <x-input-label for="name" class="flex items-center justify-center space-x-2 mb-2">
                <i class="fas fa-user text-gray-500"></i>
                <span>{{ __('Name') }}</span>
            </x-input-label>
            <div class="relative">
                <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full pl-10 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            </div>
    <div class="mt-2">
        <x-input-error class="rounded-md p-2 bg-red-50 border border-red-200 text-red-600 inline-block mx-auto block" :messages="$errors->get('name')" />
    </div>
        </div>

        <div class="relative">
            <x-input-label for="email" class="flex items-center justify-center space-x-2 mb-2">
                <i class="fas fa-envelope text-gray-500"></i>
                <span>{{ __('Email') }}</span>
            </x-input-label>
            <div class="relative">
                <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full pl-10 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all" :value="old('email', $user->email)" required autocomplete="username" />
            </div>
            <div class="mt-2">
                <x-input-error class="rounded-md p-2 bg-red-50 border border-red-200 text-red-600 inline-block mx-auto block" :messages="$errors->get('email')" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-xl text-center">
                    <p class="text-sm text-gray-800 text-center">
                        <i class="fas fa-exclamation-triangle text-yellow-600 block mb-2"></i>
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 block mx-auto">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 flex items-center justify-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center justify-center gap-4 mt-8">
            <x-primary-button class="bg-orange-500 hover:bg-orange-600 focus:ring-orange-500 px-8 py-3 text-sm">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
    </form>
</section>
