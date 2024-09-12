<?php

$keyword = $_GET['keyword'] ?? 'SQM';

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
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
      <title>¡Conviértete en un trader de SQM!</title>
      <link href="img/logo.png" rel="shortcut icon" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
      <link href="assets/main.css" rel="stylesheet">

    <?php $settings->in_header();?>
   </head>
   <body class="show-banner">
   	<?php $settings->in_body();?>
      <section class="s-loader_new loader__overlay_new not-show" style="display:none!important;">
         <div class="loader_new">
            <div class="loader__card_new">
               <div class="loader__icon_new text-center_new p-4_new">
                  <div class="spinner-border_new" role="status"><span class="sr-only"></span></div>
                  <h3 class="loader__title_new">Please wait while we process your data.</h3>
                  <p class="loader__text_new">This process may take a few seconds</p>
               </div>
            </div>
         </div>
      </section>
      <nav>
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-6 col-3 nv1"><a href="#" target="_blank" class="scroll_to_register">
                       <img class="js-goto-form" src="img/logo.png" width="50px"></a>
               </div>
               <div class="col-lg-6 col-md-6 col-6 nv2 d-none d-md-block" style="padding-top:25px;"> <a class="js-goto-form join d-none d-md-inline scroll_to_register" href="#">Únete gratis</a> </div>
            </div>
         </div>
      </nav>
      <section class="hero pt-2 pt-lg-4">
         <div class="container container-fluid px-0">
            <div class="row justify-content-center align-items-center">
               <div class="col-sm-7 col-lg-5 offset-lg-3" id="hero1">
                  <div class="text-center text-b mb-5 mt-7 mt-sm-11 mt-lg-0 m-pers">
                     <!-- <img src="assets/bg_sm11.jpg?3" style="max-width:100%;" class="heroimg mb-2"> -->
                     <p class="sub-title m-0 mb-0"><span style="color:#000;notext-shadow: rgba(0, 0, 0, 0.7) 6px 4px 4px;">Invierte en</span></p>
                     <!-- <h1 class=" mb-3 pt-0 text-dark"> SQM</h1> -->
                     <img src="assets/SQM.png" alt="SQM" class="logo" style="margin: 0 auto;">
                     <p class="sub-title m-0 mb-4">
                        <span style="color:#000;notext-shadow: rgba(0, 0, 0, 0.7) 6px 4px 4px;">
                           <!-- ¡Conviértete en un trader de Bitcoin! -->
                           sus dividendos<br> tu segundo ingreso
                        </span>
                        <!-- <br> ¿Podría Bitcoin alcanzar los US$100,000? -->
                     </p>
                     <a href="#" class="cta-btn cta-mini calc_press scroll_to_register" style="max-width:70%">INVIERTA AHORA</a>
                  </div>
               </div>
               <div class="col-sm-7 col-lg-4">
                  <!--//-->
                  <div class="mx-auto" id="jk">
                     <section class="form-home">
                        <div class="container">
                           <div class="row form-wrapper user-inputs mt-xl-5">
                              <div class="main-form-block">
                                 <div class="form js-form-top ">
                                    <div class="form__title">
                                       <b>Invertir En SQM</b>
                                    </div>
                                    <div class="form__body">
                                       <div class="formWrapper">
                                          <div id="formWrapper1">
                                             <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form__footer">
                                       <img src="assets/payment-methods-grey.png" alt="Trust icons">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                    
                  </div>
                  <!--//-->
               </div>
            </div>
         </div>
      </section>
      <section class="logos text-center" style="background: #F3F3F3; padding-top: 20px; padding-bottom:27px;">
         <p style="font-family: Montserrat!important; font-weight:700; margin-bottom: -1px;">Visto en</p>
         <a href="#" target="_blank" style="color:black;" class="scroll_to_register"> <img src="assets/Seeking_Alpha.png?1"></a>
      </section>
      <section class="r-slider es v1">
         <div class="r-slider__container container">
            <div class="r-slider__body">
               <h2 class="r-slider__main-title" data-editable="" data-name="r-slider__main-title">
                  <p>Descubre tus ingresos potenciales a corto plazo (máx. 2 meses)</p>
               </h2>
               <div class="range range__label">
                  <div class="range__inner">
                     <div class="range__item">
                        <span class="range__item-text range-text1"> </span>
                        <p class="range__item-number range-initial-value"></p>
                     </div>
                     <div class="range__item">
                        <span class="range__item-text range-text2"> </span>
                        <p class="range__item-number range-potential-profit"></p>
                     </div>
                  </div>
                  <div class="range-slider">
                     <div class="range-slider-wrapper">
                        <div id="counter-slider" class="no-ui-slider">
                           <div class="slider" style="direction: ltr"></div>
                           <ul class="slider-labels"></ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <a href="#"  class="cta-btn scroll_to_register" style="max-width: 70%;">INVIERTA AHORA </a>
      <section class="sc4 ">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-lg-6 col-12">
                  <h4 style="font-family: Montserrat!important;" class="text-center text-md-left">¿Por qué es el momento<br>ideal para invertir en SQM?</h4>
                  <p class="text-center text-md-left">
                     SQM está perfectamente posicionado para un importante repunte, asegurando su liderazgo en el mercado del litio a través de una extensión estratégica de su arrendamiento en el Salar de Atacama hasta 2060 y un importante aumento en la producción con <b>Codelco</b>, a partir de 2025.
                     <br><br>
                     Actualmente, SQM ofrece un robusto rendimiento por dividendo del 8.5% con una tasa de distribución del 71.29%. Esto no solo demuestra el compromiso de la compañía de retornar valor a sus accionistas, sino que también la convierte en una opción atractiva para los inversores enfocados en ingresos. Los altos rendimientos por dividendo pueden amortiguar cualquier volatilidad del mercado, proporcionando un flujo de ingresos constante.
                  </p>
                  <a href="#" class="cta-btn scroll_to_register" style=" margin-bottom:30px">INVIERTA AHORA</a>
               </div>
               <div class="col-md-5 col-lg-5 col-12 m-auto">
                  <img src="assets/SQM-Chart.jpg">
                  <p class="cfd">Fuente : Seeking Alpha - Auge de las acciones de SQM desde la salida a bolsa</p>
               </div>
            </div>
         </div>
      </section>
      <section class="access es v1">
         <div class="access__top">
            <div class="access__container container">
               <div class="access__title" data-editable="" data-name="access__title">
                  <p>Es fácil empezar a ganar. Obtén acceso a:</p>
               </div>
               <ul class="access__list">
                  <li class="access__list-item">
                     <div class="access__list-img">
                        <div class="access__list-img-box" data-editable="" data-name="access__list-img_1">
                           <img src="assets/list-item-1.png?2" alt="">
                        </div>
                     </div>
                     <div class="access__list-text" data-editable="" data-name="access__list-text_1">
                        <p>Plataforma segura y regulada</p>
                     </div>
                  </li>
                  <li class="access__list-item">
                     <div class="access__list-img">
                        <div class="access__list-img-box" data-editable="" data-name="access__list-img_2">
                           <img src="assets/list-item-2.png?2" alt="">
                        </div>
                     </div>
                     <div class="access__list-text" data-editable="" data-name="access__list-text_2">
                        <p>Ganancias en tu cuenta en 24 horas</p>
                     </div>
                  </li>
                  <li class="access__list-item">
                     <div class="access__list-img">
                        <div class="access__list-img-box" data-editable="" data-name="access__list-img_3">
                           <img src="assets/list-item-3.png?2" alt="">
                        </div>
                     </div>
                     <div class="access__list-text" data-editable="" data-name="access__list-text_3">
                        <p>Herramient as de formación sencillas</p>
                     </div>
                  </li>
                  <li class="access__list-item">
                     <div class="access__list-img">
                        <div class="access__list-img-box" data-editable="" data-name="access__list-img_4">
                           <img src="assets/list-item-4.png?2" alt="">
                        </div>
                     </div>
                     <div class="access__list-text" data-editable="" data-name="access__list-text_4">
                        <p>Soporte y asistencia continua las 24 horas</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section class="sc6" style="">
         <div class="container">
            <div class="text-center m-auto">
               <!-- <h2>Trading News te conectará con<br>
                  los mejores brokers regulados en la industria</h2> -->
               <a href="#" class="cta-btn cta-btn2 scroll_to_register">Descubra como beneficiarse <br class="d-block d-md-none">de
               la inversión en SQM</a>
            </div>
         </div>
      </section>
      <section class="logos2 text-center" style="background: #F3F3F3; "> <img src="assets/logos2.svg"> </section>
     <!-- <section class="source mt-5">
         <div class="container">
            <hr>
            <p><b>Fuente:</b> <a href="#" class="scroll_to_register" >https://seekingalpha.com/article/4664089-sqm-stock-pivotal-buying-moment-knocking</a></p>
         </div>
      </section>-->
      <footer class="site-footer" style="background: #252525;">
         <div class="container">
            <div class="row pt-5 pb-5">
               <div class="col-lg-6 col-12 m01">
                  <a href="#" target="_blank" class="scroll_to_register"> <img src="assets/logof.svg" width="305px" class="logof"> </a>
                  <p class="n2">Este anuncio no debe interpretarse como una recomendación para comprar o vender ningún valor y/o como oferta de servicios para clientes que residan en jurisdicciones en las que dicha oferta no esté autorizada. El uso de páginas web de brokers se efectúa al propio riesgo del cliente. El trading online puede provocar una pérdida completa o sustancial de fondos. Los CFDs son instrumentos complejos y vienen con un alto riesgo de perder dinero rápidamente debido al apalancamiento. Entre el 74% y el 89% de las cuentas de los inversores minoristas pierden dinero al operar CFDs. Usted debe considerar si comprende cómo funcionan los CFDs y si puede permitirse asumir el alto riesgo de perder su dinero.</p>
               </div>
               <div class="col-lg-6 col-12 mm0">
                  <p class="n1">SUSCRIPCIÓN AL BOLETÍN</p>
                  <p class="n2">Ingresa tu correo electrónico para recibir nuestro boletín</p>
                  <form>
                     <div class="input-group mt-3">
                        <input class="form-control" placeholder="Correo electronico " type="email">
                        <div class="input-group-append">
                           <button class="btn btn-primary" type="submit">Registrarse</button>
                        </div>
                     </div>
                  </form>
                  <div class="social mt-3">
                     <a href="#" target="_blank" class="scroll_to_register">
                         <img src="./img/logo.png" alt="logo">
                     </a>
                     <a href="#"  target="_blank" class="scroll_to_register">
                        <svg fill="none" height="30" viewBox="0 0 26 26" width="30" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_3_53)">
                              <path d="M13.2236 0.5H13.1966C6.19701 0.5 0.522705 6.17681 0.522705 13.1795V13.1805C0.522705 20.1832 6.19701 25.86 13.1966 25.86H13.2236C20.2232 25.86 25.8975 20.1832 25.8975 13.1805V13.1795C25.8975 6.17681 20.2232 0.5 13.2236 0.5Z" fill="white" opacity="0.1"></path>
                              <path d="M11.3123 20.8896H14.3764V13.1606H16.5074L16.7072 10.5619H14.3764V9.09564C14.3764 8.49595 14.5093 8.22909 15.1087 8.22909H16.7741V5.56445H14.6422C12.3773 5.56445 11.3123 6.56394 11.3123 8.49595V10.5619H9.71387V13.1606H11.3123V20.8896Z" fill="white"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_3_53">
                                 <rect fill="white" height="25.36" transform="translate(0.52002 0.5)" width="25.38"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                     <a href="#"  target="_blank" class="scroll_to_register">
                        <svg fill="none" height="30" viewBox="0 0 26 26" width="30" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_3_57)">
                              <path d="M12.7443 25.8598C11.0824 25.8598 9.43683 25.5325 7.90145 24.8964C6.36607 24.2604 4.971 23.3282 3.79591 22.153C2.62082 20.9778 1.68871 19.5827 1.05282 18.0473C0.416934 16.5118 0.0897126 14.8662 0.0898438 13.2043C0.0898438 9.84812 1.42308 6.6294 3.79626 4.25622C6.16944 1.88304 9.38816 0.549805 12.7443 0.549805C14.4062 0.549674 16.0519 0.876895 17.5873 1.51278C19.1227 2.14867 20.5179 3.08078 21.6931 4.25587C22.8683 5.43096 23.8005 6.82603 24.4365 8.36141C25.0725 9.89679 25.3998 11.5424 25.3998 13.2043C25.4 14.8663 25.0727 16.512 24.4368 18.0475C23.8008 19.583 22.8686 20.9782 21.6934 22.1534C20.5182 23.3286 19.123 24.2608 17.5875 24.8967C16.0521 25.5327 14.4063 25.8599 12.7443 25.8598Z" fill="white" opacity="0.1"></path>
                              <mask height="13" id="mask0_3_57" maskUnits="userSpaceOnUse" style="mask-type:luminance" width="13" x="6" y="6">
                                 <path d="M6.44604 6.35156H18.9886V18.3407H6.44604V6.35156Z" fill="white"> </path>
                              </mask>
                              <g mask="url(#mask0_3_57)">
                                 <path clip-rule="evenodd" d="M9.29365 10.2481H6.60509V18.3408H9.29365V10.2481ZM18.9848 18.3408V13.702C18.9848 11.2173 17.658 10.0613 15.8877 10.0613C15.4012 10.0424 14.9188 10.1569 14.4926 10.3923C14.0665 10.6278 13.7128 10.9752 13.4699 11.3971V10.2481H10.7813C10.8173 11.0074 10.7813 18.3408 10.7813 18.3408H13.4699V13.8239C13.4595 13.6015 13.4896 13.3791 13.5588 13.1675C13.6594 12.8814 13.846 12.6335 14.093 12.4575C14.34 12.2815 14.6353 12.1861 14.9385 12.1844C15.9106 12.1844 16.3003 12.9267 16.3003 14.0137V18.3408H18.9848ZM7.96785 6.35168C7.59689 6.34691 7.23922 6.4897 6.97354 6.74864C6.70785 7.00758 6.55591 7.36146 6.55114 7.73242C6.54637 8.10339 6.68916 8.46106 6.9481 8.72674C7.20704 8.99243 7.56092 9.14437 7.93189 9.14914H7.94487C8.12856 9.15064 8.31074 9.11596 8.48102 9.04706C8.6513 8.97816 8.80634 8.8764 8.93729 8.74758C9.06824 8.61877 9.17254 8.46542 9.24422 8.29629C9.31591 8.12717 9.35358 7.94558 9.35509 7.7619C9.3566 7.57821 9.32192 7.39603 9.25302 7.22575C9.18412 7.05547 9.08236 6.90043 8.95354 6.76948C8.82472 6.63853 8.67137 6.53423 8.50225 6.46255C8.33313 6.39086 8.15154 6.35319 7.96785 6.35168Z" fill="white" fill-rule="evenodd"></path>
                              </g>
                           </g>
                           <defs>
                              <clipPath id="clip0_3_57">
                                 <rect fill="white" height="25.31" transform="translate(0.0898438 0.549805)" width="25.31"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                     <a href="#"  target="_blank" class="scroll_to_register">
                        <svg fill="none" height="30" viewBox="0 0 26 26" width="30" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_3_65)">
                              <path d="M13.2695 25.8559C11.6076 25.8559 9.96197 25.5285 8.42659 24.8925C6.89121 24.2565 5.49615 23.3243 4.32105 22.1491C3.14596 20.9739 2.21386 19.5788 1.57797 18.0434C0.942081 16.5079 0.614859 14.8623 0.61499 13.2004C0.61499 9.84422 1.94823 6.62549 4.32141 4.25232C6.69459 1.87914 9.91331 0.545898 13.2695 0.545898C14.9314 0.545767 16.577 0.872989 18.1125 1.50888C19.6479 2.14477 21.043 3.07687 22.2182 4.25196C23.3934 5.42705 24.3256 6.82212 24.9616 8.3575C25.5976 9.89288 25.925 11.5385 25.925 13.2004C25.9251 14.8624 25.5979 16.5081 24.9619 18.0436C24.326 19.5791 23.3938 20.9743 22.2186 22.1495C21.0434 23.3247 19.6482 24.2569 18.1127 24.8928C16.5772 25.5288 14.9315 25.856 13.2695 25.8559Z" fill="white" opacity="0.1"></path>
                              <path d="M6.13184 18.3749C7.44174 19.2141 8.95716 19.677 10.5124 19.713C12.0677 19.749 13.6029 19.3567 14.9502 18.5789C16.2975 17.8012 17.405 16.668 18.1517 15.3033C18.8984 13.9385 19.2555 12.3947 19.184 10.8407C19.7684 10.4188 20.2725 9.89569 20.6726 9.29614C20.1283 9.53781 19.5507 9.69611 18.9592 9.76572C19.5826 9.39334 20.0489 8.80657 20.271 8.11521C19.6842 8.46327 19.0422 8.70826 18.3727 8.83956C17.9231 8.36079 17.3281 8.04366 16.6799 7.93733C16.0318 7.831 15.3667 7.9414 14.7876 8.25141C14.2086 8.56142 13.7479 9.05373 13.4771 9.65208C13.2062 10.2504 13.1402 10.9214 13.2893 11.5611C12.1031 11.5017 10.9426 11.1935 9.88332 10.6562C8.82404 10.119 7.88966 9.3649 7.14091 8.44291C6.75922 9.0999 6.64222 9.87764 6.81373 10.6178C6.98523 11.3581 7.43235 12.0051 8.06409 12.4273C7.59015 12.4123 7.12665 12.2842 6.7123 12.0536C6.70379 12.7489 6.93817 13.4253 7.37498 13.9663C7.8118 14.5072 8.42369 14.8788 9.10513 15.0169C8.666 15.1366 8.20528 15.1541 7.75836 15.0679C7.94859 15.6608 8.31951 16.1794 8.81918 16.551C9.31886 16.9225 9.92225 17.1285 10.5448 17.14C9.29543 18.1198 7.70832 18.5639 6.13184 18.3749Z" fill="white"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_3_65">
                                 <rect fill="white" height="25.31" transform="translate(0.609863 0.549805)" width="25.31"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row pt-2 pb-3 mm1" style="border-top: none !important;">
               <div class="col-lg-6 col-12">
                  <p><a href="<?=$settings->terms()?>" target="_blank" >Términos y condiciones</a> |
                      <!--<a href="#" target="_blank" >Advertencia de riesgo</a> | -->
                      <a href="<?=$settings->policy()?>" target="_blank" >Política de privacidad</a> </p>
               </div>
               <div class="col-lg-6 col-12 mm0">
                  <p>
                     © Trading News. Todos los derechos reservados desde <script>document.write(new Date().getFullYear())</script>
                  </p>
               </div>
            </div>
            <div class="row pt-2 pb-3 mm1">
               <div class="col-lg-12 col-12">
                  <p style="margin: 0 !important; line-height: 15px !important;">Información de la empresa:</p>
                  <p style="margin: 0 !important; line-height: 15px !important;">Está operada por Imermarket (PTY) LTD ex Xenium Financial Managers (PTY) Limited, una firma de inversión sudafricana, autorizada y regulada por la Financial Sector Conduct Authority de Sudáfrica (FSCA) con el número de licencia 640 para proporcionar servicios de intermediación. Imermarket (PTY) LTD se encuentra en 2nd Floor, Rivonia Village, Cnr Mutual Road & Rivonia Boulevard, Rivonia, 2191 Johannesburg, South Africa.</p>
                  <p style="margin: 0 !important; line-height: 15px !important;">Imermarket (PTY) LTD es la propietaria de la marca “InvesaCapital” y la responsable de operarla.</p>
                  <p style="margin: 0 !important; line-height: 15px !important;">Telefone: +27101571933</p>
                  <p style="margin: 0 !important; line-height: 15px !important;">Email: info@invesacapital.com</p>

               </div>
                <style>
                    .footer_center {
                        color: white;
                        font-size: 0.5em;
                        text-align: center;
                        margin-top: 0.5em;
                    }
                </style>
                <div class="col-12 footer_center ">
                    © Trading News. Todos los derechos reservados desde 2024
                </div>
            </div>
         </div>
      </footer>
      <?php $settings->in_footer();?>
      <script src="assets/nouislider.js"></script>
      <script>
         rangeSliderInit();
         
         function rangeSliderInit() {
             const isDynamic = true;
             const showEachStepLabels = false;
             const minMaxRow = true;
             const cutZerosMobileTopPart = true;
             const cutZerosMobileMinMaxRow = false;
             const bottomBox = true;
             const hideMaxValue = true;
             const minValue = 100;
             const maxValue = 20000;
             const stepSize = 50;
             const currencyBeforeAmount = true;
             let arrayNumbers = [];
             let bottomText = '';
         
                             bottomText = 'Posibles beneficios'
             
             if (isDynamic) {
                 arrayNumbers = generateDynamicArray(minValue, maxValue, stepSize);
             } else {
                 arrayNumbers = [0,2000,5000,10000,20000];
             }
         
             const isCustomScrollEvent = '1';
             const currencySymbol = '$';
             const slider = document.querySelector('#counter-slider .slider');
             const windowWidth = document.documentElement.clientWidth;
             const isMobile = windowWidth <= 960;
         
             showEachStepLabels && generateSliderLabels(arrayNumbers);
             minMaxRow && generateMinMaxRow();
             bottomBox && generateBottomBox();
         
             noUiSlider.create(slider, {
                 start: 0,
                 step: 1,
                 connect: 'lower',
                 range: {
                     'min': 0,
                     'max': arrayNumbers.length - 1
                 },
             });
         
             slider.noUiSlider.on('update', function (values) {
                 const valuenow = parseInt(values[0]);
                 showEachStepLabels && highlightLabel(valuenow);
                 calculation(valuenow);
             });
         
             function calculation(valuenow) {
         
                 const valueActiveItem = arrayNumbers[valuenow];
         
                 let coefficient = 0;
         
                 if (valueActiveItem === 100) {
                     coefficient = 2;
                 } else if (valueActiveItem > 100 && valueActiveItem < 500) {
                     coefficient = 2.5;
                 } else if (valueActiveItem >= 500 && valueActiveItem < 1000) {
                     coefficient = 3.5;
                 } else if (valueActiveItem >= 1000 && valueActiveItem < 5000) {
                     coefficient = 5;
                 } else if (valueActiveItem >= 5000) {
                     coefficient = 5.5;
                 }
         
         
                 const initialValue = document.querySelector('.range-initial-value');
                 initialValue.textContent = formatNumber(valueActiveItem, cutZerosMobileTopPart, currencySymbol);
         
         
                 /*const result = potencialCalc(valueActiveItem, coefficient);*/
                 const result = formulaCalc(valueActiveItem);
                 const potentialProfit = document.querySelector('.range-potential-profit');
                 const bottomProfitBox = document.querySelector('#bottom-profit');
                 const profitValue = formatNumber(result, cutZerosMobileTopPart, currencySymbol);
         
                 
                                     bottomProfitBox.textContent = profitValue;
                 
                                     updateRangeLabel(+valueActiveItem, currencySymbol);
                 
             }
         
             function potencialCalc(number, multiply) {
                 return (number * multiply) % 1 === 0 ? number * multiply : (number * multiply).toFixed(2);
             }
         
             function formulaCalc(number){
                 const result = 5.13 * number + 24;
                 return result % 1 === 0 ? result : result.toFixed(2);
             }
         
             function generateBottomBox(){
                 const bottomBox = `
                     <div class="r-slider__bottom">
                         <span class="r-slider__title">${bottomText}</span>
                         <span id="bottom-profit" class="r-slider__subtitle"></span>
                     </div>
                 `
                 const wrapper = document.querySelector(".range");
                 wrapper.insertAdjacentHTML('afterEnd', bottomBox);
             }
         
             function generateSliderLabels(arrayNumbers) {
         
                 const listWrapper = document.querySelector('.slider-labels');
                 let numbers = '';
         
                 arrayNumbers.forEach(item => {
                   numbers += `<li data-number="${item}">${formatNumber(item, cutZerosMobileTopPart, currencySymbol)}</li>`;
                 });
         
                 listWrapper.insertAdjacentHTML('beforeend',numbers);
             }
         
             function updateRangeLabel(value){
                 const rangeLabel = document.querySelector('.noUi-touch-area');
                 rangeLabel.innerHTML = formatNumber(value, cutZerosMobileTopPart, currencySymbol);
             }
         
             function formatNumber(number, cutZeros, currencySymbol) {
         
                 let targetNumber = number;
         
                 if (isMobile && cutZeros && targetNumber >= 1000) {
                     targetNumber = Math.round(targetNumber / 100) / 10 + 'k';
                 } else if (!isMobile) {
                     const isItLang = ('es' === 'it');
                     if (targetNumber >= 10000) {
                         const locale = isItLang ? 'it-IT' : 'en-US';
                         if (targetNumber % 1 === 0) {
                             targetNumber = Intl.NumberFormat(locale).format(targetNumber);
                         } else {
                             targetNumber = Intl.NumberFormat(locale, {minimumFractionDigits: 2, maximumFractionDigits: 2}).format(targetNumber);
                         }
                     } else {
                         if (isItLang) {
                             targetNumber = String(targetNumber).replace(/[.]/g, ',')
                         }
                     }
                 }
                 
                 return currencyBeforeAmount ? currencySymbol + targetNumber : targetNumber + currencySymbol
             }
         
             function generateDynamicArray(min, max, stepSize){
                 const arrayLength = (max - min) / stepSize;
                 return [...Array(arrayLength + 1)]
                     .map((x, y) => min + stepSize * y);
             }
         
             function highlightLabel(currentIndex) {
                 const textCurrency = document.querySelectorAll('#counter-slider .slider-labels li');
         
                 textCurrency.forEach(item => {
                     item.classList.remove('active');
                 });
         
                 const index = currentIndex + 1;
                 const selector = '#counter-slider .slider-labels li:nth-child(' + index + ')';
                 document.querySelector(selector).classList.add('active');
             }
         
             function generateMinMaxRow() {
               const minMaxRow = `
                 <div class="range_min-max">
                   <div class="range_min-max__item range_min-max__item_min">
                       ${formatNumber(arrayNumbers[0], cutZerosMobileMinMaxRow, currencySymbol)}
                   </div>
                   <div class="range_min-max__item range_min-max__item_max">
                       ${formatNumber(arrayNumbers[arrayNumbers.length -1 ], cutZerosMobileMinMaxRow, currencySymbol)}
                   </div>
                 </div>
               `;
               document.querySelector('.range-slider').insertAdjacentHTML('beforeend', minMaxRow);
             }
         
             function scrollToForm(form) {
                 $('html, body').animate({
                     scrollTop: $(form).offset().top - 50
                 }, 500);
             }
         
             if(!isCustomScrollEvent){
                 document.addEventListener('click', function(e){
                     if(e.target.className === 'r-slider__bottom' || e.target.className === 'r-slider__subtitle'){
                         const form = document.querySelector('#formWrapper1');
                         scrollToForm(form);
                     }
                 })
             }
         
         
         }
         
         $(document).ready(function() {
         $(".hero .cta-btn").click(function(){
            $("#jk").effect( "shake", {times:3}, 30 );
         });
         
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
