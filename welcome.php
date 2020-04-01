<?php

require_once('connection.php');

session_start();

$name = $_SESSION['name'];
$password = $_SESSION['password'];

$sql = "SELECT * FROM users WHERE name='$name' AND password='$password' ";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row["name"];
        $email = $row["email"];
        $password = $row["password"];
        
    }
}       

?>

<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">    
    <link rel="icon" href="favicon.ico">
    
</head>

<body>
<style> body {
    background-color: #364f6b; 
}    
</style>
<h1 class="animation"> Welcome <?php echo $name." ".$email;   ?> </h1>

</body>
</html>
        