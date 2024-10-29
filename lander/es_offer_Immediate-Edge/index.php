<?php
$keyword = $_GET['keyword'] ?? 'Immediate Edge';

$platform = 'kaitaro';

switch ($platform) {
    case 'n2':
        $sub_folder = '';
        require_once dirname(__DIR__) . '/../../_assets/Settings.php';
        break;
    case 'kaitaro':
        $sub_folder = '/lander';
        require_once dirname(__FILE__) . '/../_general_v2/Settings.php';
        break;
}

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$p_keyword = $keyword; // Replace with your offer name
$p_lang    = "Language_of_the_offer"; // page Language LOW CASE
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "COUNTRY_OF_OFFER"; // Replace with the default country ISO Upper case for arabic make AE

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

$settings = new Settings();
$params = $settings->before_html($p_lang,$p_country);
$params .="&platform=". $platform;
$params .="&utm_campaign=". $p_keyword;
$params .="&lang=". $p_lang;
$params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <title>Immediate Edge</title>
   <link rel="icon" href="assets/favicon.png?" type="image/x-icon">
   <link rel="stylesheet" href="assets/main.bundle.min.css">
   <link rel="stylesheet" type="text/css" href="assets/font-awesome.css">
   <?php $settings->in_header();?>

</head>
<body style="overflow-x: hidden;">
<?php $settings->in_body();?>
   <header>
      <div class="top-header">
         <div class="row">
            <div class="col-xs-4 padding-0">
               <div class="logo"><img class="logo-nav-desktop" src="assets/ie-logo-nav-desktop.png" alt=""> <img
                     class="logo-nav-mobile" src="assets/ie-logo-nav-mobile.png?1" alt=""></div>
            </div>
            <div class="col-xs-8 padding-0">
               <div class="spots-mobile">
                  <p>Manchas restantes</p>
                  <div><span class="flag "><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 30px; height: 30px;"></span> <span
                        class="spotsLeft">43</span></div>
               </div>
               <div class="spots-desktop">
                  <span class="flag "><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 30px; height: 30px;"></span>
                  <p class="hurry">Date prisa ! Solo quedan <span class="spotsLeft">43</span> puntos en <span
                        class="">Español</span></p>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </header>
   <div class="section-1" id="top">
      <div class="container">
         <h1>Gane entre €950 y €2200 por día con el software criptográfico más inteligente del mundo</h1>
         <div class="m-50">
            <div class="row">
               <div class="col-md-8">
                  <div id="mainVideo" style="position: relative;">
                     <div id="MainVideobtn"
                        style="position: absolute;right: 5%;top: 5%; z-index: +1;background: rgba(0, 0, 0, 0.7);border-radius: 30px;padding: 0 5px;color: #fff;"
                        onclick="UnMute();"><img onclick="UnMute();" src="assets/giphy.gif" style="width: 35px;"></div>
                     <video id="MainVideo" controls="" style="width: 100%" autoplay="1" muted="1">
                        <source src="assets/video.mp4" type="video/mp4">
                     </video>
                  </div>
                  <script type="text/javascript">
                     function UnMute() {
                        var video = document.getElementById("MainVideo")
                        video.muted = false;
                        document.getElementById("MainVideobtn").style.display = "none";
                     }
                  </script>


               </div>
               <div class="col-md-4">

                  <div class="form-side formregister1">
                     <div class="fs-title"><img src="assets/ice-logo.71240d27.svg" alt="" class="logo"></div>
                     <div class="signup-form-holder">
                        <div class="form-widget">

                        <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="350px" style="border: none; overflow: hidden" scrolling="no"></iframe>


                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <div class="secured">
            <div class="row">
               <div class="col-xs-2"><img src="assets/symantec.png" alt=""></div>
               <div class="col-xs-2"><img src="assets/mcafee.png" alt=""></div>
               <div class="col-xs-2"><img src="assets/verisign.png" alt=""></div>
               <div class="col-xs-2"><img src="assets/ssl.png" alt=""></div>
               <div class="col-xs-2"><img src="assets/geotrust.png" alt=""></div>
               <div class="col-xs-2"><img src="assets/secure.svg" alt=""></div>
            </div>
         </div>
         <p class="subtitle">¡Hoy es la oportunidad para unirse a nosotros y ganar instantáneamente! </p>
      </div>
   </div>
   <div class="assets">
      <div class="container">
         <div class="owl-carousel owl-theme">
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span>€</span>190.00<span></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-2">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 p">
               <div class="row">
                  <div class="col-lg-6"><img src="assets/img-pic-3.png" alt="" class="cent-img"></div>
                  <div class="col-lg-6">
                     <div class="cent">
                        <h3>Bill Gates</h3>
                        <h4>Bitcoin Investor</h4>
                        <p>“Crypto es la forma más rápida de ganar dinero al instante en el mercado actual si sabe dónde
                           buscar. ¡Las ganancias masivas y el crecimiento en cientos, incluso miles de por ciento,
                           ¡están disponibles para aquellos que tienen las herramientas para empezar a actuar!”</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 p">
               <div class="row">
                  <div class="col-lg-6"><img src="assets/winkle.png" alt="" class="cent-img"></div>
                  <div class="col-lg-6">
                     <div class="cent">
                        <h3>Winklevoss twins</h3>
                        <h4>Bitcoin Billionaires</h4>
                        <p>“Compra bajo, vende alto, es así de simple. La moneda criptográfica es el futuro del rápido
                           crecimiento y del potencial de ganancias. No necesita ser un experto de Wall Street para
                           obtener la ventaja competitiva necesaria para beneficiarse de este mercado de 500 mil
                           millones de dólares”</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-3">
      <div class="container">
         <h2>Immediate Edge utiliza Inteligencia Artificial y Algoritmos de última generación para identificar solamente
            operaciones rentables </h2>
      </div>
   </div>
   <div class="section-4">
      <div class="container">
         <div class="crypto">
            <div class="asset"><span class="coin">BTC</span> <span class="value" id="btc-price">+ 90.60123</span> <img
                  src="assets/plus-blue.svg" alt=""></div>
            <div class="asset"><span class="coin">ETH</span> <span class="value" id="eth-price">+ 90.60123</span> <img
                  src="assets/plus-green.svg" alt=""></div>
            <div class="asset"><span class="coin">LTC</span> <span class="value" id="ltc-price">+ 90.60123</span> <img
                  src="assets/plus-green.svg" alt=""></div>
            <div class="asset"><span class="coin">EOS</span> <span class="value" id="eos-price">+ 90.60123</span> <img
                  src="assets/plus-green.svg" alt=""></div>
            <div class="asset"><span class="coin">XRP</span> <span class="value" id="xrp-price">+ 90.60123</span> <img
                  src="assets/plus-green.svg" alt=""></div>
            <div class="asset"><span class="coin">BCH</span> <span class="value" id="bch-price">+ 90.60123</span> <img
                  src="assets/plus-green.svg" alt=""></div>
         </div>
      </div>
   </div>
   <div class="section-5">
      <div class="container">
         <button class="claim-btn scroll_to_register" id="claim-your-spot-today">Reclame su lugar hoy</button>
         <h2>Los principiantes están obteniendo ganancias inmediatas y con nuestra ayuda usted también puede lograrlo
         </h2>
         <p class="subtitle">El software Immediate Edge está programado para operar solo cuando sabe que obtendrá una
            ganancia inmediata </p>
      </div>
   </div>
   <div class="section-6 index2">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi1.jpg" alt=""></div>
                  <span class="name">Jonathan Mulberry</span>
                  <p>Solo quiero decir un gran agradecimiento porque Immediate Edge realmente ha cambiado mi vida. ¡En
                     cuestión de semanas, he podido renunciar a mi trabajo! </p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>5,977<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi2.jpg" alt=""></div>
                  <span class="name">Delilah Adams</span>
                  <p>Hombre, ¡esta cosa realmente funciona! Es realmente increíble. ¡Solo lo he usado durante un par de
                     semanas y ya he ganado más dinero con él que estando en mi trabajo durante meses! </p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>11,369<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi3.jpg" alt=""></div>
                  <span class="name">Simon Horsham</span>
                  <p>Recibí mi aviso hace dos semanas. Sin alternativas pensé que mi vida se terminaría. ¡Ahora estoy
                     ganando alrededor de $3,261.42 cada semana! Y por primera vez en 2 meses no estoy en la oscuridad.
                     ¡Gracias Edwin!</p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>33,426<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 reviews">


               <div class="form-side formregister2" id="registerf">
                  <div class="fs-title"><img src="assets/ice-logo.71240d27.svg" alt="" class="logo">
                     Immediate Earnings
                  </div>
                  <div class="signup-form-holder">
                     <div class="form-widget">

                     <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="300px" style="border: none; overflow: hidden" scrolling="no"></iframe>





                     </div>
                  </div>
               </div>
 
            </div>
         </div>
      </div>
   </div>
   <div class="section-7">
      <div class="container">
         <h1>Regístrese hoy para obtener acceso inmediato a este revolucionario software</h1>
         <h4>Immediate Edge, Ganancias Instantáneas</h4>
         <div class="row equal">
            <div class="col-md-4">
               <div class="verified">
                  <div class="icon"><img src="assets/verified-1.svg" alt=""></div>
                  <h3>Simple & Fácil de usar </h3>
                  <p>Immediate Edge se instala en segundos en cualquier computadora o dispositivo móvil. PC, MAC,
                     Android, IOS y más. </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="verified">
                  <div class="icon"><img src="assets/verified-2.svg" alt=""></div>
                  <h3>Desempeño de Confianza</h3>
                  <p>El rendimiento totalmente automatizado escanea instantáneamente todos los intercambios principales.
                     Riesgo Cero, Recompensa Inmediata. </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="verified">
                  <div class="icon"><img src="assets/verified-3.svg" alt=""></div>
                  <h3>Seguro y privado </h3>
                  <p>Al utilizar la tecnología Blockchain, ofrecemos una tasa de éxito del 98.9% a todos los miembros de
                     nuestro grupo privado.</p>
               </div>
            </div>
         </div>
         <img class="coins" src="assets/coins.svg" alt="">
         <h1 class="current-online-members"><span class="green" id="number-amount"><span
                  class="prefix"></span>13627<span class="postfix"></span></span> Ganados por miembros <span
               class="green gtd-geo-country-name"></span> en Hasta <span class="prefix">$</span>126.67<span
               class="postfix"></span> por hora </h1>
      </div>
   </div>
   <div class="assets">
      <div class="container">
         <div class="owl-carousel owl-theme">
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="item">
               <div class="win">
                  <div class="person-icon"></div>
                  <p><span class="name">Luke B: </span><span class="money"><span class="prefix">$</span>190.00<span
                           class="postfix"></span></span></p>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-8">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="exchange"><img src="assets/exchanges.png" alt=""></div>
            </div>
            <div class="col-md-8">
               <h2>Immediate Edge ahora está trabajando con todos los principales intercambios de divisas crypto </h2>
               <p>El secreto está integrado en la forma en que operan los intercambios. El precio de las monedas sube y
                  baja según la oferta y la demanda, y la oferta y la demanda de las monedas es diferente de un
                  intercambio a otro. Debido a esto, a menudo hay una gran diferencia de precio en la misma moneda en
                  diferentes bolsas. Immediate Edge se integra a la perfección con Coinbase, Binance, Kraken, Poloniex,
                  Bittrex y muchos más para brindarle una ventaja inmediata y ganancias instantáneas.</p>
               <span>Forbes : <span id="forbes-date"></span></span>
            </div>
         </div>
      </div>
   </div>
   <div class="section-6 index2">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi4.jpg" alt=""></div>
                  <span class="name">Lewis Tucker</span>
                  <p>No puedo superarlo.Alrededor de $43,568 en solo 30 días. Estoy muy agradecido. </p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>12,896<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi5.jpg" alt=""></div>
                  <span class="name">Georgina Barry</span>
                  <p>Mi cuenta de operaciones ahora tiene $231,952 en ella. ¡Puedes creerlo! </p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>49,279<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-4">
               <div class="testimonial">
                  <div class="image-wrapper"><img src="assets/testi6.jpg" alt=""></div>
                  <span class="name">Owen Spencer</span>
                  <p>Estoy sin palabras. Nunca antes había visto números como este. Gracias, Immeidate Edge </p>
                  <div class="country">
                     <span class="flag_img"><img src="https://flagpedia.net/data/flags/h80/<?=strtolower($p_country)?>.png" style="width: 25px; height: 25px;"></span> <span class="green"><span
                           class="prefix">$</span>7,899<span class="postfix"></span></span>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 reviews">

               <div class="form-side formregister3">
                  <div class="fs-title"><img src="assets/ice-logo.71240d27.svg" alt="" class="logo">
                     Immediate Earnings
                  </div>
                  <div class="signup-form-holder">
                     <div class="form-widget">
                     <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="300px" style="border: none; overflow: hidden" scrolling="no"></iframe>




                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="section-9">
      <div class="container">
         <div class="fb-logo"><img src="assets/facebook.png" alt=""></div>
         <div class="date"><span id="facebook-date"></span></div>
         <div class="comment">
            <div class="row">
               <div class="col-md-2 col-sm-3">
                  <div class="user-img"><img class="img-responsive" src="assets/fb-user-2.jpg" alt=""></div>
               </div>
               <div class="col-md-10 col-sm-9">
                  <div class="name"><span>Joanne Bowyer</span></div>
                  <div class="star"><span class="icon-icon icon-four-stars" style="margin:10px 0"></span></div>
                  <div class="text">Nunca antes he realizado transacciones, pero el Immediate Edge lo hace tan fácil.
                     Nunca pensé que diría esto, ya que el mundo criptográfico puede ser tan complicado ... ¡pero sí es
                     tan fácil ganar cantidades inimaginables! </div>
                  <div class="like"><a href="#"><i class="fa fa-thumbs-up"></i>Like</a> <a href="#"><i
                           class="fa fa-comment"></i>Comment</a></div>
               </div>
            </div>
         </div>
         <div class="comment">
            <div class="row">
               <div class="col-md-2 col-sm-3">
                  <div class="user-img"><img class="img-responsive" src="assets/fb-user.jpg" alt=""></div>
               </div>
               <div class="col-md-10 col-sm-9">
                  <div class="name"><span>Rudy Perkins</span></div>
                  <div class="star"><span class="icon-icon icon-five-stars" style="margin:10px 0"></span></div>
                  <div class="text">¡Esto es exactamente lo que he estado esperando! ¡Su apoyo educativo y su sistema de
                     alto rendimiento me ha enganchado de por vida! Muchas gracias </div>
                  <div class="like"><a href="#"><i class="fa fa-thumbs-up"></i>Like</a> <a href="#"><i
                           class="fa fa-comment"></i>Comment</a></div>
               </div>
            </div>
         </div>
         <div class="comment">
            <div class="row">
               <div class="col-md-2 col-sm-3">
                  <div class="user-img"><img class="img-responsive" src="assets/fb-user-3.jpg" alt=""></div>
               </div>
               <div class="col-md-10 col-sm-9">
                  <div class="name"><span>Clark Ross</span></div>
                  <div class="star"><span class="icon-icon icon-four-stars" style="margin:10px 0"></span></div>
                  <div class="text">En mi primer día, gané más de 900 dólares por lo que realmente puedo decir ...
                     ¡Finalmente, encontré algo que ofrece excelentes resultados! </div>
                  <div class="like"><a href="#"><i class="fa fa-thumbs-up"></i>Like</a> <a href="#"><i
                           class="fa fa-comment"></i>Comment</a></div>
               </div>
            </div>
         </div>
         <div class="comment">
            <div class="row">
               <div class="col-md-2 col-sm-3">
                  <div class="user-img"><img class="img-responsive" src="assets/fb-user-4.jpg" alt=""></div>
               </div>
               <div class="col-md-10 col-sm-9">
                  <div class="name"><span>Steven Shuler</span></div>
                  <div class="star"><span class="icon-icon icon-five-stars" style="margin:10px 0"></span></div>
                  <div class="text">El dinero en mi cuenta desde el primer día, todavía no lo puedo creer ... ¡Me
                     encanta su sistema y el equipo de soporte es excelente! </div>
                  <div class="like"><a href="#"><i class="fa fa-thumbs-up"></i>Like</a> <a href="#"><i
                           class="fa fa-comment"></i>Comment</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-10 final-form">
      <div class="container">
         <img class="logo" src="assets/icon-blue.svg" alt="">
         <h1>Registre sus datos para obtener una ventaja inmediata en el mercado de criptomonedas</h1>

         <div class="colorform">

            <div class="form-side form-side4 formregister4">
               <div class="signup-form-holder">
                  <div class="form-widget">


                  <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="350px" style="border: none; overflow: hidden" scrolling="no"></iframe>

                  </div>
               </div>
            </div>

            <div class="secured opacity">
               <div class="row">
                  <div class="col-xs-2"><img src="assets/symantec.png" alt=""></div>
                  <div class="col-xs-2"><img src="assets/mcafee.png" alt=""></div>
                  <div class="col-xs-2"><img src="assets/verisign.png" alt=""></div>
                  <div class="col-xs-2"><img src="assets/ssl.png" alt=""></div>
                  <div class="col-xs-2"><img src="assets/geotrust.png" alt=""></div>
                  <div class="col-xs-2"><img src="assets/secure.svg" alt=""></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="container">
         <div class="logo">
            <img class="img-responsive" src="assets/ie-logo-nav-desktop.png" alt="">
            <p class="subtitle">Es fácil cuando sabes cómo</p>
         </div>
         <p class="text">ADVERTENCIA DE INVERSIÓN DE ALTO RIESGO: el comercio de divisas, CFD y Cryptocurrencies es
            altamente especulativo, conlleva un nivel de riesgo y puede no ser adecuado para todos los inversores. Puede
            perder parte o la totalidad de su capital invertido, por lo tanto, no debe especular con el capital que no
            puede permitirse perder. Haga clic aquí para leer una advertencia de riesgo completa. Immediate Edge es un
            nombre comercial de Immediate Edge LTD, una compañía de servicios tecnológicos. Immediate Edge no obtiene ni
            pierde ganancias en función de sus resultados comerciales y opera como una empresa de tecnología. Immediate
            Edge no es una firma de servicios financieros y no opera como una firma de servicios financieros.
            <br><br>Estamos obligados a informar a los posibles inversores que el rendimiento anterior de nuestro
            software no predice necesariamente los resultados futuros, por lo tanto, no debe especular con el capital
            que no puede permitirse perder.<br><br>VISO DE REGULACIÓN DE EE. UU .: El comercio de opciones no está
            regulado dentro de los Estados Unidos. Immediate Edge no está supervisado ni regulado por ninguna agencia
            financiera ni por agencias de los EE. UU. Cualquier actividad comercial no regulada por residentes de EE.
            UU. Se considera ilegal. Immediate Edge no acepta clientes ubicados dentro de los Estados Unidos o que
            tengan una ciudadanía estadounidense. <br><br>
            DIVULGACIÓN DEL RIESGO DEL SITIO: Immediate Edge no acepta ninguna responsabilidad por pérdida o daño como
            resultado de la confianza en la información contenida en este sitio web; Esto incluye material educativo,
            cotizaciones de precios y cuadros, y análisis. Tenga en cuenta los riesgos asociados con el comercio de los
            mercados financieros; Nunca inviertas más dinero del que puedes arriesgar perder. Los riesgos involucrados
            en el comercio de Forex, CFDs y Cryptocurrencies pueden no ser adecuados para todos los inversores.
            Immediate Edge no se hace responsable de las pérdidas comerciales que pueda sufrir como resultado del uso de
            los datos alojados en este sitio.
            <br><br>Hemos colocado cookies en su
            computadora para ayudarlo a mejorar su experiencia al visitar este sitio web. Puede cambiar la configuración
            de las cookies en su computadora en cualquier momento. El uso de este sitio web indica su aceptación de la
            <a href="<?=$settings->policy()?>" target="_blank" >POLÍTICA DE PRIVACIDAD</a> de este sitio web.
         </p>

         <p class="copyright">© <span class="gtd-date-current-year"></span>
            <script>document.write(new Date().getFullYear())</script> All Rights Reserved - Immediate Edge
         </p>
      </div>
   </footer>
   <div id="earningsPopup" class="just-made">
      <div class="pull-left">
         <p class="name">Jay M Made</p>
         <span class="green"><span class="prefix">$</span>1093.20<span class="postfix"></span></span>
      </div>
      <div class="pull-right">
         <div class="avatar"><span class="flag gtd-geo-country-flag-icon flag-2"></span> <img src="assets/user.png"
               alt=""></div>
      </div>
   </div>

   <?php $settings->in_footer();?>
   <script type="text/javascript" src="assets/owl.carousel.min.js"></script>

   <script>
      var version = "live";
      var geo = "es";
      var prefix = "";
      var postfix = '';
      $.getJSON("https://wiki-tech.website/res/ip-api.php", function (data) {
         geo = data.countryCode.toLowerCase();
         $('.gtd-geo-country-name').html(" In " + data.country);

         if (geo == 'es') {
            prefix = '€';
         } else if (geo == 'de' || geo == 'at' || geo == 'ch' || geo == 'it' || geo == 'ie' || geo == 'nl' || geo == 'dk' || geo == 'no' || geo == 'se' || geo == 'fi' || geo == 'fr') {
            postfix = '€';
         } else { prefix = '€'; }


         $(".prefix").each(function (index) {
            $(this).html(prefix);
         });

         $(".postfix").each(function (index) {
            $(this).html(postfix);
         });
         $(".owl-carousel").owlCarousel({
            loop: !0,
            margin: 0,
            autoPlay: true,
            autoPlaySpeed: 5000,
            autoPlayTimeout: 5000,
            autoplayHoverPause: true,
            dots: !1,
            nav: !1,
            responsiveClass: !0,
            responsive: {
               0: {
                  items: 1
               },
               600: {
                  items: 2
               },
               1000: {
                  items: 3
               },
               1410: {
                  items: 4
               }
            }
         });
         $.getScript("assets/main.bundle.min.js?1k2sfss", function () {
            // alert('loaded script and content');
         });
      });

   </script>


   <script type="text/javascript">
      $(".scroll-top-btn").click(function () {
         $('html,body').animate({
            scrollTop: $(".form-shadow").offset().top
         },
            'slow');
      });

      function startTimer(duration, display) {
         var timer = duration,
            minutes, seconds;
         setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);

            if (--timer < 0) {
               timer = duration;
            }
         }, 1000);
      }


   </script>
   	  <script>
            $(".scroll_to_register").click(function(event) {
               event.preventDefault();
               $('html, body').animate({
                  scrollTop: $("#registerf").offset().top
               }, 500);
            });
      </script>
</body>

</html>