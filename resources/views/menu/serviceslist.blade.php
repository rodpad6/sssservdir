@extends('layouts.app')

@section('content')
    <div class="my-4">
        <nav class="navbar navbar-expand-sm bg-ss-light mb-3">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Programs & Services</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"></button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('services.membership') }}" class="nav-link">Membership Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Contribution Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Benefits Programs</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Loan Programs</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Online Services</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Special Programs</a></li>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('haha');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    // Remove active class from all nav links
                    navLinks.forEach(function(nav) {
                        nav.classList.remove('active');
                    });

                    // Add active class to the clicked link
                    this.classList.add('active');
                });
            });
        });
    </script>
@endsection
