<nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-3" style="background-color: #28628e;">
    <div class="container-fluid">
        <div class="ss-logo-wrapper ss-logo me-auto">
            <img src="{{ asset('images/ssslogo.svg') }}" height="45" />
            <div class="ms-2 d-flex flex-column">
                <span class="title-topsub">SOCIAL SECURITY SYSTEM</span>
                <span class="title">SSS Services Management Portal</span>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('serviceCategory') }}">Service Category</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('serviceList') }}">Programs & Services</a></li>
        </div>
    </div>
</nav>
