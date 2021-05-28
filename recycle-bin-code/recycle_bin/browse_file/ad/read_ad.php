<?php
	
    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'recycle_bin');

	
    $query = "SELECT * FROM ad";
    $query_conn = mysqli_query($connection, $query);

	echo "<table border> \n";
	
	echo "<th>Owners_email</th> 
        <th>Category</th>
        <th>City</th>
        <th>Local Area</th> 
        <th>Description</th>
        <th>Price</th>
        <th>Product Name</th>
        <th>Phone Number</th> \n";
        // <th>Delete</th> <th>Update</th> \n";

	// This While loop work is to fetching all rows from the database in continuous process
	// Now, inside the loop --> mysqli_fetch_array() to fetch the all the rows from the table 't0'
	// as an array --> [key, value] manner and save it to the Variable "$rows"
	while( $rows = mysqli_fetch_array( $query_conn ) ) 
	{
		// extract() takes all the keys and convert them into variables
		extract( $rows );

		// arrangin the Table rows
		echo "<tr>";
		// why putting the dollar($) in front of the column , to access this column variable value
		echo "<td> $owners_email </td>"; // first column "td" will contains the value of "$f0"
		echo "<td> $category </td>"; // seond column "td" will contains the value of "$f1"
		echo "<td> $city </td>";
        echo "<td> $local_area  </td>";
        echo "<td> $description </td>";
        echo "<td> $price  </td>";
        echo "<td> $product_name </td>";
        echo "<td> $phone_no </td>";
        //echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>"; // third column will contains the hyperlink of 'delete.php' file
		//echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>"; // fourth column will contains the hyperlink of 'update_input.php' file
		echo "</tr> \n";
	}

	echo "</table> \n";

	// A hyperlink to Create a new record of 'create_input.php'
	echo "<p><a href=../home.php>Home</a>";
?>