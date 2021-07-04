<?php 
    
    if(isset($_POST['submit'])){
        
        //session_start();

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        $name = $_SESSION['username'];

    }
    
?>

<b>Registration Form</b>
<br><br>

<form action="week2tasklogin.php" method="POST">
    Username: <input type="text" name="username" placeholder="Enter username here" required> *
    <br><br>
    Password: <input type="password" name="password" placeholder="please enter pasword" required> * 
    <br><br>
    <input type="submit" name="submit" value="submit">

    <br><br>
</form>