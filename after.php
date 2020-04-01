<?php
    require_once('connection.php');
    
    $name = $password = $email = '';
    
    $name = $_POST['name'];
    $password = $_POST['password'];   

    if (!empty($_POST["name"]) || !empty($_POST["password"])) {
    
        $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
        $result = mysqli_query($con, $sql);
    }
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $name = $row["name"];
            $password = $row["password"];            
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['password'] = $password;
            

        }
        header("Location: welcome.php");
    }
    else
    {
        header("Location: mistakeLogin.php");
    }
?>    