<?php

session_start();
include('conection.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Vérification que les champs ne sont pas vides
if (empty($email) || empty($password)) {
    die('Veuillez remplir tous les champs.');
}


$req = $conn->prepare("SELECT * FROM users WHERE email = ?");
$req->bind_param("s", $email);
$req->execute();
$result = $req->get_result();

$row = $result->fetch_assoc();

if (isset($row)) { 
    
    if (password_verify($password, $row['password'])) {
        $_SESSION['id_user'] = $row['id'] ;
        $_SESSION['username'] = $row['username'] ;
       header("Location:dash.php");
    } else {
        $_SESSION['error'] = "error of connection" ;
        header("Location:index.php");

    }
} else {
    echo 'Mauvais identifiants';
}

   