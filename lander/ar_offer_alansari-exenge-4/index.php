<?php

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$offer_url = 'OFFER_URL_FOR_SALES_TEAM'; // Replace with your offer URL https://web.littlemix.cloud/offers/__PATH_TO_OFFER__
$p_keyword = "alansari-exenge"; // Replace with your offer name
$p_lang    = "ar"; // Replace with the language of your offer
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "AR"; // Replace with the default country of your offer

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
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Aln – Click For Saudia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <link rel="stylesheet" id="hello-elementor-css" href="css/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-6820-css" href="css/post-6820.css" type="text/css" media="all">
    <?php $settings->in_header();?>
</head>

<body class="rtl page-template page-template-elementor_canvas page page-id-6820 essence-aln elementor-default elementor-template-canvas elementor-kit-6 elementor-page elementor-page-6820">
<?php $settings->in_body();?>

<div data-elementor-type="wp-page" data-elementor-id="6820" class="elementor elementor-6820">
    <div class="elementor-element elementor-element-861464b e-con-full e-flex e-con" data-id="861464b"
         data-element_type="container" data-settings="{" content_width
    ":"full","background_background":"classic"}"="">
    <div class="elementor-element elementor-element-7330597 e-con-full e-flex e-con" data-id="7330597"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-0698861 elementor-widget elementor-widget-image" data-id="0698861"
         data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <style>/*! elementor - v3.13.2 - 11-05-2023 */
                .elementor-widget-image {
                    text-align: center
                }

                .elementor-widget-image a {
                    display: inline-block
                }

                .elementor-widget-image a img[src$=".svg"] {
                    width: 48px
                }

                .elementor-widget-image img {
                    vertical-align: middle;
                    display: inline-block
                }</style>
            <img decoding="async" loading="lazy" width="193" height="44" src="images/top_logo.svg"
                 class="attachment-large size-large wp-image-6826" alt=""></div>
    </div>
    <div class="elementor-element elementor-element-2cd4237 e-con-full e-flex e-con" data-id="2cd4237"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-9751493 e-con-full e-flex e-con" data-id="9751493"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-cae8425 elementor-widget__width-inherit elementor-widget elementor-widget-heading"
         data-id="cae8425" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <style>/*! elementor - v3.13.2 - 11-05-2023 */
                .elementor-heading-title {
                    padding: 0;
                    margin: 0;
                    line-height: 1
                }

                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                    color: inherit;
                    font-size: inherit;
                    line-height: inherit
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                    font-size: 15px
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                    font-size: 19px
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                    font-size: 29px
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                    font-size: 39px
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                    font-size: 59px
                }</style>
            <h2 class="elementor-heading-title elementor-size-default">استثمر في الأنصاري للصرافة: <span>بوابة للتميز المالي</span>
            </h2></div>
    </div>
    <div class="elementor-element elementor-element-57ed93d elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor"
         data-id="57ed93d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <style>/*! elementor - v3.13.2 - 11-05-2023 */
                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                    background-color: #69727d;
                    color: #fff
                }

                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                    color: #69727d;
                    border: 3px solid;
                    background-color: transparent
                }

                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                    margin-top: 8px
                }

                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                    width: 1em;
                    height: 1em
                }

                .elementor-widget-text-editor .elementor-drop-cap {
                    float: left;
                    text-align: center;
                    line-height: 1;
                    font-size: 50px
                }

                .elementor-widget-text-editor .elementor-drop-cap-letter {
                    display: inline-block
                }</style>
            <p>فرصة الاستثمار في أسهم الأنصاري تفتح الأبواب أمام ثروة من الفوائد.</p></div>
    </div>
</div>
<div class="elementor-element elementor-element-27d71ce e-con-boxed e-flex e-con" data-id="27d71ce"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-a466c41 elementor-widget elementor-widget-image" data-id="a466c41"
         data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <img decoding="async" loading="lazy" width="800" height="642" src="images/aln-hero-img.webp"
                 class="attachment-large size-large wp-image-6827" alt=""></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-be68cf6 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con"
     data-id="be68cf6" data-element_type="container" data-settings="{" content_width
":"full","position":"absolute"}"="">
<div class="elementor-element elementor-element-58337c8 e-con-full e-flex e-con" data-id="58337c8"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-50ac163 e-con-boxed e-flex e-con" data-id="50ac163"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-ff9df1a elementor-widget elementor-widget-heading" data-id="ff9df1a"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">+250</h2></div>
    </div>
    <div class="elementor-element elementor-element-8c39a5a elementor-widget elementor-widget-heading" data-id="8c39a5a"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">فرعا في جميع أنحاء دولة الإمارات العربية
                المتحدة</p></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-724d858 e-con-boxed e-flex e-con" data-id="724d858"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-f7c8c23 elementor-widget elementor-widget-heading" data-id="f7c8c23"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">+3M</h2></div>
    </div>
    <div class="elementor-element elementor-element-64109bc elementor-widget elementor-widget-heading" data-id="64109bc"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default"> فريد<br>عملاء </p></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-19c68e4 e-con-boxed e-flex e-con" data-id="19c68e4"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-773ce7d elementor-widget elementor-widget-heading" data-id="773ce7d"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">+500K</h2></div>
    </div>
    <div class="elementor-element elementor-element-64a3621 elementor-widget elementor-widget-heading" data-id="64a3621"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default"> الآلاف من البنوك والوكلاء في جميع أنحاء
                العالم </p></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-f8eb8b0 e-con-boxed e-flex e-con" data-id="f8eb8b0"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-3fc527e elementor-widget elementor-widget-heading" data-id="3fc527e"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">+50</h2></div>
    </div>
    <div class="elementor-element elementor-element-0b06919 elementor-widget elementor-widget-heading" data-id="0b06919"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default"> سنة من<br> الثقة</p></div>
    </div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-e2e7630 e-con-full elementor-hidden-desktop mobile-form e-flex e-con"
     data-id="e2e7630" data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-a493745 e-con-boxed e-flex e-con" data-id="a493745"
     data-element_type="container" id="form" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-66ff364 elementor-widget elementor-widget-heading" data-id="66ff364"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">للمزيد من التفاصيل</h2></div>
    </div>
    <div class="elementor-element elementor-element-3bc93bf elementor-widget-tablet__width-initial elementor-widget elementor-widget-arabInvestorsFormMiniWithLabel"
         data-id="3bc93bf" data-element_type="widget" data-widget_type="arabInvestorsFormMiniWithLabel.default">
        <div class="elementor-widget-container">
            <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;"></iframe>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-ceff6f0 elementor-hidden-desktop e-con-boxed e-flex e-con"
     data-id="ceff6f0" data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-bf260ce e-con-full e-flex e-con" data-id="bf260ce"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-f8725e6 e-con-full e-flex e-con" data-id="f8725e6"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-98bea3b elementor-widget elementor-widget-heading" data-id="98bea3b"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">+250</h2></div>
    </div>
    <div class="elementor-element elementor-element-e3120b0 elementor-widget elementor-widget-heading" data-id="e3120b0"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">فرعا في جميع أنحاء دولة الإمارات العربية
                المتحدة</p></div>
    </div>
