
<?php
    session_start();

    $name = $_SESSION['username'];
    $password = $_SESSION['password'];

?>

Welcome <?php echo htmlspecialchars($name)?>, Please proceed to login below.
<br><br>
<b>Login Form</b>
<br><br>

<form method="post" action="">
    Username: <input type="text" name="Username">
    <br><br>
    Password: <input type="password" name="password">
    <br><br>
    <input type="submit" name="Submit" value="submit">
</form>

