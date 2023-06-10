<form action="{{ route('pengguna.login') }}" method="POST">
    @csrf

    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="password">Password</label>
    <input type="text" id="Password" name="password">

    <br><br>

    <input type="submit" value="Submit">
</form>
<a href="{{ route('pengguna.create') }}">Belum Punya Akun?</a>