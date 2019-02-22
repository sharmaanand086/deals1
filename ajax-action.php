<?php
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $uid = $_POST["code"];
	$title1 = $_POST["title"];
	$desc = $_POST["desc"];
	$mprice1= $_POST["mprice"];
	$oprice1= $_POST["oprice"];
$desc1 =mysql_escape_string($desc);

    
$query = "INSERT INTO `diwalisale`(`id`, `uid`, `title1`, `desc1`, `mprice1`, `oprice1`) VALUES('','$uid','$title1','$desc1','$mprice1','$oprice1')";	
	$result3 = mysqli_query($con,$query);
	


mysqli_close($con)
?>