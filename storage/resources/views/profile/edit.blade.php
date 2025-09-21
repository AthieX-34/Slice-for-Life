<x-app-layout>
    <div class="profile-container">
        <div class="profile-header">
            <h1 class="profile-title">{{ __('Profile') }}</h1>
        </div>

        <div class="profile-content">
            <div class="profile-section">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="profile-section">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="profile-section">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
