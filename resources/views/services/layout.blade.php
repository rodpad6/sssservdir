@extends('layouts.app')

@section('content')
    <div class="my-4">
        <nav class="navbar navbar-expand-sm bg-ss-light mb-3">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Programs & Services</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"></button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.membership') }}" 
                            class="nav-link {{ Request::is('services/membership') ? 'active' : '' }}">Membership
                                Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.contributions') }}"
                            class="nav-link {{ Request::is('services/contributions') ? 'active' : '' }}">Contribution Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.benefits') }}"
                            class="nav-link {{ Request::is('services/benefits') ? 'active' : '' }}">Benefits Programs</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.loans') }}"
                            class="nav-link {{ Request::is('services/loans') ? 'active' : '' }}">Loan Programs</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.online') }}"
                            class="nav-link {{ Request::is('services/online') ? 'active' : '' }}">Online Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.special') }}"
                            class="nav-link {{ Request::is('services/special') ? 'active' : '' }}">Special Programs</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="card-body">
                @yield('servicesContent')
            </div>
        </div>
    </div>

@endsection