</div>
<div class="elementor-element elementor-element-a10615b e-con-full e-flex e-con" data-id="a10615b"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-fe2a5f7 elementor-widget elementor-widget-heading" data-id="fe2a5f7"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">+3M</h2></div>
</div>
<div class="elementor-element elementor-element-8d6357a elementor-widget elementor-widget-heading" data-id="8d6357a"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default"> فريد<br>عملاء </p></div>
</div>
</div>
<div class="elementor-element elementor-element-d4a8df4 e-con-full e-flex e-con" data-id="d4a8df4"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-ae206de elementor-widget elementor-widget-heading" data-id="ae206de"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">+500K</h2></div>
</div>
<div class="elementor-element elementor-element-58a7d64 elementor-widget elementor-widget-heading" data-id="58a7d64"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default"> الآلاف من البنوك والوكلاء في جميع أنحاء العالم </p>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-0a0c95f e-con-full e-flex e-con" data-id="0a0c95f"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-71a58e4 elementor-widget elementor-widget-heading" data-id="71a58e4"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">+50</h2></div>
</div>
<div class="elementor-element elementor-element-8f8dfbe elementor-widget elementor-widget-heading" data-id="8f8dfbe"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default"> سنة من<br> الثقة</p></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-762f7ae e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con"
     data-id="762f7ae" data-element_type="container" id="Form" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-2b26aba e-con-boxed e-flex e-con" data-id="2b26aba"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-b4b2612 elementor-widget elementor-widget-heading" data-id="b4b2612"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">للمزيد من التفاصيل</h2></div>
    </div>
    <div class="elementor-element elementor-element-204bb78 elementor-widget elementor-widget-arabInvestorsFormMiniWithLabel"
         data-id="204bb78" data-element_type="widget" id="form"
         data-widget_type="arabInvestorsFormMiniWithLabel.default">
        <div class="elementor-widget-container">
            <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;"></iframe>
        </div>
    </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-d189841 e-con-full e-flex e-con" data-id="d189841"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-5aac273 e-con-boxed e-flex e-con" data-id="5aac273"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-f104166 e-con-full e-flex e-con" data-id="f104166"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-625e97c elementor-widget elementor-widget-image" data-id="625e97c"
         data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <img decoding="async" loading="lazy" width="800" height="689" src="images/rec_img.webp"
                 class="attachment-large size-large wp-image-7101" alt=""></div>
    </div>
