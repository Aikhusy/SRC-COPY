<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
</head>
<div>
    <div class="container">
        <div class="login">
            <form action="{{ route('pengguna.login') }}" method="POST">
                @csrf

                <h1>Login</h1>
                <hr>
                <p>Toko Madura</p>

                <label for="username">Email</label>
                <input type="email" id="email" name="email">

                <br><br>
                <label for="password">Password</label>
                <input type="password" id="Password" name="password">

                <br><br>

                <button type="submit" value="Submit">LOGIN</button>
                <p>
                    <a href="{{ route('pengguna.create') }}">Belum Punya Akun?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('storage/image/gmbr1.png') }}" alt="">
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    gsap.from('.container', {
        duration: 1,
        y: -200,
        opacity: 0,
        ease: 'back'
    });
</script>

</html>
