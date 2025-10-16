@extends('layouts.default')

@section('title', 'Profile')

@section('main')
<br>
<br>
<br>
<br>
    <div style="padding: 3rem 0;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <!-- Profile Header -->
            <div style="background: linear-gradient(to bottom right, #fff7ed, #ffffff); box-shadow: 0 10px 25px rgba(0,0,0,0.1); border-radius: 16px; padding: 2rem; margin-bottom: 2rem; display: flex; flex-direction: column; align-items: center; gap: 1rem; text-align: center;">
                <div style="width: 5rem; height: 5rem; background: linear-gradient(to bottom right, #fb923c, #ea580c); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    {{ substr($user->name, 0, 1) }}
                </div>
                <div>
                    <h1 style="font-size: 1.875rem; font-weight: bold; color: #111827;">{{ $user->name }}</h1>
                    <p style="color: #6b7280; font-size: 1.125rem;">{{ $user->email }}</p>
                </div>
                <i class="fas fa-edit" style="color: #9ca3af; cursor: pointer; font-size: 1.25rem; transition: color 0.3s;" onmouseover="this.style.color='#f97316'" onmouseout="this.style.color='#9ca3af'"></i>
            </div>

            <div style="display: flex; flex-direction: column; gap: 2rem;">
                <div style="padding: 2rem; background: linear-gradient(to bottom right, #ffffff, #fff7ed); box-shadow: 0 10px 25px rgba(0,0,0,0.1); border-radius: 16px; border: 1px solid #fed7aa; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.boxShadow='0 20px 50px rgba(0,0,0,0.15)'; this.style.transform='scale(1.01)'" onmouseout="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.transform='scale(1)'">
                    <div style="max-width: 672px; margin: 0 auto;">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div style="padding: 2rem; background: linear-gradient(to bottom right, #ffffff, #fff7ed); box-shadow: 0 10px 25px rgba(0,0,0,0.1); border-radius: 16px; border: 1px solid #fed7aa; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.boxShadow='0 20px 50px rgba(0,0,0,0.15)'; this.style.transform='scale(1.01)'" onmouseout="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.transform='scale(1)'">
                    <div style="max-width: 672px; margin: 0 auto;">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div style="padding: 2rem; background: linear-gradient(to bottom right, #ffffff, #fef2f2); box-shadow: 0 10px 25px rgba(0,0,0,0.1); border-radius: 16px; border: 1px solid #fecaca; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.boxShadow='0 20px 50px rgba(0,0,0,0.15)'; this.style.transform='scale(1.01)'" onmouseout="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.transform='scale(1)'">
                    <div style="max-width: 672px; margin: 0 auto;">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