</div>
<div class="elementor-element elementor-element-0e2daf3 e-con-boxed e-flex e-con" data-id="0e2daf3"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-2ce1387 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
         data-id="2ce1387" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">فرصة استثمارية غنية بالموثوقية والاستقرار.</h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-6095fc3 elementor-widget elementor-widget-heading" data-id="6095fc3"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">اغتنم الفرصة وابدأ بالمضي قدمًا في عالم
                الاقتصاد.</p></div>
    </div>
    <div class="elementor-element elementor-element-f9ebef4 e-con-boxed e-flex e-con" data-id="f9ebef4"
         data-element_type="container" data-settings="{" content_width
    ":"boxed"}"="">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-f7b7f23 e-con-boxed e-flex e-con" data-id="f7b7f23"
             data-element_type="container" data-settings="{" content_width
        ":"boxed"}"="">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-a58164f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                 data-id="a58164f" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                            <span class="elementor-icon-list-text">مجتمع من العملاء الراضين الذين يستمتعون بالتزام الأنصاري بالتميز</span>
                        </li>
                        <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                            <span class="elementor-icon-list-text">أن نكون جزءًا من إرث من القدرة المالية وريادة السوق والالتزام الثابت برضا العملاء.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-16260bd e-con-boxed e-flex e-con" data-id="16260bd"
         data-element_type="container" data-settings="{" content_width
    ":"boxed"}"="">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-fc4b47c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
             data-id="fc4b47c" data-element_type="widget" data-widget_type="icon-list.default">
            <div class="elementor-widget-container">
                <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                        <span class="elementor-icon-list-text">مع ثبات تاريخ غني يمتد إلى 60 عاماً</span>
                    </li>
                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                        <span class="elementor-icon-list-text">الشركة الرائدة في البورصة في دولة الإمارات العربية المتحدة.</span>
                    </li>
                </ul>
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
</div>
<div class="elementor-element elementor-element-77bcac7 e-con-full e-flex e-con" data-id="77bcac7"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-d873dc6 e-con-boxed e-flex e-con" data-id="d873dc6"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-40e2112 elementor-widget__width-initial elementor-widget elementor-widget-html"
         data-id="40e2112" data-element_type="widget" data-widget_type="html.default">
        <div class="elementor-widget-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 1080" width="1080" height="1080"
                 preserveAspectRatio="xMidYMid meet"
                 style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                <defs>
                    <clipPath id="__lottie_element_66">
                        <rect width="1080" height="1080" x="0" y="0"></rect>
                    </clipPath>
                    <linearGradient id="__lottie_element_128" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                                    x1="-322.4350280761719" y1="-171.11961364746094" x2="-189.7791748046875"
                                    y2="207.86871337890625">
                        <stop offset="0%" stop-color="rgb(56,88,148)"></stop>
                        <stop offset="28%" stop-color="rgb(77,125,213)"></stop>
                        <stop offset="100%" stop-color="rgb(255,255,255)"></stop>
                    </linearGradient>
                </defs>
                <g clip-path="url(#__lottie_element_66)">
                    <g transform="matrix(1,0,0,1,540,540)" opacity="0.8123807950001298" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path fill="url(#__lottie_element_128)" fill-opacity="1"
                                  d=" M360,-240 C360,-240 260,-40 260,-40 C260,-40 160,-115 160,-115 C160,-115 60,110 60,110 C60,110 -40,60 -40,60 C-40,60 -140,160 -140,160 C-140,160 -240,134 -240,134 C-240,134 -340,260 -340,260 C-340,260 -340,357 -340,357 C-340,357 362,358 362,358 C362,358 360,-240 360,-240z"></path>
                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(20,20,20)" stroke-opacity="1" stroke-width="0"
                                  d=" M360,-240 C360,-240 260,-40 260,-40 C260,-40 160,-115 160,-115 C160,-115 60,110 60,110 C60,110 -40,60 -40,60 C-40,60 -140,160 -140,160 C-140,160 -240,134 -240,134 C-240,134 -340,260 -340,260 C-340,260 -340,357 -340,357 C-340,357 362,358 362,358 C362,358 360,-240 360,-240z"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,540,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,640,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,740,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,840,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,940,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,1040,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,1140,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,589)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,689)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,789)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,889)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,989)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,1239)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,1089)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(0,1,-1,0,562,1189)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,1240,540)" opacity="0.5" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(91,91,91)" stroke-opacity="1" stroke-width="2"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,540,540)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(58,92,155)" stroke-opacity="1" stroke-width="10"
                                  d=" M-336.5,256.25 C-336.5,256.25 -240,134 -240,134 C-240,134 -140,160 -140,160 C-140,160 -40,60 -40,60 C-40,60 60,110 60,110 C60,110 160,-115 160,-115 C160,-115 260,-40 260,-40 C260,-40 356.75,-234 356.75,-234"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,992.4310302734375,540)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(0,89,255)" stroke-opacity="1" stroke-width="5"
                                  d=" M-340,-340 C-340,-340 -340,360 -340,360"></path>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,942.4310302734375,667.58447265625)" opacity="1"
                       style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,-288,-143)">
                            <path fill="rgb(0,70,199)" fill-opacity="1"
                                  d=" M0,-19 C10.486100196838379,-19 19,-10.486100196838379 19,0 C19,10.486100196838379 10.486100196838379,19 0,19 C-10.486100196838379,19 -19,10.486100196838379 -19,0 C-19,-10.486100196838379 -10.486100196838379,-19 0,-19z"></path>
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4"
                                  stroke="rgb(0,89,255)" stroke-opacity="1" stroke-width="0"
                                  d=" M0,-19 C10.486100196838379,-19 19,-10.486100196838379 19,0 C19,10.486100196838379 10.486100196838379,19 0,19 C-10.486100196838379,19 -19,10.486100196838379 -19,0 C-19,-10.486100196838379 -10.486100196838379,-19 0,-19z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <div class="elementor-element elementor-element-a5cbe74 elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading"
         data-id="a5cbe74" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">الاستثمار في أسهم الأنصاري يوفر لك الفرصة
                لاستخدام المعرفة المتعمقة والتاريخ الغني من الموثوقية والاستقرار.</h2></div>
    </div>
    <div class="elementor-element elementor-element-8460019 elementor-align-center elementor-hidden-mobile elementor-widget elementor-widget-button"
         data-id="8460019" data-element_type="widget" data-widget_type="button.default">
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
                <a href="#Form" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">للمزيد من التفاصيل</span>
		</span>
                </a>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-a378188 elementor-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-button"
         data-id="a378188" data-element_type="widget" data-widget_type="button.default">
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
                <a href="#form" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">للمزيد من التفاصيل</span>
		</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-3b00d4d e-con-full e-flex e-con" data-id="3b00d4d"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-a89a6c6 e-con-boxed e-flex e-con" data-id="a89a6c6"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-602a7ba elementor-widget elementor-widget-heading" data-id="602a7ba"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">مصدر واحد للتداول الناجح</p></div>
    </div>
    <div class="elementor-element elementor-element-6d7c4b3 elementor-widget__width-initial elementor-widget elementor-widget-heading"
         data-id="6d7c4b3" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">فرصة استثمارية غنية بالموثوقية والاستقرار.</h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-9fd2d24 e-con-full e-flex e-con" data-id="9fd2d24"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-08a2970 e-con-full e-flex e-con" data-id="08a2970"
         data-element_type="container" data-settings="{" content_width
    ":"full","background_background":"classic"}"="">
    <div class="elementor-element elementor-element-cc43a1d elementor-widget elementor-widget-image" data-id="cc43a1d"
         data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <img decoding="async" loading="lazy" width="64" height="65" src="images/svg_4.svg"
                 class="attachment-large size-large wp-image-7331" alt=""></div>
    </div>
    <div class="elementor-element elementor-element-985c517 elementor-widget elementor-widget-heading" data-id="985c517"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">دعم شخصي</h2></div>
    </div>
    <div class="elementor-element elementor-element-7f57ee0 elementor-widget elementor-widget-heading" data-id="7f57ee0"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">احصل على دعم مخصص من خبرائنا الماليين. نحن هنا
                لمساعدتك في تحقيق أهدافك وتطلعاتك المالية.</p></div>
    </div>
