<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <hr>
                <p>Toko Madura</p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <br><br>

                <label for="password">Password</label>
                <input type="text" id="Password" name="password">

                <br><br>

                <button type="submit" value="Submit">Klik</button>
                <p>
                    <a href="{{ route('pengguna.create') }}">Belum Punya Akun?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('images/gmbr1.png') }}" alt="">

        </div>
        <div>
            <img src="" class="avatar">
        </div>
    </div>
</div>
</body>

</html>