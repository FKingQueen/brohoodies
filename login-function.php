<?php
    require_once 'dbConfig.php'; 
    
    $email = $_POST["email"];
    $pw = $_POST["password"];

    $query = "SELECT * FROM user WHERE email = '$email' and password = '$pw'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        header('Location: login.php?msg=You are not registered');
    } 
    else
    {
        header("Location: home.php?email=$email&pw=$pw");
    }
?>