@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-lg shadow-xl">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                {{ __('Register') }}
            </h2>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="sr-only">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" autocomplete="name" required autofocus
                       class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm
                       @error('name') border-red-500 @enderror"
                       placeholder="{{ __('Name') }}"
                       value="{{ old('name') }}">
                @error('name')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            {{-- Email Address --}}
            <div>
                <label for="email" class="sr-only">{{ __('Email Address') }}</label>
                <input id="email" name="email" type="email" autocomplete="email" required
                       class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm
                       @error('email') border-red-500 @enderror"
                       placeholder="{{ __('Email Address') }}"
                       value="{{ old('email') }}">
                @error('email')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" autocomplete="new-password" required
                       class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm
                       @error('password') border-red-500 @enderror"
                       placeholder="{{ __('Password') }}">
                @error('password')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required
                       class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                       placeholder="{{ __('Confirm Password') }}">
            </div>

            {{-- Submit Button --}}
            <div>
                <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
