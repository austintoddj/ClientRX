@extends('errors.layout')

@section('title', __('Service Unavailable'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>503</h1>
            <h2>Sorry, we are doing some maintenance. Please check back soon.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection