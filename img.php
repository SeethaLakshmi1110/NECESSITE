<?php
$target_dir = "C:/xampp/htdocs/App/product_images/";
$target_file = $target_dir . basename($_FILES["product_img"]["product_image"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["upi"])) {
    $check = getimagesize($_FILES["product_img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
<div class="infoContainer">
			<div class="product_image">
				<img src="pic/<?php print $result['pic']; ?>" alt="<?php echo ucfirst($result['firstName'])." ".ucfirst($result['lastName'])." Image"; ?>">
			</div>
