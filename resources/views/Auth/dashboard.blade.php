<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Dashboard</title>

    <!-- This is BOOTSTRAP CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- This is for BOOTSTRAP ICONS  -->
    <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- THIS IS CUSTOM CSS -->
     {{-- <link href="{{ asset('css/auth.css') }}" rel="stylesheet"> --}}

     <!-- This is SweetAlert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    {{-- <h1>Hi! {{ Auth::user()->fname }} </h1> --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">StudentManagement IS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{ Auth::user()->fname }} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a> <!-- Route to logout -->
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> DASHBOARD </h5>
                <p>{{ Auth::user()->fname }}</p>
            </div>
        </div>
    </div>

<!-- This is Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('bootstrap/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>