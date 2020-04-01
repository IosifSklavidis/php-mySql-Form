<?php
require_once('connection.php');

$name = $email = $password = $repeat = "";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeat = $_POST["repeat"];
$repeat = MD5($password);

if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["password"])) {

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($con, $sql);
}

if($result)
{
    header('Location: login.php');
}
else
{
    header('Location: mistakes.php');
}

?>