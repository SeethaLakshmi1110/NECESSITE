<?php
include "db.php";

session_start();

if(isset($_POST["sellerLogin"])){
	$email = mysqli_real_escape_string($con,$_POST["sellerEmail"]);
	$password = md5($_POST["sellerPassword"]);
	$sql = "SELECT * FROM seller_info WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["sid"] = $row["s_id"];
		$_SESSION["name"] = $row["name"];
			echo "truefsvkjbskvvsbd";
		}
	
}

?>