<?php

require_once 'dbConfig.php'; 

$email = $_POST["email"];
$name = $_POST["name"];
$pw = $_POST["password"];

$sql = "INSERT INTO user (email, name, password)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql))
{
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt, "sss",
    $email,
    $name,
    $pw,
);

mysqli_stmt_execute($stmt);

header('Location: registration.php?msg=sent successfully');

?>