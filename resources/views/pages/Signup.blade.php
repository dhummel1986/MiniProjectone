@extends('layout.default')
@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>SignUp</h1>
            <p class="lead">Please enter the information below to access signup to our website</p></div>

        <div class="card-body">
            <form action="/Signup" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="password">Confirm your Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection