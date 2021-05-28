<?php
    // //include_once '../api/post/api_read_profile.php';
    // // API URL
    // $url = 'http://localhost/recycle_bin/api/api/post/api_read_profile.php';

    // // Create a new cURL resource
    // $ch = curl_init($url);

    // // Setup request to send json via POST
    // $payload = json_encode(array('email' => 'lgnlogout@gmail.com'));

    // // Attach encoded JSON string to the POST fields
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // // Set the content type to application/json
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // // Return response instead of outputting
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // // Execute the POST request
    // $result = curl_exec($ch);

    // print_r(json_decode($result));

    // // Close cURL resource
    // curl_close($ch);


    // API URL
 
 
    //API URL
    $url="http://localhost/recycle_bin/api/api/post/api_read_profile.php";
     
    $data = array( "email"=> "lgnlogout@gmail.com" );
    $ch = curl_init( $url );
    # Setup request to send json via POST.
    $payload = json_encode( $data );
     
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    # Return response instead of printing.
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    # Send request.
    $result = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($result, true);
    # Print response.
    //echo "<pre>" . $result. "</pre>";
    print_r($data);
    
     
 