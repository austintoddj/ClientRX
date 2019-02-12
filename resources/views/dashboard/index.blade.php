@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.navbar')
    @include('components.nav.sidebar')

    <section class="content">
        <header class="content__title">
            <h1>Dashboard</h1>
            <small>Welcome to the unique Material Design admin web app experience!</small>

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

        @include('components.nav.footer')
    </section>


    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">Dashboard</div>--}}

                    {{--<div class="card-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--You are logged in!--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
