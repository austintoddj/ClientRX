@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="login__block active" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Sign in to {{ config('app.name') }}

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('register') }}">Create an account</a>
                        <a class="dropdown-item" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>

        @include('auth.components.forms.login')
    </div>
@endsection
