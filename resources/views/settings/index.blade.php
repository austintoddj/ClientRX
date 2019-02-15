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
                <small>Last edited on {{ $data['user']->updated_at->format('F d, Y') }}</small>

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

            <div class="card new-contact">
                <div class="new-contact__header">
                    <a href="" class="fas fa-camera new-contact__upload"></a>

                    <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim($data['user']->email))), '?s=500') }}"
                         class="new-contact__img" alt="{{ $data['user']->name }}">
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="{{ $data['user']->first_name }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="{{ $data['user']->last_name }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" placeholder="Email" value="{{ $data['user']->email }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <input type="text" class="form-control" placeholder="Phone Number" value="{{ $data['user']->phoneNumber->phone_number }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" value="{{ $data['user']->address->address }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" value="{{ $data['user']->address->city }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" placeholder="Address" value="{{ $data['user']->address->state }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="Postal Code" value="{{ $data['user']->address->zip }}">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control textarea-autosize"></textarea>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="clearfix"></div>

                    <div class="mt-5 text-center">
                        <a href="" class="btn btn-primary">Save new contact</a>
                    </div>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection