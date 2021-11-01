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

<?php

    if(isset($_GET['error'])){
        switch($_GET['error']){
            case "emptyinput":
                echo "<p>You forgot to fill in all fields.</p>";
                break;
            case "invaliduid": 
                echo "<p>Choose a proper username.</p>";
                break;
            case "invalidemail": 
                echo "<p>Choose a proper email.</p>";
                break;
            case "pwdfalsematch": 
                echo "<p>Passwords dont match.</p>";
                break;
            case "alreadyuser": 
                echo "<p>There is already a user with this username or email.</p>";
                break;
            case "stmtfailed": 
                echo "<p>Something went wrong.</p>";
                break;
            case "none": 
                echo "<p>Signed UP!!.</p>";
                break;
                
        }

    }
?>