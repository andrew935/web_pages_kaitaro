<?php
$keyword = $_GET['keyword'] ?? 'Trade GPT';

 $dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = "Trade-GPT"; // Replace with your offer name
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
<html lang="es" false="" data-locale="ea">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Habaneraa</title>
      <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
      <link rel="stylesheet" href="assets/style.css">
      <?php $settings->in_header();?>
   </head>
   <body>
   <?php $settings->in_body();?>
      <div id="root">
         <div class="react_gpt_4947__Wrapper-sc-86xlgm-0 igvpGc">
            <div style="display:contents">
               <div class="Top__TopWrapper-sc-1t4lp0j-0 fIjuqc">
                  <div class="Container-sc-a4fxlm-0 iaZBIw">
                     <div class="Top__TopInner-sc-1t4lp0j-1 duBvmI">
                        <div class="Top__Logo-sc-1t4lp0j-2 cgjmbx">
                           <div data-editable="true" data-name="logo"><img
                              src="img/logo.png" alt="logo.png"
                              loading="lazy"></div>
                        </div>
                        <div class="Top__TopT1-sc-1t4lp0j-3 cBoswW">
                           <div data-editable="true" data-name="top__t1">
                              <p>Cree una entrada pasiva automática aplicando ChatGPT
                                 al comercio en línea
                              </p>
                           </div>
                        </div>
                        <div class="Top__Text1-sc-1t4lp0j-4 hwBweu">
                           <div data-editable="true" data-name="top__text1">
                              <p>Descubra cómo cientos de personas están ganando hasta
                                 $500 al día gracias a la nueva tecnología de
                                 TradeGPT
                              </p>
                           </div>
                        </div>
                        <div class="Top__Text2-sc-1t4lp0j-5 laHyEv">
                           <div data-editable="true" data-name="top__text2">
                              <p>👇Complete el formulario a continuación para saber si
                                 es elegible.👇
                              </p>
                           </div>
                        </div>
                        <div class="Top__Text3-sc-1t4lp0j-6 ixaJXs">
                           <div data-editable="true" data-name="top__text3">
                              <p>⚠️¡No compartiremos tus datos con nadie!</p>
                           </div>
                        </div>
                        <div class="FormMain__FormWrapper-sc-b8tday-0 gcpkdX">
                           <div class="FormBlock__Body-sc-16002d9-0 hySHod">
                           <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                           </div>
                        </div>
                        <div class="Top__Text4-sc-1t4lp0j-7 eAoIOU">
                           <div data-editable="true" data-name="top__text4">
                              <p>Esta
                                 es una oportunidad limitada y única, descubre si
                                 puedes ser uno de los
                                 pocos en beneficiarse completando el formulario de
                                 arriba☝️
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="display:contents">
               <div class="Article__ArticleSection-sc-l1hvz9-0 gOiSCm">
                  <div class="Container-sc-a4fxlm-0 iaZBIw">
                     <div class="Article__ArticleWrap-sc-l1hvz9-1 McjNk">
                        <div class="Article__ArticleTitle-sc-l1hvz9-2 jdPFDv">
                           <div data-editable="true" data-name="article__title">
                              <p><b>TradeGPT</b>: la próxima generación de comercio con
                                 IA
                              </p>
                           </div>
                        </div>
                        <div class="Article__ArticleText1-sc-l1hvz9-3 deDzJy">
                           <div data-editable="true" data-name="article__text1">
                              <p>¿Estás
                                 cansado de perder dinero en mercados volátiles e
                                 impredecibles? ¿Quiere
                                 operar con confianza y facilidad, sin pasar horas
                                 analizando gráficos e
                                 indicadores? ¿Le gustaría tener un sistema de
                                 negociación que pueda
                                 adaptarse a cualquier condición del mercado y
                                 generarle ganancias
                                 constantes, sin emociones y las 24 horas del día,
                                 los 7 días de la
                                 semana?
                              </p>
                              <br>
                              <p>Si respondió afirmativamente a alguna de estas
                                 preguntas, entonces necesita TradeGPT👇
                              </p>
                           </div>
                        </div>
                        <div class="Article__Items-sc-l1hvz9-7 caPLSA">
                           <div class="Article__Item-sc-l1hvz9-8 eNlBHN">
                              <div class="Article__ItemImg-sc-l1hvz9-9 ioqFUp">
                                 <div data-editable="true"
                                    data-name="article_item_1"><img
                                    src="assets/article_item_1.png"
                                    alt="article_item_1.png"
                                    loading="lazy"></div>
                              </div>
                              <div class="Article__ItemTitle-sc-l1hvz9-10 eoMZmW">
                                 <div data-editable="true"
                                    data-name="article__item_title1">
                                    <p>TradeGPT ES FLEXIBLE Y PERSONALIZABLE
                                    </p>
                                 </div>
                              </div>
                              <div class="Article__ItemText-sc-l1hvz9-11 bIVCnS">
                                 <div data-editable="true"
                                    data-name="article__item_text1">
                                    <p>TradeGPT
                                       no es un sistema único para todos.
                                       Es personalizable y flexible, lo que
                                       le permite elegir su estilo
                                       comercial, nivel de riesgo y
                                       objetivo de
                                       ganancias preferidos. TradeGPT puede
                                       negociar con cualquier activo,
                                       cualquier moneda y en cualquier
                                       período de tiempo. Ya sea
                                       principiante o
                                       profesional, TradeGPT puede ayudarle
                                       a alcanzar sus objetivos
                                       comerciales.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="Article__Item-sc-l1hvz9-8 eNlBHN">
                              <div class="Article__ItemImg-sc-l1hvz9-9 ioqFUp">
                                 <div data-editable="true"
                                    data-name="article_item_2"><img
                                    src="assets/article_item_2.png"
                                    alt="article_item_2.png"
                                    loading="lazy"></div>
                              </div>
                              <div class="Article__ItemTitle-sc-l1hvz9-10 eoMZmW">
                                 <div data-editable="true"
                                    data-name="article__item_title2">
                                    <p>IMPULSADO POR LA IA MÁS POTENTE</p>
                                 </div>
                              </div>
                              <div class="Article__ItemText-sc-l1hvz9-11 bIVCnS">
                                 <div data-editable="true"
                                    data-name="article__item_text2">
                                    <p>TradeGPT
                                       es un sistema comercial
                                       revolucionario que utiliza
                                       inteligencia
                                       artificial para analizar el mercado
                                       y ejecutar operaciones por usted.
                                       TradeGPT no se parece a ningún otro
                                       sistema comercial que haya visto.
                                       Está impulsado por GPT-4, la última
                                       y más avanzada tecnología de
                                       procesamiento de lenguaje natural
                                       del mundo. TradeGPT puede comprender
                                       el sentimiento del mercado, las
                                       noticias, las tendencias y las
                                       señales, y
                                       utilizarlas para tomar decisiones
                                       comerciales inteligentes por usted.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="Article__Item-sc-l1hvz9-8 eNlBHN">
                              <div class="Article__ItemImg-sc-l1hvz9-9 ioqFUp">
                                 <div data-editable="true"
                                    data-name="article_item_3"><img
                                    src="assets/article_item_3.png"
                                    alt="article_item_3.png"
                                    loading="lazy"></div>
                              </div>
                              <div class="Article__ItemTitle-sc-l1hvz9-10 eoMZmW">
                                 <div data-editable="true"
                                    data-name="article__item_title3">
                                    <p>SIN INSTALACIÓN, SIN DESCARGA, SIN
                                       PROBLEMAS
                                    </p>
                                 </div>
                              </div>
                              <div class="Article__ItemText-sc-l1hvz9-11 bIVCnS">
                                 <div data-editable="true"
                                    data-name="article__item_text3">
                                    <p>TradeGPT
                                       es fácil de usar y no requiere
                                       instalación ni descarga. Puedes
                                       acceder a
                                       él desde cualquier dispositivo, en
                                       cualquier lugar y en cualquier
                                       momento. Todo lo que necesita es una
                                       conexión a Internet y una cuenta
                                       comercial. TradeGPT hará el resto
                                       por usted.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="Article__ArticleText2-sc-l1hvz9-4 hEjubu">
                           <div data-editable="true" data-name="article__text2">
                              <p>TradeGPT
                                 es el futuro del comercio. Es la solución
                                 comercial definitiva
                                 impulsada por IA. No pierda esta oportunidad de
                                 unirse a la revolución
                                 comercial. Regístrese en TradeGPT hoy y comience a
                                 operar con el poder
                                 de la inteligencia artificial.👇
                              </p>
                           </div>
                        </div>
                        <div class="Article__ArticleButton-sc-l1hvz9-13 hricYi">
                           <button
                              type="button"
                              class="Button__ButtonWrapper-sc-fkdnkk-0 llqlUi scroll_to_register">
                              <div data-editable="true" data-name="article__btn">
                                 <p>¡Sí, me gustaría probar el poder de<br
                                    class="mobile-only"> la IA combinado
                                    con el comercio!
                                 </p>
                              </div>
                           </button>
                        </div>
                        <div class="Article__ArticleText3-sc-l1hvz9-5 fOYOQK">
                           <div data-editable="true" data-name="article__text3">
                              <p>¿Quieres
                                 ver los sorprendentes resultados que TradeGPT
                                 puede lograr para ti?
                                 Luego consulte a continuación el panel de
                                 TradeGPT.👇
                              </p>
                           </div>
                        </div>
                        <div class="Article__ArticleImage-sc-l1hvz9-12 icekNf">
                           <div data-editable="true" data-name="article_img"><img
                              src="assets/article_img.png"
                              alt="article_img.png" loading="lazy"></div>
                        </div>
                        <div class="Article__ArticleText4-sc-l1hvz9-6 cZGDXi">
                           <div data-editable="true" data-name="article__text4">
                              <p>Como
                                 muestra la imagen de arriba, 250€ se multiplicaron
                                 rápidamente hasta
                                 obtener un retorno semanal promedio de 1793€,
                                 ¡gracias a las increíbles
                                 capacidades de la tecnología de inteligencia
                                 artificial de vanguardia de
                                 TradeGPT!
                              </p>
                              <br>
                              <p>Toma la decisión que podría cambiar tu futuro
                                 financiero. Únase a TradeGPT ahora y adopte el
                                 algoritmo que está
                                 cambiando las reglas del juego.
                              </p>
                              <br>
                              <p>No dejes escapar esta oportunidad. Regístrese ahora
                                 para obtener TradeGPT.👇
                              </p>
                           </div>
                        </div>
                        <div class="Article__ArticleButton-sc-l1hvz9-13 hricYi">
                           <button
                              type="button"
                              class="Button__ButtonWrapper-sc-fkdnkk-0 llqlUi scroll_to_register">
                              <div data-editable="true" data-name="article__btn">
                                 <p>¡Sí, me gustaría probar el poder de<br
                                    class="mobile-only"> la IA combinado
                                    con el comercio!
                                 </p>
                              </div>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="display:contents">
               <div class="Access__AccessSection-sc-ic5a1g-0 hDSrxl">
                  <div class="Container-sc-a4fxlm-0 iaZBIw">
                     <div class="Access__AccessTitle-sc-ic5a1g-1 bvliW">
                        <div data-editable="true" data-name="access__title">
                           <p>¿Aún no estás convencido🤔? Lea lo que dicen quienes han
                              probado TradeGPT👇
                           </p>
                        </div>
                     </div>
                     <div class="Access__AccessList-sc-ic5a1g-2 dtbTph">
                        <div class="Access__AccessListItem-sc-ic5a1g-3 kJjGNV">
                           <div class="Access__AccessListImage-sc-ic5a1g-4 gbCith">
                              <div data-editable="true" data-name="access_item_1"><img
                                 src="assets/access_item_1.jpg"
                                 alt="access_item_1.jpg" loading="lazy">
                              </div>
                           </div>
                           <div class="Access__AccessListText1-sc-ic5a1g-5 fyVQku">
                              <div data-editable="true"
                                 data-name="access__item1_title">
                                 <p>Eduardo Zimmerman</p>
                              </div>
                           </div>
                           <div class="Access__AccessListText2-sc-ic5a1g-6 eKFGkH">
                              <div data-editable="true" data-name="access__item1_text">
                                 <p>“He
                                    estado usando TradeGPT durante un mes y
                                    estoy sorprendido con los
                                    resultados. TradeGPT es el mejor sistema
                                    comercial que he probado. Es
                                    fácil de usar, confiable y rentable.
                                    TradeGPT me ha ayudado a aumentar
                                    mis ingresos en un 300% en tan solo unas
                                    semanas. Recomiendo ampliamente
                                    TradeGPT a cualquiera que quiera operar con
                                    confianza y éxito”.
                                 </p>
                              </div>
                           </div>
                           <div class="Access__AccessListText3-sc-ic5a1g-7 bDCxuy">
                              <div data-editable="true"
                                 data-name="access__item1_profession">
                                 <p>-Director de marketing -</p>
                              </div>
                           </div>
                        </div>
                        <div class="Access__AccessListItem-sc-ic5a1g-3 kJjGNV">
                           <div class="Access__AccessListImage-sc-ic5a1g-4 gbCith">
                              <div data-editable="true" data-name="access_item_2"><img
                                 src="assets/access_item_2.jpg"
                                 alt="access_item_2.jpg" loading="lazy">
                              </div>
                           </div>
                           <div class="Access__AccessListText1-sc-ic5a1g-5 fyVQku">
                              <div data-editable="true"
                                 data-name="access__item2_title">
                                 <p>Eric Johnson</p>
                              </div>
                           </div>
                           <div class="Access__AccessListText2-sc-ic5a1g-6 eKFGkH">
                              <div data-editable="true" data-name="access__item2_text">
                                 <p>“TradeGPT
                                    es un punto de inflexión para mí. Siempre
                                    me ha interesado el trading,
                                    pero nunca tuve el tiempo ni las
                                    habilidades para hacerlo correctamente.
                                    TradeGPT cambió eso para mí. TradeGPT hace
                                    todo el trabajo por mí:
                                    analiza el mercado, ejecuta operaciones y
                                    gestiona mi cartera. TradeGPT
                                    es como tener un operador profesional a mi
                                    lado, 24 horas al día, 7 días
                                    a la semana. TradeGPT me ha hecho ganar más
                                    dinero del que jamás soñé”.
                                 </p>
                              </div>
                           </div>
                           <div class="Access__AccessListText3-sc-ic5a1g-7 bDCxuy">
                              <div data-editable="true"
                                 data-name="access__item2_profession">
                                 <p>-Crítico de arte-</p>
                              </div>
                           </div>
                        </div>
                        <div class="Access__AccessListItem-sc-ic5a1g-3 kJjGNV">
                           <div class="Access__AccessListImage-sc-ic5a1g-4 gbCith">
                              <div data-editable="true" data-name="access_item_3"><img
                                 src="assets/access_item_3.jpg"
                                 alt="access_item_3.jpg" loading="lazy">
                              </div>
                           </div>
                           <div class="Access__AccessListText1-sc-ic5a1g-5 fyVQku">
                              <div data-editable="true"
                                 data-name="access__item3_title">
                                 <p>Edward Johnson</p>
                              </div>
                           </div>
                           <div class="Access__AccessListText2-sc-ic5a1g-6 eKFGkH">
                              <div data-editable="true" data-name="access__item3_text">
                                 <p>“TradeGPT
                                    es un milagro. Al principio era escéptico,
                                    pero decidí intentarlo.
                                    Estoy muy contenta de haberlo hecho.
                                    TradeGPT es el sistema comercial
                                    más avanzado y eficaz del mercado. TradeGPT
                                    utiliza inteligencia
                                    artificial para tomar decisiones
                                    comerciales inteligentes por mí.
                                    TradeGPT ha convertido mi pequeña inversión
                                    en una fortuna. TradeGPT es
                                    lo mejor que me ha pasado en la vida”.
                                 </p>
                              </div>
                           </div>
                           <div class="Access__AccessListText3-sc-ic5a1g-7 bDCxuy">
                              <div data-editable="true"
                                 data-name="access__item3_profession">
                                 <p>-Constructor de botes-</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="Access__AccessText-sc-ic5a1g-8 jnHxLr">
                        <div data-editable="true" data-name="access_text">
                           <p>¿Que estas esperando? Empiece a utilizar TradeGPT también.👇
                           </p>
                        </div>
                     </div>
                     <div class="Access__AccessButton-sc-ic5a1g-9 hJxRBJ">
                        <button type="button"
                           class="Button__ButtonWrapper-sc-fkdnkk-0 iZGEFe scroll_to_register">
                           <div data-editable="true" data-name="article__btn">
                              <p>¡Sí, me gustaría probar el poder de<br
                                 class="mobile-only"> la IA combinado con el
                                 comercio!
                              </p>
                           </div>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div style="display:contents">
            <div class="Disclaimer__DisclaimerWrap-sc-32bxb-0 eiZQdk">
               <div class="Container-sc-a4fxlm-0 iaZBIw">
                  <div class="Disclaimer__DisclaimerText-sc-32bxb-1 bqPLNo">
                     <p>Esta
                        página no representa a la empresa publicitada y los puntos de vista
                        aquí expresados no necesariamente corresponden con la política oficial
                        o
                        postura de cualquier otra empresa.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div style="display:contents">
            <div class="GlobalFooter__FooterContainer-sc-1jle5k5-0 YgGjL">
               <div class="Container-sc-a4fxlm-0 iaZBIw">
                  <div class="GlobalFooter__Logo-sc-1jle5k5-1 hkhlrZ">
                  <a target="_blank" href="#" class="scroll_to_register">
                     <img  src="img/logo.png" loading="lazy" alt="Logo">
                     </a>
                 </div>
                  <div class="GlobalFooter__Links-sc-1jle5k5-2 jeOmhK">
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                        href="#"
                        class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA scroll_to_register">Acerca de
                        nosotros</a>
                     </div>
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                        href="<?=$settings->policy()?>"
                        class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">Política de
                        privacidad</a>
                     </div>
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                        href="<?=$settings->terms()?>"
                        class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">Términos y
                        Condiciones</a>
                     </div>
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                        href="#"
                        class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA scroll_to_register">Contáctenos</a>
                     </div>
                     <div class="GlobalFooter__LinkWrap-sc-1jle5k5-3 fSuHFZ"><a target="_blank"
                        href="<?=$settings->cookie()?>"
                        class="GlobalFooter__Link-sc-1jle5k5-4 IcxeA">Política de
                        cookies</a>
                     </div>
                  </div>
                  <div class="GlobalFooter__Text-sc-1jle5k5-6 bpBByd">Los
                     CFD son instrumentos complejos y conllevan un riesgo elevado de perder
                     dinero rápidamente debido al apalancamiento. Entre el 74 y el 89 % de
                     las cuentas de los inversores minoristas pierden dinero cuando operan
                     con CFD. Usted debería considerar si entiende cómo funcionan los CFD y
                     si puede permitirse el riesgo de perder su dinero.
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $settings->in_footer(); ?>
  <script>
    $(".scroll_to_register").click(function (event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("#registerForm").offset().top
      }, 500);
    });
  </script>
   </body>
</html>
