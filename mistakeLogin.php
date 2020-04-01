

<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
            font-size: 80%;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/conflict-detection.min.js">
</head>

<body>
    
    <ul>
        <li><a href="#">Αρχική</a></li>
        <li><a href="#">Υπηρεσίες</a></li>
        <li><a href="#">Προφίλ</a></li>
        <li><a href="#">Προιόντα</a></li>
        <li><a href="#">Επικοινωνία</a></li>
    </ul>
    <hr>
    <br>

    <p class="bigtext">Need to send images, audio files,and/or videos over text message to send a better message to your potential or current customers? Our service allows you to complete any of these actions using our highly functional API and web service Twitter Art</p>
    <p class="head">LOG IN</p>
    <form action="after.php" method="POST" >
    <span class="error"> <?php echo 'Please try again! Fill the blanks,  
        confirm your password!'; ?></span>
        <br><br><br>    
        <input type="text" name="name" placeholder="Username">
        <br>
        
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <br>
        
        <br><br>       
        <input type="submit" name="submit" value="Login" style="background-color:green">
    </form>

    <br>
    <a href="create.php">Νέος λογαριασμός</a>
    

</body>

</html>