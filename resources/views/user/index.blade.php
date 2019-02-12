@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.navbar')
    @include('components.nav.sidebar')

    <section class="content">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>{{ auth()->user()->name }}</h1>
                <small>Web/UI Developer, Edinburgh, Scotland</small>

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

            <div class="card profile">
                <div class="profile__img">
                    <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim(auth()->user()->email))), '?s=200') }}"
                         class="user__img"
                         alt="{{ auth()->user()->name }}">

                    <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                </div>

                <div class="profile__info">
                    <p>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magnae tiam porta sem malesuada magna mollis euismod.</p>

                    <ul class="icon-list">
                        <li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>
                        <li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
                        <li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
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
                    <h4 class="card-body__title mb-4">About Mallinda Hollaway</h4>

                    <p>Pellentesque vitae quam quis tellus dignissim faucibus. Suspendisse mattis felis at faucibus lobortis. Sed sit amet tellus dolor. Fusce quis sollicitudin velit. Praesent gravida ullamcorper lectus et tincidunt. Phasellus lectus quam, porta pharetra feugiat in, auctor eget dolor.</p>

                    <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>

                    <br>

                    <h4 class="card-body__title mb-4">Contact Information</h4>

                    <ul class="icon-list">
                        <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                        <li><i class="zmdi zmdi-email"></i>robertbosborne@inbound.plus</li>
                        <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                        <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                        <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                    </ul>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection