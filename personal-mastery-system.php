<?php include 'setacookies.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Diwali</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <script src="./assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./assets/css/stf.css">
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
        
        <div class="body-container">
        <div class="body-inner">
            <div class="offer-div">
                <p class="title"><span>Personal Mastery System</span></p>
                <p class="sub-title">Discover the money blueprint of millionaires <br/>and create a legacy</p>
                <p class="offer-price">Rs.82,997</p>
            </div>
            <div class="event-div event-blueprint">
                <div class="event-info">
                    <p class="event-title">The Secret Millionaire Blueprint <span>Two day live event</span></p>
                    <p class="event-subtitle">A Live Two Day Event, where I literally break down the
                        complete system to re-wire your financial blueprint and
                        your mindset so you can create wealth beyond your
                        imagination!
                    </p>
                    <div class="event-rule1">
                        <ul data-aos="fade-down">
                            <li>Learn the law of attraction and why it may not be working and what to do about it.</li>
                            <li>Powerfully experience where you are now in your life, envision exactly where you want to be, and Learn how to close the gap between the two.</li>
                            <li>Attract abundance and success in all areas of your life.</li>
                            <li>The Secret Psychology of Wealth.</li>
                            <li>Master the powerful skills of rapport and influence to maximize your effectiveness as a parent, partner, business person, and leader.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="event-div  right-side event-flex no-bg-event ">
                <img src="./assets/img/iMac.png" class="event-poster" data-aos="fade-right">
                <div class="event-info">
                    <p class="event-title">The personal mastery fast start progra<span>Exclusive recordings of the strategies to get you started
on creating <br>the life you’ve always wanted to live!</span></p>
                    <p class="event-subtitle">Get access to a series of exclusive videos, total of 5 hours, where you
                        will discover the strategies and habits of every wealthy person on
                        the planet which are overlooked by most of the population in the
                        world. Get started on...
                    </p>
                    <div class="event-rule">
                        <ul>
                            <li>Power goals</li>
                            <li>Power habits</li>
                            <li>Power money</li>
                            <li>Power leadership</li>
                            <li>Ultimate Mastery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="event-div no-bg-event event-flex mast-event">
                <div class="event-info">
                    <p class="event-title">The Mastermind Group of Champions<span>Exclusive Community</span></p>
                    <p class="event-subtitle">Be part of the exclusive mastermind group where you will meet awesome,
                        amazing people who are driven to help others, are go getters! Take your life
                        to a new level just by being part of this community!
                    </p>
                </div>
                <div class="event-poster">
                    <img src="./assets/img/iPad Air Space Gray.png" data-aos="fade-right">
                </div>
            </div>
            <div class="footer-offer" id="maipms">
                <div class=""> <span class="new-vaule"> YES I WANT TO SAVE Rs.77,000 </span> </div>
                <input type="hidden" id="myid" name="hidden_id" value="<?php echo $id ?>" />
                <input type="hidden" id="maipmsmyid" name="hidden_id" value="<?php echo $id ?>" />
                        <input type="hidden" id="maipmstitle2" name="hidden_name" value="Personal Mastery System" />
                          <input type="hidden" id="maipmsdesc2" name="hidden_desc" value="Discover the money blueprint of millionaires and create a legacy" />
                          <input type="hidden" id="maipmsmprice3" name="hidden_ogprice" value="82997" />
                          <input type="hidden" id="maipmsoprice3" name="hidden_offerprice" value="5997" />
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