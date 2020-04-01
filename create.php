<!-- create -- registration -- mistakes -->   


<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">    
    <link rel="icon" href="favicon.ico">
    
</head>

<body>

    <p class="navbar">
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
    <p class="head">Δημιουργήστε έναν λογαριασμό!</p>
    
    <form method="POST" action="registration.php">
        
        <input type="text" name="name" placeholder=" Ονοματεπώνυμο">
        <br>
        
        <br><br>
        <input type="text" name="email" placeholder="email">
        <br>
        
        <br><br>
        <input type="password" name="password" placeholder="Κωδικός Πρόσβασης">
        <br>
        
        <br><br>
        <input type="password" name="repeat" placeholder="Επανάληψη Κωδικού Πρόσβασης">
        <br>
        
        <br><br>
        <input type="submit" name="submit" value="Sign Up" style="background-color:green">
    </form>
   
    <br>
    <a href="login.php">Έχετε ήδη λογαριασμό; Επιστροφή στην σελίδα σύνδεσης</a>

</body>

</html>