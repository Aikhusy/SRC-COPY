<!DOCTYPE html>
<html>
<head>
    <title>Kotak Form Sederhana</title>
</head>
<body>
    <h1>Form Sederhana</h1>

    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf

        <label for="name">Username</label>
        <input type="text" id="name" name="name">

        <br><br>

        <label for="password">Password</label>
        <input type="text" id="Password" name="password">

        <br><br>
        @php
            $levels = 1;
        @endphp
        <input type="hidden" id="hidden" name="levels" value="pengguna">
        <input type="submit" value="Submit">
    </form>
</body>
</html>