<?php

include('conection.php');

$name= $_POST['name'] ;
$email= $_POST['email'] ;
$password= password_hash($_POST['password'] ,PASSWORD_DEFAULT ) ;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $req = "insert into users(username,email,password) values('$name','$email','$password')" ;
    
    if (mysqli_query($conn,$req)) {
        header('Location: index.php');

    }
  
 } 