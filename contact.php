<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&display=swap" rel="stylesheet">


<style type="text/css">
  
  .img-jmbo{
    background-image: url('images/jumb.jpg');
    background-size: 100%, 100%;
  }
</style>
  
</head>
<body>
	

<?php

include 'menu.php';

?>


<div class="jumbotron img-jmbo" style="margin-top:-40px">
  <div class="container-fluid">

    <h1 style="color: white; margin-top: 10px;">Accurate Software Solutionz</h1>      
    <p style="color: white">Software and Website Development company</p>
  </div>
  
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" style="margin-top: -85px;">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php"method="post" style="margin-top: -60px"> 
      <div class="form-group" style="padding: -5px">
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
</body>
</html>