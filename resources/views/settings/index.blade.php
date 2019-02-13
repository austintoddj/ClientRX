@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.navbar')
    @include('components.nav.sidebar')

    <section class="content">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>Settings</h1>

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

            <div class="card">
                <div class="card-body">
                    <h4 class="card-body__title mb-4">Bio</h4>

                    <p>{{ $data['user']->bio }}</p>

                    <br>

                    <h4 class="card-body__title mb-4">Contact Information</h4>

                    <ul class="icon-list">
                        <li><i class="zmdi zmdi-phone"></i> <a href="tel:{{ $data['user']->phoneNumber->phone_number }}">{{ \App\Helpers\Data\PhoneNumber::prettyFormatPhoneNumber($data['user']->phoneNumber->phone_number) }}</a></li>
                        <li><i class="zmdi zmdi-email"></i> <a href="mailto:{{ $data['user']->email }}">{{ $data['user']->email }}</a></li>
                        <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                        <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                        <li><i class="zmdi zmdi-pin"></i>{{ $data['user']->fullAddress }}</li>
                    </ul>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection