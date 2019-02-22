<?php
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $mainid = $_POST["code"];
	$uid = $_POST["title"];
	$query = "DELETE FROM `diwalisale` WHERE `uid`='$uid' AND `id`='$mainid'";	
	$result3 = mysqli_query($con,$query);
	


mysqli_close($con)
?>