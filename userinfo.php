<?php

$con = mysqli_connect('localhost','root');
if ($con) {
	 echo "Connection Sucessful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'dynweb');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query = "INSERT into userinfo (username,email,mobile,comments) VALUE ('$username','$email','$mobile','$comments')";

mysqli_query($con, $query);



header('location:contact.php');



  ?>