<?php

$keyword = $_GET['keyword'] ?? 'Immediate i800 Daypro';

$platform = 'kaitaro';

switch ($platform) {
    case 'n2':
        $sub_folder = '';
        require_once dirname(__DIR__) . '/../../_assets/Settings.php';
        break;
    case 'kaitaro':
        $sub_folder = '/lander';
        require_once dirname(__FILE__) . '/../_general_v2/Settings.php';
        break;
}

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$p_keyword = $keyword; // Replace with your offer name
$p_lang    = "Language_of_the_offer"; // page Language LOW CASE
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "COUNTRY_OF_OFFER"; // Replace with the default country ISO Upper case for arabic make AE

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

$settings = new Settings();
$params = $settings->before_html($p_lang,$p_country);
$params .="&platform=". $platform;
$params .="&utm_campaign=". $p_keyword;
$params .="&lang=". $p_lang;
$params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0," />

        <title><?=$keyword?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico?1">
    
        <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
</style>

        <link rel="stylesheet" href="assets/style.css" />

        
        
   <?php $settings->in_header();?>
   </head>
   <body>
   <?php $settings->in_body();?>
        <header class="header">
            <div class="container-fluid">
                <a class="logo scroll_to_register" href="#">
                    <img class="logo__img" src="assets/logo.png" alt="" />
                    <span class="logo__text"><?=$keyword?></span>
                </a>
            </div>
        </header>
        <main>
            <section class="hero">
                <div class="hero__wrapper">
                    <div class="hero__big-col">
                        <h1 class="hero__header">
                            <span class="hero__header-decor"></span>
                            Gain between <br />
                            <b>
                                $780 <br />
                                And <br />
                                $1800 per day
                            </b>
                            Thanks to the trading platform. Registration is open in India.
                        </h1>
                    </div>
                    <div id="form" class="hero__col">
                      
                        <div id="reg-form">
                      
                            
                            <!-- reg-form styles end -->
                            <div class="rf-container" id="custom-regbox">
                                <div class="rf-container__inner">
                                    <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="450px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                                </div>
                                <div id="reg_popup" class="popup__bg" hidden="true">
                                    <div class="popup">
                                        <div class="popup__info-block">
                                            <h1 class="popup__title">Complete registration!</h1>
                                            <div class="popup__info">
                                                <img src="assets/call_symbol.png" alt="call" class="popup__call-icon" />
                                                <p class="popup__call-text">You will receive a <span class="popup__call-text_highlight">call from us</span> on your number in 30 minutes</p>
                                            </div>
                                            <h2 class="popup__subtitle">Please, follow these steps:</h2>
                                            <ul class="popup__instruction">
                                                <li class="popup__instruction-element">Turn on your ring volume</li>
                                                <li class="popup__instruction-element">Keep your phone within reach</li>
                                                <li class="popup__instruction-element">Click the button below</li>
                                            </ul>
                                            <div class="popup__button">
                                                <a id="popup__button-url" href="#" class="popup__button-text scroll_to_register">click here to proceed</a>
                                            </div>
                                        </div>
                                        <div class="popup__info-decor">
                                            <div class="popup__decoration">
                                                <img src="assets/checkmark.png" alt="success" class="popup__pic" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero__comment-wrapper">
                        <div class="hero__comment-block" style="background-image: url(assets/celeb-1.png);">
                           
                            <div class="white-space"></div>
                            <div class="hero__comment-text-block">
                                <div class="hero__comment-title-block">
                                    <span class="hero__comment-title">Azim Premji</span>
                                    <span class="hero__comment-subtitle">Director of Wipro Limited.</span>
                                    <hr />
                                </div>
                                <p class="hero__comment-text">
                                    "I consider this to be one of the most honest and progressive investment projects. My surprise was sparked after studying and testing the technology. Three weeks after discovering this system, I have
                                    invested 1.3 million. My growth today is 78.47 percent" stated in the interview.
                                </p>
                            </div>
                        </div>
                        <div class="hero__comment-block" style="background-image: url(assets/celeb-2.jpg);">
                            
                            <div class="white-space"></div>
                            <div class="hero__comment-text-block">
                                <div class="hero__comment-title-block">
                                    <span class="hero__comment-title">Rajat Sharma</span>
                                    <span class="hero__comment-subtitle">Famous broadcaster.</span>
                                    <hr />
                                </div>
                                <p class="hero__comment-text">
                                    “I have been using this platform for several years. I encourage everyone to register today to avoid being too late tomorrow. In my opinion, everyone in India will benefit from it.”
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            <section class="description">
                
                <div class="wrapper">
                    <div class="description__title-wrapper">
                        <h2 class="description__title">
                            Beginners win immediately and now, <br />
                            With our help, you can also.
                        </h2>
                        <p class="description__subtitle">The software <span class="green-text"><?=$keyword?></span> is scheduled to negotiate only when he knows that he will make immediate benefit.</p>
                        <h3 class="description__title reg-title">
                            Register today to access <br />
                            Immediately to this revolutionary software
                        </h3>
                        <div class="btn-wrapper">
                        <a href="#" class="scroll_to_register">    <button href="#form" class="btn"><span>Ask for your place from</span></button></a>
                        </div>
                    </div>
                </div>
                <div class="chat-slider">
                    <div class="gallery">
                        <div class="gallery-container">
                            <div class="review-block gallery-item gallery-item-1" data-index="1">
                                <div class="review-block__header">
                                    <div class="review-block__avatar">
                                        <img src="assets/review-img-1.png" alt="" />
                                    </div>
                                    <div class="review-block__title">
                                        <span class="review-block__name">Sunil Gupta</span>
                                        <span class="review-block__profit green-text"><span class="another-font">$</span> 5,426</span>
                                    </div>
                                </div>
                                <p class="review-block__text">I just want to express my deep gratitude, because <?=$keyword?> has really changed my life. In just a few weeks, I was able to leave my job!</p>
                            </div>
                            <div class="review-block gallery-item gallery-item-2" data-index="2">
                                <div class="review-block__header">
                                    <div class="review-block__avatar">
                                        <img src="assets/review-img-2.png" alt="" />
                                    </div>
                                    <div class="review-block__title">
                                        <span class="review-block__name">Anjali Mehta</span>
                                        <span class="review-block__profit green-text"><span class="another-font">$</span> 10,316</span>
                                    </div>
                                </div>
                                <p class="review-block__text">
                                    Dude, this thing really works! It's really unbelievable. I have only been using it for a few weeks and I have already earned more money than when I broke my buttocks at work for months!
                                </p>
                            </div>
                            <div class="review-block gallery-item gallery-item-3" data-index="3">
                                <div class="review-block__header">
                                    <div class="review-block__avatar">
                                        <img src="assets/review-img-3.png" alt="" />
                                    </div>
                                    <div class="review-block__title">
                                        <span class="review-block__name">Ankit Sharma</span>
                                        <span class="review-block__profit green-text"><span class="another-font">$</span> 33,426</span>
                                    </div>
                                </div>
                                <p class="review-block__text">
                                    I received my opinion two weeks ago. Without alternative, I thought my life would be over. Now, I earn around £ 13,261 each week! And for the first time in 2 months, I am not in the red. Thank you Edwin!
                                </p>
                            </div>
                        </div>
                        <div class="gallery-controls">
                          
                        </div>
                    </div>
                </div>
                <div class="chat-slider chat-slider--mobile">
                    <div class="review-block">
                        <div class="review-block__header">
                            <div class="review-block__avatar">
                                <img src="assets/review-img-1.png" alt="" />
                            </div>
                            <div class="review-block__title">
                                <span class="review-block__name">Sunil Gupta</span>
                                <span class="review-block__profit green-text"><span class="another-font">$</span> 5,426</span>
                            </div>
                        </div>
                        <p class="review-block__text">I just want to express my deep gratitude, because <?=$keyword?> has really changed my life. In just a few weeks, I was able to leave my job!</p>
                    </div>
                    <div class="review-block">
                        <div class="review-block__header">
                            <div class="review-block__avatar">
                                <img src="assets/review-img-2.png" alt="" />
                            </div>
                            <div class="review-block__title">
                                <span class="review-block__name">Anjali Mehta</span>
                                <span class="review-block__profit green-text"><span class="another-font">$</span> 10,316</span>
                            </div>
                        </div>
                        <p class="review-block__text">
                            Dude, this thing really works! It's really unbelievable. I have only been using it for a few weeks and I have already earned more money than when I broke my buttocks at work for months!
                        </p>
                    </div>
                    <div class="review-block">
                        <div class="review-block__header">
                            <div class="review-block__avatar">
                                <img src="assets/review-img-3.png" alt="" />
                            </div>
                            <div class="review-block__title">
                                <span class="review-block__name">Ankit Sharma</span>
                                <span class="review-block__profit green-text"><span class="another-font">$</span> 33,426</span>
                            </div>
                        </div>
                        <p class="review-block__text">
                            I received my opinion two weeks ago. Without alternative, I thought my life would be over. Now, I earn around $ 13,261 each week! And for the first time in 2 months, I am not in the red. Thank you Edwin!
                        </p>
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="advantages__list">
                    <div class="advantages__card">
                        <div class="advantages__card-wrapper">
                            <div class="advantages__card-icon">
                                <img src="assets/table.png" alt="table-img" />
                            </div>
                            <div class="advantages__text-wrapper">
                                <span class="advantages__card-title">Simple and easy to use</span>
                                <p class="advantages__card-text"><?=$keyword?> Settles in a few seconds on any computer or mobile device. PC, Mac, Android, iOS and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card-wrapper">
                            <div class="advantages__card-icon">
                                <img src="assets/graph.png" alt="graph-img" />
                            </div>
                            <div class="advantages__text-wrapper">
                                <span class="advantages__card-title">Professional recommendations</span>
                                <p class="advantages__card-text">The signals of our team of analysts, provided through telephone calls, offer valuable information and help make informed decisions in the stock markets</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card-wrapper">
                            <div class="advantages__card-icon">
                                <img src="assets/lock.png" alt="lock-img" />
                            </div>
                            <div class="advantages__text-wrapper">
                                <span class="advantages__card-title">Secure and private</span>
                                <p class="advantages__card-text">By using blockchain technology, we offer a success rate of 98.9% to all members of our private group.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapper">
                   <a href="#" class="scroll_to_register"> <button href="#form" class="btn"><span>Ask for your place from</span></button></a>
                </div>
                <div class="advantages__text-block">
                    <h2 class="advantages__title">
                        <?=$keyword?> now works with <br />
                        All the main exchange of currencies <br />
                        cryptocurrency
                    </h2>
                    <p class="advantages__text">
                        The secret is integrated into the operation of the scholarships. The price of the parts increases and decreases according to supply and demand, and the supply and demand for currencies are different from one exchange
                        to another. For this reason, there is often a huge price difference in the same room on different exchanges. Granimator fits perfectly with Coinbase, Binance, Kraken, Poloniex, Bittrex and many others to offer you an
                        immediate advantage and instant gains.
                    </p>
                    <p class="advantages__text"></p>
                </div>
                <div class="advantages__decor-left">
                    <img src="assets/left-cloud.png" alt="" />
                </div>
                <div class="advantages__decor-right" data-aos="fade-left">
                    <img src="assets/right-cloud.png" alt="" />
                </div>
                <div class="advantages__decor-bottom">
                    <img src="assets/phone.png" alt="" />
                </div>
                <div class="advantages__decor-coins">
                    <img src="assets/small_coins.png" alt="" />
                </div>
            </section>
            <section class="crypto-exchanges">
                <div class="crypto-exchanges__list">
                    <img src="assets/coinbase-icon.svg" alt="" class="crypto-exchanges__item" />
                    <img src="assets/kraken-logo.svg"  class="crypto-exchanges__item">
                    <img src="assets/binance-logo.svg" alt="" class="crypto-exchanges__item" />
                    <img src="assets/poloniex-logo.svg" alt="" class="crypto-exchanges__item" />
                    <img src="assets/bittrex-logo.svg" alt="" class="crypto-exchanges__item" />
                </div>
            </section>
            <section class="connect">
                <h2 class="connect-title">
                    Save your contact details to obtain a <span class="green-text"><?=$keyword?></span> <br />
                    on the stock market
                </h2>
                <div class="connect__comments-list">
                    <div class="connect__comment-block">
                        <div class="connect__comment-avatar">
                            <img src="assets/comment-img-1.png" alt="" />
                        </div>
                        <div class="connect__comment-title">
                            Nikhil Joshi <span class="connect__comment-raiting"><img src="assets/stars.png" alt="" /></span>
                        </div>
                        <div class="connect__comment-info">
                            <p class="connect__comment-text">
                                I have never traded before, but <?=$keyword?> facilitates things. I never thought I would say that because the cryptocurrency world can be so complicated ... but you make it so easy to win unimaginable amounts!
                            </p>
                            <div class="connect__comment-btns">
                                <div class="connect__comment-like">Like</div>
                                <div class="connect__comment">Comment</div>
                            </div>
                        </div>
                    </div>
                    <div class="connect__comment-block">
                        <div class="connect__comment-avatar">
                            <img src="assets/comment-img-2.png" alt="" />
                        </div>
                        <div class="connect__comment-title">
                            Manoj Kumar <span class="connect__comment-raiting"><img src="assets/stars.png" alt="" /></span>
                        </div>
                        <div class="connect__comment-info">
                            <p class="connect__comment-text">
                                This is exactly what I expected! Your educational support and your high profit system have made me addicted to life! Thank you so much
                            </p>
                            <div class="connect__comment-btns">
                                <div class="connect__comment-like">Like</div>
                                <div class="connect__comment">Comment</div>
                            </div>
                        </div>
                    </div>
                    <div class="connect__comment-block">
                        <div class="connect__comment-avatar">
                            <img src="assets/comment-img-3.png" alt="" />
                        </div>
                        <div class="connect__comment-title">
                            Vijay Krishnan <span class="connect__comment-raiting"><img src="assets/stars.png" alt="" /></span>
                        </div>
                        <div class="connect__comment-info">
                            <p class="connect__comment-text">
                                The first day, I won more than 900 dollars, so I can really say ... Finally, I found something that gives excellent results!
                            </p>
                            <div class="connect__comment-btns">
                                <div class="connect__comment-like">Like</div>
                                <div class="connect__comment">Comment</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="connect-title">
                    Save your contact details to obtain a <span class="green-text"><?=$keyword?></span> <br />
                    on the stock market
                </h2>
                <div class="btn-wrapper">
                 <a href="#" class="scroll_to_register">   <button href="#form" class="btn"><span>Ask for your place from</span></button></a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__upper-block">
                <div class="container">
                    <div class="footer__wrapper">
                        <div class="footer__link-wrapper">
                            <a class="footer__link scroll_to_register" href="<?=$settings->policy()?>" target="_blank">Privacy Policy</a>
                            <a class="footer__link scroll_to_register" href="<?=$settings->terms()?>" target="_blank">Terms</a>
                        </div>
                        <a class="logo footer__logo" href="#">
                            <img class="logo__img" src="assets/logo.png" alt="" />
                            <span class="logo__text"><?=$keyword?></span>
                        </a>
                        <p class="footer__tagline">It's easy when you know how to do</p>
                    </div>
                </div>
            </div>
            <div class="footer__lover-block">
                <div class="container">
                    <div class="footer__wrapper">
                        <span class="footer__copyright">© <script>document.write(new Date().getFullYear())</script> All rights reserved - <?=$keyword?></span>
                    </div>
                </div>
            </div>
        </footer>
  
   

   <?php $settings->in_footer();?>

    <script>
  $("a.scroll_to_register").click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $("#registerForm").offset().top
    }, 500);
  });
