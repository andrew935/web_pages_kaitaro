<?php
   $keyword = $_GET['keyword'] ?? 'Trade LG';
   
    $dev = $_GET['dev'] ?? 0;
   if ($dev == 1){
       ini_set('display_errors', '1');
       ini_set('display_startup_errors', '1');
       error_reporting(E_ALL);
   }
   
    $p_keyword = "SQM"; // Replace with your offer name
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
<html lang="es">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" href="img/logo.png" />
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
      </style>
      <!-- Page css -->
      <link rel="stylesheet" href="assets/iti.min.css">
      <link rel="stylesheet" href="assets/bootstrap.min.css">
      <link rel="stylesheet" href="assets/style.min.css">
      <title>TradeLG</title>
      <?php $settings->in_header();?>
   </head>
   <body>
      <?php $settings->in_body();?>
      <div id="cmt" hidden=""></div>
      <header>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 my-1 text-center">
                  <a href="#" target="_blank">
                  <img src="img/logo.png" class="img-fluid main-logo my-2" alt="logo" width="97" height="48" loading="lazy" />
                  </a>
               </div>
            </div>
         </div>
         <div class="header container-fluid h-100">
            <div class="row h-100">
               <div class="col-12 position-relative px-0">
                  <picture>
                     <img src="assets/header-mobile.jpg" width="375" height="430" loading="lazy" class="img-fluid d-block d-xs-block d-sm-none w-100 lp-action m-0 mobile-img" />
                  </picture>
                  <picture>
                     <img src="assets/header-tablet.jpg" width="768" height="507" loading="lazy" class="img-fluid w-100 d-none d-sm-block d-md-block d-xl-none my-0 lp-action" />
                  </picture>
                  <div class="container-content container-fluid">
                     <div class="row h-100">
                        <div class="col-12 px-0">
                           <div class="content lp-action">
                              <h3>
                                 Haga una fortuna con <br class="d-none d-xl-block" />
                                 el gigante químico chileno
                              </h3>
                              <h2>
                                 Invierte en
                              </h2>
                              <h1 class="lp-action">
                                 SQM
                              </h1>
                              <p>¡Aproveche la volatilidad de las acciones chilenas y <strong>obtenga ganancias sin importar si suben o bajan!</strong></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <main>
         <section class="header-line">
            <div class="wrapper">
               <p>¿Quieres poner tu riqueza en una base sólida? <strong>¡Regístrate ahora y comienza a invertir!</strong></p>
            </div>
         </section>
         <div class="container mt-3 mt-lg-0 desktopForm-container">
            <section class="form-container mt-lg-4" id="desktopForm">
               <div class="nxreg">
                  <div class="nx-signup nxreg-form">
                     <div class="nx-signup-form nx-signup__form">
                        <div autocomplete="off"  id="mainForm" class="nxreg-sign-up-form needs-validation main-form selected" novalidate="">
                           <div class="form-heading-ctr">
                              <h2 class="text-center">Invierte en SQM</h2>
                           </div>
                           <div class="form-wrapper user-inputs pt-3 row">
                              <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                              <div class="col-12 server-error-body align-self-center order-md-9 order-xl-7">
                                 <div id="msgContainer" class="nxreg-server-error-wrapper"></div>
                              </div>
                              <div class="col-12 col-md-6 col-xl-12 order-md-8 order-xl-8 dss-ctr payments-container">
                                 <div class="payment-form">
                                    <img class="img-fluid" src="assets/visa.png" alt="visa" />
                                    <img class="img-fluid" src="assets/mastercard.png" alt="mastercard" />
                                    <img class="img-fluid" src="assets/maestro.png" alt="maestro" />
                                    <img class="img-fluid" src="assets/apple-pay.png" alt="apple" />
                                 </div>
                              </div>
                              <!-- <div class="col-12 mb-0 col-md-6 col-xl-12 order-md-9 order-xl-9">
                                 <p class="cfd px-0">Para invertir en línea debes tener al menos 18 años. Capital mínimo requerido 200 $.</p>
                                 </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <section class="section-1">
            <div class="sectionWrapper">
               <div class="sliderWrapper">
                  <h4>
                     Use nuestra calculadora de inversiones para <br class="d-none d-lg-block" />
                     ver cuánto podría ganar invirtiendo en SQM CFD.
                  </h4>
                  <div class="slider-value">
                     <form class="range">
                        <div class="form-group range__value" style="left: calc(0% + 385px);">
                           <img src="assets/left-arrow.png" alt="" />
                           <span id="rangeValue">$ 200</span>
                           <img src="assets/right-arrow.png" alt="" />
                        </div>
                        <div class="form-group range__slider selected">
                           <input type="range" id="rangeSlider" step="50" min="200" max="20000" value="200" />
                        </div>
                     </form>
                  </div>
               </div>
               <div class="resultWrapper">
                  <h5>
                     GANANCIAS POTENCIALES
                  </h5>
                  <p class="resultValue">$500</p>
               </div>
            </div>
         </section>
         <section class="section-2">
            <div class="sectionWrapper">
               <img src="assets/pic.jpg" class="lp-action" alt="" />
               <div class="text">
                  <h3>
                     ¿Por qué invertir en SQM CFD?
                  </h3>
                  <p>
                     Uno de los principales productores mundiales de litio, yodo y nutrientes vegetales especializados, SQM, reportó sus resultados financieros y operativos del primer trimestre de 2024. En detalle, la compañía
                     experimentó un crecimiento de más del 30% en los volúmenes de ventas de litio en comparación con el año anterior, superando las 43,000 toneladas métricas. Además, SQM concluyó la adquisición del proyecto de litio
                     Andover en Australia Occidental y completó con éxito la puesta en marcha de la planta de conversión de hidróxido de litio Dixin en Sichuan, China.
                  </p>
               </div>
            </div>
         </section>
         <section class="section-3">
            <div class="sectionWrapper">
               <h3>
                  Regístrate y consigue acceso a:
               </h3>
               <div class="boxesWrapper">
                  <div class="box">
                     <img src="assets/1.png" class="lp-action" alt="1" />
                     <p>
                        Plataforma segura y regulada
                     </p>
                  </div>
                  <div class="box">
                     <img src="assets/2.png" class="lp-action" alt="2" />
                     <p>
                        Beneficios económicos potenciales
                     </p>
                  </div>
                  <div class="box">
                     <img src="assets/3.png" class="lp-action" alt="3" />
                     <p>
                        Herramientas de aprendizaje
                     </p>
                  </div>
               </div>
               <a href="" class="scroll_to_register" style="width:100%; text-decoration: none;"><button type="button" class="cta-btn lp-action">
               Invierta en SQM CFD hoy y obtenga un retorno constante y elevado sobre su inversión.
               </button></a>
            </div>
         </section>
         <div class="container">
            <div class="row">
               <div class="col-12 text-center">
                  <div class="payments-container">
                     <div class="payment-form">
                        <img class="img-fluid" src="assets/visa.png" alt="visa" />
                        <img class="img-fluid" src="assets/mastercard.png" alt="mastercard" />
                        <img class="img-fluid" src="assets/maestro.png" alt="maestro" />
                        <img class="img-fluid" src="assets/skrill.png" alt="skrill" />
                        <img class="img-fluid" src="assets/bank-transfer.png" alt="bank-transfer" />
                        <img class="img-fluid" src="assets/apple-pay.png" alt="apple" />
                        <img class="img-fluid" src="assets/paysafecard.png" alt="paysafecard" />
                        <img class="img-fluid" src="assets/safetypay.png" alt="safetypay" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 my-2 text-center">
                  <a href="#" target="_blank">
                  <img src="img/logo.png" class="img-fluid main-logo my-2" alt="logo" width="97" height="48" loading="lazy" />
                  </a>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 nav-row">
                  <br />
                  <div>
                     <p>
                        <a href="#" target="_blank" class="scroll_to_register">Contáctenos</a>
                     </p>
                     <p>
                        <a href="<?=$settings->policy()?>" target="_blank" class="my-3 my-lg-0">Política de privacidad</a>
                     </p>
                     <p>
                        <a href="<?=$settings->terms()?>" target="_blank">Términos y condiciones</a>
                     </p>
                  </div>
                  <br />
               </div>
               <div class="col-12">
                  <div data-lgl="disclaimer_taboola" class="disclaimer-ctr">
                     <p>
                        *Por favor, lea la <a href="<?=$settings->policy()?>" target="_blank" rel="noopener">Política de Privacidad</a> y los
                        <a href="<?=$settings->terms()?>" target="_blank" rel="noopener">Términos y Condiciones</a> antes de continuar.
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
      <script type="text/javascript">
         document.addEventListener('DOMContentLoaded', () => {
         const rangeSlider = document.getElementById('rangeSlider');
         const rangeValue = document.getElementById('rangeValue');
         const resultValue = document.querySelector('.resultValue');
         
         // Initialize slider values
         rangeSlider.min = 500;
         rangeSlider.max = 110000;
         rangeSlider.value = 500;
         
         function updateRange() {
         const value = rangeSlider.value;
         rangeValue.textContent = `$ ${value}`;
         
         // Example calculation: Potential earnings can be a percentage of the slider value
         // For example, let's use 0.1% of the slider value as earnings
         const earnings = (value * 1).toFixed(0); // Adjust percentage as needed
         resultValue.textContent = `$ ${earnings}`;
         }
         
         rangeSlider.addEventListener('input', updateRange);
         
         // Initialize the display
         updateRange();
         });
         
         
      </script>
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
