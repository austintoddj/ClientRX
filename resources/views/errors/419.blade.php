@extends('errors.layout')

@section('title', __('Page Expired'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>419</h1>
            <h2>Sorry, your session has expired. Please refresh and try again.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection