<?php include 'setacookies.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Diwali</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <script src="./assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./assets/css/style-main.css">
         <link rel="stylesheet" type="text/css" href="./assets/css/transformation.css">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200i,300i,400,500,600,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./assets/css/aos.css">
        <script type="text/javascript" src="./assets/js/aos.js"></script>
        <script type="text/javascript" src="./assets/js/main.js"></script>
        <!-- Facebook Pixel Code -->
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
        <div class="header">
            <!--<div class="back-to "><img src="./assets/img/back-arrow.png"/><span>Back</span></div>-->
            <div class="cart-bg">
            <div class="cart">
                <div class="cart-inner">
                    <img id="cart-image" src="./assets/img/cart.png">
                    <span class="cart-amount"><?php echo $countid; ?></span>
                    <input type="hidden" id="myid" name="hidden_id" value="<?php echo $id ?>" />
                </div>
            </div>
            </div>
        </div>
        <div class="header-top">
            <!--<p class="left-lamp"><img src="./assets/img/L.png"></p>-->
            <!--<p class="right-lamp"><img src="./assets/img/R.png"></p>-->
            <div class="header-container">
                <p class="the">THE</p>
                <p class="title">Week of transformation</p>
                <p class="up-to">-UPTO-</p>
                <p class="percent">90% off</p>
                <p class="sale-desc">Get flat 90% off on all transformation systems! Choose the product of your choice and avail this exclusive, limited period offer. Transform your life, make it even better. Take action now!
                </p>
                <p class="note">offer available for limited time only</p>
            </div>
        </div>
        <div class="body-container">
        <div class="counter">
            <div id="js-clock" class="clock">
                <div class="clock__days">
                    <span id="js-days"></span>
                    <div>Days</div>
                </div>
                <div class="clock__hours">
                    <span id="js-hours"></span>
                    <div>Hours</div>
                </div>
                <div class="clock__minutes">
                    <span id="js-minutes"></span>
                    <div>Minutes</div>
                </div>
                <div class="clock__seconds">
                    <span id="js-seconds"></span>
                    <div>Seconds</div>
                </div>
            </div>
        </div>
        <div class="body-inner bg-color-none">
            <div class="offer-row">
                <div class="offer-info" id="smbcourse">
                    <div class="offer-detail">
                        <p class="title">The Secret Wealth Formula</p>
                        <p class="subtitle">Discover the money blueprint of millionaires and create a legacy</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-01" style=" padding: 54px;">
                        <p>Learn your money blueprint, engines that drive millionaires & the secret wealth attraction formula!</p>
                    </div>
                </div>
                <div class="offer-info" id="stfcourse">
                    <div class="offer-detail">
                        <p class="title">The Speak to a Fortune system</p>
                        <p class="subtitle">Learn how you can make a fortune teaching what you love</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-02">
                        <p>Right from dicovering your passion all the way through to actually creating a business model based on that and making a fortune,everything is covered.</p>
                    </div>
                </div>
            </div>
            <div class="offer-row">
                <div class="offer-info" id="imscourse">
                    <div class="offer-detail">
                        <p class="title">Instant Millionaire System</p>
                        <p class="subtitle" style="
    padding-bottom: 24px;
">Make a Fortune Using Online Marketing</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-03" style=" padding: 54px;" >
                        <p>Discover the hidden secrets of the digital marketing world to take your business to new heights!</p>
                    </div>
                </div>
                <div class="offer-info" id="bmscourse">
                    <div class="offer-detail">
                        <p class="title">Business Mastermind system</p>
                        <p class="subtitle">How to take control of your business and your financial future</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-04">
                        <p>Learn the A to Z of creating and sustaining a fortune generating business with Arfeen’s Business Mastermind System</p>
                    </div>
                </div>
            </div>
             <div class="offer-row">
                <div class="offer-info full-with-offer-info" id="pmscourse">
                    <div class="offer-detail">
                        <p class="title">Personal Mastery System</p>
                        <p class="subtitle">Take control of your life, one step at a time</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-05" style="background-position: 100% 32%;">
                        <p>Get started right from changing your bilief system and mindset to achieving the ultimate mastery. Begin now to take your life to a whole new level</p>
                    </div>
                </div>
            </div>
            <!--<div class="book-event-div " id="smb-book">-->
            <!--    <div class="event-info tc">-->
            <!--    <p class="up-to">-UPTO-</p>-->
            <!--        <p class="percent">50% off</p>-->
            <!--        <p class="event-title">The Secret Millionaire Blueprint</p>-->
            <!--        <p class="event-subtitle">Be part of the exclusive mastermind group where you will meet awesome,-->
            <!--            amazing people who are driven to help others, are go getters! Take your life-->
            <!--            to a new level just by being part of this community!-->
            <!--        </p>-->
            <!--    </div>-->
            <!--    <div class="event-poster">-->
            <!--        <img src="./assets/img/SMB.png" data-aos="fade-right">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="book-event-div " id="stf-book">
                <div class="event-info bunchbooks tc">
                <p class="up-to">-FLAT-</p>
                    <p class="percent">50% off</p>
                    <p class="event-title">on Arfeen’s books</p>
                    <p class="event-subtitle">The Secret Millionaire Bluerint, Speak to a Fortune &
