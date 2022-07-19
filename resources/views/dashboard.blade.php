<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel-CRUD</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/dashboard') }}">Home</a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
                <a class="nav-item nav-link" href="{{ url('/customer/view') }}">Customer</a>
                <a class="nav-item nav-link" href="{{ url('/customer/create') }}">Add Customer</a>
            </div>
        </div>
    </nav>
    <h1 class="text-center text-primary"><strong>Dashboard</strong></h1>

  </body>
</html>