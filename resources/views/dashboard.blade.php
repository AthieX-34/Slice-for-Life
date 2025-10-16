@extends('layouts.default')

@section('title', 'Dashboard - Slice of Life')

@section('header')
@endsection

@section('body')
@endsection

@section('main')
<br>
<br>

    <div style="display: flex; align-items: center; justify-content: center; min-height: 50vh; background-color: #f3f4f6;">
        <div style="max-width: 48rem; width: 100%; background-color: white; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); border-radius: 16px; padding: 2.5rem; text-align: center; border: 1px solid #e5e7eb;">
            <h1 style="font-size: 2.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">
                {{ __('Welcome to Slice-for-Life!') }}
            </h1>
            <p style="font-size: 1.125rem; color: #4b5563; margin-bottom: 2rem; max-width: 42rem; margin-left: auto; margin-right: auto;">
                {{ __('Thank you for joining us. You are now logged in and ready to explore our delicious pizza menu. Order your favorite pizzas and enjoy the best flavors in town!') }}
            </p>
            <a href="{{ route('menu') }}"
            style="display: inline-flex; align-items: center; padding: 0.5rem 1.5rem; border: 2px solid#111827; color:#111827; font-weight: bold; border-radius: 0.375rem; text-decoration: none; transition: all 0.3s ease-in-out;"
            onmouseover="this.style.backgroundColor='#fbbf24'; this.style.color='#111827'; this.style.borderColor='#fbbf24'"
            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#111827'; this.style.borderColor='#111827'">
                <svg style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                {{ __('View Menu') }}
            </a>
        </div>
    </div>
@endsection

@section('footer')
@endsection
