<?php
   $keyword = $_GET['keyword'] ?? 'Bitcoin Bank';
   
    $dev = $_GET['dev'] ?? 0;
   if ($dev == 1){
       ini_set('display_errors', '1');
       ini_set('display_startup_errors', '1');
       error_reporting(E_ALL);
   }
   
    $p_keyword = $keyword; // Replace with your offer name
   $p_lang    = "en"; // page Language LOW CASE 
   $p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "IN"; // Replace with the default country ISO Upper case for arabic make AE 
   
   $p_soParam = "";
   $p_pageId  = "";
   
   if(isset($_GET['exit']) && isset($_GET['get_page_vars'])){
       if($_GET['exit']==1) {
           if($_GET['get_page_vars']=='keyword'){
               $myObj = new stdClass();
               $myObj->keyword = $p_keyword;
               $myObj->lang = $p_lang;
               $myObj->country = $p_country;
               $myObj->soparam = $p_soParam ?? '';
               $myObj->pageid = $p_pageId ?? '';
               $response = json_encode($myObj);
               exit($response);
           }
       }
   }
   
   require_once dirname(__FILE__) . '/../_general_v2/Settings.php';
   //require_once dirname(__DIR__) . '/../../_assets/Settings.php';
   $settings = new Settings();
   $params = $settings->before_html($p_lang,$p_country);
   $params .="&utm_campaign=". $p_keyword;
   $params .="&lang=". $p_lang;
      $params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
   ?>
