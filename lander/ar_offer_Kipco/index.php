<?php

$keyword = $_GET['keyword'] ?? 'page Key word';
$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$p_keyword = "Kipco"; // Replace with your offer name
$p_lang    = "ar"; // page Language LOW CASE 
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "KW"; // Replace with the default country ISO Upper case for arabic make AE

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
<html lang="ar" dir="rtl">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Teddy Services</title>
      <link rel="stylesheet" href="assets/style.css?1" type="text/css" media="all">
      <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
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
                           <div data-editable="true" data-name="top_logo"><img src="assets/logo.jpg" alt="logo.svg"></div>
                        </div>
                        <div class="Top__Text-sc-zew2h9-3 gySJtW">
                           <div data-editable="true" data-name="top__text">
                              <h3 dir="rtl">
                              إستثمر اليوم في سهم شركة مشاريع الكويت - كيبكو واحصل على دخل ثاني دائم ومستمر
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div style="display:contents">
               <div class="FormMain__FormWrapper-sc-yq786k-0 kgNxqh">
                  <div class="FormBlock__Body-sc-nabd0i-0 bNCrpg">
                  <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="350px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                  </div>
               </div>
            </div>
         </div>
         <div style="display:contents">
            <div class="Disclaimer__DisclaimerWrap-sc-32bxb-0 eiZQdk">
               <div class="Container-sc-a4fxlm-0 iaZBIw">
                  <div class="Disclaimer__DisclaimerText-sc-32bxb-1 bqPLNo">
                     <p>.هذه الصفحة لا تمثل الشركة المُعلن عنها،
                        والآراء الواردة هنا لا تعكس بالضرورة السياسة الرسمية للشركة أو موقف أي شركة أخرى
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div style="display:contents">
            <div class="CookiePopUp__CookiePopUpWrapper-sc-xvwtu-0 heWUPa">
               <div class="Container-sc-a4fxlm-0 CookiePopUp__CookiePopUpContainer-sc-xvwtu-1 iaZBIw dUsTUD">
                  <div class="CookiePopUp__CookiePopUpBlock-sc-xvwtu-2 cAQMLO" style="display: none;">
                     <div class="CookiePopUp__ButtonClose-sc-xvwtu-3 ojUSr">✕</div>
                     <div class="CookiePopUp__Inner-sc-xvwtu-4 gefoBY">هذا الموقع يستخدم ملفات تعرف الارتباط. نحن نستخدم
                        ملفات تعريف الارتباط للتأكد من أننا نقدم لك أفضل تجربة على موقعنا.
                        <span>قبول</span> / <span>رفض</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div style="display:contents">
            <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 hDVMbF">
               <div class="Container-sc-a4fxlm-0 iaZBIw">
                
                  <div class="GlobalFooter__Links-sc-1jle5k5-2 jeOmhK">
                     
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->policy()?>" class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                        الخصوصية</a>
                     </div>
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->terms()?>" class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الشروط
                        والأحكام</a>
                     </div>
                    
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="<?=$settings->cookie()?>" class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                        ملفات تعريف الارتباط</a>
                     </div>
                  </div>
                  <div class="GlobalFooter__Text-sc-1jle5k5-6 bpBByd">
                     <p style="text-align:right">هذا الموقع ليس وكالة
                        أنباء أو موقع معلومات أو مدونة. صفحة الويب هذه تهدف إلى المنشورات الترويجية التي تستخدم أسلوب
                        سرد القصص لتوضيح نطاق الخدمات والمنتجات المعروضة. لذلك ، فإن القصة التي يتم سردها في هذه الصفحة
                        هي عبارة عن إعلان تجاري أو إعلان لأغراض إعلامية ووظيفية ، لفهم إمكانات ما هو مقترح. تحذير عام من
                        المخاطر: تنطوي أنشطة الاستثمار على درجة عالية من المخاطر وقد تؤدي إلى خسارة كاملة للمبلغ
                        المستثمر. لهذا السبب ، قد لا تكون هذه الأنشطة مناسبة لكل نوع من المستثمرين. يجب ألا تستثمر
                        أموالًا لا يمكنك تحمل خسارتها.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $settings->in_footer();?>
   </body>
</html>
