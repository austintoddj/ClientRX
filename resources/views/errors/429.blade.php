@extends('errors.layout')

@section('title', __('Too Many Requests'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>429</h1>
            <h2>Sorry, you are making too many requests to our servers.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection