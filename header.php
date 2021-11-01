

<nav >
    <?php 
        session_start();
        if(isset($_SESSION['useruid'])){
            echo '<a href="includes/logout.inc.php">Logout</a><br/>';
            echo '<a href="index.php">Profile</a><br/>';
        }else{
            echo '<a href="signup.php">Sign Up</a><br/><a href="login.php">Login</a>';
        }
    ?>
    </nav>