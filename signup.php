<?php
    
    include_once 'header.php';
?>

<h2>Sign Up</h2>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="name" placeholder="Full Name"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
    <input type="text" name="uid" placeholder="Username"><br/>
    <input type="password" name="pwd" placeholder="Password"><br/>
    <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br/>
    <button type="submit" name="submit">Sign Up</button><br/>
</form>