</div>
<div class="elementor-element elementor-element-3625a6a e-con-full e-flex e-con" data-id="3625a6a"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-9b6e746 elementor-widget elementor-widget-image" data-id="9b6e746"
     data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
        <img decoding="async" loading="lazy" width="65" height="65" src="images/svg_3.svg"
             class="attachment-large size-large wp-image-7330" alt=""></div>
</div>
<div class="elementor-element elementor-element-953a8e7 elementor-widget elementor-widget-heading" data-id="953a8e7"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">التكنولوجيا</h2></div>
</div>
<div class="elementor-element elementor-element-c54a059 elementor-widget elementor-widget-heading" data-id="c54a059"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">نحن نعتمد على الحلول التكنولوجية المتقدمة لضمان سهولة
            الاستخدام والأداء الممتاز.</p></div>
</div>
</div>
<div class="elementor-element elementor-element-b527189 e-con-full e-flex e-con" data-id="b527189"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-1f11d75 elementor-widget elementor-widget-image" data-id="1f11d75"
     data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
        <img decoding="async" loading="lazy" width="65" height="65" src="images/svg_2.svg"
             class="attachment-large size-large wp-image-7329" alt=""></div>
</div>
<div class="elementor-element elementor-element-8cedae4 elementor-widget elementor-widget-heading" data-id="8cedae4"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">الحلول المالية</h2></div>
</div>
<div class="elementor-element elementor-element-020b272 elementor-widget elementor-widget-heading" data-id="020b272"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">نحن نقدم حلولاً مالية متقدمة تلبي احتياجاتك وتتجاوز
            توقعاتك.</p></div>
