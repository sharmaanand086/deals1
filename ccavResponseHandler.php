<?php 
session_start();
include('Crypto.php');

    echo $order_status;
    	error_reporting(0);
	$workingKey='xxxxxxxxxxxxxxxxxxxxx';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	//$order_status="123654799";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		//var_dump($information[1]);
		if($i==0)	$OrderId=$information[1];
		if($i==2)	$Amount=$information[1];
		if($i==3)	$order_status=$information[1];
	}
	$contactId = substr($OrderId, 0, strpos($OrderId, '_'));
	$_SESSION["contactId"] = $contactId;
	
    
   // var_dump($order_status);
	if($order_status === "Success")
	{
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
  $query = "INSERT INTO `successdeal`(`id`, `uid`) VALUES ('','$contactId')";	
	$result3 = mysqli_query($con,$query);
  
	    
	    
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		?>
		<script>window.location.href = "http://arfeenkhan.com/deals/thankyou/";</script>
		<?php
	}
	
	else if($order_status==="Aborted")
	{
	    	
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	?>  
        <script>window.location = "failpayment.php";</script>
<?php
	}
	else if($order_status==="Failure")
	{
	    	
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
		?>  
        <script>window.location = "failpayment.php";</script>
<?php
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}
		
//echo $order_status;
	

?>
