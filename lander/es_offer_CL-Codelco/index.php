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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <style>
        footer {
            font-size: 0.8em;
            background: lightgrey;
            margin-top: 2em;
            text-align: center;
        }

        .center{
            margin:auto;
        }
    </style>
    <footer>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 center" style="text-align: center;">
                        <a href="#" target="_blank" class="center">
                            <img src="img/logo.png" class="img-fluid center" alt="logo" width="97" height="48" loading="lazy" />
                        </a>

                </div>
                <div class="col-lg-12   ">

                    <!--<div class="text-left">
                        <p>
                            <a href="#" target="_blank" class="scroll_to_register">Contáctenos</a>
                        </p>
                        <p>
                            <a href="<?php /*=$settings->policy()*/?>" target="_blank" class="my-3 my-lg-0">Política de privacidad</a>
                        </p>
                        <p>
                            <a href="<?php /*=$settings->terms()*/?>" target="_blank">Términos y condiciones</a>
                        </p>
                    </div>-->
                    <br />
                </div>
                <div class="col-12">
                    <div data-lgl="disclaimer_taboola" class="disclaimer-ctr">
                        <p>
                            *Por favor, lea la <a href="<?=$settings->policy()?>"  id="policy" target="_blank" rel="noopener">Política de Privacidad</a> y los
                            <a href="<?=$settings->terms()?>" id="terms"  target="_blank" rel="noopener">Términos y Condiciones</a> antes de continuar.
                        </p>
                        <p>
                            Este anuncio no debe interpretarse como una recomendación para comprar o vender ningún valor y/o como oferta de servicios para clientes que residan en jurisdicciones en las que dicha oferta no esté
                            autorizada. El uso de páginas web de brokers se efectúa al propio riesgo del cliente. El trading online puede provocar una pérdida completa o sustancial de fondos. Los CFDs son instrumentos complejos y vienen
                            con un alto riesgo de perder dinero rápidamente debido al apalancamiento. Entre el 74% y el 89% de las cuentas de los inversores minoristas pierden dinero al operar CFDs. Usted debe considerar si comprende
                            cómo funcionan los CFDs y si puede permitirse asumir el alto riesgo de perder su dinero.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <?php $settings->in_footer();?>
        
	  <style>
		html {
		scroll-behavior: smooth;
		}
	  </style>

       
    </body>
</html>
