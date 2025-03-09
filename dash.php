
<?php 
session_start();
//! Check if user is logged in
if (!isset($_SESSION['id_user'])) {
    //! Redirect to login page if the user is not logged in
    header("Location: index.php");
    exit();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            text-align: center;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-top: 50px;
            border-radius: 10px;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: red;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>Welcome to Your Dashboard</h1>
    </div>

    <div class="container">
        <h2>Hello, <?php echo $_SESSION['username'] ; ?>!</h2>
        <p>This is your simple dashboard.</p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</body>
</html>
