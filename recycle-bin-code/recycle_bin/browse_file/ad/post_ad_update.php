<?php
	
    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'recycle_bin');

	include "./recycle_bin/model/model_post_ad.php";
    $query = "UPDATE `ad` SET 
                `product_name` = '  $product_name', 
                `city` = ' $city  ' ,
                `local_area` = ' $local_area  ' , 
                `price` = ' $price  ' , 
                `phone_no` = ' $phone_no  ' , 
                `image_path` = ' $image_path'
                WHERE `owners_email` = '$owners_email	' ";
    $query_conn = mysqli_query($connection, $query);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if (mysqli_query($conn, $sql)) {
        echo "Product Ads Updated successfully";
        header("location: ../../browse_file/ad/post_update_ad_status.php");
    } 
    else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
