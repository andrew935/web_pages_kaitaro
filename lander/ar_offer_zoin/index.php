<?php

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$offer_url = 'https://web.littlemix.cloud/offers/ar/zoin';
$p_keyword = "zoin"; // Replace with your offer name
$p_lang    = "ar"; // Replace with the language of your offer
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "AE"; // Replace with the default country of your offer

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
<html lang=ar dir='rtl'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="advertiseeasyplus">
    <title>advertiseeasyplus</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel='shortcut icon' type='image/x-icon' href='images/Advertiseeasyplus_1699346444.png'/>

    <?php $settings->in_header();?>
</head>
<body>
<?php $settings->in_body();?>

<div id="root">
    <div class="react_gen__Wrapper-sc-1t3rzpr-0 ijGLci">
        <div style="display:contents">
            <div class="ChangeableBackgroundSection__StyledBgWrapper-sc-if138y-0 foTzUa">
                <div data-editable="true" data-name="top-wrapper-bg-mobile"
                     class="ChangeableBackgroundSection__StyledBgWrapperMobile-sc-if138y-2 dDwyju">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="top-wrapper-bg-tablet"
                     class="ChangeableBackgroundSection__StyledBgWrapperTablet-sc-if138y-3 egjuLH">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="top-wrapper-bg-desktop"
                     class="ChangeableBackgroundSection__StyledBgWrapperDesktop-sc-if138y-4 iraRIK">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div class="ChangeableBackgroundSection__ContentContainer-sc-if138y-1 eTrkiF">
                    <section class="Top__Wrapper-sc-1tas5a9-0 jWlhDw">
                        <div class="Top__WrapperImage-sc-1tas5a9-1 GHMgT">
                            <div data-editable="true" data-name="woman"><img alt="" height="174"
                                                                             src="images/BC2E4B7C11_1700215504.png"
                                                                             style="height:inherit;width:auto;max-width:100%"
                                                                             width="600"/></div>
                        </div>
                        <div class="Container-sc-a4fxlm-0 Top__TopContainer-sc-1tas5a9-2 iaZBIw cBpNZ">
                            <div class="Top__Content-sc-1tas5a9-3 cCMOlh">
                                <div class="Top__Title-sc-1tas5a9-5 dskrTq">
                                    <div data-editable="true" data-name="top__title"><p class="font-size-24"
                                                                                        data-font-size="24">
                                            الاستثمار في
                                        </p></div>
                                </div>
                                <div class="Top__Text-sc-1tas5a9-6 fUPKyu">
                                    <div data-editable="true" data-name="top__text"><p class="font-size-36"
                                                                                       data-font-size="36">
                                            الشركة الكويتية العملاقة
                                        </p></div>
                                </div>
                                <div class="Top__Logo-sc-1tas5a9-4 jjxoCB">
                                    <div data-editable="true" data-name="logo"><img alt="" height="174"
                                                                                    src="images/ZainLogoBlack02original_1700470374.png"
                                                                                    style="height:inherit;width:auto;max-width:100%"
                                                                                    width="600"/></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <section class="Strip__Wrapper-sc-ta7s9c-0 dKrmRh">
                <div class="Strip__FormMainWrapper-sc-ta7s9c-1 kHzmtv">
                    <div class="FormMain__FormWrapper-sc-p3mly0-0 hLEylF">
                        <div class="FormBlock__Top-sc-5sh3he-0 iwVGmf">
                            <div data-editable="true" data-name="form__title"><p>
                                    استثمر في زين
                                </p></div>
                        </div>
                        <div class="FormBlock__Body-sc-5sh3he-1 ixthwS">
                            <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 380px;"></iframe>
                        </div>
                        <div class="FormBlock__Payments-sc-5sh3he-3 fsDzwa"><img
                                src="images/payments.svg?v=3343"
                                loading="lazy" alt="payments.svg"/></div>
                    </div>
                </div>
                <div class="ChangeableBackgroundSection__StyledBgWrapper-sc-if138y-0 foTzUa">
                    <div data-editable="true" data-name="strip-wrapper-bg-mobile"
                         class="ChangeableBackgroundSection__StyledBgWrapperMobile-sc-if138y-2 dDwyju">
                        <div data-ce-tag="bkgimg" style="background-color:#EC1C24"></div>
                    </div>
                    <div data-editable="true" data-name="strip-wrapper-bg-tablet"
                         class="ChangeableBackgroundSection__StyledBgWrapperTablet-sc-if138y-3 egjuLH">
                        <div data-ce-tag="bkgimg" style="background-color:#EC1C24"></div>
                    </div>
                    <div data-editable="true" data-name="strip-wrapper-bg-desktop"
                         class="ChangeableBackgroundSection__StyledBgWrapperDesktop-sc-if138y-4 iraRIK">
                        <div data-ce-tag="bkgimg" style="background-color:#EC1C24"></div>
                    </div>
                    <div class="ChangeableBackgroundSection__ContentContainer-sc-if138y-1 eTrkiF">
                        <section class="Strip__Backgroud-sc-ta7s9c-2 etedmu">
                            <div class="Container-sc-a4fxlm-0 iaZBIw">
                                <div class="Strip__Text-sc-ta7s9c-3 bzyDXu">
                                    <div data-editable="true" data-name="strip__text"><p>
                                            اكتشف مدى سهولة جني الأرباح من خلال أهم الأسهم الجديدة في الكويت!
                                        </p></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <div style="display:contents">
            <div class="ChangeableBackgroundSection__StyledBgWrapper-sc-if138y-0 foTzUa">
                <div data-editable="true" data-name="features-wrapper-bg-mobile"
                     class="ChangeableBackgroundSection__StyledBgWrapperMobile-sc-if138y-2 dDwyju">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="features-wrapper-bg-tablet"
                     class="ChangeableBackgroundSection__StyledBgWrapperTablet-sc-if138y-3 egjuLH">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="features-wrapper-bg-desktop"
                     class="ChangeableBackgroundSection__StyledBgWrapperDesktop-sc-if138y-4 iraRIK">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div class="ChangeableBackgroundSection__ContentContainer-sc-if138y-1 eTrkiF">
                    <section class="Features__Wrapper-sc-qwtk5w-0 jrVkGG">
                        <div class="Container-sc-a4fxlm-0 Features__FeaturesContainer-sc-qwtk5w-1 fjyKqF gxpEPY">
                            <div class="Features__Title-sc-qwtk5w-2 cagyld">
                                <div data-editable="true" data-name="features__title"><p>ستتمكن من الوصول الى:</p></div>
                            </div>
                            <div class="Features__List-sc-qwtk5w-3 ifEFWy">
                                <div class="Features__Item-sc-qwtk5w-4 gzRSOp">
                                    <div class="Features__ItemIcon-sc-qwtk5w-5 iIUCYF">
                                        <div data-editable="true" data-name="features__icon_1"><img
                                                src="images/features-icon-1.svg?v=3343"
                                                alt="features-icon-1.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Features__ItemText-sc-qwtk5w-6 fVgwYU">
                                        <div data-editable="true" data-name="features_item__text_1"><p>أدوات تعليمية
                                                سهلة الاستخدام</p></div>
                                    </div>
                                </div>
                                <div class="Features__Item-sc-qwtk5w-4 gzRSOp">
                                    <div class="Features__ItemIcon-sc-qwtk5w-5 iIUCYF">
                                        <div data-editable="true" data-name="features__icon_2"><img
                                                src="images/features-icon-2.svg?v=3343"
                                                alt="features-icon-2.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Features__ItemText-sc-qwtk5w-6 fVgwYU">
                                        <div data-editable="true" data-name="features_item__text_2"><p>فوائد اقتصادية
                                                محتملة</p></div>
                                    </div>
                                </div>
                                <div class="Features__Item-sc-qwtk5w-4 gzRSOp">
                                    <div class="Features__ItemIcon-sc-qwtk5w-5 iIUCYF">
                                        <div data-editable="true" data-name="features__icon_3"><img
                                                src="images/features-icon-3.svg?v=3343"
                                                alt="features-icon-3.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Features__ItemText-sc-qwtk5w-6 fVgwYU">
                                        <div data-editable="true" data-name="features_item__text_3"><p>منصة آمنة
                                                ومنظمة</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ChangeableButtonBg__ButtonContainer-sc-bazz8a-0 gyEfDg">
                                <div data-editable="true" data-name="features-button-background">
                                    <div data-ce-tag="bkgimg"
                                         style="background:rgb(139, 4, 248);background-size:cover;background-position:center"></div>
                                </div>
                                <button type="button" class="Button__ButtonWrapper-sc-fkdnkk-0 hsigSE">
                                    <div data-editable="true" data-name="features__btn"><p>
                                            ابدأ تداول زين
                                        </p></div>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="ChangeableBackgroundSection__StyledBgWrapper-sc-if138y-0 foTzUa">
                <div data-editable="true" data-name="article-wrapper-bg-mobile"
                     class="ChangeableBackgroundSection__StyledBgWrapperMobile-sc-if138y-2 dDwyju">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="article-wrapper-bg-tablet"
                     class="ChangeableBackgroundSection__StyledBgWrapperTablet-sc-if138y-3 egjuLH">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="article-wrapper-bg-desktop"
                     class="ChangeableBackgroundSection__StyledBgWrapperDesktop-sc-if138y-4 iraRIK">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div class="ChangeableBackgroundSection__ContentContainer-sc-if138y-1 eTrkiF">
                    <section class="Article__Wrapper-sc-juzq0d-0 fecNMN">
                        <div class="Container-sc-a4fxlm-0 Article__ArticleContainer-sc-juzq0d-1 iaZBIw lbYsun">
                            <div class="Article__Image-sc-juzq0d-4 hjYveo">
                                <div data-editable="true" data-name="article1"><img alt="" height="174"
                                                                                    src="images/FPTSEYUNHATZFU4BGW4B7ZDWBY_1702635352.jpg"
                                                                                    style="height:inherit;width:auto;max-width:100%"
                                                                                    width="600"/></div>
                            </div>
                            <div class="Article__Title-sc-juzq0d-2 fbJred">
                                <div data-editable="true" data-name="article__title"><p>مبتدئ أو خبير، يمكن لأي شخص
                                        التداول!</p></div>
                            </div>
                            <div class="Article__Text-sc-juzq0d-3 cYmFVo">
                                <div data-editable="true" data-name="article__text"><p>تعلم الربح من التداول أبسط مما
                                        تعتقد. تقدم الوساطة المرخصة لدينا للمسجلين الجدد نصائح مجانية من الخبراء
                                        الماليين لمساعدتهم على البدء، بالإضافة إلى المواد التعليمية والدعم على مدار 24
                                        ساعة الذي لا يمكن للمستثمرين الحصول عليه إلا من الخدمات المتميزة. إذا كنت ترغب
                                        دائمًا في الاستثمار، ولكنك لا تعرف كيف، فهذا هو الوقت المثالي للبدء!</p></div>
                            </div>
                            <div class="ChangeableButtonBg__ButtonContainer-sc-bazz8a-0 NqBnf">
                                <div data-editable="true" data-name="article-button-background">
                                    <div data-ce-tag="bkgimg"
                                         style="background:rgb(136, 2, 245);background-size:cover;background-position:center"></div>
                                </div>
                                <button type="button" class="Button__ButtonWrapper-sc-fkdnkk-0 beMOmx">
                                    <div data-editable="true" data-name="article__btn"><p>
                                            ابدأ تداول زين
                                        </p></div>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div style="display:contents">
            <div class="ChangeableBackgroundSection__StyledBgWrapper-sc-if138y-0 foTzUa">
                <div data-editable="true" data-name="stepper-wrapper-bg-mobile"
                     class="ChangeableBackgroundSection__StyledBgWrapperMobile-sc-if138y-2 dDwyju">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="stepper-wrapper-bg-tablet"
                     class="ChangeableBackgroundSection__StyledBgWrapperTablet-sc-if138y-3 egjuLH">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div data-editable="true" data-name="stepper-wrapper-bg-desktop"
                     class="ChangeableBackgroundSection__StyledBgWrapperDesktop-sc-if138y-4 iraRIK">
                    <div data-ce-tag="bkgimg" style="background-color:transparent"></div>
                </div>
                <div class="ChangeableBackgroundSection__ContentContainer-sc-if138y-1 eTrkiF">
                    <section class="Stepper__Wrapper-sc-t928xn-1 hhhyaO">
                        <div class="Container-sc-a4fxlm-0 Stepper__StyledContainer-sc-t928xn-0 fjyKqF rGsgt">
                            <div class="Stepper__Title-sc-t928xn-2 kWvtaB">
                                <div data-editable="true" data-name="stepper__title"><p>ابدأ بثلاث خطوات سهلة:</p></div>
                            </div>
                            <div class="Stepper__List-sc-t928xn-3 SMpEa">
                                <div class="Stepper__Item-sc-t928xn-4 lpEJy">
                                    <div class="Stepper__ItemIcon-sc-t928xn-5 lavZsh">
                                        <div data-editable="true" data-name="stepper__icon_1"><img
                                                src="images/stepper-icon-1.svg?v=3343"
                                                alt="stepper-icon-1.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Stepper__ItemTitle-sc-t928xn-6 hOFnVP">
                                        <div data-editable="true" data-name="stepper_item__title_1"><p>سجل حسابك</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Stepper__Item-sc-t928xn-4 lpEJy">
                                    <div class="Stepper__ItemIcon-sc-t928xn-5 lavZsh">
                                        <div data-editable="true" data-name="stepper__icon_2"><img
                                                src="images/stepper-icon-2.svg?v=3343"
                                                alt="stepper-icon-2.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Stepper__ItemTitle-sc-t928xn-6 hOFnVP">
                                        <div data-editable="true" data-name="stepper_item__title_2"><p>تحقق من
                                                معلوماتك</p></div>
                                    </div>
                                </div>
                                <div class="Stepper__Item-sc-t928xn-4 lpEJy">
                                    <div class="Stepper__ItemIcon-sc-t928xn-5 lavZsh">
                                        <div data-editable="true" data-name="stepper__icon_3"><img
                                                src="images/stepper-icon-3.svg?v=3343"
                                                alt="stepper-icon-3.svg" loading="lazy"/></div>
                                    </div>
                                    <div class="Stepper__ItemTitle-sc-t928xn-6 hOFnVP">
                                        <div data-editable="true" data-name="stepper_item__title_3"><p>قم بتسجيل الدخول
                                                وابدأ التداول!</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="react_gen__FormStickyWrapper-sc-1t3rzpr-1 cEqiVL">
            <div style="display:contents">
                <div class="FormSticky__FormStickyWrapper-sc-1a96nfv-0 bTXodn">
                    <div class="FormSticky__FormWrapper-sc-1a96nfv-1 mnFzs">
                        <div class="FormBlock__Top-sc-5sh3he-0 iwVGmf">
                            <div data-editable="true" data-name="form__title"><p>
                                    استثمر في زين
                                </p></div>
                        </div>
                        <div class="FormBlock__Body-sc-5sh3he-1 ixthwS">
                            <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 380px;"></iframe>
                        </div>
                        <div class="FormBlock__Payments-sc-5sh3he-3 fsDzwa"><img
                                src="images/payments.svg?v=3343"
                                loading="lazy" alt="payments.svg"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="react_gen__FormFixedWrapper-sc-1t3rzpr-2 ibEyzN">
            <div style="display:contents"></div>
        </div>
    </div>
    <div style="display:contents">
        <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 hDVMbF">
            <div class="Container-sc-a4fxlm-0 iaZBIw">
                <!--<div class="GlobalFooter__Logo-sc-1jle5k5-1 hkhlrZ"><img src="images/edeasy_1699346767.png" loading="lazy" alt="Logo"/></div>-->
                <div class="GlobalFooter__Links-sc-1jle5k5-2 jeOmhK">
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="../../../_general_v2/policy/policy.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                            الخصوصية</a></div>
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="../../../_general_v2/policy/termsandconditions.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الشروط
                            والأحكام</a></div>
                   <!-- <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="#"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">الاتصال</a>
                    </div>-->
                    <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="../../../_general_v2/policy/cookie-policy.php"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">سياسة
                            ملفات تعريف الارتباط</a></div>
                    <!--<div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a href="#"
                                                                               class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">من
                            نحن</a></div>-->
                </div>
                <div class="GlobalFooter__Text-sc-1jle5k5-5 kVtDGa"><p style="text-align:right"><span
                            style="letter-spacing:0.15008px">إخلاء المسؤولية: المحتوى والمعلومات والمواد المقدمة على هذا الموقع مخصصة فقط لأغراض إعلامية عامة. تسعى وكالتنا التسويقية جاهدة لضمان الدقة والعملة ، لكننا لا نقدم أي ضمانات أو إقرارات ، صريحة أو ضمنية ، حول اكتمال المعلومات المقدمة أو موثوقيتها أو ملاءمتها أو توفرها. يتم تشجيع العملاء والزوار على استخدام المعلومات وفقًا لتقديرهم ومخاطرهم. أي اعتماد تضعه على المعلومات المقدمة يكون وفقًا لتقديرك الخاص ، وننصح بالسعي للحصول على مشورة مهنية مستقلة عند اتخاذ قرارات العمل الحاسمة.</span><br/>
                    </p></div>
            </div>
        </div>
    </div>
</div>

<div class="modal-portal">
    <div class="AnimationModal__Backdrop-sc-1rrgsa7-0 igMHfR">
        <div class="AnimationModal__Content-sc-1rrgsa7-1 bxSvfC modal-content">
            <div class="FormFixed__FormWrapper-sc-1jxe51d-0 fuNXAf">
                <div class="FormBlock__Top-sc-5sh3he-0 iwVGmf">
                    <div data-editable="true" data-name="form__title"><p>
                            استثمر في زين
                        </p></div>
                </div>
                <div class="FormBlock__Body-sc-5sh3he-1 ixthwS">
                    <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 380px;"></iframe>
                </div>
                <div class="FormBlock__Payments-sc-5sh3he-3 fsDzwa"><img src="images/payments.svg?v=6326" loading="lazy"
                                                                         alt="payments.svg"></div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modalTriggerButtons = document.querySelectorAll('.Button__ButtonWrapper-sc-fkdnkk-0');
        var modal = document.querySelector('.igMHfR');
        var modalContainer = document.querySelector('.fuNXAf');
        var scrollContainer = document.querySelector('.kHzmtv');

        modalTriggerButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                if (window.innerWidth >= 1200) {
                    modal.classList.add('active');
                } else {
                    scrollContainer.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        modal.addEventListener('click', function (event) {
            if (!modalContainer.contains(event.target)) {
                modal.classList.remove('active');
            }
        });
    });
</script>

<?php $settings->in_footer();?>
</body>
</html>
        