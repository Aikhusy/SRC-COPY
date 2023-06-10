<!DOCTYPE html>
<html>
<head>
    <title>Kotak Form Sederhana</title>
</head>
<body>
    <h1>Form Sederhana</h1>

    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf

        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <br><br>

        <label for="password">Password</label>
        <input type="text" id="Password" name="password">

        <br><br>

        <input type="hidden" id="hidden" name="levels" value=1>
        <input type="submit" value="Submit">
    </form>
</body>
</html>