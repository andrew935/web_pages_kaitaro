<?php

$keyword = $_GET['keyword'] ?? 'CODELCO';

 $dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = "CODELCO"; // Replace with your offer name
$p_lang    = "es"; // page Language LOW CASE 
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "CL"; // Replace with the default country ISO Upper case for arabic make AE

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
<html lang="es" dir="rtl" data-locale="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Codelco - Your Investment Potential</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
        <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
</style>
        <link rel="stylesheet" href="assets/style.css" />

        <?php $settings->in_header();?>
    </head>
    <body>
    <?php $settings->in_body();?>
        <div id="root">
            <div id="container-thanks" class="container-thanks">
                <div id="thank-you-icon" class="thank-you-icon">✓</div>
                <h1>¡Gracias!</h1>
                <p>Nos pondremos en contacto con usted en breve</p>
            </div>
            <div class="react_kali_7932__Wrapper-sc-fxsuf1-0 hzwAxE">
                <div style="display: contents;">
                    <section class="Top__Wrapper-sc-zew2h9-0 hAXtZI">
                        <div class="Container-sc-a4fxlm-0 iaZBIw">
                            <div class="Top__Content-sc-zew2h9-1 iZZGPq">
                                <div class="Top__Image-sc-zew2h9-2 jGMclG">
                                    <div data-editable="true" data-name="top_logo">
                                        <div class="top__logo3">
                                            <img src="assets/3.png" alt="s1" />
                                            <img src="assets/2.png" alt="s2" />
                                            <img src="assets/1.png" alt="s3" />
                                        </div>
                                        <div class="top__logo3">
                                            <img src="assets/6.png" alt="s4" />
                                            <img src="assets/5.png" alt="s5" />
                                            <img src="assets/4.png" alt="s6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Top__Text-sc-zew2h9-3 gySJtW">
                                <div data-editable="true" data-name="top__text">
                                    <h3>
                                        Descubra ahora la mejor oportunidad de inversión en Codelco y obtenga grandes ingresos
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div style="display: contents;">
                <div class="FormMain__FormWrapper-sc-yq786k-0 edNWOp">
                    <div class="FormBlock__Body-sc-nabd0i-0 bNCrpg">
                        <div class="form keBeqU zz">
                           
                            <div class="lp_register_form">
                            <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="300px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                               
                               
                            </div>

                            <div class="form-terms"></div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Top__Text-sc-zew2h9-3 gySJtW">
            <div data-editable="true" data-name="top__text">
                <h3>
                    Tras rellenar el formulario, su asistente personal de inversiones se pondrá en contacto con usted en breve y le enviará toda la información a su correo electrónico
                </h3>
            </div>
        </div>
      
        <div style="display: contents;">
            <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 hDVMbF">
                <div class="Container-sc-a4fxlm-0 iaZBIw">
                    <div class="GlobalFooter__Logo-sc-1jle5k5-1 hkhlrZ">
                        <a  href="#" class="scroll_to_register"><img src="img/logo.png"  alt="Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php $settings->in_footer();?>
        
	  <style>
		html {
		scroll-behavior: smooth;
		}
	  </style>
	  <script>
            $("a.scroll_to_register").click(function(event) {
               event.preventDefault();
               $('html, body').animate({
                  scrollTop: $("#registerForm").offset().top
               }, 500);
            });
      </script>
       
    </body>
</html>