You Can You Will, It’s Your Choice, all three books
are on a big discount right now!
                    </p>
                </div>
                <div class="event-poster">
                    <img src="./assets/img/bunch.png" data-aos="fade-right">
                </div>
            </div>
            <!--<div class="book-event-div " id="ycyw">-->
            <!--    <div class="event-info tc">-->
            <!--    <p class="up-to">-UPTO-</p>-->
            <!--        <p class="percent">50% off</p>-->
            <!--        <p class="event-title">You Can You Will</p>-->
            <!--        <p class="event-subtitle">Be part of the exclusive mastermind group where you will meet awesome,-->
            <!--            a-->
            <!--        </p>-->
            <!--    </div>-->
            <!--    <div class="event-poster">-->
            <!--        <img src="./assets/img/DCA1.png" data-aos="fade-right">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="book-event-div blue-event" id="dvd">
                <div class="event-info tc">
                <p class="up-to">-UPTO-</p>
                    <p class="percent">90% off</p>
                    <p class="event-title">Life - Find Your Purpose</p>
                    <p class="event-subtitle">A DVD set that will help you transform all
areas of your life. Your finances, your health
and your relationshipss
                    </p>
                </div>
                <div class="event-poster dvdimg">
                    <img class="" src="./assets/img/Group 1.png" data-aos="fade-right">
                </div>
            </div>
        
        <!----------------------------------------ALL ACCESS GOLD PASS--------------------------------------------->
            <div class="offer-row">
                <div class="offer-info" id="allsmb">
                    <div class="offer-detail">
                        <p class="title">The Secret Wealth Formula</p>
                        <p class="subtitle">Discover the money blueprint of millionaires and create a legacy</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-11" style=" padding: 54px;">
                        <p>Learn your money blueprint, engines that drive millionaires & the secret wealth attraction formula!</p>
                    </div>
                </div>
                <div class="offer-info" id="allstf">
                    <div class="offer-detail">
                        <p class="title">The Speak to a Fortune system</p>
                        <p class="subtitle">Learn how you can make a fortune teaching what you love</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-02">
                        <p>Right from dicovering your passion all the way through to actually creating a business model based on that and making a fortune,everything is covered.</p>
                    </div>
                </div>
            </div>
            <div class="offer-row">
                <div class="offer-info" id="allimb">
                    <div class="offer-detail">
                        <p class="title">Instant Millionaire System</p>
                        <p class="subtitle" style="
    padding-bottom: 24px;
