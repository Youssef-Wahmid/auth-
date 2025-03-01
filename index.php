<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>

<div class="register">
    <div class="form-container">
        <h2>Register</h2>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div class="form-footer">
                <a id="showLogin" href="">Sign in</a>
            </div>
        </form>
    </div>
</div>

<div class="login">
<div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>

            <div class="form-footer">
                <!--//? <a href="#">Forgot Password?</a><br> -->
                <a  id="showRegister" href="#">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</div>

<script src="./assets/script.js"></script>
</body>
</html>