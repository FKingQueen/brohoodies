<?php
require_once 'dbConfig.php'; 

$userId = $_POST["userId"];
$pName = $_POST["pName"];
$pColor = $_POST["pColor"];
$pPrice = $_POST["pPrice"];
$pSize = $_POST["pSize"];


$sql = "INSERT INTO product (user_id, name, price, size, color)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql))
{
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt, "isiis",
    $userId,
    $pName,
    $pPrice,
    $pSize,
    $pColor,
);

mysqli_stmt_execute($stmt);

$query = "SELECT * FROM user WHERE id = '$userId' ";
$userAccount = $conn->query($query);

while($row = $userAccount->fetch_assoc()) {
    $email = $row["email"];
    $pw = $row["password"];
}

header("Location: own-products.php?msg=New Product Successfully Added&email=$email&pw=$pw");

?>