<!DOCTYPE html>
<html lang="en" style="">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no; max-scale=1.0">
      <title>Earn between ₹89,000 and ₹200,000 per day with the world's most intelligent trading software</title>
      <link href="assets/favicon.ico" rel="icon" type="image/x-icon">
      <link href="assets/bundle.css" rel="stylesheet">
      <link href="assets/style.css" rel="stylesheet">
      <?php $settings->in_header();?>
   </head>
   <body class="gtd-body-hidden" style="">
      <?php $settings->in_body();?>
      <header style="">
         <div class="top-header">
            <div class="row">
               <div class="col-xs-4 padding-0">
                  <div class="logo">
                     <div class="logo_add">
                        <img alt="" class="logo-nav-desktop" src="assets/logo_1.png">
                        <p class="logo_text logo-nav-desktop">
                           <?=$keyword?>
                        </p>
                     </div>
                     <div style="display: flex; white-space: nowrap;">
                        <img alt="" class="logo-nav-mobile" src="assets/logo_1.png">
                        <p class="logo_text1 logo-nav-mobile">
                           <?=$keyword?>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-xs-8 padding-0">
                  <div class="spots-mobile">
                     <div class="hurry1">
                        Remaining <br>
                        vacancies:
                        <div>
                           <span class="spotsLeft1" id="counter1">38</span>
                        </div>
                     </div>
                  </div>
                  <div class="spots-desktop">
                     <div class="hurry">
                        Remaining <br>
                        vacancies:
                        <div>
                           <span class="spotsLeft" id="counter2">38</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <span id="goToForm"></span>
      <div class="section-1" id="form">
         <div class="container container1">
            <h1>
               Earn between <br>
               <b class="text_big">₹89,000<br>and ₹200,000<br>per day</b><br>
               with the world's most intelligent trading software
            </h1>
            <div class="m-50">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form_main">
                        <div id="reg-form">
                           <div class="rf-container">
                              <div class="rf-container__inner">
                                 <div class="rf-form js-rf-form">
                                    <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="500px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-3">
         <div class="container">
            <h2 style="padding-top: 20px;"><?=$keyword?> uses artificial intelligence and cutting-edge algorithms to identify only profitable transactions</h2>
         </div>
      </div>
      <div class="section-4">
         <div class="container">
            <div class="laptop">
               <a class="btn_sport" scroll="goScrollToForm">Reserve your spot today</a>
               <picture>
                  <source media="(min-width: 992px)" srcset="assets/tel_des.png">
                  <source media="(max-width: 991px)" srcset="assets/tel_mob.png">
                  <img alt="James" class="cent-img" src="assets/tel_des.png">
               </picture>
            </div>
            <div class="crypto">
               <div class="asset">
                  <span class="coin">BTC</span>
                  <span class="value" id="btc-price">+ 9067.01</span>
                  <img alt="" src="assets/plus-blue.svg">
               </div>
               <div class="asset">
                  <span class="coin">ETH</span>
                  <span class="value" id="eth-price">+ 1156.60</span>
                  <img alt="" src="assets/plus-green.svg">
               </div>
               <div class="asset">
                  <span class="coin">LTC</span>
                  <span class="value" id="ltc-price">+ 90.63</span>
                  <img alt="" src="assets/plus-green.svg">
               </div>
               <div class="asset">
                  <span class="coin">EOS</span>
                  <span class="value" id="eos-price">+ 14.22</span>
                  <img alt="" src="assets/plus-green.svg">
               </div>
               <div class="asset">
                  <span class="coin">XRP</span>
                  <span class="value" id="xrp-price">+ 0.6012</span>
                  <img alt="" src="assets/plus-green.svg">
               </div>
               <div class="asset">
                  <span class="coin">BCH</span>
                  <span class="value" id="bch-price">+ 2146.12</span>
                  <img alt="" src="assets/plus-green.svg">
               </div>
               <a class="btn_sport1" scroll="goScrollToForm" style="">Reserve your spot today</a>
            </div>
         </div>
      </div>
      <div class="section-5">
         <div class="container">
            <h2>New members start earning immediately, and with our help, you can succeed too</h2>
            <p class="subtitle">The <?=$keyword?> algorithm is programmed to execute transactions only when it is certain of obtaining an immediate profit</p>
         </div>
      </div>
      <div class="section-6" style="background: #fff">
         <div class="container">
            <div class="row">
               <div class="row-flex" style="display: flex; justify-content: center; flex-wrap: wrap">
                  <div class="col-md-4 col-sm-6">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img alt="" src="assets/1.jpg">
                              <div class="com_text">
                                 <div class="name_comm">Arjun <br>Kumar</div>
                                 <div class="money_comm">₹542 480</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color">I just want to express my gratitude because <?=$keyword?> has completely changed my life. Within a few weeks, I quit my job!</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img alt="" src="assets/2.jpg">
                              <div class="com_text">
                                 <div class="name_comm">Priya <br> Sharma</div>
                                 <div class="money_comm">₹1 032 015</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color">It really works! It's truly amazing. I've only been using it for two weeks, and I've made more money than working like a mule for many months!</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img alt="" src="assets/3.jpg">
                              <div class="com_text">
                                 <div class="name_comm">Rajesh <br> Aggarwal</div>
                                 <div class="money_comm">₹3 050 760</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color">Two weeks ago, I received a layoff notice. When I found myself with no alternatives, I thought my life was over. Now I make about ₹12 512 924 a week! And for the first time in two months, I'm not in the dark. Thank you, <?=$keyword?>!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="background_bot">
         <div class="section-7">
            <div class="container">
               <h2 class="h1">Sign up today to gain immediate access to this revolutionary algorithm!</h2>
               <h4 class="h4_bot"></h4>
               <div class="row equal">
                  <div class="col-md-4">
                     <div class="verified">
                        <div class="icon">
                           <img alt="" src="assets/simple.png">
                        </div>
                        <h3>Easy and Simple to Use</h3>
                        <p><?=$keyword?> installs in seconds on any computer or mobile device. PC, MAC, Android, iOS, and much more.</p>
                     </div>
                  </div>
                  <div class="col-md-4 class">
                     <div class="verified">
                        <div class="icon">
                           <img alt="" src="assets/trusted.png">
                        </div>
                        <h3>Reliable Performance</h3>
                        <p>The fully automated system instantly analyzes all major stock exchanges. Zero risk, immediate profit.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="verified">
                        <div class="icon">
                           <img alt="" src="assets/secure.png">
                        </div>
                        <h3>Secure and private</h3>
                        <p>Using blockchain technology, we offer all members of our private group a 98.9% success rate</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-8">
            <div class="container">
               <div class="row row1">
                  <div class="online-members">
                     It earns <span class="green">₹619,949,698</span> per day for users. An average earning of ₹11,828.22 per hour for users
                  </div>
                  <div class="col-md-8">
                     <h2><?=$keyword?> is currently collaborating with all major exchanges worldwide.</h2>
                     <p>The secret lies in the way exchanges operate. The prices of financial instruments rise and fall based on supply and demand, and the supply and demand for them vary between exchanges. For this reason, there is often a HUGE price difference for the same, e.g., stock on different exchanges. <?=$keyword?> integrates seamlessly with the largest investment platforms to provide you with an instant advantage and immediate profits.</p>
                  </div>
                  <div class="col-md-4">
                     <div class="exchange">
                        <img alt="" src="assets/money.png">
                     </div>
                  </div>
               </div>
            </div>
            <div class="exchanges">
               <img class="icons" src="assets/cc.png">
               <img class="icons" src="assets/Kraken.png">
               <img class="icons" src="assets/Binance.png">
               <img class="icons" src="assets/poloniex.png">
               <img class="icons" src="assets/bittrex.png">
            </div>
            <div></div>
         </div>
         <div class="section-6">
            <div class="container">
               <div class="">
                  <div class="row-flex" style="display: flex; justify-content: center; flex-wrap: wrap">
                     <div class="col-md-4 col-sm-4">
                        <div class="testimonial testimonial--radius">
                           <span class="name">Suresh Pillai</span>
                           <div class="money_comm_mob">₹725 497</div>
                           <div class="image-wrapper">
                              <div class="com_img">
                                 <img alt="" src="assets/4.jpg" style="border-radius: 50%">
                                 <div class="money_comm1">₹725 497</div>
                              </div>
                           </div>
                           <p class="p_center">I don't believe it. In just 30 days, I earned ₹4 090 643. I am very grateful.</p>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="testimonial testimonial--radius">
                           <span class="name">Pooja Mehta</span>
                           <div class="money_comm_mob">₹993 570</div>
                           <div class="image-wrapper">
                              <div class="com_img">
                                 <img alt="" src="assets/5.jpg" style="border-radius: 50%">
                                 <div class="money_comm1">₹993 570</div>
                              </div>
                           </div>
                           <p class="p_center">At this moment, I have ₹21 778 223 in my trading account. Can you believe it?!</p>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="testimonial testimonial--radius">
                           <span class="name">Vikas Rao</span>
                           <div class="money_comm_mob">₹4 493 125</div>
                           <div class="image-wrapper">
                              <div class="com_img">
                                 <img alt="" src="assets/6.jpg" style="border-radius: 50%">
                                 <div class="money_comm1">₹4 493 125</div>
                              </div>
                           </div>
                           <p class="p_center">I can't fully express it in words. I had never seen figures like this before. Thank you, <?=$keyword?>!</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-9">
            <div class="container">
               <div class="comment">
                  <div class="row row2">
                     <div class="col-md-2 col-sm-3">
                        <div class="user-img">
                           <img alt="" class="img-responsive" src="assets/7.jpg">
                        </div>
                     </div>
                     <div class="col-md-10 col-sm-9">
                        <div class="name">
                           <span>Alia Deshmukh</span>
                        </div>
                        <div class="star">
                           <img alt="" src="assets/five-stars.png">
                        </div>
                        <div class="text">I have never invested before, but <?=$keyword?> makes it so easy. I never thought I would say this because the world of finance can be so complicated... but thanks to you, earning unimaginable amounts is so simple!</div>
                        <div class="like">
                           <a class="claim-your-spot-today" scroll="goScrollToForm"><img src="assets/like.png" width="20px"> Like</a>
                           <a class="claim-your-spot-today" scroll="goScrollToForm">
                           <img src="assets/comm.png" width="20px"> Comment</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment">
                  <div class="row row2">
                     <div class="col-md-2 col-sm-3">
                        <div class="user-img">
                           <img alt="" class="img-responsive" src="assets/8.jpg">
                        </div>
                     </div>
                     <div class="col-md-10 col-sm-9">
                        <div class="name">
                           <span>Sunil Tripathi</span>
                        </div>
                        <div class="star">
                           <img alt="" src="assets/five-stars.png">
                        </div>
                        <div class="text">Here is what I expected! The educational support and the high-profit system have made me dependent forever! Thank you very much!</div>
                        <div class="like">
                           <a class="claim-your-spot-today" scroll="goScrollToForm"><img src="assets/like.png" width="20px"> Like</a>
                           <a class="claim-your-spot-today" scroll="goScrollToForm">
                           <img src="assets/comm.png" width="20px"> Comment</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment">
                  <div class="row row2">
                     <div class="col-md-2 col-sm-3">
                        <div class="user-img">
                           <img alt="" class="img-responsive" src="assets/9.jpg">
                        </div>
                     </div>
                     <div class="col-md-10 col-sm-9">
                        <div class="name">
                           <span>Rahul Bansal</span>
                        </div>
                        <div class="star">
                           <img alt="" src="assets/five-stars.png">
                        </div>
                        <div class="text">I earned over ₹9 000 on the first day, so... I can say that I finally found something that offers extraordinary results!</div>
                        <div class="like">
                           <a class="claim-your-spot-today" scroll="goScrollToForm"><img src="assets/like.png" width="20px"> Like</a>
                           <a class="claim-your-spot-today" scroll="goScrollToForm">
                           <img src="assets/comm.png" width="20px"> Comment</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment">
                  <div class="row row2">
                     <div class="col-md-2 col-sm-3">
                        <div class="user-img">
                           <img alt="" class="img-responsive" src="assets/10.jpg">
                        </div>
                     </div>
                     <div class="col-md-10 col-sm-9">
                        <div class="name">
                           <span>Mohan Dutta</span>
                        </div>
                        <div class="star">
                           <img alt="" src="assets/five-stars.png">
                        </div>
                        <div class="text">The money in my account from day one, I still can't believe it... I love your system, and the support team is excellent!</div>
                        <div class="like">
                           <a class="claim-your-spot-today" scroll="goScrollToForm"><img src="assets/like.png" width="20px"> Like</a>
                           <a class="claim-your-spot-today" scroll="goScrollToForm">
                           <img src="assets/comm.png" width="20px"> Comment</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-10">
            <div class="container">
               <h2 class="h1">Sign up today to gain immediate access to this revolutionary algorithm!</h2>
               <div class="gtd-optins-form">
                  <style>
                     .scroll-btn {
                     color: #fff;
                     font-size: 3rem;
                     width: 50%;
                     text-align: center;
                     display: block;
                     margin: 0 auto;
                     padding: 1rem 0;
                     -webkit-animation: heartbeat 3s ease-in-out infinite both;
                     animation: heartbeat 3s ease-in-out infinite both;
                     position: relative;
                     border-radius: 20px;
                     font-weight: 500;
                     transition: 0.3s;
                     background: linear-gradient(130.99deg,
                     #b6ff6f 1.35%,
                     #75c922 73.25%);
                     box-shadow: 0px 4px 0px #69b31f,
                     0px 254px 102px rgba(6, 26, 45, 0.01),
                     0px 143px 86px rgba(6, 26, 45, 0.05),
                     0px 63px 63px rgba(6, 26, 45, 0.09),
                     0px 16px 35px rgba(6, 26, 45, 0.1),
                     0px 0px 0px rgba(6, 26, 45, 0.1);
                     }
                     @-webkit-keyframes heartbeat {
                     from {
                     -webkit-transform: scale(1);
                     transform: scale(1);
                     -webkit-transform-origin: center center;
                     transform-origin: center center;
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     10% {
                     -webkit-transform: scale(0.91);
                     transform: scale(0.91);
                     -webkit-animation-timing-function: ease-in;
                     animation-timing-function: ease-in;
                     }
                     17% {
                     -webkit-transform: scale(0.98);
                     transform: scale(0.98);
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     33% {
                     -webkit-transform: scale(0.87);
                     transform: scale(0.87);
                     -webkit-animation-timing-function: ease-in;
                     animation-timing-function: ease-in;
                     }
                     45% {
                     -webkit-transform: scale(1);
                     transform: scale(1);
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     }
                     @keyframes heartbeat {
                     from {
                     -webkit-transform: scale(1);
                     transform: scale(1);
                     -webkit-transform-origin: center center;
                     transform-origin: center center;
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     10% {
                     -webkit-transform: scale(0.91);
                     transform: scale(0.91);
                     -webkit-animation-timing-function: ease-in;
                     animation-timing-function: ease-in;
                     }
                     17% {
                     -webkit-transform: scale(0.98);
                     transform: scale(0.98);
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     33% {
                     -webkit-transform: scale(0.87);
                     transform: scale(0.87);
                     -webkit-animation-timing-function: ease-in;
                     animation-timing-function: ease-in;
                     }
                     45% {
                     -webkit-transform: scale(1);
                     transform: scale(1);
                     -webkit-animation-timing-function: ease-out;
                     animation-timing-function: ease-out;
                     }
                     }
                  </style>
                  <a class="scroll-btn" scroll="goScrollToForm">REGISTRATION</a>
               </div>
            </div>
         </div>
         <footer>
            <div class="container">
               <div class="privacy-link">
                  <a href="<?=$settings->policy()?>" scroll="goScrollToForm" style="color: #3b4034 !important">Privacy Policy</a>
                  <a href="<?=$settings->terms()?>" scroll="goScrollToForm" style="color: #3b4034 !important">Conditions</a>
               </div>
               <div class="logo">
                  <div class="logo_bot">
                     <img alt="" class="" src="assets/logo_1.png" width="70px">
                     <p class="logo_text2">
                        <?=$keyword?>
                     </p>
                  </div>
                  <p class="subtitle">Easy when you know it</p>
               </div>
            </div>
         </footer>
         <div class="copyright">
            © 
            <span class="date-now">
               <script>
                  document.write(new Date().getFullYear());
               </script>
            </span>
            All rights reserved - <?=$keyword?>
         </div>
      </div>
      <?php $settings->in_footer();?>
      <script>
         document.querySelectorAll("[scroll='goScrollToForm']").forEach((link) => {
             link.addEventListener("click", function(e) {
                 e.preventDefault();
                 document.getElementById("goToForm").scrollIntoView({
                     behavior: 'smooth',
                     block: 'start'
                 });
             });
         });
      </script>
      <script>
         let count = 48;  
         function decrement() {
           if (count > 8) {
             count--;
             document.getElementById("counter1").textContent = count;
             document.getElementById("counter2").textContent = count;
           }
         }
         setInterval(decrement, 8000);
      </script>
   </body>
</html>