</script>
        
        <script type="text/javascript">
           document.addEventListener("DOMContentLoaded", () => {


    const galleryContainer = document.querySelector('.gallery-container');
    const galleryControlsContainer = document.querySelector('.gallery-controls');
    const galleryControls = ['prev', 'next'];
    const galleryItems = document.querySelectorAll('.gallery-item');

    class Carousel {
        constructor(container, items, controls) {
            this.carouselContainer = container;
            this.carouselControls = controls;
            this.carouselArray = [...items];
        }

        updateGallery() {
            this.carouselArray.forEach( el => {
                el.classList.remove('gallery-item-1');
                el.classList.remove('gallery-item-2');
                el.classList.remove('gallery-item-3');
            });

            this.carouselArray.slice(0, 3).forEach((el, i) => {
                el.classList.add(`gallery-item-${i+1}`);
            });
        }

        setCurrentState(direction) {
            if(direction.classList == 'gallery-controls-prev') {
                this.carouselArray.unshift(this.carouselArray.pop()); 
            } else {
                this.carouselArray.push(this.carouselArray.shift());
            }
            this.updateGallery();
        }

        setControls() {
            this.carouselControls.forEach(control => {
                galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
            });
        }

        useControls() {
            const triggers = [...galleryControlsContainer.childNodes];
            triggers.forEach(control => {
                control.addEventListener('click', e => {
                    e.preventDefault();
                    this.setCurrentState(control);
                    control.disabled = true;
                    setTimeout(function() { control.disabled = false }, 400); 
                });
            });
        }
    }

    const mediaQuery = window.matchMedia('(min-width: 993px)');
    if (mediaQuery.matches) {
        const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

        exampleCarousel.setControls();
        exampleCarousel.useControls();

    }

    const anchors = document.querySelectorAll('.btn');

    for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const blockID = anchor.getAttribute('href').substr(1);
        
        document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
        });
    });
    }

});
        </script> 
    </body>
</html>
