<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<script>
    function storeData() {
        let Username = document.getElementById("username").value;
        let Password = document.getElementById("password").value;
        let Email = document.getElementById("email").value;
    }
</script>

<body>
    <div class="register">
        <h1>Register</h1>
        <form action="connect.php" method="post" autocomplete="off" onsubmit="storeData()">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>