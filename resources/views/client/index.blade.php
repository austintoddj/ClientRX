@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    @include('components.spinners.page-loader')
    @include('components.nav.navbar')
    @include('components.nav.sidebar')

    <section class="content">
        <header class="content__title">
            <h1>Clients</h1>

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

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic example</h4>
                <h6 class="card-subtitle">DataTables is a plug-in for the jQuery Javascript library. It is a highly
                    flexible tool, based upon the foundations of progressive enhancement, and will add advanced
                    interaction controls to any HTML table.</h6>

                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered">
                        <thead class="thead-default">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data['clients'] as $client)
                                <tr>
                                    <td>{{ $client->fullName }}</td>
                                    <td>{{ $client->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('components.nav.footer')
    </section>
@endsection