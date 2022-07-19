<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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
        <h2 class="text-primary"><strong>Registration</strong></h2>
        <form action="{{route('register.user')}}" method="post">
            @if (Session::has('success'))
             <div class="alert alert-success col-md-6">{{Session::get('success')}}</div>   
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger col-md-6">{{Session::get('fail')}}</div>   
           @endif
            @csrf
            
                <div class="col-md-6">
                    <x-input type="text" name="name" label="Name" value="{{ old('name') }}"
                        placeholder="Enter name"  />
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <x-input type="email" name="email" label="Email" value="{{ old('email') }}"
                        placeholder="Enter email" />
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
                <div class="col-md-6">
                    <x-input type="password" name="password_confirmation" label="Confirm Password"
                        placeholder="Confirm Password" />
                    <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                
                    <div class="col">
                        <button type="submit" class=" btn btn-primary">Register</button>
                    </div>
            
                   <div class="col mt-3">
                    <a href="{{url('/login')}}" class="text-primary">Already Registered !! Login Here</a>
                   </div>
                
              
             </form>
    </div>
</body>
</html>