</div>
</div>
<div class="elementor-element elementor-element-3456b26 e-con-full e-flex e-con" data-id="3456b26"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-f2420ca elementor-widget elementor-widget-image" data-id="f2420ca"
     data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
        <img decoding="async" loading="lazy" width="65" height="65" src="images/svg_1.svg"
             class="attachment-large size-large wp-image-7328" alt=""></div>
</div>
<div class="elementor-element elementor-element-7d23af7 elementor-widget elementor-widget-heading" data-id="7d23af7"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h2 class="elementor-heading-title elementor-size-default">التفوق المالي</h2></div>
</div>
<div class="elementor-element elementor-element-d37736b elementor-widget elementor-widget-heading" data-id="d37736b"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">نقدم لك فرص استثمارية مبتكرة وموارد مالية عالية
            الجودة</p></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-6bd7141 e-con-full e-flex e-con" data-id="6bd7141"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-8195578 e-con-boxed e-flex e-con" data-id="8195578"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-001671f elementor-widget elementor-widget-heading" data-id="001671f"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">قصص نجاح المستثمرين لدينا</h2></div>
    </div>
    <div class="elementor-element elementor-element-79f7c4e e-con-boxed e-flex e-con" data-id="79f7c4e"
         data-element_type="container" data-settings="{" content_width
    ":"boxed"}"="">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-cb9d147 e-con-full e-flex e-con" data-id="cb9d147"
             data-element_type="container" data-settings="{" content_width
        ":"full","background_background":"classic"}"="">
        <div class="elementor-element elementor-element-9169997 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image"
             data-id="9169997" data-element_type="widget" data-widget_type="image.default">
            <div class="elementor-widget-container">
                <img decoding="async" loading="lazy" width="500" height="500" src="images/person1.webp"
                     class="attachment-large size-large wp-image-7381" alt=""></div>
        </div>
        <div class="elementor-element elementor-element-7c4de47 elementor-widget elementor-widget-heading"
             data-id="7c4de47" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default">فارس الهاشمي</h3></div>
        </div>
        <div class="elementor-element elementor-element-417bd0f elementor-widget elementor-widget-heading"
             data-id="417bd0f" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">"الاستثمار في الأسهم المحلية كان قرارًا
                    حكيمًا. الحمد لله، حيث حققت استقرارًا ماليًا ملحوظًا وتحققت من تحقيق أهدافي المالية. شكرًا للخبراء
                    على التوجيه الرائع."</p></div>
        </div>
        <div class="elementor-element elementor-element-6bf9332 e-con-full e-flex e-con" data-id="6bf9332"
             data-element_type="container" data-settings="{" content_width
        ":"full"}"="">
        <div class="elementor-element elementor-element-2a9895f e-con-full e-flex e-con" data-id="2a9895f"
             data-element_type="container" data-settings="{" content_width
        ":"full"}"="">
        <div class="elementor-element elementor-element-c9c54bc e-con-full e-flex e-con" data-id="c9c54bc"
             data-element_type="container" data-settings="{" content_width
        ":"full"}"="">
        <div class="elementor-element elementor-element-5f5eefb elementor-widget elementor-widget-heading"
             data-id="5f5eefb" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default">مبلغ الاستثمار الأولي</h3></div>
        </div>
        <div class="elementor-element elementor-element-6b7bd3a elementor-widget elementor-widget-heading"
             data-id="6b7bd3a" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">5,276 درهم اماراتي</p></div>
        </div>
    </div>
    <div class="elementor-element elementor-element-5322421 e-con-full e-flex e-con" data-id="5322421"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-87f2b9d elementor-widget elementor-widget-heading" data-id="87f2b9d"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">إجمالي الربح</h3></div>
    </div>
    <div class="elementor-element elementor-element-de70861 elementor-widget elementor-widget-heading" data-id="de70861"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">359,140 درهم اماراتي</p></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-6d15dfe e-con-full e-flex e-con" data-id="6d15dfe"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-01ae9c5 e-con-full e-flex e-con" data-id="01ae9c5"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-e9699d0 elementor-widget elementor-widget-heading" data-id="e9699d0"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h3 class="elementor-heading-title elementor-size-default">تاريخ الإنضمام</h3></div>
