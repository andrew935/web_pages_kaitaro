<?php
   $keyword = $_GET['keyword'] ?? 'NovusX';
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
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no; max-scale=1.0">
      <title><?=$keyword?></title>
      <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/main.min.css">
      <link href="assets/css2.css" rel="stylesheet">
      <link href="assets/style.css" rel="stylesheet">
      <?php $settings->in_header();?>
   </head>
   <body class="gtd-body-hidden" cz-shortcut-listen="true">
      <?php $settings->in_body();?>
      <header>
         <div class="top-header">
            <div class="row">
               <div class="col-xs-4 padding-0">
                  <div class="logo">
                     <div class="logo_add">
                        <img class="logo-nav-desktop" src="assets/logo_1.png" alt="">
                        <p class="logo_text logo-nav-desktop"><?=$keyword?></p>
                     </div>
                     <div style="display: flex; white-space: nowrap">
                        <img class="logo-nav-mobile" src="assets/logo_1.png" alt="">
                        <p class="logo_text1 logo-nav-mobile"><?=$keyword?></p>
                     </div>
                  </div>
               </div>
               <div class="col-xs-8 padding-0">
                  <div class="spots-mobile">
                     <div class="hurry1">
                        Spots<br>
                        Remaining
                        <div>
                           <span id="counter1" class="spotsLeft1">27</span>
                        </div>
                     </div>
                  </div>
                  <div class="spots-desktop">
                     <div class="hurry">
                        Spots<br>
                        remaining
                        <div>
                           <span id="counter2" class="spotsLeft">27</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="section-1" id="form">
         <div class="container container1">
            <h1>
               You can earn from<br>
               <b class="text_big">300 BHD to 700 BHD per day</b><br>
               by using trading platform.<br>
               registration in Bahrain is now open
            </h1>
            <div class="m-50">
               <div class="row row_flex">
                  <div class="col-md-4 form_width">
                     <div class="btn_sport2">
                        <div class="form_head">Immediate income</div>
                     </div>
                     <div class="form_main">
                        <div id="reg-form">
                           <div class="rf-container">
                              <div class="rf-container__inner">
                                 <div class="f1t-form" id="form-f1t">
                                    <div id="form" method="post" class="f1t-form__wrapper">
                                    <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="370px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <img src="assets/main_img.png" class="main_img">
                  </div>
                 
               </div>
            </div>
            <h3 class="text_mob">
               Today is your chance to join us and earn instantly!
            </h3>
         </div>
         <div class="section-2">
            <div class="container container-seleba-1-1">
               <div class="col-sm-6 col-sm-6-seleba-1-1 ">
                  <div class="img_celeb">
                     <img src="assets/james.jpg" alt="James" class="cent-img">
                     <div class="text_celeb">
                        <h3><b>Sawsan al-Sha'er</b></h3>
                        <h4>One of Bahrain's most prominent journalist</h4>
                        <p>
                           "I consider this to be one of the most honest and progressive
                           investment projects. My surprise was sparked after studying
                           and testing the technology. Three weeks after discovering this
                           system, I have invested 1.3 million. My growth today is 78.47
                           percent" stated in the interview."
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-sm-6-seleba-1-1 ">
                  <div class="img_celeb">
                     <img src="assets/graham.jpg" alt="Graham" class="cent-img">
                     <div class="text_celeb">
                        <h3><b>Salman bin Khalifa Al Khalifa</b></h3>
                        <h4>Member of the Bahraini ruling family. He is the current Minister of Finance and National Economy</h4>
                        <p>
                           “I have been using this platform for several years. I
                           encourage everyone to register today to avoid being too late
                           tomorrow. In my opinion, everyone in Bahrain will benefit from
                           it.”
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-3">
         <div class="container">
            <h2>
               <?=$keyword?> uses Artificial Intelligence and State-of-the-art
               Algorithms to Identify Only Profitable Trades
            </h2>
         </div>
      </div>
      <div class="section-4">
         <div class="container">
            <div class="laptop">
               <a class="btn_sport" href="#">Claim Your Spot Today</a>
               <picture>
                  <source media="(min-width: 992px)" srcset="assets/tel_des.png">
                  <source media="(max-width: 991px)" srcset="assets/tel_mob.png">
                  <img src="assets/tel_des.png" alt="James" class="cent-img">
               </picture>
            </div>
            <div class="crypto">
               <div class="asset">
                  <span class="coin">BTC</span>
                  <span class="value" id="btc-price">+ 3417,62</span>
                  <img src="assets/plus-blue.svg" alt="">
               </div>
               <div class="asset">
                  <span class="coin">ETH</span>
                  <span class="value" id="eth-price">+ 435,96</span>
                  <img src="assets/plus-green.svg" alt="">
               </div>
               <div class="asset">
                  <span class="coin">LTC</span>
                  <span class="value" id="ltc-price">+ 34,16</span>
                  <img src="assets/plus-green.svg" alt="">
               </div>
               <div class="asset">
                  <span class="coin">EOS</span>
                  <span class="value" id="eos-price">+ 5,36</span>
                  <img src="assets/plus-green.svg" alt="">
               </div>
               <div class="asset">
                  <span class="coin">XRP</span>
                  <span class="value" id="xrp-price">+ 0,23</span>
                  <img src="assets/plus-green.svg" alt="">
               </div>
               <div class="asset">
                  <span class="coin">BCH</span>
                  <span class="value" id="bch-price">+ 808,93</span>
                  <img src="assets/plus-green.svg" alt="">
               </div>
               <a class="btn_sport1" href="#">Claim Your Spot Today</a>
            </div>
         </div>
      </div>
      <div class="section-5">
         <div class="container">
            <h2>
               Complete Beginners Are Making Immediate Earnings And No With Our Help
               You Can Too
            </h2>
            <p class="subtitle">
               The <?=$keyword?> software is programmed to trade only when it knows it
               will make an immediate profit
            </p>
         </div>
      </div>
      <div class="section-6 section-6-img">
         <div class="container">
            <div class="row">
               <div class="row-flex arab-photo-flex-1" style="display: flex; justify-content: center; flex-wrap: wrap">
                  <div class="col-md-3 col-sm-4">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img src="assets/jonathan.jpg" alt="">
                              <div class="com_text">
                                 <div class="name_comm">Najah Yusuf</div>
                                 <div class="money_comm">2252 BHD</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color" style="color: black !important;">
                           I just want to say a great big Thank you because <?=$keyword?>
                           has really turned my life around. In a matter of weeks, I’ve
                           been able to quit my job!
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img src="assets/delilah.jpg" alt="">
                              <div class="com_text">
                                 <div class="name_comm">Ahdeya Ahmed Al-Sayed</div>
                                 <div class="money_comm">4285 BHD</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color" style="color: black !important;">
                           Man, this thing actually works! It’s amazing really. I’ve only
                           used it for a couple of weeks and I’ve already made more money
                           from it than I do busting my butt off at work for months!
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                     <div class="testimonial">
                        <div class="image-wrapper">
                           <div class="com_img">
                              <img src="assets/simon.jpg" alt="">
                              <div class="com_text">
                                 <div class="name_comm">Saeed Abbas</div>
                                 <div class="money_comm">12599 BHD</div>
                              </div>
                           </div>
                        </div>
                        <p class="p_color p_color1" style="color: black !important;">
                           I received my notice two weeks ago. With no alternatives I
                           thought my life would be over. Now I'm making about 4998 BHD every week! And for the first time in 2 months I'm not in the
                           dark.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="background_bot">
         <div class="section-7">
            <div class="container">
               <h1>
                  Register Today To Gain Immediate Access To This Revolutionary
                  Software
               </h1>
               <h4 class="h4_bot"><?=$keyword?>, Instant Earnings</h4>
               <div class="row equal">
                  <div class="col-md-4">
                     <div class="verified">
                        <div class="icon">
                           <img src="assets/simple.png" alt="">
                        </div>
                        <h3>Simple &amp; Easy To Use</h3>
                        <p>
                           <?=$keyword?> installs in seconds on any computer or mobile
                           device. PC, MAC, Android, IOS and more.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 class">
                     <div class="verified">
                        <div class="icon">
                           <img src="assets/trusted.png" alt="">
                        </div>
                        <h3>Trusted Performance</h3>
                        <p>
                           Fully automated performance instantly scans all the major
                           exchanges. Zero Risk, Immediate Reward.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="verified">
                        <div class="icon">
                           <img src="assets/secure.png" alt="">
                        </div>
                        <h3>Secure &amp; Private</h3>
                        <p>
                           By Using Blockchain technology we deliver 98.9% success rate
                           to all members of our private group.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-8">
            <div class="container">
               <div class="row row1">
                  <h1 class="online-members">
                     <span class="green">5136 BHD</span> Earned By Members In Up To
                     47 BHD Per Hour
                  </h1>
                  <div class="col-md-8">
                     <h2>
                        <?=$keyword?> Is Now Working With All Major Crypto Currency
                        Exchanges
                     </h2>
                     <p>
                        The secret is built in to the way the exchanges operate. The
                        price of the coins goes up and down based on supply and demand,
                        and the supply and demand for the currencies is different from
                        one exchange to another. Because of this, often there are HUGE
                        price difference in the same coin on different exchanges.
                        <?=$keyword?> integrates seamlessly with Coinbase, Binance,
                        Kraken, Poloniex, Bittrex and many more to give you an <?=$keyword?> and Instant Earnings.
                     </p>
                  </div>
                  <div class="col-md-4">
                     <div class="exchange">
                        <img src="assets/money.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="exchanges">
               <img src="assets/cc.png" class="icons">
               <img src="assets/Kraken.png" class="icons">
               <img src="assets/Binance.png" class="icons">
               <img src="assets/poloniex.png" class="icons">
               <img src="assets/bittrex.png" class="icons">
            </div>
            <div></div>
         </div>
         <div class="img_back">
            <div class="section-6">
               <div class="container">
                  <div class="">
                     <div class="row-flex" style="display: flex; justify-content: center; flex-wrap: wrap">
                        <div class="col-md-3 col-sm-4">
                           <div class="testimonial">
                              <span class="name">Yaser Jassim</span>
                              <div class="money_comm_mob">2977 BHD</div>
                              <div class="image-wrapper">
                                 <div class="com_img">
                                    <img src="assets/owner.jpg" style="border-radius: 50%" alt="">
                                    <div class="money_comm1">2977 BHD</div>
                                 </div>
                              </div>
                              <p class="p_center">
                                 I am so speechless. I’ve never seen numbers like this
                                 before. Thank You <?=$keyword?>
                              </p>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                           <div class="testimonial">
                              <span class="name">Nawaf Khalaf</span>
                              <div class="money_comm_mob">4860 BHD</div>
                              <div class="image-wrapper">
                                 <div class="com_img">
                                    <img src="assets/lewis.jpg" style="border-radius: 50%" alt="">
                                    <div class="money_comm1">4860 BHD</div>
                                 </div>
                              </div>
                              <p class="p_center">
                                 I can’t get over it. Like 16422 BHD in just 30 days. I am so
                                 grateful.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                           <div class="testimonial">
                              <span class="name">Nabeel Saleh</span>
                              <div class="money_comm_mob">18574 BHD</div>
                              <div class="image-wrapper">
                                 <div class="com_img">
                                    <img src="assets/georgina.jpg" style="border-radius: 50%" alt="">
                                    <div class="money_comm1">18574 BHD</div>
                                 </div>
                              </div>
                              <p class="p_center">
                                 My trading account now has 87429 BHD in it. Can you believe
                                 it!
                              </p>
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
                              <img class="img-responsive" src="assets/Joanne.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <div class="name">
                              <span>Nader Habib</span>
                           </div>
                           <div class="star">
                              <img src="assets/five-stars.png" alt="">
                           </div>
                           <div class="text">
                              I have never traded before, but the <?=$keyword?> makes it so
                              easy. I never thought I would say this since the crypto
                              world can be so complicated… but you do make it so easy to
                              earn unimaginable amounts!
                           </div>
                           <div class="like">
                              <a href="#" class="claim-your-spot-today"><img src="assets/like.png" width="20px"> Like</a>
                              <a href="#" class="claim-your-spot-today">
                              <img src="assets/comm.png" width="20px">
                              Comment</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment">
                     <div class="row row2">
                        <div class="col-md-2 col-sm-3">
                           <div class="user-img">
                              <img class="img-responsive" src="assets/Rudy.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <div class="name">
                              <span>Abdullah Raj</span>
                           </div>
                           <div class="star">
                              <img src="assets/five-stars.png" alt="">
                           </div>
                           <div class="text">
                              This is exactly what I've been waiting for! Your educational
                              support and high profiting system has got me hooked for
                              life! Thank you so much
                           </div>
                           <div class="like">
                              <a href="#" class="claim-your-spot-today"><img src="assets/like.png" width="20px"> Like</a>
                              <a href="#" class="claim-your-spot-today">
                              <img src="assets/comm.png" width="20px">
                              Comment</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment">
                     <div class="row row2">
                        <div class="col-md-2 col-sm-3">
                           <div class="user-img">
                              <img class="img-responsive" src="assets/Clark.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-md-10 col-sm-9">
                           <div class="name">
                              <span>Omar Khalil</span>
                           </div>
                           <div class="star">
                              <img src="assets/five-stars.png" alt="">
                           </div>
                           <div class="text">
                              On my first day, I’ve made over 339 BHD so I can truly
                              say… Finally, I found something that delivers great results!
                           </div>
                           <div class="like">
                              <a href="#" class="claim-your-spot-today"><img src="assets/like.png" width="20px"> Like</a>
                              <a href="#" class="claim-your-spot-today">
                              <img src="assets/comm.png" width="20px">
                              Comment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section-10">
               <div class="container">
                  <h1>
                     Register Your Details To Gain An <?=$keyword?> In The Crypto Market
                  </h1>
                  <div class="gtd-optins-form">
                     <a href="#" class="scroll-btn">Register</a>
                  </div>
               </div>
            </div>
         </div>
         <footer>
            <div class="container">
               <div class="privacy-link">
                  <a href="<?=$settings->policy()?>" style="color: #3b4034 !important">Privacy Policy</a>
                  <a href="<?=$settings->terms()?>" style="color: #3b4034 !important">Terms</a>
               </div>
               <div class="logo">
                  <div class="logo_bot">
                     <img class="" src="assets/logo_1.png" width="70px" alt="">
                     <p class="logo_text2"><?=$keyword?></p>
                  </div>
                  <p class="subtitle">It’s Easy When You Know How</p>
               </div>
            </div>
         </footer>
         <div class="copyright">
            © 
            <span class="date-now">
               <script>document.write(new Date().getFullYear())</script>
            </span>
            All Rights Reserved - <?=$keyword?>
         </div>
      </div>
      <?php $settings->in_footer();?>
      <script>
         document.addEventListener('DOMContentLoaded', function () {
         function counter() {
         let count = 48;
         function decrement() {
         if (count > 8) {
         count--;
         document.getElementById("counter1").textContent = count;
         document.getElementById("counter2").textContent = count;
         }
         }
         
         setInterval(decrement, 8000);
         };
         counter();
         });
      </script>
      <style>
         
         @media (max-width: 768px) {
                .img_celeb {
                    margin: 0 auto;
                    margin-bottom: 20px;
                }

                .arab-photo-flex-1 {
                    flex-direction: column;
                }

                .section-2 .cent-img {
                    max-width: 400px;
                }
            }
                @media (max-width: 1200px) {
                    .text_celeb {
                        position: relative;
                    }

                    .container-seleba-1-1 {
                            display: flex !important;
                            flex-direction: column !important;
                            align-items: center !important;
                    }
                    .col-sm-6-seleba-1-1 {
                        max-width: 600px !important;
                        margin-bottom: 20px;
                    }

                    .section-2 .cent-img {
                        height: 500px;
                    }
                }



                @media (max-width: 992px) {
                    .section-2 .cent-img {
                        height: 370px;
                    }

                    .text_celeb {
                        bottom: 20px;
                    }
                }

                @media (max-width: 590px) {


                    .text_celeb h3 {
                        font-size: 20px;
                    }

                    .text_celeb h4 {
                        font-size: 16px;
                    }
                }

                 @media (max-width: 400px) {
                    .section-2 .cent-img {
                        height: 300px;
                    }
                 }
            
        
      </style>

   </body>
</html>
