@extends('layouts.auth')

@section('content')
    <div class="bg-white rounded shadow">
        <div class="border-b py-8 font-bold text-black text-center text-xl tracking-widest uppercase">
            Login
        </div>

        <form class="bg-grey-lightest px-10 py-10" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input class="border w-full p-3{{ $errors->has('email') ? ' border border-red' : '' }}"
                       name="email"
                       type="text"
                       placeholder="{{ __('E-Mail Address') }}"
                       value="{{ old('email') }}"
                       required
                       autofocus>

                @if ($errors->has('email'))
                    <p class="text-red text-xs italic mt-2">
                        {{ $errors->first('email') }}.
                    </p>
                @endif
            </div>

            <div class="mb-6">
                <input class="border w-full p-3{{ $errors->has('password') ? ' border border-red' : '' }}"
                       name="password"
                       type="password"
                       placeholder="**************"
                       required>

                @if ($errors->has('password'))
                    <p class="text-red text-xs italic mt-2">
                        {{ $errors->first('password') }}.
                    </p>
                @endif
            </div>

            <div class="flex">
                <button type="submit" class="bg-yesayasoftware hover:bg-blue-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                    {{ __('Login') }}
                </button>
            </div>
        </form>

        <div class="border-t px-10 py-6">
            <div class="flex justify-between">
                <a href="#{{--{{ route('register') }}--}}"
                   class="font-bold text-primary hover:text-primary-dark no-underline">
                    Don't have an account?
                </a>

                <a href="{{ route('password.request') }}"
                   class="text-grey-darkest hover:text-black no-underline">
                    Forgot Password?
                </a>
            </div>
        </div>
    </div>
@endsection
