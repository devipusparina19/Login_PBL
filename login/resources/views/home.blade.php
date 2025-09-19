<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Selamat Datang, {{ Auth::user()->name }}</h2>

    <p>Email: {{ Auth::user()->email }}</p>

    <a href="{{ route('user.logout') }}">Logout</a>
</body>
</html>
