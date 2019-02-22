<?php

$id;
if($_COOKIE["userid"])
{
    $id=$_COOKIE["userid"];
}
else{
    $id = rand(10,10000);
$cookie_name = "userid";
$cookie_value = $id;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

//echo $id;

    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $uid = $_POST["code"];
    $sql = "SELECT * FROM `diwalisale` WHERE uid='$id'";
    $result = $con->query($sql);
   //var_dum($result);
    $countid= $result->num_rows;

?>