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
                    <form method="POST" action="{{ route('settings.update') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="eg: Samuel" value="{{ $data['user']->first_name }}" required>
                                    @if ($errors->has('first_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </div>
                                    @endif
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="eg: Nicholas" value="{{ $data['user']->last_name }}" required>
                                    @if ($errors->has('last_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </div>
                                    @endif
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="eg: name@example.com" value="{{ $data['user']->email }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone_number" class="form-control input-mask" data-mask="(000) 000-0000" placeholder="eg: (000) 000-0000" value="{{ $data['user']->phoneNumber->phone_number }}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="eg: 1502 5th St" value="{{ $data['user']->address->address }}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" placeholder="eg: Twentynine Palms" value="{{ $data['user']->address->city }}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="select2">
                                        @foreach(\App\Helpers\Data\States::US_STATES as $abbrev => $state)
                                            <option name="state" value="{{ $abbrev }}" @if($data['user']->state == $abbrev) selected @endif>{{ $state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" name="zip" class="form-control input-mask" data-mask="00000" placeholder="eg: 92278" value="{{ $data['user']->address->zip }}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth (y-m-d)</label>
                                    <input type="text" name="dob" id="dob" class="form-control input-mask" data-mask="0000-00-00" placeholder="eg: 1775/11/10" value="{{ $data['user']->dob }}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="select2">
                                        @foreach(\App\Helpers\User\Gender::GENDERS as $gender)
                                            <option name="gender" value="{{ $gender }}">{{ ucfirst($gender) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Bio</label>
                            <textarea name="bio" class="form-control textarea-autosize">{{ $data['user']->bio }}</textarea>
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="clearfix"></div>

                        <div class="mt-5 text-center">
                            <a href="{{ route('dashboard') }}" class="btn btn-link">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection
