@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.navbar')
    @include('components.nav.sidebar')

    <section class="content">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>{{ $data['user']->fullName }}</h1>
                <small>Web/UI Developer, Edinburgh, Scotland</small>

                <div class="actions">
                    <a href="" class="actions__item fas fa-chart-line"></a>
                    <a href="" class="actions__item fas fa-check-double"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="fas fa-ellipsis-v"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item">Refresh</a>
                            <a href="" class="dropdown-item">Manage Widgets</a>
                            <a href="" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="card profile">
                <div class="profile__img">
                    <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim($data['user']->email))), '?s=500') }}"
                         alt="{{ $data['user']->name }}">

                    <a href="" class="fas fa-camera profile__img__edit"></a>
                </div>

                <div class="profile__info">
                    @isset($data['user']->bio)
                        <p>{{ $data['user']->bio }}</p>
                    @endisset

                    <ul class="icon-list">
                        @isset($data['user']->phoneNumber)
                            <li><i class="fas fa-phone"></i> <a href="tel:{{ $data['user']->phoneNumber->phone_number }}">{{ \App\Helpers\Data\PhoneNumber::prettyFormatPhoneNumber($data['user']->phoneNumber->phone_number) }}</a></li>
                        @endisset
                        <li><i class="fas fa-envelope"></i> <a href="mailto:{{ $data['user']->email }}">{{ $data['user']->email }}</a></li>
                        <li><i class="fab fa-twitter"></i> @mallinda-hollaway</li>
                    </ul>
                </div>
            </div>

            <div class="toolbar">
                <nav class="toolbar__nav">
                    <a class="active" href="profile-about.html">About</a>
                    <a href="profile-photos.html">Photos</a>
                    <a href="profile-contacts.html">Contacts</a>
                </nav>

                <div class="actions">
                    <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                </div>

                <div class="toolbar__search">
                    <input type="text" placeholder="Search...">

                    <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @isset($data['user']->bio)
                        <h4 class="card-body__title mb-4">Bio</h4>
                        <p>{{ $data['user']->bio }}</p>
                        <br>
                    @endisset

                    <h4 class="card-body__title mb-4">Contact Information</h4>

                    <ul class="icon-list">
                        @isset($data['user']->phoneNumber)
                            <li><i class="fas fa-phone"></i> <a href="tel:{{ $data['user']->phoneNumber->phone_number }}">{{ \App\Helpers\Data\PhoneNumber::prettyFormatPhoneNumber($data['user']->phoneNumber->phone_number) }}</a></li>
                        @endisset
                        <li><i class="fas fa-envelope"></i> <a href="mailto:{{ $data['user']->email }}">{{ $data['user']->email }}</a></li>
                        <li><i class="fab fa-facebook-f"></i>robertbosborne</li>
                        <li><i class="fab fa-twitter"></i>@robertbosborne</li>
                        @isset($data['user']->address)
                                <li><i class="fas fa-map-pin"></i>{{ $data['user']->fullAddress }}</li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection