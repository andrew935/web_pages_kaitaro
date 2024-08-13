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



$p_keyword = "Trade-GPT"; // CHANGE THIS
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
$params.='&bg_color=28d146'; // if you need to change the button background color
   $params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl" data-locale="ar">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Bald Forest">
    <title>Bald Forest</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://lp-assets.baldforest.com/default221_1702374792.png">

    <title data-rh="true"></title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">



    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="true" data-rh="true">
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="true" data-rh="true">
    <link href="./assets/css2.css" rel="stylesheet" data-rh="true">
</head>
<body style="overflow: auto;">
<div id="root">
    <div class="react_gpt_4591__Wrapper-sc-3jzf2u-0 hVDrkV">
        <div style="display:contents">
            <div class="Top__TopWrapper-sc-8zaule-0 huARUM">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="Top__TopInner-sc-8zaule-1 CmnsY">
                        <div class="Top__Logo-sc-8zaule-2 dXGzjh">
                            <div data-editable="true" data-name="logo"><img src="./assets/logo.png" alt="logo.png"
                                                                            loading="lazy"></div>
                        </div>
                        <div class="Top__TopT1-sc-8zaule-3 bhVbXW">
                            <div data-editable="true" data-name="top__t1"><p>اكتشف لماذا اختار 3500 مستثمر بالفعل تحقيق
                                دخل تلقائي باستخدام TradeGPT!</p></div>
                        </div>
                        <div class="Top__TopT2-sc-8zaule-4 fSBEMg">
                            <div data-editable="true" data-name="top__t2"><p>انضم ودع دخلك يتدفق حتى أثناء سباتك!</p>
                            </div>
                        </div>
                        <div class="ButtonCustom__ButtonWraper-sc-gd1wqz-0 hpCQYU">
                            <div class="ButtonCustom__ButtonImg-sc-gd1wqz-4 kTDNu">
                                <div data-editable="true" data-name="whatsapp"><img src="./assets/whatsapp.svg"
                                                                                    alt="whatsapp.svg" loading="lazy">
                                </div>
                            </div>
                            <div class="ButtonCustom__TextWrap-sc-gd1wqz-1 ixxOtv">
                                <div class="ButtonCustom__TextButton1-sc-gd1wqz-2 hXFcKP">
                                    <div data-editable="true" data-name="top__btn1"><p>أعطني القوة الآلية!</p></div>
                                </div>
                                <div class="ButtonCustom__TextButton2-sc-gd1wqz-3 dvrIIW">
                                    <div data-editable="true" data-name="top__btn2"><p>TradeGPT: أرباح سهلة</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="Article__ArticleSection-sc-6ei9i7-0 dtnorV">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="Article__ArticleWrapper-sc-6ei9i7-1 cCWzEL">
                        <div class="Article__ArticleTitle-sc-6ei9i7-2 ctcth">
                            <div data-editable="true" data-name="article__title"><p>هل أنت مهتم بالحصول على دخل إضافي من
                                هاتفك أثناء نومك؟</p></div>
                        </div>
                        <div class="Article__ArticleImage-sc-6ei9i7-4 dhcgsu">
                            <div data-editable="true" data-name="article1_img"><img src="./assets/article1_img.png"
                                                                                    alt="article1_img.png"
                                                                                    loading="lazy"></div>
                        </div>
                        <div class="Article__ArticleSubtitle-sc-6ei9i7-5 coTEUS">
                            <div data-editable="true" data-name="article__subtitle"><p>اكتشف TradeGPT:</p></div>
                        </div>
                        <div class="Article__ArticleText-sc-6ei9i7-3 jfdfsk">
                            <div data-editable="true" data-name="article__text"><p>الحل الآلي المبتكر الذي يحول 250
                                دولارًا فقط إلى إيرادات شهرية ثابتة!</p></div>
                        </div>
                        <div class="ButtonCustom__ButtonWraper-sc-gd1wqz-0 hpCQYU">
                            <div class="ButtonCustom__ButtonImg-sc-gd1wqz-4 kTDNu">
                                <div data-editable="true" data-name="whatsapp"><img src="./assets/whatsapp.svg"
                                                                                    alt="whatsapp.svg" loading="lazy">
                                </div>
                            </div>
                            <div class="ButtonCustom__TextWrap-sc-gd1wqz-1 ixxOtv">
                                <div class="ButtonCustom__TextButton1-sc-gd1wqz-2 hXFcKP">
                                    <div data-editable="true" data-name="top__btn1"><p>أعطني القوة الآلية!</p></div>
                                </div>
                                <div class="ButtonCustom__TextButton2-sc-gd1wqz-3 dvrIIW">
                                    <div data-editable="true" data-name="top__btn2"><p>TradeGPT: أرباح سهلة</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="Article2__ArticleSection-sc-1xcr6iz-0 hvfbXd">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="Article2__ArticleWrapper-sc-1xcr6iz-1 dZPBNi">
                        <div class="Article2__Title-sc-1xcr6iz-2 dSorzM">
                            <div data-editable="true" data-name="article2__title"><p>قوة التداول الآلي: ابدأ في تحقيق
                                المزيد من الأرباح اليوم!</p></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_1"><p>لماذا تعتبر <b>TradeGPT</b>
                                تذكرتك لتحقيق أرباح أكبر وحرية مالية</p></div>
                        </div>
                        <div class="Article2__Image-sc-1xcr6iz-8 iSlfhH">
                            <div data-editable="true" data-name="article2_img1"><img
                                    src="./assets/article2_img1.png" alt="article2_img1.png" loading="lazy"></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_2"><p>تخيل شريكًا تجاريًا لا <u>ينام
                                أبدًا</u>، ولا يتخذ قرارات عاطفية أبدًا، ويعمل باستمرار على زيادة أرباحك إلى الحد
                                الأقصى.</p><br>
                                <p>هذه هي قوة التداول الآلي مع <b>TradeGPT!<b></b></b></p></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_3"><p>لهذا السبب يجب أن تبدأ <u>
                                الآن</u>:</p></div>
                        </div>
                        <div class="Article2__TextListWrap-sc-1xcr6iz-4 bGehOZ">
                            <div class="Article2__List-sc-1xcr6iz-7 ieHSZW">
                                <div data-editable="true" data-name="article2__list_1"><p><b>التداول على مدار الساعة
                                    طوال أيام الأسبوع: </b>أثناء نومك أو عملك أو الاستمتاع بحياتك، تعمل <b>TradeGPT </b>بلا
                                    كلل، مستفيدة من فرص السوق على مدار الساعة.</p></div>
                            </div>
                            <div class="Article2__List-sc-1xcr6iz-7 ieHSZW">
                                <div data-editable="true" data-name="article2__list_2"><p><b>التداول الخالي من
                                    المشاعر: </b>قل وداعًا للقرارات المتهورة التي يقودها الخوف أو الجشع. تعتمد<b>
                                    TradeGPT</b> على البيانات والخوارزميات، وليس على العواطف.</p></div>
                            </div>
                            <div class="Article2__List-sc-1xcr6iz-7 ieHSZW">
                                <div data-editable="true" data-name="article2__list_3"><p><b>إدارة المخاطر: </b> تم
                                    تصميم <b>TradeGPT </b>لحماية استثماراتك من خلال تقليل المخاطر وتحسين العائدات.</p>
                                </div>
                            </div>
                            <div class="Article2__List-sc-1xcr6iz-7 ieHSZW">
                                <div data-editable="true" data-name="article2__list_4"><p><b>أداء متسق: </b>تقنيتنا
                                    الذكية تتكيف مع تغيرات ظروف السوق، مما يضمن استمرار نمو استثماراتك بثبات.</p></div>
                            </div>
                            <div class="Article2__List-sc-1xcr6iz-7 ieHSZW">
                                <div data-editable="true" data-name="article2__list_5"><p><b>إمكانات غير محدودة:</b>
                                    مع<u> TradeGPT</u>، السماء هي الحد الأقصى. دعونا نقارن: في حين أن التداول التقليدي
                                    قد يحقق مكاسب متواضعة، فإن TradeGPT لديها القدرة على مضاعفة أرباحك بشكل كبير.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ButtonCustom__ButtonWraper-sc-gd1wqz-0 hpCQYU">
                            <div class="ButtonCustom__ButtonImg-sc-gd1wqz-4 kTDNu">
                                <div data-editable="true" data-name="whatsapp"><img src="./assets/whatsapp.svg"
                                                                                    alt="whatsapp.svg" loading="lazy">
                                </div>
                            </div>
                            <div class="ButtonCustom__TextWrap-sc-gd1wqz-1 ixxOtv">
                                <div class="ButtonCustom__TextButton1-sc-gd1wqz-2 hXFcKP">
                                    <div data-editable="true" data-name="top__btn1"><p>أعطني القوة الآلية!</p></div>
                                </div>
                                <div class="ButtonCustom__TextButton2-sc-gd1wqz-3 dvrIIW">
                                    <div data-editable="true" data-name="top__btn2"><p>TradeGPT: أرباح سهلة</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="Article2__Title-sc-1xcr6iz-2 dSorzM">
                            <div data-editable="true" data-name="article2__title_2"><p>اكتشف الطريق إلى متوسط ربح أسبوعي
                                قدره 1793 دولارًا!</p></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_4"><p><b>هل سئمت </b>من مشاهدة <u>أموالك
                                التي كسبتها بشق الأنفس</u> وهي تضيع في حسابات التوفير التقليدية أو الاستثمارات التي تحقق
                                عوائد ضئيلة؟</p><br></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_5"><p>تقدم <b>TradeGPT </b>حلاً
                                ثوريًا يمكنه تحويل المشهد المالي الخاص بك.</p><br></div>
                        </div>
                        <div class="Article2__Subtitle-sc-1xcr6iz-3 jMuqza">
                            <div data-editable="true" data-name="article2__subtitle_6"><p>مع مبلغ <b><u>250 دولارًا
                                فقط</u></b> كنقطة انطلاق، يمكنك أن تبدأ رحلة نحو <u>الرخاء المالي</u> الذي يحلم به
                                الكثيرون فقط.</p></div>
                        </div>
                        <div class="Article2__Image-sc-1xcr6iz-8 iSlfhH">
                            <div data-editable="true" data-name="article2_img2"><img
                                    src="./assets/article2_img2.png" alt="article2_img2.png" loading="lazy"></div>
                        </div>
                        <div class="Article2__TextWrap-sc-1xcr6iz-5 gqGCjL">
                            <div class="Article2__Text-sc-1xcr6iz-6 emdpmH">
                                <div data-editable="true" data-name="article2__text_1"><p>كما توضح الصورة أعلاه، تحول
                                    مبلغ <b><u>250 دولارًا أمريكيًا</u></b> بسرعة إلى متوسط عائد <b><u> أسبوعي قدره 1793
                                        دولارًا أمريكيًا،</u></b> كل ذلك بفضل القدرات المذهلة لتقنية الذكاء الاصطناعي
                                    المتطورة من <b>TradeGPT.</b></p></div>
                            </div>
                            <div class="Article2__Text-sc-1xcr6iz-6 emdpmH">
                                <div data-editable="true" data-name="article2__text_2"><p>خذ قفزة الإيمان واتخذ القرار
                                    الذي يمكن أن يغير مستقبلك <u> المالي</u>. انضم إلى صفوف المستثمرين الذين تبنوا
                                    الأتمتة ويستمتعون الآن بالمكافآت.</p></div>
                            </div>
                            <div class="Article2__Text-sc-1xcr6iz-6 emdpmH">
                                <div data-editable="true" data-name="article2__text_3"><p>لا تدع هذه الفرصة تفوتك. تصرف
                                    الآن لتأمين ازدهارك المالي مع <b>TradeGPT.</b></p></div>
                            </div>
                        </div>
                        <div class="ButtonCustom__ButtonWraper-sc-gd1wqz-0 hpCQYU">
                            <div class="ButtonCustom__ButtonImg-sc-gd1wqz-4 kTDNu">
                                <div data-editable="true" data-name="whatsapp"><img src="./assets/whatsapp.svg"
                                                                                    alt="whatsapp.svg" loading="lazy">
                                </div>
                            </div>
                            <div class="ButtonCustom__TextWrap-sc-gd1wqz-1 ixxOtv">
                                <div class="ButtonCustom__TextButton1-sc-gd1wqz-2 hXFcKP">
                                    <div data-editable="true" data-name="top__btn1"><p>أعطني القوة الآلية!</p></div>
                                </div>
                                <div class="ButtonCustom__TextButton2-sc-gd1wqz-3 dvrIIW">
                                    <div data-editable="true" data-name="top__btn2"><p>TradeGPT: أرباح سهلة</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="Reviews__Wrapper-sc-1st5ma7-0 iFysdq">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="Reviews__Title-sc-1st5ma7-1 gMpHQk">
                        <div data-editable="true" data-name="reviews__title"><p>لا تزال غير مقتنع؟<br>استمع إلى ما يقوله
                            مستخدمونا:</p></div>
                    </div>
                    <div class="Reviews__VideosContainer-sc-1st5ma7-2 euRqtv">
                        <div class="Reviews__Item-sc-1st5ma7-4 bFdetH">
                            <div class="Wrapper__Inner-sc-1e7gl94-0 kkuuyI">
                                <video width="100%" height="100%" controls>
                                    <source src="./video/gpt1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="Reviews__Text-sc-1st5ma7-3 ixQphX">
                                <div data-editable="true" data-name="reviews__item_1"><p>لقد جعلت TradeGPT التداول
                                    بسيطًا وفعالًا للغاية. لقد سيطر ذكاءها الاصطناعي على الأمور وزاد استثماري بشكل مطرد.
                                    لقد كان هذا قرارًا ماليًا أتمنى ألا أنتظر اتخاذه. بفضل TradeGPT، أصبح لدي الآن
                                    المزيد من الأمان المالي.</p></div>
                            </div>
                        </div>
                        <div class="Reviews__Item-sc-1st5ma7-4 bFdetH">
                            <div class="Wrapper__Inner-sc-1e7gl94-0 kkuuyI">
                                <video width="100%" height="100%" controls>
                                    <source src="./video/gpt2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>
                            <div class="Reviews__Text-sc-1st5ma7-3 ixQphX">
                                <div data-editable="true" data-name="reviews__item_2"><p>أنا مندهش من النتائج التي
                                    حققتها مع TradeGPT. كفاءتها في التداول الآلي لا تصدق. منذ أن بدأت استخدامه، رأيت
                                    زيادة ثابتة في أرباحي. إنه حقًا تغيير لقواعد اللعبة لأي شخص يتطلع إلى تحسين وضعه
                                    المالي.</p></div>
                            </div>
                        </div>
                        <div class="Reviews__Item-sc-1st5ma7-4 bFdetH">
                            <div class="Wrapper__Inner-sc-1e7gl94-0 kkuuyI">
                                <video width="100%" height="100%" controls>
                                    <source src="./video/gpt3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>
                            <div class="Reviews__Text-sc-1st5ma7-3 ixQphX">
                                <div data-editable="true" data-name="reviews__item_3"><p>لقد تجاوزت TradeGPT كل توقعاتي.
                                    وبفضل تحليله الذكي وقدرته على التكيف، فقد سمح لي بجني أرباح التداول دون الحاجة إلى
                                    مراقبة السوق بشكل مستمر. وبفضل مصدر الدخل الجديد هذا، حققت الحرية المالية وإدارة
                                    أفضل للوقت. انا اوصي بشده به.</p></div>
                            </div>
                        </div>
                        <div class="Reviews__Item-sc-1st5ma7-4 bFdetH">
                            <div class="Wrapper__Inner-sc-1e7gl94-0 kkuuyI">
                                <video width="100%" height="100%" controls>
                                    <source src="./video/gpt4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>
                            <div class="Reviews__Text-sc-1st5ma7-3 ixQphX">
                                <div data-editable="true" data-name="reviews__item_4"><p>لم أتخيل أبدًا المبلغ الذي
                                    يمكنني كسبه مع TradeGPT. لقد تجاوزت أرباحي الأسبوعية توقعاتي، وأخيرًا تمكنت من
                                    السيطرة على وضعي المالي. بفضل TradeGPT، أقوم بإنشاء مستقبل مالي أكثر استقرارًا لنفسي
                                    ولعائلتي.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="FormMain__FormWrapper-sc-a3i6fj-0 eVjQpQ">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="FormMain__FormInner-sc-a3i6fj-1 gJYoTa">
                        <div class="FormBlock__Body-sc-1g9xvl8-0 eXoxWT">
                            <iframe id="register" src=./form_only<?=$params?>" frameborder="0" width="100%" height="400px"></iframe>

                        </div>
                    </div>
                </div>
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
                        <span>قبول</span>&nbsp;/&nbsp;<span>رفض</span></div>
                </div>
            </div>
        </div>
    </div>
    <div style="display:contents">
        <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 hDVMbF">
            <div class="Container-sc-a4fxlm-0 iaZBIw">
                <!--<div class="GlobalFooter__Logo-sc-1jle5k5-1 hkhlrZ">
                    <a target="_blank"  href="http://baldforest.com/"><img
                        src="./assets/baldforest_1702375111.png" loading="lazy" alt="Logo"></a></div>-->
                <div class="GlobalFooter__Links-sc-1jle5k5-2 jeOmhK">

                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                                                                               href="../_general/policy/policy.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                        الخصوصية</a></div>
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                                                                               href="../_general/policy/termsandconditions.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الشروط
                        والأحكام</a></div>

                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                                                                               href="../_general/policy/cookie-policy.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                        ملفات تعريف الارتباط</a></div>
                </div>
                <div class="GlobalFooter__Text-sc-1jle5k5-6 bpBByd"><p style="text-align:right">هذا الموقع ليس وكالة
                    أنباء أو موقع معلومات أو مدونة. صفحة الويب هذه تهدف إلى المنشورات الترويجية التي تستخدم أسلوب سرد
                    القصص لتوضيح نطاق الخدمات والمنتجات المعروضة. لذلك ، فإن القصة التي يتم سردها في هذه الصفحة هي عبارة
                    عن إعلان تجاري أو إعلان لأغراض إعلامية ووظيفية ، لفهم إمكانات ما هو مقترح. تحذير عام من المخاطر:
                    تنطوي أنشطة الاستثمار على درجة عالية من المخاطر وقد تؤدي إلى خسارة كاملة للمبلغ المستثمر. لهذا السبب
                    ، قد لا تكون هذه الأنشطة مناسبة لكل نوع من المستثمرين. يجب ألا تستثمر أموالًا لا يمكنك تحمل خسارتها.

                </p></div>
            </div>
        </div>
    </div>
</div>


<script src="./js/jquery-3.7.1.min.js"  ></script>
<script>
    $(".ButtonCustom__ButtonWraper-sc-gd1wqz-0").click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("#register").offset().top
        }, 1000);
    });
</script>

</body>
</html>