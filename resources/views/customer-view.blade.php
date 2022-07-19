<!doctype html>
<html lang="en">

<head>
    <title>Customer View</title>
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
    {{-- nav start --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel-CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/dashboard') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Register</a>
                <a class="nav-item nav-link" href="{{ url('/customer/view') }}">Customer</a>
                <a class="nav-item nav-link" href="{{url('/customer/create')}}">Add Customer</a>
                <a class="nav-item nav-link" href="{{url('/logout')}}">Logout</a>

            </div>
        </div>
    </nav>
    {{-- nav end --}}

    {{-- div container-start --}}
    <div class="container">
        <h1 class="text-center text-primary"><strong>Customer View</strong></h1>
        <a href="{{ url('/customer/create') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table table-striped table-inverse border">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @elseif($customer->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>
                            @if ($customer->status == '1')
                                <a href="">
                                    <span class="badge badge-success">Active</span>
                                </a>
                            @else
                                <a href="">
                                    <span class="badge badge-danger">Inactive</span></a>
                            @endif

                        </td>
                        <td><span><img src="{{ asset('uploads/' . $customer->image) }}" height="50" width="50" /></span></td>
                        <td>
                            <a href="{{ route('customer.edit', ['id' => $customer->customer_id]) }}">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <a href="{{ url('/customer/delete/') }}/{{ $customer->customer_id }}">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div> {{-- div-container end --}}
</body>

</html>
