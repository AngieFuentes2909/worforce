<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {		

$productId = $_POST['productId'];
 
$type = explode('.', $_FILES['editProductImage']['name']);
	$type = strtolower($type[count($type)-1]);		
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
		if(is_uploaded_file($_FILES['editProductImage']['tmp_name'])) {			
			$imgData = base64_encode(file_get_contents($_FILES['editProductImage']['tmp_name']));
			$src = 'data:image/' . $type . ';base64,' . $imgData;

			$sql = "UPDATE product SET product_image = '$src' WHERE product_id = $productId";				

			if($connect->query($sql) === TRUE) {									
				$valid['success'] = true;
				$valid['messages'] = "Actualizado exitosamente";	
			} else {
				$valid['success'] = false;
				$valid['messages'] = "Error no se ha podido actualizar";
			}
		} // if
	} // if in_array 		
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST