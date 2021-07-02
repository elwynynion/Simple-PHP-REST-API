<?php
header("Content-Type:application/json");

if (!isset($_GET['product_id'])) {
	echo "//";
}

else if (isset($_GET['product_id'])) {
	include('config.php');

	$get_product = $_GET['product_id'];
	$result = mysqli_query(
	$conn,
	"SELECT * FROM `products` WHERE product_id = '".$get_product."'");
		
	if(mysqli_num_rows($result) > 0){
       
	$row = mysqli_fetch_array($result);
	$product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_desc = $row['product_desc'];
    $product_stock = $row['product_stock'];
    

	response($product_id, $product_name, $product_desc, $product_stock);
	mysqli_close($conn);
	}else{
		response('No record found', NULL, NULL, NULL);
		}
}else{
	response('No Data', NULL, NULL, NULL);
	}

function response($product_id, $product_name, $product_desc, $product_stock){
	$response['product_id'] = $product_id;
	$response['product_name'] = $product_name;
	$response['product_desc'] = $product_desc;
	$response['product_stock'] = $product_stock;
	
	// Echo the JSON RESPONSE
	$json_response = json_encode($response, JSON_PRETTY_PRINT);
	echo $json_response;
	// print_r($json_response);
}


?>