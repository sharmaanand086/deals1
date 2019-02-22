<?php include 'setacookies.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Diwali</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <script src="./assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
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
         <?php include 'header.php'; ?>
        <div class="header-top" style="padding: 90px 0 20px;">
            
            <div class="header-container">
                <p class="up-to">-FLAT-</p>
                <p class="percent">90% off </p>
                <p class="sale-desc">on DVD
                </p>
                
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
        <div class="body-inner">
            <div class="event-div book-back" style="background:#fff;display:inline-block;">
                <div class="event-info" style="float:left">
                    <p class="event-title">Life - Find Your Purpose</p>
                    <p class="event-subtitle">For almost 20 years, he has helped over 500,000 people in over 43 countries create personal &
professional transformation. It is Arfeen’s mission to provide tools and strategies that everyone needs to
transcend beyond their limiting fears and beliefs, accomplish their goals and realize their true desires.
                    </p>
                    <div class="event-rule">
                        <ul data-aos="fade-down">
                            <li style="margin:0;font-size: 25px;">One-on-one Audio with Arfeen Khan on the foundational principles of creating a life of vitality and energy.</li>
                            <li style="margin:0;font-size: 25px;">Session on what triggers weight loss and makes it last. </li>
                            <li style="margin:0;font-size: 25px;">Summary of the lesson plus exercises to integrate what you’ve learned. How to achieve abundance of Wealth &
Financial Freedom (Creating Wealth and Expanding Your Impact)</li>
<li style="margin:0;font-size: 25px;">Explaining Strategies and Skills for Creating Wealth and Expanding Your Impact. A Custom Manual: Summary of the lesson plus exercises to integrate what
you’ve learned. How to Empower Your Relationships (Creating Lasting Love & Affection) </li>
                            <li style="margin:0;font-size: 25px;">What Psychology you need to become a Millionaire?</li>
                            <li style="margin:0;font-size: 25px;">This lesson is all about communicating with your partner and about sharing affection.</li>
<li style="margin:0;font-size: 25px;"> What if you could ignite more love, joy and excitement in your relationship starting right now? What if you could reclaim the passion that you and your partner both deserve? Transform your
beliefs and master the fundamental skills necessary to create the ultimate relationship you desire and deserve.</li>
                            <li style="margin:0;font-size: 25px;">Summary of the lesson plus exercises to integrate what you’ve learned.</li>
                            
                           
                        </ul>
                    </div>
                </div>
                <img style="float:left;width: 35%;max-width: 100%;padding: 35px;" src="http://www.arfeenkhan.com/diwali-sale/assets/img/Group%201.png" class="event-poster" data-aos="fade-right">
            </div>
          <div class="footer-offer" style="margin-top:0px;">
                        <div class=""><span class="strike">Rs.4,500</span>  <span class="new-vaule">Rs.450 Only</span> </div>
                        <input type="hidden" id="myid" name="hidden_id" value="<?php echo $id ?>" />
                        <input type="hidden" id="title2" name="hidden_name" value="Life - Find Your Purpose" />
                          <input type="hidden" id="desc2" name="hidden_desc" value="A DVD set that will help you transform all areas of your life" />
                          <input type="hidden" id="mprice3" name="hidden_ogprice" value="4500" />
                          <input type="hidden" id="oprice3" name="hidden_offerprice" value="450" />
                        <div class="">     <a class="add-cart"><span class="orange">+</span> Click &amp; add to cart</a></div>
                    </div>
        </div>
        </div>
        <?php include 'footer.php'; ?> 
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
    </body>
</html>