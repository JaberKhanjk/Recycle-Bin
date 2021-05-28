

<h1>Recycle Bin</h1>

<br>
<br>
<?php
    session_start();
    echo "user: ".$_SESSION["email"];
?>
<br>
<br>

<a href="user\profile.php">Profile</a> <br>
<br>
<a href="ad\post_ad.php">Post an AD</a> <br>
<br>
<a href="ad\read_ad.php">Read an AD</a> <br>
<br>
<!--<a href="ad\update_ad.php">Update an AD</a> <br>
<br> -->
<a href="ad\delete_ad.php">Delete an AD</a> <br>
<br>
<a href="..\index.php">Log out</a> <br>