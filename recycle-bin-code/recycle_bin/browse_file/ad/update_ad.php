
<!-- 
  <?php

	$product_name = $_GET["product_name"];
	$city = $_GET["city"];
  $local_area = $_GET["local_area"];
  $price = $_GET["price"];
  $phone_no = $_GET['phone_no'];
  $image_path = $_GET['image_path'];

?> 
-->


<form action="./post_ad_update.php" method="post">

  <label >product_name: </label>
  <input type="text"  name="product_name" value='<?php echo $product_name; ?>'><br><br>


  <label >city: </label>
  <input type="text"  name="city" value='<?php echo $city; ?>'><br><br>

  <label >local_area: </label>
  <input type="text"  name="local_area" value='<?php echo $local_area; ?>'><br><br>

  <label >price: </label>
  <input type="text"  name="price" value='<?php echo $price; ?>'><br><br>

  <label >phone_no: </label>
  <input type="text"  name="phone_no" value='<?php echo $phone_no; ?>'><br><br>

  <label >photo: </label>
  <input type="file" name="image_path" value='<?php echo $image_path; ?>' ><br><br>
  
  <input type="submit" >

</form>