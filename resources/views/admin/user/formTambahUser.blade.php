
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
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

    <a href="{{ route('admin.show') }}">kembali</a>
