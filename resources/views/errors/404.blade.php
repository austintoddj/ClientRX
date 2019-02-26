@extends('errors.layout')

@section('title', __('Page Not Found'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>404</h1>
            <h2>We're sorry! It looks like this page is taking a rest day.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection