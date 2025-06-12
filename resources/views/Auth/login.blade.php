<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>

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

     @include('sweetalert::alert')

    {{-- This checks for validation errors in the session with Sweet alert with the error messages --}}
        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: '{{ $errors->first() }}'
                });
            </script>
        @endif

    {{-- This is a Lodaing effect after login successfully --}}
        @if(session('login_success'))
            <script>
                Swal.fire({
                    title: 'Logging you in...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                setTimeout(() => {
                    window.location.href = "{{ route('dashboard') }}"; // Change to your dashboard route
                }, 1500); // Adjust delay as needed
            </script>
        @endif


    <div class="container-fluid ">
        <div class="wrapper p-sm-4 mt-5 shadow rounded bg-light border" style="max-width: 500px; margin: 0 auto;">
            <h3 class="text-center mb-4">Login</h3> <!-- HEADER-->
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="logEmail" class="form-control" name="logEmail"/>
                    <label class="form-label" for="logEmail">Email Address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="logPassword" class="form-control" name="logPassword"/>
                    <label class="form-label" for="logPassword">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->s
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                    </div>

                    <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </form>
    </div>


<!-- This is Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('bootstrap/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    
</body>
</html>