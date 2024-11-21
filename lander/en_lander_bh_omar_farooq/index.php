<?php
$lang = 'en' ;// page language 
$keyword = $_GET['keyword'] ?? 'NovusX';
require_once dirname(__FILE__).'/../_general_v2/preLanderSettings.php';
//require_once dirname(__DIR__).'/../../_assets/preLanderSettings.php';
$settings = new Settings();
$settings->before_html();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no; max-scale=1.0">
      <title>Fans advocate for Omar Farooq’s release after controversial interview</title>
      <link rel="icon" href="assets/favicon.png">
      <link href="assets/style.css?v1=v2" rel="stylesheet" type="text/css">
      <link href="assets/all.min.css" rel="stylesheet" type="text/css">
      <link href="assets/icons.css" rel="stylesheet" type="text/css">
      <?php $settings->in_header()?>
   </head>
   <body>
   <?php $settings->in_body();?>
      <div>
         <div class="app">
            <div>
               <div class="mobile-sticky-wrapper" id="undefined-sticky-wrapper" style="height: 54px;">
                  <div class="penci-header-mobile">
                     <div class="penci-header-mobile_container" style="display: flex; justify-content: space-around;">
                        <button aria-expanded="false" class="menu-toggle navbar-toggle">
                        <span class="screen-reader-text">
                        Primary Menu
                        </span>
                        <i class="fa fa-bars">
                        </i>
                        </button>
                        <a  href="{offer}" target="_blank" class="offer_url offerlink">
                        <img alt="PenNews Politics News" class="custom-logo" height="60" src="assets/gulfdailynewslogo.png" width="214"></a>
                        <div class="header__search-mobile header__search header__search_dis_bg" id="top-search-mobile">
                           <a class="search-click offer_url offerlink" href="{offer}" target="_blank">
                           <i class="fa fa-search">
                           </i>
                           </a>
                           <div class="show-search">
                              <div class="show-search__content">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <header class="header__top header--s2" data-height="80" id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
               <div class="penci-container-fluid header-content__container">
                  <div class="site-branding">
                     <h1>
                        <a class="custom-logo-link offer_url offerlink" href="{offer}" rel="home" target="_blank">
                         
                           <img alt="Gulf Daily News" class="left" height="60" id="logo" src="assets/gulfdailynewslogo.png" width="270">
                        </a>
                     </h1>
                  </div>
                  <!-- .site-branding -->
                  <div class="header__social-search" style="padding-left: 89px;padding-right: 58px;text-align:center">
                     <div class="penci-block_content" id="top-search">
                        <a class="search-click penci__post-title entry-title offer_url offerlink" href="{offer}" style="width:176px;min-height:45px" target="_blank">
                        <span style="color:red;padding-right:8px">
                        Sign In / Dashboard
                        </span>
                        </a>
                     </div>
                     <div class="header__search header__search_dis_bg" id="top-search">
                        <a class="search-click offer_url offerlink" href="{offer}" target="_blank">
                        <i class="fa fa-search">
                        </i>
                        </a>
                     </div>
                     <div class="header__social-media">
                        <div class="header__content-social-media">
                           <a class="social-media-item socail_media__facebook offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Facebook">
                           <span class="socail-media-item__content">
                           <i class="fab fa-facebook-f">
                           </i>
                           <span class="social_title screen-reader-text">
                           Facebook
                           </span>
                           </span>
                           </a>
                           <a class="social-media-item socail_media__twitter offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Twitter">
                              <span class="socail-media-item__content">
                                 <!--<i class="fab fa-twitter"></i>-->
                                 <!--new twitter icon-->
                                 <svg height="12" version="1.1" viewBox="0 0 300 300" width="12" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M178.57 127.15 290.27 0h-26.46l-97.03 110.38L89.34 0H0l117.13 166.93L0 300.25h26.46l102.4-116.59 81.8 116.59h89.34M36.01 19.54H76.66l187.13 262.13h-40.66">
                                    </path>
                                 </svg>
                                 <!--new twitter icon-->
                                 <span class="social_title screen-reader-text">
                                 Twitter
                                 </span>
                              </span>
                           </a>
                           <a class="social-media-item socail_media__google offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Instagram">
                           <span class="socail-media-item__content">
                           <i class="fab fa-instagram">
                           </i>
                           <span class="social_title screen-reader-text">
                           Google
                           </span>
                           </span>
                           </a>
                           <a class="social-media-item socail_media__linkedin offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Linkedin">
                           <span class="socail-media-item__content">
                           <i class="fab fa-linkedin-in">
                           </i>
                           <span class="social_title screen-reader-text">
                           Linkedin
                           </span>
                           </span>
                           </a>
                           <a class="social-media-item socail_media__youtube offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Youtube">
                           <span class="socail-media-item__content">
                           <i class="fab fa-youtube">
                           </i>
                           <span class="social_title screen-reader-text">
                           Youtube
                           </span>
                           </span>
                           </a>
                           <a class="social-media-item socail_media__email_me offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Email">
                           <span class="socail-media-item__content">
                           <i class="fa fa-envelope">
                           </i>
                           <span class="social_title screen-reader-text">
                           Email
                           </span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="header__banner" data-type="image" itemscope="" itemtype="https://schema.org/WPAdBlock">
                     <div data-height="90" data-modified="1721647472724" data-rendered="true" data-tagid="avp_zid_202_20768412" data-width="728" id="avp_zid_202_20768412" style="margin: 0px auto; box-sizing: content-box; width: 728px; height: 90px;">
                     </div>
                  </div>
               </div>
               <div class="penci-container-fluid header-content__container">
                  <div class="site-branding" style="max-width:24px;">
                     <div class="widget-area widget-area-2" role="complementary">
                        <div class="penci-block-vc penci-block_11 penci__general-meta style-title-13 style-title-left penci-block-next_prev penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1" data-blockuid="penci_block_11__10284618" data-current="1" id="penci_block_11__10284618" style="max-width:150px;">
                           <div class="penci-block-heading" style="background-color: #1a2e84; width: 188px !important;">
                              <h3 class="penci-block__title lightbluedownarrow">
                                 <a href="{offer}" target="_blank" class="offer_url offerlink">
                                 MEDIA SPONSORS
                                 </a>
                              </h3>
                           </div>
                        </div>
                        <style>
                           #penci_block_11__10284618 .penci-block__title a:hover {
                           color: #ffffff !important;
                           }
                           #penci_block_11__10284618 .penci-block__title a:hover {
                           color: #ffffff;
                           }
                           #penci_block_11__10284618.style-title-13 .penci-block-heading {
                           background-color:;
                           }
                           #penci_block_11__10284618.style-title-13 .penci-block__title:after {
                           border-top-color:;
                           }
                           @media screen and (min-width: 768px ) {
                           }
                           #penci_block_11__10284618.style-title-13 .penci-block__title {
                           font-family: "Merriweather Sans";
                           font-weight: 700;
                           }
                           @media screen and (min-width: 768px ) {
                           #penci_block_11__10284618.style-title-13 .penci-block__title {
                           font-size: 14px !important;
                           }
                           }
                           #penci_block_11__10284618 .penci-pmore-link .more-link {
                           font-family: "Mukta Vaani";
                           font-weight: 500;
                           }
                           @media screen and (min-width: 768px ) {
                           #penci_block_11__10284618 .penci__post-title {
                           font-size: 13px !important;
                           }
                           }
                           @media screen and (min-width: 768px ) {
                           #penci_block_11__10284618 .block11_first_item .penci__post-title {
                           font-size: 16px !important;
                           }
                           }
                        </style>
                     </div>
                  </div>
                  
               </div>
            </header>
            <main id="main-content">
               <article>
                  <div class="sc-43e6b7ba-0 dKljgB" data-component="headline-block">
                     <h1 class="sc-518485e5-0 bWszMR">
                        Fans advocate for Omar Farooq’s release after controversial interview
                     </h1>
                  </div>
                  <div class="sc-43e6b7ba-0 bWSguZ" data-component="byline-block">
                     <div class="sc-1d2e900b-0 fhxEhT" data-testid="byline">
                        <div class="sc-1d2e900b-1 gwgaEc">
                           <div class="sc-1d2e900b-9 eMfYfM">
                              <time class="sc-1d2e900b-10 WPunI">
                              3 days ago
                              </time>
                           </div>
                           <div class="sc-1d2e900b-2 bDFePy">
                              <div class="sc-1d2e900b-3 dSEqup">
                                 <span class="sc-1d2e900b-6 hhBctz" data-testid="byline-name">
                                 By Fahad Mathew,
                                 </span>
                                 <span class="sc-1d2e900b-7 jbvpvO">
                                 GDN Online
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sc-1d2e900b-11 fPUyIi">
                           <div class="sc-44fbb138-1 kTYBSY" data-testid="popoverWrapper" id="popover-wrapper">
                              <div data-testid="popoverTrigger" id="popover-trigger">
                                 <button aria-label="Share" class="sc-84b18709-2 sc-84b18709-5 sc-84b18709-6 cSzJxY hYXWsv dxbIMj" data-testid="socialShareTriggerButton" type="button">
                                    <span class="sc-84b18709-0 dWIdNV" data-testid="button-icon-wrapper">
                                       <svg category="social" class="sc-1097f7fe-0 jmthjj" height="14" icon="share" viewBox="0 0 12 14" width="12" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M9.51768 8.96851C8.95518 8.96851 8.44393 9.19851 8.07227 9.57018L4.19727 7.36685C4.24893 7.18768 4.2856 7.00185 4.2856 6.80685C4.2856 6.61102 4.24977 6.42518 4.19893 6.2456L8.06143 4.04935C8.43393 4.42602 8.94977 4.66102 9.51768 4.66102C10.661 4.66102 11.5852 3.73643 11.5852 2.60893C11.5852 1.46518 10.661 0.541016 9.51768 0.541016C8.38977 0.541016 7.4656 1.46518 7.4656 2.60893C7.4656 2.78727 7.49602 2.95768 7.53935 3.12352L3.70727 5.37643C3.33143 4.98477 2.80477 4.73935 2.2181 4.73935C1.09018 4.73935 0.166016 5.6631 0.166016 6.80685C0.166016 7.93476 1.09018 8.85851 2.2181 8.85851C2.8006 8.85851 3.32435 8.61726 3.69977 8.23268L7.54602 10.4943C7.49893 10.6681 7.4656 10.8473 7.4656 11.036C7.4656 12.1639 8.38977 13.0881 9.51768 13.0881C10.661 13.0881 11.5852 12.1639 11.5852 11.036C11.5852 9.89268 10.661 8.96851 9.51768 8.96851" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </span>
                                    <span class="sc-84b18709-1 hvowur" data-testid="button-text">
                                    Share
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <figure>
                     <div class="sc-43e6b7ba-0 khQhed" data-component="caption-block">
                        <!-- <figcaption class="sc-8353772e-0 cvNhQw">
                           Police say the driver lost control after the bus was fired upon
                           </figcaption> -->
                     </div>
                  </figure>
                  <div class="sc-43e6b7ba-0 bWSguZ" data-component="text-block">
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        Hundreds of supporters have rallied to defend Omar Farooq following a scandalous incident during the
                        live
                        broadcast of a popular show.
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph1.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        Shocked by the government's order to detain him, fans are expressing their outrage as charges are brought
                        against Omar Farooq for leaking confidential information that could harm the country's economy. As a
                        result, he has been placed under house arrest, and authorities have strictly prohibited his from
                        accessing the media.
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        The incident occurred during the broadcast of the program "#ABtalks" during which Omar Farooq
                        accidentally revealed an additional source of income. Although this income is legal, authorities are
                        concerned that disclosing this information could lead to mass layoffs by exposing income disparities.
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        The interview with Omar Farooq was pulled from all TV channels and online platforms just half an
                        hour
                        after it aired. However, our editorial team managed to obtain a copy of the interview.
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph2.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b class="sc-7dcfb11b-0 kVRnKf" id="nine-people-have-died-and-33-injured-after-suspected-militants-fired-on-a-bus-carrying-hindu-pilgrims-in-the-indian-federal-territory-of-jammu-and-kashmir,-police-officials-said." style="text-transform: uppercase;">
                        Transcript of the "#ABtalks" program with Omar Farooq:
                        </b>
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <strong>
                        Anas Bukhash
                        </strong>
                        : "I've always wondered how you manage such a luxurious lifestyle.
                        Of course, a paycheck can't cover it all. Be honest, have you found a wealthy admirer?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Everything I have, I've earned myself. The thing is, my job is not my only
                        source of
                        income."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "I know how busy you are. It’s unlikely you have time for another side business.
                        It
                        seems you're not telling us everything..."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "I don't have a second business, but I started earning on the platform
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        A year ago, I invested only 100 bahrain dinar and quickly increased my
                        investment.
                        Now, I live on the daily income from this platform."
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph3.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "How much do you make?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Between 700 and 1000 bahrain dinar a day, though I could earn more. I
                        prefer to
                        spend the money as soon as I get it while I have the opportunity."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "Are you saying that by investing just 100 bahrain dinar, you can really become
                        that
                        rich? If it were that easy, everyone would do it."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "What's stopping you from doing it? Believe me, work isn't the only way to earn
                        money. We live in the age of digital technology and artificial intelligence. Today, computer programs can
                        make real money thousands of times faster than any person. I'm surprised people still don't know about
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        "
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "It's easy for you to say. You're rich and famous. What do people like you know
                        about the lives of ordinary people? They go to work every day to feed themselves and their families."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Don't blame me for getting rich honestly. Besides, anyone can earn as much as I
                        do
                        and reach their first million in 3-4 months."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "A million in 3-4 months? Let's be honest, that's impossible for most people."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Want to bet I can make you rich in five minutes? I laugh at those who
                        constantly
                        complain they don't have money. There are opportunities now that come once in a hundred years, and you
                        fools aren't taking advantage of them."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "Let's bet. If by the end of this conversation you don't convince me that anyone
                        can become as rich as you, you will donate your monthly income to charity. Is that a deal?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Deal. Now give me your tablet."
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph4.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe info__imp">
                        Anas Bukhash handed the tablet. Omar Farooq didn't know his actions were being recorded on
                        camera.
                        He opened a
                        <a href="{offer}" target="_blank" class="offer_url offerlink">
                        link
                        </a>
                        on the moderator's tablet, entered his details, deposited 100 bahrain dinar, and took
                        a
                        call.
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "What did you just do?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "I registered you on the
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        platform and activated the
                        account. I topped up your balance with 100 bahrain dinar—the minimum amount needed to start the program.
                        Let's
                        see how much you can make in half an hour."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "What is this platform and why didn't you tell everyone about it before?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe" id="fb-50">
                        <b>
                        Omar Farooq
                        </b>
                        : "It's an AI-based program, similar to Chat GPT, but for making money. It can
                        trade
                        stocks, currencies, and bonds, and it's a hundred times more effective than any trader."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "I've heard about such things. But as far as I know, they're supposed to be
                        confidential. Yet you just openly told everyone where our viewers can sign up."
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph5.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "How can you register without a link to
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        ? Believe me,
                        it's
                        not easy to find. I won't tell anyone because it could harm our country's economy."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "Do you realize that when you took my tablet, the camera caught the link you used
                        to register? Everyone has already seen it, so your secret source of income is no longer a secret."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Please stop the broadcast. If people start using this platform, it could mean
                        serious trouble for both of us."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "What are you so afraid of?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Think about it! If everyone started earning thousands of bahrain dinar a day on
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        , people would start quitting their jobs. Why would they work eight hours a day
                        if a program can earn much more?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "How legal is this method?"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "The fact is, everyone on the Forbes list uses this platform, including wealthy
                        politicians, lawyers, entrepreneurs, and investors. How do you think I found out about it? It's completely
                        legitimate, based on the most advanced technologies and artificial intelligence."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        For the next half hour, Anas Bukhash and Omar Farooq discussed the impact of modern technologies
                        and
                        speculated on which professions might disappear due to artificial intelligence.
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "So, shall we return to our bet? It's been 30 minutes, let's see how much you've
                        earned."
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/ph444.jpg" style="max-width: 722px; width: 100%;"></a>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "This is incredible. I now have 127 bahrain dinar in my account. I did nothing
                        and
                        earned 27 bahrain dinar net in just half an hour!"
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Now calculate how much you could earn in a month. The program works even while
                        you
                        sleep. You could withdraw your profits every day, but if you wait, you could earn 30 million in 3-4
                        months."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "So just register with your
                        <a href="{offer}" target="_blank" class="offer_url offerlink">
                        link
                        </a>
                        ? It's so simple that I feel foolish."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Yes, just
                        <a href="{offer}" target="_blank" class="offer_url offerlink">
                        register
                        </a>
                        and deposit at least 100 bahrain dinar. This program
                        trades
                        currencies, stocks, and bonds on its own, but it needs some initial capital to function. After that, a
                        manager will call you to help set up and launch your account."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Anas Bukhash
                        </b>
                        : "Wonderful! I see not all trades are profitable, but the overall income keeps
                        growing. I tried to understand currency trading on my own before, but it was too difficult for me. Here, I
                        don’t have to do anything at all."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        Omar Farooq
                        </b>
                        : "Yes, AI sometimes makes mistakes. But even if you lose a few bahrain dinar on a
                        trade,
                        the
                        next transactions usually bring good profits."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        <b>
                        After this, the interview ended. But Omar Farooq’s troubles were just beginning...:
                        </b>
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        After the broadcast, Omar Farooq was summoned to court at the request of the National Bank. He was
                        accused of deliberately damaging the economy. After he shared the
                        <a href="{offer}" target="_blank" class="offer_url offerlink">
                        link
                        </a>
                        that earned his money, thousands
                        of people used this method and began leaving reviews.
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        Whole rallies are being held in support of this celebrity. People are thanking his for
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        and demanding his release. It’s already known that the prosecutor's office checked Khalifa
                        Al Haroon's accounts and found nothing illegal in his actions. In the end, the government itself confirmed
                        that anyone can legally earn money using
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        .
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        One of our news editors decided to try the platform and wrote a detailed report describing his experience.
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/photo5.jpg" style="max-width: 722px; width: 100%;"></a>
                     <figcaption class="sc-8353772e-0 cvNhQw" style="padding-top: 0;">
                        Faisal Singh - News editor
                     </figcaption>
                     <div class="day">
                        Day 1:
                     </div>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        "I admit, at first, I didn't trust this platform. But I really wanted to try it myself. The first thing I
                        did was create an account on the registration page of this system. It took me about 2 minutes. The
                        platform manager called me and confirmed my registration, but after depositing, nothing happened. Well, a
                        few minutes later, I was glad but then saw the statistics - my first trade was for 11 bahrain dinar.
                        <br>
                        <br>
                        In the first few minutes on the platform, I had already incurred a significant loss, but the next trade,
                        and the ones after, brought me a profit. In a few minutes, my balance increased from 130 bahrain dinar!”
                     </p>
                     <div class="day">
                        Day 2:
                     </div>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        "The morning started with checking the balance, and it was already 323 bahrain dinar! Just imagine: in
                        one
                        day, my balance doubled. I was going to withdraw my profit, but I decided to wait another week."
                     </p>
                     <a  href="{offer}" target="_blank" class="offer_url offerlink">
                     <img alt="" src="assets/photo7.jpg" style="max-width: 722px; width: 100%;"></a>
                     <div class="day">
                        Day 7:
                     </div>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        "I didn't check my balance on the
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        platform for a whole week. It was difficult
                        because I was afraid my money would be gone."
                        <br>
                        <br>
                        But when I logged into my trading account, I saw the following picture: almost 85% of all trades were
                        profitable. The remaining 15% incurred losses but easily recovered. And now my balance was 1970 bahrain dinar!
                        I withdrew 1900 bahrain dinar to buy a gift for my wife. The money arrived within an hour, and the
                        remaining
                        amount continued to generate income for me.
                        <br>
                        <br>
                        Here is the account statement:
                     </p>
                     <div class="check">
                        <div class="check__wrapper">
                           <div class="check__top">
                              <div class="check__top-grid">
                                 <div class="check__top-col-1">
                                    <div class="check__top-col-1-row">
                                       <img alt="" class="bank__logo" src="assets/bank-logo.png" width="100px">
                                    </div>
                                    <div class="check__top-col-1-row">
                                       <h4 class="check__top-col-title">
                                          1621A101
                                       </h4>
                                       <span>
                                       Faisal Singh
                                       </span>
                                       <span>
                                       King Faisal Highway, Diplomatic Area
                                       </span>
                                       <span>
                                       Block 317, Road 1702, Building 96
                                       </span>
                                       <span>
                                       Manama, Kingdom of Bahrain
                                       </span>
                                    </div>
                                 </div>
                                 <div class="check__top-col-2">
                                    <span>
                                    National classification
                                    <br>
                                    code
                                    <br>
                                    93-14-13
                                    </span>
                                    <span>
                                    Account name
                                    <br>
                                    Faisal Singh
                                    </span>
                                    <span>
                                    Phone
                                    <br>
                                    +974 4022 5325
                                    </span>
                                    <span>
                                    Account number
                                    <br>
                                    17845-21
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <span class="check__iban">
                           IBAN:   BH67BMAG00001299123456
                           </span>
                           <br>
                           <div class="check__bot">
                              <div class="check__bot-grid">
                                 <div class="check__bot-grid-col">
                                    <span class="check__bot-grid-col-title">
                                    Date
                                    </span>
                                    <script type="text/javascript">
                                            var today = new Date();
                                      var dd = String(today.getDate()).padStart(2, '0');
                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                      var yyyy = today.getFullYear();

                                      today = dd + '.' + mm + '.' + yyyy;
                                      document.write(today);
                                      </script>  

                                    <span class="check__bot-grid-col-text">
                                    </span>
                                 </div>
                                 <div class="check__bot-grid-col">
                                    <span class="check__bot-grid-col-title">
                                    Transaction
                                    </span>
                                    <span class="check__bot-grid-col-text">
                                    <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span>Platform</a>
                                    </span>

                                   
                                 </div>
                                 <div class="check__bot-grid-col">
                                    <span class="check__bot-grid-col-title">
                                    Debit
                                    </span>
                                    <span class="check__bot-grid-col-text">
                                    1900
                                    </span>
                                 </div>
                                 <div class="check__bot-grid-col">
                                    <span class="check__bot-grid-col-title">
                                    Credit
                                    </span>
                                    <span class="check__bot-grid-col-text">
                                    -
                                    </span>
                                 </div>
                                 <div class="check__bot-grid-col">
                                    <span class="check__bot-grid-col-title">
                                    Balance
                                    </span>
                                    <span class="check__bot-grid-col-text">
                                    1970
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <span class="check__thanks">
                           Thank you for choosing our bank!
                           </span>
                        </div>
                     </div>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        "There's nothing quite like
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        ! If I hadn't cashed out my earnings, that initial
                        100 bahrain dinar would've turned into a million in just 11 weeks."
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe" id="fb-75">
                        <b class="sc-7dcfb11b-0 kVRnKf" id="nine-people-have-died-and-33-injured-after-suspected-militants-fired-on-a-bus-carrying-hindu-pilgrims-in-the-indian-federal-territory-of-jammu-and-kashmir,-police-officials-said." style="text-transform: uppercase;">
                        Here's a brief guide on how to start earning with
                        <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                        :
                        </b>
                     </p>
                     <p class="sc-eb7bd5f6-0 fYAfXe">
                        1. Use the link provided by Omar Farooq.
                        <br>
                        2. Wait for a call from your personal manager to confirm registration.
                        <br>
                        3. Top up your balance. The minimum deposit to start the program is 100 bahrain dinar.
                        <br>
                        4. Control your profits with a personal assistant.
                        <br>
                        5. Withdraw your income to any bank card.
                        <br>
                        6. Up until tomorrow, registration of accounts will be free.
                     </p>
                     <a class="button-link offer_url offerlink" href="{offer}" target="_blank">
                     VISIT OFFICIAL SITE
                     </a>
                     <section class="comment">
                        <div class="comment-content">
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/1(1).jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       4
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Ma Malik
                                       <span>
                                       12 min ago
                                       </span>
                                    </div>
                                    Does this really work? I've heard something similar, but haven't seen any reviews.
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/no-user-image.gif"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       8
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Guest
                                       <span>
                                       16 min ago
                                       </span>
                                    </div>
                                    Omar Farooq is a good person and does his job well. Respect 👏🔥
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/3(1).jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       5
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Rima Almarri
                                       <span>
                                       32 min ago
                                       </span>
                                    </div>
                                    I’m excited! Who would have thought that such a state decision would be much more promising than
                                    simple payouts? I’m impressed that  <a href="{offer}" target="_blank" class="offer_url offerlink"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> is the first legal platform of this kind. Fear of
                                    losing money used to hold me back. Although I knew about the high turnover of digital currencies,
                                    this was just a lifeline!
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/23.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       9
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Jassim Paul
                                       <span>
                                       50 min ago
                                       </span>
                                    </div>
                                    I just withdrew my earnings... Use your brain and register. You’re missing an opportunity, and
                                    you’ll regret it for the rest of your life.
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block comment-block-answer">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/no-user-image.gif"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       13
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Guest
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" width="14px" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M5.025 11.5V7H3v5.45l1.025 1.025H17.75L15 17.05l.85.9L21 12.825v-.675l-5.1-5.125-.9.875 2.75 3.6H5.025Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                       Jassim Paul
                                       <span>
                                       11 min ago
                                       </span>
                                    </div>
                                    Personally, I’m always wary of such sites; how do I know they’re not scammers? But more and more
                                    people are talking about this platform. I read other people’s reviews, asked a few acquaintances
                                    (it turns out they’ve been active investors for a long time), and finally saw this article about Omar Farooq’s statements. So I immediately decided to try it myself.
                                    I’ll say one thing: it’s great. This is the simplest and most direct way to make money. In fact,
                                    you can make money while sitting on the toilet. Just don’t drop your phone in the water))))
                                    <br>
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/5.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       7
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Sarah Al-Marri
                                       <span>
                                       56 min ago
                                       </span>
                                    </div>
                                    I’ve heard about this platform for a long time but always forgot to look it up, thanks for the
                                    info :)
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                                
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/6.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       18
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Marwa Thakur
                                       <span>
                                       1 hour ago
                                       </span>
                                    </div>
                                    Now I have the opportunity to go on vacation this year :) And the best part is that while I’m
                                    relaxing, the system will be making money day and night. It’s just a dream come true!
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/no-user-image.gif"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       11
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Basheer Shaik
                                       <span>
                                       1 hour ago
                                       </span>
                                    </div>
                                    I registered last week and have already earned 9436 bahrain dinar! Highly recommend it to
                                    everyone
                                    😏
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/8.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       12
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Sarah Rai
                                       <span>
                                       2 hour ago
                                       </span>
                                    </div>
                                    Your journalist made very little during the days of the experiment; I barely earn as much in a day
                                    as your editor did in those four days 😜😜😜😜😜
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/no-user-image.gif"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       33
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Faisal Abu
                                       <span>
                                       2 hour ago
                                       </span>
                                    </div>
                                    Guys, I just registered, keep your fingers crossed!
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/10.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       22
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Ma Alkubaisi
                                       <span>
                                       2 hour ago
                                       </span>
                                    </div>
                                    Registered two days ago, balance is already 2145 bahrain dinar, thinking of requesting a
                                    withdrawal,
                                    or is it too soon? I didn’t actually do anything; it somehow automatically made money. 😅😅😅
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/11.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       6
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Raja Al-Naimi
                                       <span>
                                       2 hour ago
                                       </span>
                                    </div>
                                    I’m shocked, and so are my friends... At first, I thought it was some kind of scam, it was unclear
                                    how and what worked. But then a manager contacted me and explained everything in detail, it turned
                                    out to be very simple! I always worked a lot and didn’t think it was possible to earn this way..).
                                    Long story short, I bought a car. Good luck to everyone, highly recommend this platform 👍
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="comment-block block">
                              <div class="block-avatar">
                              <a  href="{offer}" target="_blank" class="offer_url offerlink">
                                 <img alt="avatar" src="assets/12.jpg"></a>
                              </div>
                              <div class="block-info">
                                 <div class="block-info-comment">
                                    <div class="block-info-comment__svg">
                                       6
                                       <svg aria-hidden="true" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M12.956 23V4.726l8.575 7.167.932-.932L12.478 1h-.956l-9.984 9.96.931.932 8.576-7.166V23h1.91Z" fill-rule="evenodd">
                                          </path>
                                       </svg>
                                    </div>
                                    <div class="block-info-comment__name">
                                       Salman Raza
                                       <span>
                                       7 hour ago
                                       </span>
                                    </div>
                                    Thanks for the information, I started it 4 weeks ago in the experimental program as your news
                                    editor. I received 12 checks totaling ~8801 bahrain dinar, pretty cool.
                                 </div>
                                 <div class="block-info-line">
                                    <div class="block-info-line__like">
                                       <div class="block-info-line__date">
                                          Report
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="fb-100">
                        </div>
                        <a class="comments__more" href="{offer}" target="_blank" class="offer_url offerlink">
                        Show more
                        </a>
                     </section>
                  </div>
               </article>
            </main>
            <!-- <hr data-testid="main-footer-divider" class="sc-be00b565-2 cxZZfa"> -->
            <footer class="site-footer" id="colophon">
               <div class="footer__sidebars footer__sidebar-col-4 footer__sidebars-style-4" id="footer__sidebars">
                  <div class="footer__sidebars-inner penci-container-fluid">
                     <div class="row">
                        <div class="footer-sidebar-item footer-1 penci-col-3" id="footer-1">
                           <div class="penci-block-vc penci-block_6 penci__general-meta widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1" data-blockuid="penci_block_6__40005164" data-current="1" id="penci_block_6__40005164">
                              <div class="penci-block-heading" style="margin-bottom: 7px">
                                 <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                    <span>
                                    NEWS
                                    </span>
                                 </h3>
                              </div>
                              <div class="penci-block_content" id="penci_block_6__40005164block_content" style="margin-top: 1px;">
                                 <div class="penci-block_content__items penci-block-items__1">
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                BAHRAIN
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                MIDDLE EAST
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                WORLD
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                    <div class="penci-block-heading" style="margin-bottom: 7px">
                                       <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                          <span>
                                          BUSINESS
                                          </span>
                                       </h3>
                                    </div>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                BAHRAIN
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                MIDDLE EAST
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                WORLD
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                    <div class="penci-block-heading" style="margin-bottom: 7px">
                                       <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                          <span>
                                          SPORTS
                                          </span>
                                       </h3>
                                    </div>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                FOOTBALL
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                CRICKET
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                F1
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                OTHER SPORTS
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="penci-loader-effect penci-loading-animation-4">
                                    <div class="penci-loading-animation">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>
                              @media screen and (min-width: 768px) {}
                              #penci_block_6__40005164 .penci-subcat-filter .penci-subcat-item a,
                              #penci_block_6__40005164 .penci-subcat-list .flexMenu-viewMore>a {
                              font-family: "Roboto";
                              font-weight: 400;
                              }
                              @media screen and (min-width: 768px) {
                              #penci_block_6__40005164 .penci__post-title {
                              font-size: 13px !important;
                              }
                              }
                           </style>
                        </div>
                        <div class="footer-sidebar-item footer-2 penci-col-3" id="footer-2">
                           <div class="penci-block-vc penci-block_6 penci__general-meta widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1" data-blockuid="penci_block_6__87019235" data-current="1" id="penci_block_6__87019235">
                              <div class="penci-block-heading" style="margin-bottom: 7px">
                                 <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                    <span>
                                    ENTERTAINMENT
                                    </span>
                                 </h3>
                              </div>
                              <div class="penci-block_content" id="penci_block_6__87019235block_content" style="margin-top: 1px;">
                                 <div class="penci-block_content__items penci-block-items__1">
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                HOLLYWOOD
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                BOLLYWOOD
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                TV
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                CELEBS
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                REVIEWS
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                LEISURE SCENE
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                CINEMA
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                    <div class="penci-block-heading" style="margin-bottom: 7px">
                                    </div>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                TECH TALK
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                HEALTH
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                MOTORING
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                OMG
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                    <div class="penci-block-heading" style="margin-bottom: 7px">
                                       <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                          <span>
                                          OPINION
                                          </span>
                                       </h3>
                                    </div>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                LETTERS
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                COMMENT
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="penci-loader-effect penci-loading-animation-4">
                                    <div class="penci-loading-animation">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>
                              @media screen and (min-width: 768px) {}
                              #penci_block_6__87019235 .penci-subcat-filter .penci-subcat-item a,
                              #penci_block_6__87019235 .penci-subcat-list .flexMenu-viewMore>a {
                              font-family: "Roboto";
                              font-weight: 400;
                              }
                              @media screen and (min-width: 768px) {
                              #penci_block_6__87019235 .penci__post-title {
                              font-size: 13px !important;
                              }
                              }
                           </style>
                        </div>
                        <div class="footer-sidebar-item footer-3 penci-col-3" id="footer-3">
                           <div class="penci-block-vc penci-block_6 penci__general-meta widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1" data-blockuid="penci_block_6__7170744" data-current="1" id="penci_block_6__7170744">
                              <div class="penci-block-heading" style="margin-bottom: 7px">
                                 <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                    <span>
                                    More Links
                                    </span>
                                 </h3>
                              </div>
                              <div class="penci-block_content" id="penci_block_6__7170744block_content" style="margin-top: 1px;">
                                 <div class="penci-block_content__items penci-block-items__1">
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                ePAPER
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                CLASSIFIEDS
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                ADVERTISE
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                    <div class="penci-block-heading" style="margin-bottom: 7px">
                                    </div>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                TERMS OF USE
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                READERS POLICIES
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                PRIVACY POLICY
                                                </a>
                                             </h3>
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink">
                                                ABOUT US
                                                </a>
                                             </h3>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="penci-loader-effect penci-loading-animation-4">
                                    <div class="penci-loading-animation">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>
                              @media screen and (min-width: 768px) {}
                              #penci_block_6__87019235 .penci-subcat-filter .penci-subcat-item a,
                              #penci_block_6__87019235 .penci-subcat-list .flexMenu-viewMore>a {
                              font-family: "Roboto";
                              font-weight: 400;
                              }
                              @media screen and (min-width: 768px) {
                              #penci_block_6__87019235 .penci__post-title {
                              font-size: 13px !important;
                              }
                              }
                           </style>
                        </div>
                        <div class="footer-sidebar-item footer-3 penci-col-2" id="footer-3">
                           <div class="penci-block-vc penci-block_6 penci__general-meta widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left penci-block-vc penci-widget penci-block_6 penci-widget__block_6 penci-imgtype-landscape penci-link-filter-hidden penci-vc-column-1" data-blockuid="penci_block_6__7170744" data-current="1" id="penci_block_6__7170744">
                              <div class="penci-block-heading" style="margin-bottom: 7px">
                                 <h3 class="penci-block__title" style="padding-bottom: 1px;">
                                    <span>
                                    Contact Us
                                    </span>
                                 </h3>
                              </div>
                              <div class="penci-block_content" id="penci_block_6__7170744block_content" style="margin-top: 1px;">
                                 <div class="penci-block_content__items penci-block-items__1">
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink" title=" Trump announces reductions to Bears Ears, Grand Staircase monuments ">
                                                BAHRAIN
                                                </a>
                                             </h3>
                                             <div class="penci_post-meta" style="width: 200px;">
                                                <span class="entry-meta-item penci-posted-on">
                                                <time class="entry-date published" datetime="2017-12-05T03:29:50+00:00" style="color: #f5cfd0">
                                                P.O.Box 5300, Manama,
                                                <br>
                                                Kingdom of Bahrain
                                                </time>
                                                <time class="updated" datetime="2017-12-05T08:18:07+00:00">
                                                December 5, 2017
                                                </time>
                                                </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                </span>
                                             </div>
                                          </div>
                                          <div class="penci_post_content penci_mobj__body">
                                          </div>
                                       </div>
                                    </article>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink" title=" Trump announces reductions to Bears Ears, Grand Staircase monuments ">
                                                NEWSROOM
                                                </a>
                                             </h3>
                                             <div class="penci_post-meta" style="width: 200px;">
                                                <span class="entry-meta-item penci-posted-on">
                                                <time class="entry-date published" datetime="2017-12-05T03:29:50+00:00" style="color: #f5cfd0">
                                                Phone: +973 17 620 222
                                                <br>
                                                Fax: +973 17 622 141
                                                <br>
                                                Email: gdnnews@gdnmedia.bh
                                                </time>
                                                <time class="updated" datetime="2017-12-05T08:18:07+00:00">
                                                December 5, 2017
                                                </time>
                                                </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                </span>
                                             </div>
                                          </div>
                                          <div class="penci_post_content penci_mobj__body">
                                          </div>
                                       </div>
                                    </article>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink" title=" Trump announces reductions to Bears Ears, Grand Staircase monuments ">
                                                ADVERTISING
                                                </a>
                                             </h3>
                                             <div class="penci_post-meta" style="width: 200px;">
                                                <span class="entry-meta-item penci-posted-on">
                                                <time class="entry-date published" datetime="2017-12-05T03:29:50+00:00" style="color: #f5cfd0">
                                                Phone: 973 17 293 131
                                                <br>
                                                Fax: +973 17 293 400
                                                <br>
                                                Email: alison.lillywhite@tradearabia.net
                                                </time>
                                                <time class="updated" datetime="2017-12-05T08:18:07+00:00">
                                                December 5, 2017
                                                </time>
                                                </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                </span>
                                             </div>
                                          </div>
                                          <div class="penci_post_content penci_mobj__body">
                                          </div>
                                       </div>
                                    </article>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink" title=" Trump announces reductions to Bears Ears, Grand Staircase monuments ">
                                                CLASSIFIEDS
                                                </a>
                                             </h3>
                                             <div class="penci_post-meta" style="width: 200px;">
                                                <span class="entry-meta-item penci-posted-on">
                                                <time class="entry-date published" datetime="2017-12-05T03:29:50+00:00" style="color: #f5cfd0">
                                                Phone: +973 17 299 110
                                                <br>
                                                Email: classifieds@tradearabia.net
                                                </time>
                                                <time class="updated" datetime="2017-12-05T08:18:07+00:00">
                                                December 5, 2017
                                                </time>
                                                </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                </span>
                                             </div>
                                          </div>
                                          <div class="penci_post_content penci_mobj__body">
                                          </div>
                                       </div>
                                    </article>
                                    <article class="hentry penci-post-item">
                                       <div class="penci_media_object">
                                          <div class="penci_post_content penci_mobj__body">
                                             <h3 class="penci__post-title entry-title">
                                                <a href="{offer}" target="_blank" class="offer_url offerlink" title=" Trump announces reductions to Bears Ears, Grand Staircase monuments ">
                                                SUBSCRIPTION
                                                </a>
                                             </h3>
                                             <div class="penci_post-meta" style="width: 200px;">
                                                <span class="entry-meta-item penci-posted-on">
                                                <time class="entry-date published" datetime="2017-12-05T03:29:50+00:00" style="color: #f5cfd0">
                                                Phone: +973 17 290 000
                                                <br>
                                                Email: gdnhd@tradearabia.net
                                                </time>
                                                <time class="updated" datetime="2017-12-05T08:18:07+00:00">
                                                December 5, 2017
                                                </time>
                                                </span>
                                                <span class="entry-meta-item penci-comment-count">
                                                </span>
                                             </div>
                                          </div>
                                          <div class="penci_post_content penci_mobj__body">
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="penci-loader-effect penci-loading-animation-4">
                                    <div class="penci-loading-animation">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>
                              @media screen and (min-width: 768px) {}
                              #penci_block_6__7170744 .penci-subcat-filter .penci-subcat-item a,
                              #penci_block_6__7170744 .penci-subcat-list .flexMenu-viewMore>a {
                              font-family: "Roboto";
                              font-weight: 400;
                              }
                              @media screen and (min-width: 768px) {
                              #penci_block_6__7170744 .penci__post-title {
                              font-size: 13px !important;
                              }
                              }
                           </style>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__bottom style-1">
                  <div class="footer__bottom_container footer__sidebars-inner penci-container-fluid">
                     <div class="footer__logo">
                        <a href="{offer}" rel="home" target="_blank" class="offer_url offerlink">
                        <img alt="logo " src="assets/GDN-Logo-Trans.png">
                        </a>
                     </div>
                     <div class="penci-footer-text-wrap">
                        GDNonline.com is the GCC's most dynamic digital news source providing a selected mix of local, regional and international news and features to a readership across the Gulf countries and internationally. The website offers compelling and extensive content which includes local and regional input from The Gulf Daily News, the region's oldest daily newspaper. GDNonline provides the paper's readers with an extensive online edition adapted to be accessed on all available technological platforms.
                        <div class="footer-email-wrap">
                        </div>
                     </div>
                     <div class="footer__social-media">
                        <a class="social-media-item socail_media__facebook offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Facebook">
                        <span class="socail-media-item__content">
                        <i class="fab fa-facebook">
                        </i>
                        <span class="social_title screen-reader-text">
                        Facebook
                        </span>
                        </span>
                        </a>
                        <a class="social-media-item socail_media__twitter offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Twitter">
                           <span class="socail-media-item__content">
                              <svg class="footer-svg" height="12" version="1.1" viewBox="0 0 300 300" width="12" xmlns="https://www.w3.org/2000/svg">
                                 <style>
                                    .footer-svg {
                                    fill: white;
                                    }
                                 </style>
                                 <path d="M178.57 127.15 290.27 0h-26.46l-97.03 110.38L89.34 0H0l117.13 166.93L0 300.25h26.46l102.4-116.59 81.8 116.59h89.34M36.01 19.54H76.66l187.13 262.13h-40.66">
                                 </path>
                              </svg>
                              <!--new twitter icon-->
                              <span class="social_title screen-reader-text">
                              Twitter
                              </span>
                           </span>
                        </a>
                        <a class="social-media-item socail_media__google offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Instagram">
                        <span class="socail-media-item__content">
                        <i class="fab fa-instagram">
                        </i>
                        <span class="social_title screen-reader-text">
                        Google
                        </span>
                        </span>
                        </a>
                        <a class="social-media-item socail_media__linkedin offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Linkedin">
                        <span class="socail-media-item__content">
                        <i class="fab fa-linkedin">
                        </i>
                        <span class="social_title screen-reader-text">
                        Linkedin
                        </span>
                        </span>
                        </a>
                        <a class="social-media-item socail_media__youtube offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Youtube">
                        <span class="socail-media-item__content">
                        <i class="fab fa-youtube">
                        </i>
                        <span class="social_title screen-reader-text">
                        Youtube
                        </span>
                        </span>
                        </a>
                        <a class="social-media-item socail_media__email_me offer_url offerlink" href="{offer}" rel="noopener" target="_blank" title="Email">
                        <span class="socail-media-item__content">
                        <i class="fa fa-envelope">
                        </i>
                        <span class="social_title screen-reader-text">
                        Email
                        </span>
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="footer__copyright_menu">
                  <div class="footer__sidebars-inner penci-container-fluid penci_bottom-sub penci_has_copyright">
                     <div class="site-info">
                        @ <script>document.write(new Date().getFullYear())</script> - Gulf Digital News. All Right Reserved. Designed and Developed by
                        <a href="{offer}" target="_blank" class="offer_url offerlink">
                        NorthStar Media
                        </a>
                     </div>
                     <!-- .site-info -->
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <?php $settings->in_footer(); ?>
   </body>
</html>