">Make a Fortune Using Online Marketing</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-03" style=" padding: 54px;" >
                        <p>Discover the hidden secrets of the digital marketing world to take your business to new heights!</p>
                    </div>
                </div>
                
                <div class="offer-info" id="allbms">
                    <div class="offer-detail">
                        <p class="title">Business Mastermind system</p>
                        <p class="subtitle">How to take control of your business and your financial future</p>
                        <p class="old-value">Rs.82,997</p>
                        <p class="new-value">Rs.8300 only</p>
                    </div>
                    <div class="offer-poster-details offer-poster-04">
                        <p>Learn the A to Z of creating and sustaining a fortune generating business with Arfeen’s Business Mastermind System</p>
                    </div>
                </div>
            </div>
            
            <!------------------------------------FIVE BOOKS--------------------------------------->
             <div class="offer-row" id="books5">
                <div class="offer-info full-with-offer-info">
                    <div class="books-container">
                         <p class="up-to">-FIVE-</p>
                         <p class="percent">UNDER RS.500 </p>
                         <p class="sale-desc" style="color:#000;">Get 5 courses to help you take your life and your business to greater heights!</p>
                    </div>
                    <div class="">
                        <img src="./assets/img/5books.png" data-aos="fade-right" class="books-img">
                    </div>
                </div>
            </div>
            
            <!------------------------------------------TRANSFORMATION-------------------------------->
             <div  class="transfor-product" >
            <p class="up-to">-FLAT-</p>
            <p class="percent">50% OFF</p>
            <p class="subtitle">On all transformation products </p>
            <div class="transfor-product-div" id="stf-trans">
            <div class="product">
            <img src="http://www.arfeenkhan.com/diwali-sale/assets/img/stft.png">
            </div>
            <div class="product-info">
                <p class="title">Speak to a Fortune 5 Day Workshop Recording</p>
                <p class="subtitle">Be part of the exclusive mastermind group where you will meet awesome,
                        amazing people who are driven to help others, are go getters! Take your life
                        to a new level just by being part of this community!</p>
                <p class="old-value">RS.1,00,000</p>
                <P class="new-value">RS.49,997 only</P>
            </div>

            </div>
             <div class="transfor-product-div" id="bm-trans">
            <div class="product">
            <img src="http://www.arfeenkhan.com/diwali-sale/assets/img/bmt.png">
            </div>
            <div class="product-info">
                <p class="title">Business Mastermind 5 Day Workshop Recording</p>
                <p class="subtitle">Be part of the exclusive mastermind group where you will meet awesome,
                        amazing people who are driven to help others, are go getters! Take your life
                        to a new level just by being part of this community!</p>
                <p class="old-value">RS.1,00,000</p>
                <P class="new-value">RS.49,997 only</P>
            </div>

            </div>
             <div class="transfor-product-div" id="smb-trans">
            <div class="product">
            <img src="http://www.arfeenkhan.com/diwali-sale/assets/img/imbt.png">
            </div>
            <div class="product-info">
                <p class="title">Instant Millionaire Blueprint Digital</p>
                <p class="subtitle">Be part of the exclusive mastermind group where you will meet awesome,
                        amazing people who are driven to help others, are go getters! Take your life
                        to a new level just by being part of this community!</p>
                <p class="old-value">RS.1,00,000</p>
                <P class="new-value">RS.49,997 only</P>
            </div>

            </div>
             
            </div>
            
            <!---------------------------------SMB VIP TICKET----------------------------------------------->
            <div class="book-event-div smbticket " id="smb-ticket" >
                <div class="event-info bunchbooks tc">
                    <p class="up-toticket">-FLAT-</p>
                    <p class="percent">90% off</p>
                    <p class="event-title ticketclass" >Silver Class Ticket to The Secret Millionaire Blueprint Live Event</p>
                    <div class="ticket-states">
                     <div class="sub-ticket">Delhi<p>Dec 1- 2</p></div>
                     <div class="sub-ticket">Mumbai<p>Jan 5- 6</p></div>
                     <div class="sub-ticket">Banglore<p>Jan 12- 13</p></div>
                      <p class="old-value">Rs.25,000</p>
                      <p class="new-value">Rs.2500 only</p>
                   </div>
               
                </div>
                
                <div class="event-poster">
                    <img src="./assets/img/smbticket.png" data-aos="fade-right">
                </div>
            </div>
            
        </div>
        
        <?php include 'footer.php'; ?>
        
        <script>
        $(document).ready(function(){
        $("#books5").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/books.php";    
        });
         $("#allbms").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/all-access-gold-pass-bm.php";    
        });
        $("#allimb").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/all-access-gold-pass-imb.php";    
        });
        $("#allstf").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/all-access-goldpass-stf.php";    
        });
        $("#allsmb").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/all-access-gold-pass-smb.php";    
        });
        $("#dvd").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/dvd.php";    
        });
         $("#stf-trans").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/stf-transformation.php";    
        });
        $("#smb-trans").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/imb-transformation.php";    
        });
         $("#bm-trans").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/bm-transformation.php";    
        });
        $("#stf-book").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/lp-book.php";    
        });
        $("#pmscourse").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/personal-mastery-system.php";    
        });
        $("#bmscourse").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/business-mastermind-system.php";    
        });
        $("#smbcourse").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/the-secret-wealth-formula.php";    
        });
        $("#stfcourse").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/speak-to-a-fortune-system.php";    
        });
        $("#imscourse").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/instant-millionaire-system.php";    
        });
        $("#smb-ticket").on('click', function(){
            window.location = "http://www.arfeenkhan.com/diwali-sale/smbticket.php";    
        });
        });
        </script>
        
        
        
        <script type="text/javascript">
            function countdown(endDate) {
             let days, hours, minutes, seconds;
             
             endDate = new Date(endDate).getTime();
             
             if (isNaN(endDate)) {
            return;
             }
             
             setInterval(calculate, 1000);
             
             function calculate() {
               let startDate = new Date();
               startDate = startDate.getTime();
               
               let timeRemaining = parseInt((endDate - startDate) / 1000);
               
               if (timeRemaining >= 0) {
                 days = parseInt(timeRemaining / 86400);
                 timeRemaining = (timeRemaining % 86400);
                 
                 hours = parseInt(timeRemaining / 3600);
                 timeRemaining = (timeRemaining % 3600);
                 
                 minutes = parseInt(timeRemaining / 60);
                 timeRemaining = (timeRemaining % 60);
                 
                 seconds = parseInt(timeRemaining);
                 
                 document.getElementById("js-days").innerHTML = parseInt(days, 10);
                 document.getElementById("js-hours").innerHTML = ("0" + hours).slice(-2);
                 document.getElementById("js-minutes").innerHTML = ("0" + minutes).slice(-2);
                 document.getElementById("js-seconds").innerHTML = ("0" + seconds).slice(-2);
               } else {
                 return;
               }
             }
            }
            
            (function () { 
             countdown(new Date().getFullYear() + '-11-14'); 
            }());
        </script>
        <script>
            AOS.init({
                easing: 'ease-out-back',
                duration: 1000
            });
        </script>
        <script>
            $(window).scroll(function() {

    if ($(this).scrollTop()>50)
     {
        $('.main-footer').fadeIn();
     }
    else
     {
      $('.main-footer').fadeOut();
     }
 });
        </script>
    </body>
</html>