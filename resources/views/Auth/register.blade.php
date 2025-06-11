<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Registration</title>

    <!-- This is BOOTSTRAP CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- This is for BOOTSTRAP ICONS  -->
    <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- THIS IS CUSTOM CSS -->
     <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

     <!-- This is SweetAlert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>

<section class="">

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

    <div class="container-fluid align-items-center ">
        <div class="container">
            <form action="{{ route('register.post') }}" method="POST">     
                @csrf
                <div class="row mb-3">
                    <div class="col mb-3">
                        <label for="FirstName" class="form-label">First Name: </label>
                        <input type="text" class="form-control" id="regFname" name="regFname">
                    </div>
                    <div class="col mb-3">
                        <label for="LastName" class="form-label">Last Name: </label>
                        <input type="text" class="form-control" id="regLname" name="regLname">
                    </div>

                    <div class="col mb-3">
                        <label for="LastName" class="form-label">Middle Name: </label>
                        <input type="text" class="form-control" id="regMname" name="regMname">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <label for="Address" class="form-label">Address: </label>
                        <input type="text" class="form-control" id="regAddress" name="regAddress">
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="Gender" class="form-label">Gender: </label>
                        <select class="form-select form-control" name="regGender">
                            <option selected>--Select Gender--</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <label for="Email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="regEmail" name="regEmail">
                    </div>

                    <div class="col-sm mb-3">
                        <label for="Password" class="form-label">Password: </label>
                        <input type="password" class="form-control" id="regPass" name="regPass">
                    </div>
                    <div class="col-sm mb-3">
                        <label for="ConPassword" class="form-label">Confirm Password: </label>
                        <input type="password" class="form-control" id="regConPass" name="regConPass">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>
    </div>
</section>



<!-- This is Script for -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('bootstrap/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    
</body>
</html>