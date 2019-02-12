@extends('layouts.app')

@section('content')
    <div class="login__block active" id="l-register">
        <div class="login__block__header palette-Blue bg">
            <i class="zmdi zmdi-account-circle"></i>
            Create an account

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('login') }}">Already have an account?</a>
                        <a class="dropdown-item" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>

        @include('auth.components.forms.register')
    </div>
@endsection
