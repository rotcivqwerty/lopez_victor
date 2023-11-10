<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="pageBody">

        @if(session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif

        <div class="container">
            <form action="/" method="POST">
                @csrf
                <p>LOGIN</p>
                <input type="text" placeholder="Username" name="name" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="loginButton" name="loginBtn">LOGIN</button>
                <p>If you don't have an account <a href="{{ route('register') }}">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
