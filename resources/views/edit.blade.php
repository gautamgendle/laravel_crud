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
    {{-- <style>
    body{
      background-color: black;
      color: white;
    }
  </style> --}}
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel-CRUD</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/dashboard') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
                <a class="nav-item nav-link" href="{{ url('/customer/view') }}">Customer</a>
                <a class="nav-item nav-link" href="{{url('/customer/create')}}">Add Customer</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center text-primary"><strong>Update Customer</strong></h1>
        &nbsp;
        <form action="{{ route('customer.update', ['id' => $customer->customer_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $customer->name }}" placeholder="Enter name" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ $customer->email }}" placeholder="Enter email" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter Password" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Enter Password" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country">Country <span class="text-danger">*</span></label>
                    <input type="text" name="country" id="country" class="form-control"
                        value="{{ $customer->country }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="state">State <span class="text-danger">*</span></label>
                    <input type="text" name="state" id="state" class="form-control"
                        value="{{ $customer->state }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address <span class="text-danger">*</span></label>
                <input type="text" name="address" id="address" class="form-control"
                    value="{{ $customer->address }}" aria-describedby="helpId">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-row">

                <div class="form-group  col-md-6">
                    <p>Gender <span class="text-danger">*</span></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M"
                            {{ $customer->gender == 'M' ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F"
                            {{ $customer->gender == 'F' ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="O"
                            {{ $customer->gender == 'O' ? 'checked' : '' }}>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="state">Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" name="dob" id="dob" class="form-control"
                        value="{{ $customer->dob }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="address">Enter File <span class="text-danger">*</span></label>
                <input type="file" name="image" id="image" class="form-control" value="{{$customer->image}}"
                    aria-describedby="helpId">
                    <img src="{{ asset('uploads/' . $customer->image) }}" height="50"
                                    width="50" />
                <span class="text-danger">
                    @error('image')
                        {{ $message }}
                    @enderror
                </span>
            </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button type="submit" class=" form-control btn btn-primary ">Submit</button>
                    </div>
                    <div class="form-group col-md-6 ">
                        <a href="{{ url('/customer/view') }}" class=" form-control btn btn-danger "> Cancel</a>
    
                    </div>
                </div>
        </form>
    </div>

</body>

</html>
