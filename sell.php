/*<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>*/
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>NECESSITE</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">NECESSITE</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="seller_page.php"><span class="glyphicon glyphicon-modal-window"></span>Seller Page</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in Rs.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Rs.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="slogout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div><p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Product details</div>
					<div class="panel-body">
					
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<label for="product_cat">Category</label>
								<input type="text" id="product_cat" name="product_cat" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_brand">Brand</label>
								<input type="text" id="product_brand" name="product_brand"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_title">Product title</label>
								<input type="text" id="product_title" name="product_title"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_price">Price</label>
								<input type="text" id="product_price" name="product_price"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_desc">Product Description</label>
								<input type="text" id="product_desc" name="product_desc"class="form-control">
							</div>
						</div>
                        <div class="row">
							<div class="col-md-12">
                                <div class="inputs">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" id="product_image" name="product_image"class="form-control">
                                    <input type="file" name="product_image" id="product_image">
                                    <input type="submit" value="Upload Image" name="submit">
                                </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_keywords">Keywords</label>
								<input type="text" id="product_keywords" name="product_keywords"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Upload" type="button" id="uploadbutton" name="upload_button"class="btn btn-success btn-lg">
							</div>
						</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>