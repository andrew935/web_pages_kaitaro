<?php

$keyword = $_GET['keyword'] ?? 'BANCO DE CHILE';

 $dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = "Banco-cl"; // Replace with your offer name
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

// require_once dirname(__FILE__) . '/../_general_v2/Settings.php';
require_once dirname(__DIR__) . '/../../_assets/Settings.php';
$settings = new Settings();
$params = $settings->before_html($p_lang,$p_country);
$params .="&utm_campaign=". $p_keyword;
$params .="&lang=". $p_lang;
   $params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TradeLG</title>
      <link rel="shortcut icon" href="img/logo.png">

      <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playball&display=swap');

</style>
     
      <!-- Page css -->
      <link rel="stylesheet" href="assets/bootstrap.min.css">
      <link rel="stylesheet" href="assets/style.min.css">
     
      <?php $settings->in_header();?>
   </head>
   <body>
   <?php $settings->in_body();?>
      <div id="cmt" hidden=""></div>
      <header>
         <div class="header container-fluid h-100">
            <div class="row h-100">
               <div class="col-12 position-relative px-0">
                  <picture>

                     <img src="assets/header-mobile.jpg" width="375" height="430" loading="lazy" class="img-fluid d-block d-xs-block d-sm-none w-100 lp-action m-0 mobile-img">
                  </picture>
                  <picture>
                     <img src="assets/header-tablet.jpg" width="768" height="507" loading="lazy" class="img-fluid w-100 d-none d-sm-block d-md-block d-xl-none my-0 lp-action">
                  </picture>
                  <div class="container-content container-fluid">
                     <div class="row h-100">
                        <div class="col-12 px-0">
                           <div class="content lp-action">
                              <h3>
                                 Invierte en
                              </h3>
                              <h1 class="lp-action">
                                 BANCO DE CHILE
                              </h1>
                              <h2>
                                 <span>+10%</span> en 5 meses
                              </h2>
                              <h5>
                                 Los analistas predicen un futuro brillante para las acciones de la compañía
                              </h5>
                              <h4>
                                 Gana un segundo ingreso en línea
                              </h4>
                              <p>
                                 Los inversores siempre buscan acciones con el potencial de superar en la
                                 temporada de ganancias, y Banco de Chile es una de esas compañías.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-3 mt-lg-0 desktopForm-container">
            <section class="form-container mt-lg-4" id="desktopForm">
               <div class="nxreg">
                  <div class="nx-signup nxreg-form form-wrapper">
                     <div class="nx-signup-form nx-signup__form">
                     <div class="form-heading-ctr">
                              <h2 class="text-center">Aprende cómo obtener ganancias de Banco de Chile</h2>
                           </div>
                           <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="350px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                           <div class="col-12 col-md-6 col-xl-12 order-md-8 order-xl-8 dss-ctr payments-container">
                            <div class="payment-form">
                                <img class="img-fluid" src="assets/visa.png" alt="visa">
                                <img class="img-fluid" src="assets/mastercard.png" alt="mastercard">
                                <img class="img-fluid" src="assets/maestro.png" alt="maestro">
                                <img class="img-fluid" src="assets/apple-pay.png" alt="apple">
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <main>
         <section class="advSection">
            <p>
               Advertorial
            </p>
         </section>
         <section class="article-section">
            <picture>
              
               <img src="assets/pic.jpg" loading="lazy" width="570" height="287" class="img-fluid w-100 lp-action article-img my-auto mt-lg-0" alt="article image">
            </picture>
            <div class="article-content">
               <h3>
                  Banco de Chile supera las predicciones
               </h3>
               <p>
                  Banco de Chile tiene ganancias próximas, y los eventos se están desarrollando muy bien para
                  su informe. Esto se debe a que la compañía está viendo una actividad favorable en la
                  revisión de estimaciones de ganancias, lo cual es una buena señal de que superará las
                  expectativas. Después de todo, los analistas han aumentado las estimaciones a +8.33% justo
                  antes de las ganancias, con la información más actualizada posible, lo cual es un buen
                  indicador.
               </p>
            </div>
         </section>
         <div class="boxes-section">
            <h3>
               Empezar es fácil. Recibe acceso a:
            </h3>
            <div class="boxesWrapper">
               <div class="box">
                  <a href="#" class="scroll_to_register"><img src="assets/1.png" class="img-fluid lp-action " width="50" height="50" loading="lazy" alt="box image"></a>
                  <p>
                     Plataforma segura y autorizada
                  </p>
               </div>
               <div class="box">
               <a href="#" class="scroll_to_register"><img src="assets/1.png" class="img-fluid lp-action" width="50" height="50" loading="lazy" alt="box image"></a>
                  <p>
                     Alta rentabilidad y gráficos actualizados a tiempo real
                  </p>
               </div>
               <div class="box">
               <a href="#" class="scroll_to_register"><img src="assets/1.png" class="img-fluid lp-action " width="50" height="50" loading="lazy" alt="box image"></a>
                  <p>
                     Herramientas de aprendizaje sencillas y un asesor personal
                  </p>
               </div>
               <div class="box">
               <a href="#" class="scroll_to_register"> <img src="assets/1.png" class="img-fluid lp-action " width="50" height="50" loading="lazy" alt="box image"></a>
                  <p>
                     Soporte las 24 horas y asistencia continua
                  </p>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <a href="#" class="cta-btn lp-action scroll_to_register">Regístrate ahora</a>
               </div>
               <div class="col-12 text-center">
                  <div class="payments-container">
                     <div class="payment-form">
                        <img class="img-fluid" src="assets/visa.png" alt="visa">
                        <img class="img-fluid" src="assets/mastercard.png" alt="mastercard">
                        <img class="img-fluid" src="assets/maestro.png" alt="maestro">
                        <img class="img-fluid" src="assets/skrill.png" alt="skrill">
                        <img class="img-fluid" src="assets/bank-transfer.png" alt="bank-transfer">
                        <img class="img-fluid" src="assets/apple-pay.png" alt="apple">
                        <img class="img-fluid" src="assets/paysafecard.png" alt="paysafecard">
                        <img class="img-fluid" src="assets/safetypay.png" alt="safetypay">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 my-1 text-center">
                  <a href="#" class="scroll_to_register" >
                    <img src="img/logo.png" class="img-fluid main-logo my-2" alt="logo" width="97" height="48" loading="lazy">
                  </a>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 nav-row">
                  <br>
                  <div>
                     <p>
                        <a href="#" class="scroll_to_register" >Contáctenos</a>
                     </p>
                     <p>
                        <a href="<?=$settings->policy()?>" target="_blank" class="my-3 my-lg-0">
                            Política de privacidad
                        </a>
                     </p>
                     <p>
                        <a href="<?=$settings->terms()?>" target="_blank">
                            Términos y condiciones
                        </a>
                     </p>
                  </div>
                  <br>
               </div>
               <div class="col-12">
                  <div data-lgl="disclaimer" class="disclaimer-ctr">
                     <p>*Por favor, lea la <a href="<?=$settings->policy()?>" target="_blank" rel="noopener">Política de Privacidad</a> y los <a href="<?=$settings->terms()?>" target="_blank" rel="noopener">Términos y Condiciones</a> antes de continuar.</p>
                     Este anuncio no debe interpretarse como una recomendación para comprar o vender ningún valor y/o como oferta de servicios para clientes que residan en jurisdicciones en las que dicha oferta no esté autorizada. El uso de páginas web de brokers se efectúa al propio riesgo del cliente. El trading online puede provocar una pérdida completa o sustancial de fondos.<br>TradeLG è un marchio di Adlegion Ltd (numero di società 129263).<br>Esta página de aterrizaje es propiedad de Adlegion Ltd <br>Adlegion Ltd Suite 108, <br>Premier Building Victoria, <br>Mahe, Seychelles
                  </div>
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
            <style>
		html {
		scroll-behavior: smooth;
		}
	  </style>
   </body>
</html>
