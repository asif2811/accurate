<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&display=swap" rel="stylesheet">

  
</head>
<body>
	
	<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/buss.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/buss2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/buss3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/about.jpg" class="img-fluid" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h3 class="display-4">Developer and Marketer</h3>
				<p class="py-3">Accurate Accounting Software is a simple and user-friendly financial management solution to handle the accounting of small, medium & large size companies in the country. In addition to general accounting and receivables & payables management, Accurate helps companies in budget management and asset management.</p>
				<p>Now increase efficiency & ensure 100% accuracy with Accurate VAT compliant accounting software. Also, get quick & valuable insights into your company’s finances with the software’s customizable dashboards & reports.</p>
				<a href="about.php"class="btn btn-primary">View More....</a>
			</div>
		</div>
	</div>

</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/fin.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Financial Accounting</h4>
				    <p class="card-text">Account Receivables, Accounts Payables, Purchase Flow, Sales Flow, Cash And Bank</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/inv.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Inventory Management</h4>
				    <p class="card-text">Order Management, Procurment Process, Delivery System</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/cust1.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Customization & Configration</h4>
				    <p class="card-text">Customize, Configure,Scalable as per the clients requirement, User-Friendly </p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>	

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/buss.jpg" class="img-fluid pb-3">
			</div>
		</div>
	</div>
</section>	

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php"method="post"> 
			<div class="form-group">
				<label>User Name</label>
				<input type="text" name="username" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea  name="comments" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</section>	

<footer>
	<p class="p-3 bg-dark text-white text-center">@accuratesolutionz</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>