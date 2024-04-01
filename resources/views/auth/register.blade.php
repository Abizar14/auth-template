<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="#" height="100px" width="100" class='mb-4'>
                                <h3>Sign Up</h3>
                                <p>Please Register First</p>
                            </div>
                            {{-- msg passowrd --}}
                            @if (session('msgPassowrd'))
                                <div class="alert alert-danger">
                                    {{ session('msgPassword') }}
                                </div>
                            @endif
                            {{-- msg success register --}}
                            @if (session('successReg'))
                                <div class="alert alert-success">
                                    {{ session('successReg') }}
                                </div>
                            @endif

                            <form action="{{ route('authRegister') }}" method="POST">
                                @csrf
                                <div class="row">
                                    {{-- <input type="hidden" name="role" value="{{ $role }}"> --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone_number">Phone</label>
                                            <input type="text" id="phone_number" class="form-control" name="phone_number"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <input type="text" id="address" class="form-control" name="address"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Konfirmasi Password</label>
                                            <input type="password" id="country-floating" class="form-control"
                                                name="confirm_password" required>
                                        </div>
                                    </div>

                                </div>

                                <a href="#">Have an account? Login</a>
                                <div class="clearfix">
                                    {{-- <button type="submit" class="btn btn-primary float-end">Submit</button> --}}
                                    <button type="submit" class="btn btn-primary float-end  ">
                                        Submit
                                    </button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
