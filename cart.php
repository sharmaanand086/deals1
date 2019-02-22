<?php
$id=$_GET['id'];
//echo $id;
$fakeprice = 0;
$price=0;
$gst;
$mainprice;
$countitem;
if($id)
{
    $con = mysqli_connect('localhost', 'username', 'password', 'dbname');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
    $sql = "SELECT * FROM `diwalisale` WHERE uid='$id'";
    $result = $con->query($sql);
}
else{
    ?>
    <script>window.location="index.php";</script>
    <?php
}


    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Diwali</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <script src="./assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200i,300i,400,500,600,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./assets/css/aos.css">
        <script type="text/javascript" src="./assets/js/aos.js"></script>
        <script type="text/javascript" src="./assets/js/main.js"></script>
        <!-- Facebook Pixel Code -->
        <!-- Hotjar Tracking Code for http://www.arfeenkhan.com/deals/cart.php -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1080003,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '346234542534734');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=346234542534734&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <div class="cart-container">
          <h2 class="cart-head">Checkout</h2>
          <?php 
          while($row = $result->fetch_assoc()) {
              $fakeprice = $fakeprice + $row['mprice1'];
              $price = $price +$row['oprice1'];
              $countitem++;
              if($row['title1'] == " "){
              }else{
                  
             
              
          ?>
          <div class="card" style="margin-bottom:3%">
            <div class="card-body" style="width: 100%; display:inline-block;padding: 35px 55px; " >
                <div class="cart-text" style="width: 70%;float:left">
                    <h3 class="cart-title"><?php echo $row['title1']; ?></h3>
                    <?php 
                    if($row['desc1'] == " "){
                    ?>
                    
                    <?php
                    }else{
                       ?>
                    <p class="short-desc"><?php echo $row['desc1']; ?></p>
                    <?php 
                    }
                    ?>
                    <input type="hidden" id="uid<?php echo $row['id']; ?>" value="<?php echo $id; ?>" />
                        <button class="remove-button" id="<?php echo $row['id']; ?>">REMOVE</button>
                </div>
                <div class="cart-price"  style="width: 30%;float:left;text-align: right;padding-top: 25px;">
                    <?php 
                    if($row['mprice1'] != 0){
                    ?>
                    <p class="old-value">RS.<?php echo $row['mprice1']; ?></p>
                    <?php } ?>
                    <p class="cart-value">RS.<?php echo $row['oprice1']; ?></p>
                </div>
            </div>
          </div>
          <?php
              } 
         
          }
          ?>
          
          
          <?php
          
         
          ?>
          <div class="card" style="margin-bottom:3%">
              <div class="card-body abc" style="width: 100%; display:inline-block;padding: 35px 55px; " >
               <?php
               if($price < 4997 && $price > 300){
                   if($row['title1'] == " "){
                     ?>
                     <p>
                   	<input type="checkbox" onchange="toggleCheckbox()" name="bump-offer" id="bump-offer" class="bump-offer" checked>
                   	<input type="hidden" id="bump-off" value="1499" />
					    <span class="one-time-offer">ONE TIME OFFER:</span> Millionaire Blueprint All Access Gold Pass at a discount of almost 1499.
               </p>
                     <?php  
              }else{
                  ?>
                  <p>
                   	<input type="checkbox" onchange="toggleCheckbox()" name="bump-offer" id="bump-offer" class="bump-offer">
                   	<input type="hidden" id="bump-off" value="1499" />
					    <span class="one-time-offer">ONE TIME OFFER:</span> Claim a second Secret Millionaire Blueprint All Access Gold Pass at a discount of almost 1499.
               </p>
                  <?php
              }
               ?> 
               <?php
               }
               if($price >5000 && $price < 150000)
               {
                  if($row['title1'] == " "){
                     ?>
                     <p>
                   	<input type="checkbox" onchange="toggleCheckbox()" name="bump-offer" id="bump-offer" class="bump-offer" checked>
                   	<input type="hidden" id="bump-off" value="2999" />
					    <span class="one-time-offer">ONE TIME OFFER:</span> Millionaire Blueprint All Access Gold Pass at a discount of almost 2999.
               </p>
                     <?php  
              }else{
                  ?>
                  <p>
                   	<input type="checkbox" onchange="toggleCheckbox()" name="bump-offer" id="bump-offer" class="bump-offer">
                   	<input type="hidden" id="bump-off" value="2999" />
					    <span class="one-time-offer">ONE TIME OFFER:</span> Claim a second Secret Millionaire Blueprint All Access Gold Pass at a discount of almost 2999.
               </p>
                  <?php
              }
               ?> 
               
               
               <?php 
               }
               
               ?>
            </div>
        </div>
          <?php
          
          ?>
          
           <div class="card">
            <div class="card-body" style="width: 100%; display:inline-block;padding: 35px 55px; " >
                <div class="cart-text" style="width: 40%;float:left">
                    <h3 class="cart-title">TOTAL</h3>
                </div>
                <div class="cart-price"  style="width: 60%;float:left;text-align: right;padding-top: 25px;">
                    <?php if($fakeprice != 0)  { ?>
                    <p class="old-value">RS.<?php echo $fakeprice; ?></p> 
                    <?php 
                    }
                    ?>
                    <p class="cart-value">RS.<?php echo $price; ?></p>
                </div>
            </div>
            
            <div class="card-body" style="width: 100%; display:inline-block;padding: 35px 55px; " >
                <div class="cart-text" style="width: 40%;float:left">
                    <?php
                    $gst=$price*18/100;
                    ?>
                    <h3 class="cart-title">GST</h3>
                </div>
                <div class="cart-price"  style="width: 60%;float:left;text-align: right;">
                    <p class="cart-value">RS.<?php echo (int)$gst; ?></p>
                </div>
            </div>
            
            <div class="card-body" style="width: 100%; display:inline-block;padding: 35px 55px; " >
                <div class="cart-text" style="width: 40%;float:left">
                    <?php 
                    $mainprice = $price + (int)$gst;
                    ?>
                    <h3 class="cart-title">TOTAL PRICE</h3>
                </div>
                <div class="cart-price"  style="width: 60%;float:left;text-align:right;">
                    <p class="cart-value">RS.<?php echo $mainprice; ?></p>
                </div>
            </div>
            
            
            <input type="hidden" id="myid" name="hidden_id" value="<?php echo $id ?>" />
                <form action="Checkout1.php" method="post" style="margin: 0px;">
                    <input type="hidden"  name="id" value="<?php echo $id; ?>" />
                    <input type="hidden" name="price" value="<?php echo $mainprice; ?>" />
                    <input class="footer-proceed" style="width: 100%;border: none;" type="submit" value="PROCEED" name="submit" />
                </form>
                
          </div>
          
          
        </div>
        <script>
            $( document ).ready(function() {
            var abcid =document.getElementById("myid").value;
            var totalcpuntitem='<?php echo $countitem; ?>'
         queryString = 'code=' + abcid;
         jQuery.ajax({
                        url : "ajax-getallcount.php",
                        data : queryString,
                        type : "POST",
                        success : function(data) {
                            if(data != 0){
                            if(totalcpuntitem != data)
                            {
                                location.reload();
                            }
                            }
                        },
                        error : function() {
                        }
                    });
        
                jQuery.ajax({
                                url : "ajax-getcheckbutton.php",
                                data : queryString,
                                type : "POST",
                                success : function(data) {
                                    if(data == 1){
                                    document.getElementById("bump-offer").checked =true;
                                    }
                                },
                                error : function() {
                                }
                            });        
            
        });
        
        function toggleCheckbox()
        {
            if(document.getElementById("bump-offer").checked == true){
            var abcid =document.getElementById("myid").value;
            var oprice =document.getElementById("bump-off").value;
            var mprice = 0;
            var title = ' ';
            var desc= ' '; 
            queryString = 'code=' + abcid + '&title='+ title + '&desc='+ desc + '&mprice='+ mprice + '&oprice='+ oprice;
         jQuery.ajax({
                        url : "ajax-action.php",
                        data : queryString,
                        type : "POST",
                        success : function(data) {
                            
                            
                                location.reload();
                            
                            
                        },
                        error : function() {
                        }
                    });
            }else{
                var abcid =document.getElementById("myid").value;
            var oprice =document.getElementById("bump-off").value;
             queryString = 'code=' + abcid + '&oprice='+ oprice;
              jQuery.ajax({
                        url : "ajax-checkdelete.php",
                        data : queryString,
                        type : "POST",
                        success : function(data) {
                            
                            //alert(data);
                                location.reload();
                            
                            
                        },
                        error : function() {
                        }
                    });
            }
        }
        </script>
    </body>
    </html>