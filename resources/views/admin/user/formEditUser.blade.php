@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center align-items-center mt-4">
        <div class="card " style="width: 50%">
            <div class="card-header text-center fs-4 text-uppercase">
                edit user
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username"
                            value="{{ $pengguna->username }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email"
                            value="{{ $pengguna->email }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">old Password</label>
                        <input class="form-control" type="password" id="password" name="oldPassword">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">new Password</label>
                        <input class="form-control" type="password" id="password" name="newPassword">
                    </div>

                    <select name="levels" class="form-select mb-3" aria-label="Default select example">
                        <option value="1" {{ $pengguna->levels == 1 ? 'selected' : '' }}>Admin</option>
                        <option value="2" {{ $pengguna->levels == 2 ? 'selected' : '' }}>User</option>
                    </select>

                    <input class="form-control" type="hidden" id="id" name="id" value="{{ $pengguna->id }}">
                    <button type="submit" class="btn btn-primary text-uppercase">submit</button>
                </form>
            </div>
            <a class="btn btn-success mb-3 text-uppercase" href="{{ route('admin.show') }}">kembali</a>
        </div>
    </div>
@endsection