</div>
<div class="elementor-element elementor-element-21ff859 elementor-widget elementor-widget-heading" data-id="21ff859"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">شهر فبراير 11, 2023</p></div>
</div>
</div>
<div class="elementor-element elementor-element-9039a2b e-con-full e-flex e-con" data-id="9039a2b"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-94501c4 elementor-widget elementor-widget-heading" data-id="94501c4"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h3 class="elementor-heading-title elementor-size-default">الأرباح الشهرية</h3></div>
</div>
<div class="elementor-element elementor-element-205a784 elementor-widget elementor-widget-heading" data-id="205a784"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">63,676 درهم اماراتي</p></div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-d63267c e-con-full elementor-hidden-mobile e-flex e-con"
     data-id="d63267c" data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-8861466 e-con-boxed e-flex e-con" data-id="8861466"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-dd9f977 e-con-boxed e-flex e-con" data-id="dd9f977"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-f1a425e e-con-full e-flex e-con" data-id="f1a425e"
         data-element_type="container" data-settings="{" content_width
    ":"full","background_background":"classic"}"="">
    <div class="elementor-element elementor-element-45f237d elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image"
         data-id="45f237d" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <img decoding="async" loading="lazy" width="500" height="500" src="images/person2.webp"
                 class="attachment-large size-large wp-image-7380" alt=""></div>
    </div>
    <div class="elementor-element elementor-element-b538ab3 elementor-widget elementor-widget-heading" data-id="b538ab3"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">لينا الحمودي</h3></div>
    </div>
    <div class="elementor-element elementor-element-8c7b8d9 elementor-widget elementor-widget-heading" data-id="8c7b8d9"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">"الاستثمار في الأسهم المحلية جعلتني أدرك أحلامي
                المالية. الحمد لله، حيث تحققت لي فرص جديدة واستمتعت بإجمالي ربح مذهل. شكرًا للأسرة المالية على الدعم
                المستمر."</p></div>
    </div>
    <div class="elementor-element elementor-element-8adced6 e-con-boxed e-flex e-con" data-id="8adced6"
         data-element_type="container" data-settings="{" content_width
    ":"boxed"}"="">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-dc4ca9b e-con-full e-flex e-con" data-id="dc4ca9b"
             data-element_type="container" data-settings="{" content_width
        ":"full"}"="">
        <div class="elementor-element elementor-element-1899cc9 e-con-full e-flex e-con" data-id="1899cc9"
             data-element_type="container" data-settings="{" content_width
        ":"full"}"="">
        <div class="elementor-element elementor-element-827b468 elementor-widget elementor-widget-heading"
             data-id="827b468" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default">مبلغ الاستثمار الأولي</h3></div>
        </div>
        <div class="elementor-element elementor-element-38c9dd4 elementor-widget elementor-widget-heading"
             data-id="38c9dd4" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">1,642 درهم اماراتي</p></div>
        </div>
    </div>
    <div class="elementor-element elementor-element-d1d2971 e-con-full e-flex e-con" data-id="d1d2971"
         data-element_type="container" data-settings="{" content_width
    ":"full"}"="">
    <div class="elementor-element elementor-element-ef2cf42 elementor-widget elementor-widget-heading" data-id="ef2cf42"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">إجمالي الربح</h3></div>
    </div>
    <div class="elementor-element elementor-element-bad2930 elementor-widget elementor-widget-heading" data-id="bad2930"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">147,201 درهم اماراتي</p></div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-7721fe4 e-con-full e-flex e-con" data-id="7721fe4"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-a94942c e-con-full e-flex e-con" data-id="a94942c"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-0f2da5a elementor-widget elementor-widget-heading" data-id="0f2da5a"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h3 class="elementor-heading-title elementor-size-default">تاريخ الإنضمام</h3></div>
