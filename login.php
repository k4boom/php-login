<?php
    
    include_once 'header.php';
?>

<h2>Login</h2>
<form action="includes/login.inc.php" method="post">
    <input type="text" name="user" placeholder="Username or Email"><br/>
    <input type="password" name="pwd" placeholder="Password"><br/>
    <button type="submit" name="submit">Login</button><br/>
</form>