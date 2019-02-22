<?php
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $uid = $_POST["code"];
    $oprice=$_POST["oprice"];
    echo $oprice;
    $sql = "DELETE FROM `diwalisale` WHERE `uid`='$uid' AND `oprice1`='$oprice'";
    $result = $con->query($sql);

    mysqli_close($con);
?>