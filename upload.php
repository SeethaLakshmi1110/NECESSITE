<?php

include "db.php";

$product_cat = $_POST["product_cat"];
$product_brand = $_POST['product_brand'];
$product_title = $_POST['product_title'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$product_image = $_POST['product_image'];
$product_keywords = $_POST['product_keywords'];
if(empty($product_cat) || empty($product_brand) || empty($product_title) || empty($product_price) ||
	empty($product_desc)  || empty($product_image) || empty($product_keywords)){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		$sql = "INSERT INTO `products` 
		(`product_id`, `product_cat`, `product_brand`, 
		`product_title`, `product_price`, `product_desc`,`product_image`,`product_keywords`) 
		VALUES (NULL, '$product_cat', '$product_brand', 
		'$product_title', '$product_price', '$product_desc','$product_image,'$product_keywords')";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Your product is registered successfully..!</b>
				</div>
			";
		}
	}


?>






















