</div>
<div class="elementor-element elementor-element-34ce692 elementor-widget elementor-widget-heading" data-id="34ce692"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">مارس 5, 2023</p></div>
</div>
</div>
<div class="elementor-element elementor-element-d31aa9d e-con-full e-flex e-con" data-id="d31aa9d"
     data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-423f094 elementor-widget elementor-widget-heading" data-id="423f094"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <h3 class="elementor-heading-title elementor-size-default">الأرباح الشهرية</h3></div>
</div>
<div class="elementor-element elementor-element-67f20de elementor-widget elementor-widget-heading" data-id="67f20de"
     data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
        <p class="elementor-heading-title elementor-size-default">26,562 درهم اماراتي</p></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-3c7d1e3 e-con-full elementor-hidden-mobile e-flex e-con"
     data-id="3c7d1e3" data-element_type="container" data-settings="{" content_width
":"full"}"="">
<div class="elementor-element elementor-element-b5a375d e-con-boxed e-flex e-con" data-id="b5a375d"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-1f81f8e e-con-full e-flex e-con" data-id="1f81f8e"
     data-element_type="container" data-settings="{" content_width
":"full","background_background":"classic"}"="">
<div class="elementor-element elementor-element-268e226 e-con-boxed e-flex e-con" data-id="268e226"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-a7017f3 e-con-boxed e-flex e-con" data-id="a7017f3"
         data-element_type="container" data-settings="{" content_width
    ":"boxed"}"="">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-dc9bdd2 elementor-widget elementor-widget-heading"
             data-id="dc9bdd2" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">الشروط والأحكام</p></div>
        </div>
        <div class="elementor-element elementor-element-388672b elementor-widget elementor-widget-heading"
             data-id="388672b" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">الشروط والأحكام</p></div>
        </div>
        <div class="elementor-element elementor-element-17a1b9d elementor-widget elementor-widget-heading"
             data-id="17a1b9d" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">الاتصال</p></div>
        </div>
        <div class="elementor-element elementor-element-7306a98 elementor-widget elementor-widget-heading"
             data-id="7306a98" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">سياسة ملفات تعريف الارتباط</p></div>
        </div>
        <div class="elementor-element elementor-element-3139820 elementor-widget elementor-widget-heading"
             data-id="3139820" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">من نحن</p></div>
        </div>
    </div>
</div>
<div class="elementor-element elementor-element-0f744c2 e-con-boxed e-flex e-con" data-id="0f744c2"
     data-element_type="container" data-settings="{" content_width
":"boxed"}"="">
<div class="e-con-inner">
    <div class="elementor-element elementor-element-b49a1f3 elementor-widget elementor-widget-heading" data-id="b49a1f3"
         data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">إخلاء المسؤولية: المحتوى والمعلومات والمواد
                المقدمة على هذا الموقع مخصصة فقط لأغراض إعلامية عامة. تسعى وكالتنا التسويقية جاهدة لضمان الدقة والعملة ،
                لكننا لا نقدم أي ضمانات أو إقرارات ، صريحة أو ضمنية ، حول اكتمال المعلومات المقدمة أو موثوقيتها أو
                ملاءمتها أو توفرها. يتم تشجيع العملاء والزوار على استخدام المعلومات وفقًا لتقديرهم ومخاطرهم. أي اعتماد
                تضعه على المعلومات المقدمة يكون وفقًا لتقديرك الخاص ، وننصح بالسعي للحصول على مشورة مهنية مستقلة عند
                اتخاذ قرارات العمل الحاسمة.</p></div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php $settings->in_footer();?>
</body>
</html>