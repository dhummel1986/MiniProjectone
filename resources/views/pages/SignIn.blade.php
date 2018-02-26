@extends('layout.default')
@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Login</h1>
            <p class="lead">Please enter the information below to access your account</p></div>

        <div class="card-body">
            <form action="/SignIn" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input name="username" type="username" class="form-control" id="username" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection