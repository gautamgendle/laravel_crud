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
                <a class="nav-item nav-link" href="{{ url('/dashboard') }}">Home <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
                <a class="nav-item nav-link" href="{{ url('/customer/view') }}">Customer</a>
                <a class="nav-item nav-link" href="{{ url('/customer/create') }}">Add Customer</a>


            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center text-primary"><strong>Customer Registration</strong></h1>
        &nbsp;
        <form action="{{ url('/customer') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                        placeholder="Enter name" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                        placeholder="Enter email" aria-describedby="helpId">
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
                        value="{{ old('country') }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('country')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="state">State <span class="text-danger">*</span></label>
                    <input type="text" name="state" id="state" class="form-control"
                        value="{{ old('state') }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('state')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address <span class="text-danger">*</span></label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}"
                    aria-describedby="helpId">
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-row">

                <div class="form-group  col-md-6">
                    <p>Gender <span class="text-danger">*</span></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male"
                            value="M">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female"
                            value="F">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other"
                            value="O">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="state">Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" name="dob" id="dob" class="form-control"
                        value="{{ old('dob') }}" aria-describedby="helpId">
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

            </div>
            
            <div class="form-group">
              <label for="address">Enter File <span class="text-danger">*</span></label>
              <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}"
                  aria-describedby="helpId">
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
            
    </div>

  










    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
