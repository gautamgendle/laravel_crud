<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel-CRUD</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
                <a class="nav-item nav-link" href="{{ url('/customer/view') }}">Customer</a>
                <a class="nav-item nav-link" href="{{ url('/customer/create') }}">Add Customer</a>
            </div>
        </div>
    </nav> --}}


    <div class="container">
        <h2 class="text-primary"><strong>Login</strong></h2>
        <form action="{{route('login.user')}}" method="post">
            @if (Session::has('success'))
            <div class="alert alert-success col-md-6">{{Session::get('success')}}</div>   
           @endif
           @if (Session::has('fail'))
           <div class="alert alert-danger col-md-6">{{Session::get('fail')}}</div>   
          @endif
            @csrf

            <div class="col-md-6">
                <x-input type="email" name="email" label="Email" value="{{ old('email') }}"
                    placeholder="Enter email" value="{{ old('email') }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="col-md-6">
                <x-input type="password" name="password" label="Password" placeholder="Enter password" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="col">
                <button type="submit" class=" btn btn-primary">Login</button>
            </div>

            <div class="col mt-3">
                <a href="{{'/register'}}" class="text-primary">New User !! Register Here</a>
            </div>


        </form>
    </div>
</body>

</html>
