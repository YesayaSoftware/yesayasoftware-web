@extends('layouts.auth')

@section('auth-link')
    Not yet registered?

    <a href="{{ route('register') }}"
       class="font-normal text-blue-light hover:text-blue-dark hover:no-underline">
        Register Now
        <i class="fa fa-arrow-right"></i>
    </a>
@endsection

@section('content')
    <div class="mt-10">
        <h1 class="text-center text-white font-thin mb-4">
            Recover your Account
        </h1>

        <p class="text-center text-grey-dark text-sm font-normal">
            Give us your email, we will recover your account.
        </p>
    </div>


    <div class="mt-5 sm:mt-3 flex justify-content-center">
        <div class="sm:appearance-none lg:w-1/3"></div>

        <div class="w-full lg:w-2/5 bg-white shadow-md rounded p-10">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-envelope"></i>

                        <input class="border text-grey-dark font-thin font-sm rounded w-full p-3{{ $errors->has('email') ? ' border border-red' : '' }}"
                               name="email"
                               type="text"
                               placeholder="{{ __('Email Address') }}"
                               value="{{ old('email') }}"
                               required
                               autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <p class="text-red text-xs italic mt-2">
                            {{ $errors->first('email') }}.
                        </p>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="button-colored rounded-full shadow p-4 text-sm text-white font-medium tracking-wider">
                        {{ __('Send Password Reset Link') }}

                        <i class="fa fa-arrow-right w-5"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="sm:appearance-none lg:w-1/3"></div>
    </div>
@endsection
