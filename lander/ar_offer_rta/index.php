<?php
/* version 4 */

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$referer = '';
if (isset($_SERVER['HTTP_REFERER'])){
    $referer_array = explode( '?',$_SERVER['HTTP_REFERER']);
    $referer = $referer_array[0] ?? '';
}



$p_keyword = "RTA-Dubai-Stock"; // CHANGE THIS
$p_lang    = "ar"; // CHANGE THIS
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "AE"; // CHANGE THIS

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
//$params .= "&subid={subid}"  ;
$params.='&bg_color=b41212'; // if you need to change the button background color
//$params .= "&pre_lander=" . $referer;
$params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl" data-locale="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title><?=$p_keyword?></title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/GraceNew_1693473866.png">

        <link href="ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">

        <link rel="stylesheet" href="assets/calc.css">
        <link rel="stylesheet" href="assets/thanks.css">
        <link rel="stylesheet" href="assets/slider.css">
        <link rel="stylesheet" href="assets/form.css">
        <link rel="stylesheet" href="assets/style.css">

        <?=$settings->in_header() ?>

        <style>
            .jmngNp{
                background: url("./assets/top-bg-desk-v2.webp");
            }
        </style>
    </head>
    <body>
    <?=$settings->in_body() ?>
        <div id="root">
          <div id="overlay"></div>
          <div class="react_tra_2813__Wrapper-sc-qc2hdx-0 jmngNp">
            <div style="display:contents">
              <section class="TopV3__Wrapper-sc-zht8q1-0 ejHuXj">
                <div class="Container-sc-a4fxlm-0 TopV3__TopContainer-sc-zht8q1-1 iaZBIw dhpfyw">
                <div class="TopV3__Content-sc-zht8q1-2 cWRocD">
                  <div class="TopV3__Title-sc-zht8q1-3 dOTfOb">
                                    <div data-editable="true" data-name="top__title">
                                        <p>سجل الان في الاكتتاب العام لطرق دبي واحصل على دخل شهري كبير</p>
                                      </div>
                                </div>
                                <div class="TopV3__Logo-sc-zht8q1-4 jOBcoi">
                                    <div data-editable="true" data-name="top__logo"><img src="assets/logo.svg" alt="logo.svg" loading="lazy"></div>
                                </div>
                                <div class="TopV3__Title-sc-zht8q1-3 TopV3__Text-sc-zht8q1-5 dOTfOb dMZMME">
                                    <div data-editable="true" data-name="top__text">
                                      <p>فرصة فريدة من نوعها<br class="no-tablet">
                                            لجميع الإماراتيين</p>
                                    </div>
                                </div>
                              </div>
                            </div>
                    </section>
                </div>
                <div  >
                    <section class="RangeSlider__Wrapper-sc-146lxjr-0 iaZBIw fnKNP">
                      <section class="r-slider">
                        <div class="r-slider__container container">
                           <div class="r-slider__body">
                              <h2 class="r-slider__title" data-editable="" data-name="r-slider__title">
                                 <p>كم يمكن أن تكسب؟</p>
                                </h2>
                                <div class="range range__label">
                                  <div class="range__inner">
                                    <div class="range__item">
                                       <span class="range__item-text range-text1"> </span>
                                       <p class="range__item-number range-initial-value">250$</p>
                                    </div>
                                    <div class="range__item">
                                       <span class="range__item-text range-text2"> </span>
                                       <p class="range__item-number range-potential-profit"></p>
                                    </div>
                                 </div>
                                 <div class="range-slider">
                                    <div class="range-slider-wrapper">
                                       <div id="counter-slider" class="no-ui-slider">
                                          <div class="slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                          </div>
                                          <ul class="slider-labels"></ul>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                           </div>
                        </div>
                     </section>
                    </section>
                </div>
              </div>
              <div style="display:contents">
                <div class="form">        
                    <div class="header">
                      <h1>انضم إلينا اليومَ</h1>
                    </div>
                    <iframe src="./form_only<?=$params?>" width="100%" height="400px" frameborder="0"></iframe>

                    <div class="credits">
                      <img src="assets/credits.png" alt="">
                    </div>
              </div>
            </div>
            <div id="container-thanks" class="container-thanks">
              <div id="thank-you-icon" class="thank-you-icon">✓</div>
              <h1>¡شكرا!</h1>
              <p>سوف نتصل بك قريبا</p>

          </div>
            
        </div>

        <script type="text/javascript" src="./js/jquery-3.7.1.min.js"></script>

        <link rel="stylesheet" type="text/css" href="ajax/libs/noUiSlider/14.6.3/nouislider.css">
        <script type="text/javascript" src="ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
        <script src="assets/calculator.js"></script>
    <?=$settings->in_footer() ?>
    </body>
</html>