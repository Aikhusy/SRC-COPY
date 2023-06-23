@extends('user.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>TOKO MADURA</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Input User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Levels</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $pengguna)
            <tr>

                <td>{{ $pengguna->userame }}</td>
                <td>{{ $pengguna->password }}</td>
                <td>{{ $pengguna->levels }}</td>
                <td>
                    <form action="{{ route('user.destroy', $pengguna->username) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('user.show', $pengguna->username) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('user.edit', $pengguna->username) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
