<?php
session_start();
unset($_SESSION['email']);
session_destroy();

?>

<h1>Recycle Bin</h1>

<br>
<br>

<a href="browse_file\sign_in.php">Sign In</a> <br>
<br>
<a href="browse_file\sign_up.php">Sign Up</a> <br>