@extends('layouts.app')

@section('title', 'Search')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.sidebar')

    <section class="content">
        <div class="content__inner">
            <header class="content__title">
                <h1>Search Results</h1>
                <small>{{ count($data['results']) }} {{ \Illuminate\Support\Str::plural('result', count($data['results'])) }}
                    found for <strong>{{ $data['query'] }}</strong> ({{ round($data['response_time'], 3) }}
                    seconds)
                </small>

                <div class="actions">
                    <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item">Refresh</a>
                            <a href="" class="dropdown-item">Manage Widgets</a>
                            <a href="" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="card results">
                <div class="results__header">
                    @include('components.nav.navbar')

                    <nav class="nav nav-tabs results__nav">
                        <a class="nav-link active" href="">All</a>
                        <a class="nav-link" href="">People</a>
                        <a class="nav-link" href="">Files</a>
                        <a class="nav-link" href="">Contacts</a>
                        <a class="nav-link" href="">Groups</a>
                        <a class="nav-link disabled" href="">Photos</a>
                        <a class="nav-link disabled" href="">Videos</a>
                    </nav>
                </div>

                <div class="listview listview--bordered listview--hover">
                    @foreach($data['results'] as $result)
                        @switch(true)
                            @case($result instanceof \App\User)
                            <a class="listview__item" href="{{ route('user.show', $result->id) }}">
                                <div class="listview__content">
                                    <div class="listview__heading">{{ $result->full_name }}</div>
                                    <p>{{ $result->bio }}</p>
                                </div>
                            </a>
                            @break

                            @default
                            Default case...
                        @endswitch
                    @endforeach
                    <div class="clearfix mb-3"></div>
                </div>
            </div>

            @include('components.nav.footer')
        </div>
    </section>
@endsection
