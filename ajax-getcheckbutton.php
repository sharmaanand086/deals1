<?php
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');
	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $uid = $_POST["code"];
    $sql = "SELECT * FROM `diwalisale` WHERE `uid`='$uid' AND (`oprice1`=1499 OR `oprice1`=2999)";
    $result = $con->query($sql);

    echo $result->num_rows;

    mysqli_close($con);
?>