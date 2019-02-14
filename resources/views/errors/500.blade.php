@extends('errors.layout')

@section('title', __('Error'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>500</h1>
            <h2>Whoops, something went wrong on our servers.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection