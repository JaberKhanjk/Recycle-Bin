<?php
  session_start();
  echo $_SESSION["email"];
?>
<br>
<br>

<form action="../../api/post/api_edit_profile.php" method="post">

  <label >name: </label>
  <input type="text" name="name"><br><br>
  
  <label >Description: </label>
  <textarea name="description" cols="50" rows="10"></textarea><br><br>
  
  <label >Address: </label>
  <textarea name="address" cols="50" rows="3"></textarea><br><br>

  <label >phone: </label>
  <input type="text"  name="phone"><br><br>
  
  <label >photo: </label>
  <input type="file" name="profile_pht" ><br><br>
  
  <input type="submit" >
</form>

<br>
<br>


<a href="profile.php">Back</a> <br>
<br>
<a href="../home.php">Home</a> <br>