@extends('user.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit User
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('user.update', $pengguna->username) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Usernama</label>
                            <input type="text" name="username" class="form-control" id="username"
                                value="{{ $pengguna->username }}" aria-describedby="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" id="password"
                                value="{{ $pengguna->password }}" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="levels">Levels</label>
                            <input type="text" name="levels" class="form-control" id="levels"
                                value="{{ $pengguna->levels }}" aria-describedby="username">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
