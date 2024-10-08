<?php
   $keyword = $_GET['keyword'] ?? 'Trade LG';
    $dev = $_GET['dev'] ?? 0;
   if ($dev == 1){
       ini_set('display_errors', '1');
       ini_set('display_startup_errors', '1');
       error_reporting(E_ALL);
   }
   
    $p_keyword = "Petrobras-noquestion"; // Replace with your offer name
   $p_lang    = "pt"; // page Language LOW CASE 
   $p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "BR"; // Replace with the default country ISO Upper case for arabic make AE
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
<html lang="pt" dir="ltr">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>WM</title>
      <link rel="icon" type="image/x-icon" href="img/logo.png">
      <link rel="stylesheet" href="assets/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/iti.min.css?1111">
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
         rel="stylesheet">
      <?php $settings->in_header();?>
   </head>
   <body>
      <?php $settings->in_body();?>
      <div id="cmt" hidden=""></div>
      <div class="wrapper">
         <div class="container mobilePosition-ctr">
            <div id="mobile-position" class="mobile-form-container form-container mb-0"></div>
         </div>
         <header>
            <div class="header container-fluid h-100 lp-action trigger-popu" style="background: url('assets/hero.jpg') no-repeat center; background-size: cover;">
               <div class="row h-100">
                  <div class="col-12 position-relative px-0 modal-link">
                     <img src="assets/mobile.jpg" class="img-fluid d-block d-sm-none w-100 lp-action mobile-img my-0" alt="mobile header">
                     <img src="assets/Tablet.jpg" class="img-fluid d-none d-sm-block d-xl-none w-100 lp-action my-0 lp-action" alt="tablet header">
                  </div>
               </div>
            </div>
         </header>
         <div class="container desktopForm-ctr">
            <section class="form-container" id="desktopForm">
               <div class="nxreg">
                  <div class="nx-signup nxreg-form">
                     <div class="nx-signup-form nx-signup__form">
                        <div id="mainForm" class="nxreg-sign-up-form needs-validation main-form selected" >
                           <div class="form-heading-ctr">
                              <h2 class="text-center">Leve o investimento a um novo patamar com treinamento gratuito</h2>
                           </div>
                           <div class="form-wrapper user-inputs row">
                              <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="340px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                              <div class="col-12">
                                 <div class="col-12 payments-container">
                                    <div class="payment-form">
                                       <img class="img-fluid mx-auto" src="assets/visa.png" alt="visa">
                                       <img class="img-fluid mx-auto" src="assets/visa-el.png" alt="visa electron">
                                       <img class="img-fluid mx-auto" src="assets/maestro.png" alt="maestro">
                                       <img class="img-fluid mx-auto" src="assets/mastercard.png" alt="mastercard">
                                       <img class="img-fluid mx-auto" src="assets/pix.png" alt="pix">
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <main>
            <section class="adv-section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <p class="adv">
                           Advertorial
                        </p>
                     </div>

                  </div>
               </div>
            </section>

            <div id="calculator-section" class="calculator-section">
                <div class="container-fluid">
                    <div class="row arrow-img-row">
                        <div class="col-12 pb-3 pb-xl-4">
                            <h3 class="text-center text-xl-left mb-xl-0">
                                Descubra seus ganhos potenciais de curto prazo
                            </h3>
                        </div>
                    </div>
                    <div class="row calculator-ctr">
                        <div id="grey-box" class="col-12 col-md-6 calc-input">
                            <p class="title-calc">Investimento inicial</p>
                            <div class="input-group">
                                <div class="currency-sign">$</div>
                                <input name="initial-value" id="initial-value" class="rounded" type="number">
                                <button type="submit" class="calc-btn">Calcular</button>
                            </div>
                            <div style="font-size: 14px;" class="error-msg-calc text-left d-none">
                                Investimento mínimo: $200
                            </div>
                        </div>
                        <div class="col-12 col-md-6 calc-output">
                            <p class="title-calc lp-action">Ganhos potenciais</p>
                            <div class="input-group">
                                <div class="currency-sign">$</div>

                                <input id="potencial-value" name="potencial-value" class="rounded" type="text" readonly="readonly">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxes-section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <h3 class="px-3">É fácil começar terá à sua disposição:</h3>
                     </div>
                  </div>
                  <div class="row boxes-ctr">
                     <div class="col-12 col-sm-6 col-lg-3 box">
                        <div class="box-img-ctr">
                           <img src="assets/1.png" class="img-fluid lp-action modal-link" width="50" height="50" loading="lazy" alt="box image">
                           <p>
                              Plataforma segura e autorizada
                           </p>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-lg-3 box">
                        <div class="box-img-ctr">
                           <img src="assets/5.png" class="img-fluid lp-action modal-link" width="50" height="50" loading="lazy" alt="box image">
                           <p>
                              Ganhos depositados em sua conta em 24 horas
                           </p>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-lg-3 box">
                        <div class="box-img-ctr">
                           <img src="assets/3.png" class="img-fluid lp-action modal-link" width="50" height="50" loading="lazy" alt="box image">
                           <p>
                              Ferramentas de fácil aprendizagem
                           </p>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-lg-3 box">
                        <div class="box-img-ctr">
                           <img src="assets/4.png" class="img-fluid lp-action modal-link" width="50" height="50" loading="lazy" alt="box image">
                           <p>
                              Equipe de suporte excepcional
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <button type="button" class="cta-btn lp-action modal-link" >
                     Obtenha mais informações GRATUITAS</button>
                  </div>
                  <div class="col-12 payments-container">
                     <div class="payment-form">
                        <img class="img-fluid mx-auto" src="assets/visa.png" alt="visa">
                        <img class="img-fluid mx-auto" src="assets/visa-el.png" alt="visa electron">
                        <img class="img-fluid mx-auto" src="assets/maestro.png" alt="maestro">
                        <img class="img-fluid mx-auto" src="assets/mastercard.png" alt="mastercard">
                        <img class="img-fluid mx-auto" src="assets/pix.png" alt="pix">
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>

      <footer>
         <div class="container">
            <div class="row">
               <div class="col-12 my-1 text-center">
                  <a href="#"  rel="noopener noreferrer">
                  <img src="img/logo.png" class="img-fluid main-logo" alt="logo" width="167" height="40" loading="lazy">
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 nav-row">
                  <a href="<?=$settings->policy()?>"  rel="noopener noreferrer" target="_blank">Política de privacidade</a>
                  <a href=""  rel="noopener noreferrer" class="my-3 scroll_to_register">Contate-Nos</a>
                  <a href="<?=$settings->terms()?>"  rel="noopener noreferrer" target="_blank">Termos e Condições</a>
               </div>
               <div class="col-12">
                  <div data-lgl="disclaimer" class="disclaimer-ctr">
                     <p>*Por favor, leia a <a href="<?=$settings->policy()?>"  rel="noopener" target="_blank">Política de Privacidade</a> e <a href="<?=$settings->terms()?>"  rel="noopener" target="_blank">Termos e Condições</a> antes de continuar.</p>
                     Este anúncio não deve ser interpretado como uma recomendação para 
                     comprar ou vender quaisquer valores mobiliários e/ou uma oferta de 
                     serviços para clientes residentes em jurisdições onde tal oferta não é 
                     autorizada. O uso dos websites dos Corretores é por conta e risco do 
                     cliente. A negociação on-line pode resultar em perda substancial ou 
                     completa de fundos.
                  </div>
               </div>
            </div>
         </div>
      </footer>
      



      <!-- PopUp Modal Start -->
      <div id="custom-modal" class="custom-modal">
         <div class="custom-modal-dialog">
            <div class="custom-modal-content">
               <span class="close-modal close-popUpForm">
               <img src="assets/ic_cancel.png" alt="close popup icon">
               </span>
               <div class="custom-modal-body">
                  <div class="custom-modal-inner">
                     <div class="nx-signup-form nx-signup__form">
                        <div class="order-form formx4gr" id="myform1">
                           
                           <div class="form-wrapper">
                              <div class="form-title text-center myForm" style="padding:15px 0px">
                                 <b>Leve o investimento a um novo patamar com treinamento gratuito</b>
                              </div>
                              <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="340px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                              <div class="col-12">
                                 <div class="col-12 payments-container">
                                    <div class="payment-form">
                                       <img class="img-fluid mx-auto" src="assets/visa.png" alt="visa">
                                       <img class="img-fluid mx-auto" src="assets/visa-el.png" alt="visa electron">
                                       <img class="img-fluid mx-auto" src="assets/maestro.png" alt="maestro">
                                       <img class="img-fluid mx-auto" src="assets/mastercard.png" alt="mastercard">
                                       <img class="img-fluid mx-auto" src="assets/pix.png" alt="pix">
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



      <?php $settings->in_footer();?>

      <script src="assets/script.min.js" defer="defer"></script>
       <script>
         $("a.scroll_to_register").click(function(event) {
           event.preventDefault();
           $('html, body').animate({
             scrollTop: $("#registerForm").offset().top
           }, 500);
         });
         
      </script>

<style>


</style>
   </body>
</html>
