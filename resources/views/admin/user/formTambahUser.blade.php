{{-- <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email">

    <br><br>

    <label for="password">Password</label>
    <input type="text" id="password" name="password">

    <br><br>

    <select name="levels">
        <option value=1>Admin</option>
        <option value=2 selected>User</option>
    </select>

    <br><br>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('admin.show') }}">kembali</a> --}}

@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center align-items-center mt-4">
        <div class="card " style="width: 50%">
            <div class="card-header text-center fs-4 text-uppercase">
                tambah user
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>

                    <select name="levels" class="form-select mb-3" aria-label="Default select example">
                        <option value=1>Admin</option>
                        <option value=2 selected>User</option>
                    </select>

                    <button type="submit" class="btn btn-primary text-uppercase">submit</button>
                </form>
            </div>
            <a class="btn btn-success mb-3 text-uppercase" href="{{ route('admin.show') }}">kembali</a>
        </div>
    </div>
@endsection
