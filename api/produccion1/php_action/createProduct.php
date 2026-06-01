<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {

    $productName = $_POST['productName'];
    // $productImage 	= $_POST['productImage'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    $brandName = $_POST['brandName'];
    $categoryName = $_POST['categoryName'];
    $productStatus = $_POST['productStatus'];

    $type = explode('.', $_FILES['productImage']['name']);
    $type = strtolower($type[count($type) - 1]);
    if (in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
        if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
            $imgData = base64_encode(file_get_contents($_FILES['productImage']['tmp_name']));
            $src = 'data:image/' . $type . ';base64,' . $imgData;

            $sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, rate, active, status) 
				VALUES ('$productName', '$src', '$brandName', '$categoryName', '$quantity', '$rate', '$productStatus', 1)";

            if ($connect->query($sql) === TRUE) {
                $valid['success'] = true;
                $valid['messages'] = "Creado exitosamente";
            } else {
                $valid['success'] = false;
                $valid['messages'] = "Error no se ha podido guardar";
            }
        }
    }

    $connect->close();

    echo json_encode($valid);
} // /if $_POST