@extends('layouts.app')

@section('title', 'Forgot password')

@section('content')
    <div class="login__block active" id="l-forget-password">
        <div class="login__block__header palette-Purple bg">
            <i class="zmdi zmdi-account-circle"></i>
            Forgot password?

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Create an account</a>
                    </div>
                </div>
            </div>
        </div>

        @include('auth.components.forms.email')
    </div>
@endsection
