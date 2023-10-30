@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Login Page</title>
</head>
<body>
    <div class = "pageBody">
        <div class="container">
            <form action="/" method="POST">
                @csrf
                <p>LOGIN</p>
                <input type="text" placeholder="Name" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="loginButton" name="loginBtn">LOGIN</button>
                <p>If you don't have an account <a href="{{'register'}}">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>