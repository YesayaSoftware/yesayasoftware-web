@extends('layouts.auth')

@section('auth-link')
    Already have an account?

    <a href="{{ route('login') }}" class="font-normal text-blue-light">
        Login
        <i class="fa fa-arrow-right"></i>
    </a>
@endsection

@section('content')
    <div class="mt-10">
        <h1 class="text-center text-white font-thin mb-4">
            Create an account
        </h1>

        <p class="text-center text-grey-dark text-sm font-normal">
            Start commenting and get notified for new updates
        </p>
    </div>

    <div class="mt-5 flex justify-content-center">
        <div class="w-1/3"></div>

        <div class="w-2/5 bg-white shadow-md rounded p-10">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-user"></i>

                        <input class="border text-grey-dark font-thin font-sm rounded w-full p-3{{ $errors->has('name') ? ' border border-red' : '' }}"
                               name="name"
                               type="text"
                               placeholder="{{ __('Your name') }}"
                               value="{{ old('name') }}"
                               required
                               autofocus>
                    </div>

                    @if ($errors->has('name'))
                        <p class="text-red text-xs italic mt-2">
                            {{ $errors->first('name') }}.
                        </p>
                    @endif
                </div>

                <div class="mb-3">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-envelope"></i>

                        <input class="border text-grey-dark font-thin font-sm rounded w-full p-3{{ $errors->has('email') ? ' border border-red' : '' }}"
                               name="email"
                               type="text"
                               placeholder="{{ __('Email Address') }}"
                               value="{{ old('email') }}"
                               required>
                    </div>

                    @if ($errors->has('email'))
                        <p class="text-red text-xs italic mt-2">
                            {{ $errors->first('email') }}.
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-lock"></i>

                        <input class="border rounded text-grey-dark font-thin font-sm rounded w-full p-3{{ $errors->has('password') ? ' border border-red' : '' }}"
                               name="password"
                               type="password"
                               placeholder="Password (at least 8 chars)"
                               required>
                    </div>

                    @if ($errors->has('password'))
                        <p class="text-red text-xs italic mt-2">
                            {{ $errors->first('password') }}.
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <div class="input-floating-icon-group">
                        <i class="fa fa-lock"></i>

                        <input class="border rounded text-grey-dark font-thin font-sm rounded w-full p-3{{ $errors->has('password_confirmation') ? ' border border-red' : '' }}"
                               name="password_confirmation"
                               type="password"
                               placeholder="Password (at least 8 chars)"
                               required>
                    </div>

                    @if ($errors->has('password_confirmation'))
                        <p class="text-red text-xs italic mt-2">
                            {{ $errors->first('password_confirmation') }}.
                        </p>
                    @endif
                </div>

                <div class="form-check form-check-policies mb-5">
                    <label class="font-thin text-sm form-check-label" for="user_accepted_policies">
                        <input name="accepted_policies"
                               type="hidden"
                               value="0">

                        <input class="boolean required form-check-input"
                               label="false"
                               required="required"
                               data-title="Please confirm"
                               data-placement="left"
                               data-trigger="manual"
                               data-offset="0, 55"
                               aria-required="true"
                               type="checkbox"
                               value="1"
                               name="accepted_policies"
                               id="user_accepted_policies">


                        By creating an account you agree to receive notifications when you register your account for verification and when new content is published on Yesaya Software.
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="button-colored rounded-full shadow w-1/2 p-4 text-sm text-white font-medium tracking-wider">
                        {{ __('Register') }}

                        <i class="fa fa-arrow-right w-5"></i>
                    </button>
                </div>
            </form>

        </div>

        <div class="w-1/3"></div>
    </div>
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
