<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>

<body>

    <!-- Registration Section -->
    <div class="register">
        <div class="form-container">
            <h2>Register</h2>
            <form action="add.php" method="POST">
                <!-- Full Name Input -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit">Register</button>
                </div>

                <!-- Login Link -->
                <div class="form-footer">
                    <a id="showLogin" href="#">Sign in</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Login Section -->
    <div class="login">
        <div class="form-container">
            <!-- Displaying Error Message (if any) -->
            <?php
            if (isset($_SESSION['error'])) {
                echo "<h3 id='error' style='color: red;'>" . $_SESSION['error'] . "</h3>";
                unset($_SESSION['error']); // Unset error after displaying
            }
            ?>

            <h2>Login</h2>
            <form action="login.php" method="POST">
                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>

                <!-- Registration Link -->
                <div class="form-footer">
                    <a id="showRegister" href="#">Don't have an account? Register</a>
                </div>
            </form>
        </div>
    </div>

    <!-- External Script -->
    <script src="./assets/script.js"></script>
</body>

</html>