@extends('errors.layout')

@section('title', __('Unauthorized'))

@section('content')
    <section class="error">
        <div class="error__inner">
            <h1>401</h1>
            <h2>Sorry, you are not authorized to access this page.</h2>
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">Go back home</a>
        </div>
    </section>
@endsection