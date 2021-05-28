<?php

    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../model/model_post_update_ad.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new model_post_update_ad($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));
    session_start();

    unset($owner_email);
    unset($product_name);
    unset($category);
    unset($city);
    unset($local_area);
    unset($description);
    unset($price);
    unset($phone_no);
    unset($image_path);
    if (isset($_SESSION["email"], $_POST['product_name'], $_POST['category'], $_POST['city'], $_POST['local_area'],  $_POST['description'],  $_POST['price'],  $_POST['phone_no'],  $_POST['image_path'] )){
        $owner_email = $_SESSION["email"];
        $product_name = $_GET['product_name'];
        $category = $_GET['category'];
        $city = $_GET['city'];
        $local_area = $_GET['local_area'];
        $description = $_GET['description'];
        $price = $_GET['price'];
        $phone_no = $_GET['phone_no'];
        $image_path = $_GET['image_path'];

        $post->post($owner_email, $product_name, $category, $city, $local_area, $description, $price, $phone_no, $image_path);
            // echo json_encode(
            //     array('signIn' => $email)
            // );
            header("location: ../../browse_file/ad/post_update_ad_status.php");
        
    }else{
        // echo json_encode(
        //     array('signUp' => 'failed')
        // );

        echo "\$_post failed";
    }
