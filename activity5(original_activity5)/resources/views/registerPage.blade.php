<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Registration</title>
</head>
<body>
    <div class = "pageBody">

        @if(session('success'))
        <script>
            alert("{{ session('success')}}");
        </script>
        </div>
        @endif

        <div class="container">
            <form action="/register" method="POST">
                @csrf
                <p>REGISTER</p>
                <input type="text" class="txtBox" placeholder="Username" name="name" required>
                <input type="email" class="txtBox" placeholder="Email" name="email" required>
                <input type="password" class="txtBox" placeholder="Password" name="password" required>
                <button type="submit" class="loginButton" name="register">REGISTER</button>
                <p>If you already have an account <a href="{{'/'}}">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>