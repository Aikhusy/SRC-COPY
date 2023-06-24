
<form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="username">Username</label>
    <input type="text" id="username" name="username" value="{{$pengguna->username}}">

    <br><br>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" value="{{$pengguna->email}}">

    <br><br>

    <label for="password">old Password</label>
    <input type="password" id="password" name="oldPassword" >

    <br><br>

    <label for="password">new Password</label>
    <input type="text" id="password" name="newPassword" >
    <br><br>

    <select name="levels">
        <option value="1" {{ $pengguna->levels == 1 ? 'selected' : '' }}>Admin</option>
        <option value="2" {{ $pengguna->levels == 2 ? 'selected' : '' }}>User</option>
    </select>

    <br><br>
    <input type="hidden" name="id" value="{{$pengguna->id}}">
    <input type="submit" value="Submit">
</form>

<a href="{{ route('admin.show') }}">kembali</a>