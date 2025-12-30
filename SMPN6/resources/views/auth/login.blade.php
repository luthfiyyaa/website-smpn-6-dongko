@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl p-10">
            <div class="text-center mb-10">
                <div class="bg-[var(--color-primary)] p-4 rounded-xl inline-block mb-6">
                    <i data-lucide="graduation-cap" class="w-12 h-12 text-white"></i>
                </div>
                <h2 class="mb-3">Welcome Back</h2>
                <p class="text-[var(--color-neutral-700)]">Login to your account</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-lg mb-6">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm mb-2 text-[var(--color-neutral-700)]">Email Address</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}"
                        required 
                        autofocus
                        class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                        placeholder="your@email.com">
                </div>

                <div>
                    <label for="password" class="block text-sm mb-2 text-[var(--color-neutral-700)]">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        required
                        class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        name="remember" 
                        id="remember"
                        class="w-4 h-4 text-[var(--color-primary)] border-[var(--color-neutral-300)] rounded focus:ring-[var(--color-primary)]">
                    <label for="remember" class="ml-2 text-sm text-[var(--color-neutral-700)]">
                        Remember me
                    </label>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-4 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                    Sign In
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-sm text-[var(--color-neutral-700)]">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-[var(--color-primary)] hover:underline">Register here</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
