@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl p-10">
            <div class="text-center mb-10">
                <div class="bg-[var(--color-primary)] p-4 rounded-xl inline-block mb-6">
                   <i class="fa-solid fa-user-plus text-white"></i>
                </div>
                <h2 class="mb-3">Buat Akun Baru</h2>
                <p class="text-[var(--color-neutral-700)]">Bergabung bersama keluarga ESNADO</p>
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

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm mb-2 text-[var(--color-neutral-700)]">Nama Lengkap</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}"
                        required 
                        autofocus
                        class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                        placeholder="John Doe">
                </div>

                <div>
                    <label for="email" class="block text-sm mb-2 text-[var(--color-neutral-700)]">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}"
                        required
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
                    <p class="text-xs text-[var(--color-neutral-700)] mt-2">Minimum 8 characters</p>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm mb-2 text-[var(--color-neutral-700)]">Konfirmasi Password</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        required
                        class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                        placeholder="••••••••">
                </div>

                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-4 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                    Buat Akun
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-sm text-[var(--color-neutral-700)]">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}" class="text-[var(--color-primary)] hover:underline">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
