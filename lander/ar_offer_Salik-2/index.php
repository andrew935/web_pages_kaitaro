<?php

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$offer_url = 'https://web.invest-education.com/offers/ar/Salik'; // Replace with your offer URL https://web.invest-education.com/offers/__PATH_TO_OFFER__
$p_keyword = "Salik"; // Replace with your offer name
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


$title = $_GET['title'] ?? "
 اكتشف الآن أفضل فرصة استثمار في سالك  وحقق دخل كبير
";

?>
<!DOCTYPE html>
<html lang=ar dir='rtl'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Teddy Services">
    <title>Teddy Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='images/TeddyServices_1702375957.png'/>

    <?php $settings->in_header();?>
</head>
<body>
<?php $settings->in_body();?>

<div id="root">
    <div class="react_kali_7932__Wrapper-sc-fxsuf1-0 hzwAxE">
        <div style="display:contents">
            <section class="Top__Wrapper-sc-zew2h9-0 hAXtZI">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="Top__Content-sc-zew2h9-1 iZZGPq">
                        <div class="Top__Image-sc-zew2h9-2 jGMclG">
                            <div data-editable="true" data-name="top_logo"><img
                                    src="images/logo.svg?v=1"
                                    alt="logo.svg" loading="lazy"/></div>
                        </div>
                        <div class="Top__Text-sc-zew2h9-3 gySJtW">
                            <div data-editable="true" data-name="top__text">
                                <h3 dir="rtl">
                                   <?=$title?>
                                </h3></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div style="display:contents">
            <div class="FormMain__FormWrapper-sc-yq786k-0 kgNxqh">
                <div class="FormBlock__Body-sc-nabd0i-0 bNCrpg">
                    <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 380px;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div style="display:contents">
        <div class="Disclaimer__DisclaimerWrap-sc-32bxb-0 eiZQdk">
            <div class="Container-sc-a4fxlm-0 iaZBIw">
                <div class="Disclaimer__DisclaimerText-sc-32bxb-1 bqPLNo"><p>.هذه الصفحة لا تمثل الشركة المُعلن عنها،
                        والآراء الواردة هنا لا تعكس بالضرورة السياسة الرسمية للشركة أو موقف أي شركة أخرى</p></div>
            </div>
        </div>
    </div>
    <div style="display:contents">
        <div class="CookiePopUp__CookiePopUpWrapper-sc-xvwtu-0 heWUPa">
            <div class="Container-sc-a4fxlm-0 CookiePopUp__CookiePopUpContainer-sc-xvwtu-1 iaZBIw dUsTUD">
                <div class="CookiePopUp__CookiePopUpBlock-sc-xvwtu-2 cAQMLO">
                    <div class="CookiePopUp__ButtonClose-sc-xvwtu-3 ojUSr">✕</div>
                    <div class="CookiePopUp__Inner-sc-xvwtu-4 gefoBY">هذا الموقع يستخدم ملفات تعرف الارتباط. نحن نستخدم
                        ملفات تعريف الارتباط للتأكد من أننا نقدم لك أفضل تجربة على موقعنا.
                        <span>قبول</span> / <span>رفض</span></div>
                </div>
            </div>
        </div>
    </div>
    <div style="display:contents">
        <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 hDVMbF">
            <div class="Container-sc-a4fxlm-0 iaZBIw">
                <!--<div class="GlobalFooter__Logo-sc-1jle5k5-1 hkhlrZ">
                    <img src="images/Ted_1670503271.png" loading="lazy" alt="Logo"/>
                </div>-->
                <div class="GlobalFooter__Links-sc-1jle5k5-2 jeOmhK">
                    <!--<div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="#"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">من
                            نحن</a></div>-->
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->policy()?>"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                            الخصوصية</a></div>
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->terms()?>"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الشروط
                            والأحكام</a></div>
                   <!-- <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="#"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الاتصال</a>
                    </div>-->
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->cookie()?>"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                            ملفات تعريف الارتباط</a></div>
                </div>
                <div class="GlobalFooter__Text-sc-1jle5k5-6 bpBByd"><p style="text-align:right">هذا الموقع ليس وكالة
                        أنباء أو موقع معلومات أو مدونة. صفحة الويب هذه تهدف إلى المنشورات الترويجية التي تستخدم أسلوب
                        سرد القصص لتوضيح نطاق الخدمات والمنتجات المعروضة. لذلك ، فإن القصة التي يتم سردها في هذه الصفحة
                        هي عبارة عن إعلان تجاري أو إعلان لأغراض إعلامية ووظيفية ، لفهم إمكانات ما هو مقترح. تحذير عام من
                        المخاطر: تنطوي أنشطة الاستثمار على درجة عالية من المخاطر وقد تؤدي إلى خسارة كاملة للمبلغ
                        المستثمر. لهذا السبب ، قد لا تكون هذه الأنشطة مناسبة لكل نوع من المستثمرين. يجب ألا تستثمر
                        أموالًا لا يمكنك تحمل خسارتها.

                    </p></div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('.CookiePopUp__ButtonClose-sc-xvwtu-3').on('click', function () {
            $('.CookiePopUp__CookiePopUpBlock-sc-xvwtu-2').hide();
        });
    });
</script>

<?php $settings->in_footer();?>

</body>
</html>
        