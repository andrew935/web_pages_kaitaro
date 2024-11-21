<?php

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = "bitcoin-bank"; // Replace with your offer name
$p_lang    = "pt"; // Replace with the language of your offer
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "PT"; // Replace with the default country of your offer

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

$settings = new Settings();
$params = $settings->before_html($p_lang,$p_country);
$params .="&utm_campaign=". $p_keyword;
$params .="&subid={subid}";
$params .="&lang=". $p_lang;
$params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="pt" class="desktop portrait">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bitcoin Bank</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link href="css/main.524dc58c3d8d754d7ee4.css" rel="stylesheet">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/main.min.js" defer="defer"></script>

    <?php $settings->in_header();?>
</head>

<body class="gtd-body-hidden" style="font-family:serif">
<?php $settings->in_body();?>

<section class="intro-section-1" style="padding:15px 0 10px 0">
    <div style="display:inline-block;position:absolute;top:1px;left:50%;transform:translateX(-50%);font-size:.5em;opacity:.5;font-family:inherit">
        <span style="font-size:12px" class="topTextASet">-&nbsp;Advertorial&nbsp;<a href="#form"
                                                                                      style="font:inherit;color:inherit;text-decoration:inherit">&amp;&nbsp;DMCA&nbsp;Protected</a>&nbsp;-</span>
    </div>
    <div class="container"><p class="intro-p"><b data-i18n="warning">Atenção</b>: <span data-i18n="due-to">Devido &nbsp; altíssima procura por parte dos usuários, fecharemos o registro a partir de </span><b><b><span
            class="tomorrow-date"></span> - <span data-i18n=""><b>Corre!</b></span> </b></b><span class="countdown-span"
                                                                                                  id="timer"></span></p>
    </div>
</section>
<section class="intro-section-2">
    <div class="container">
        <div class="intro-part-2"><img src="images/logo.png" alt="logo" class="logo">
            <div class="exclusive-offers-wrapper intro-margin-div none">
                <div><span class="purple" data-i18n="">OFERTA EXCLUSIVA PARA</span><br><span class="red" data-i18n="">TRADERS BRASILEIROS </span><span
                        class="red country-name-geo" data-i18n="">Brazil</span> <span
                        class="red gtd-geo-country-name"></span></div>
                <img data-init="country-flag" height="50" class="flag-pic" src="images/BR.png"></div>
            <div class="dynamic-person-div none">
                <div class="dynamic-person-img-wrapper"><img src="images/1.jpg" alt="" class="dynamic-person-img"></div>
                <p class="dynamic-person-p"><span class="dynamic-person-name-span userName">Keila N.</span> <span
                        class="userSurname"></span><br><span data-i18n="">acabou de fazer</span><br><span
                        data-init="visitor-currency-symbol" id="dollar-shake" class="dollar-shake"><span
                        class="currency">$</span> </span><span class="dynamic-person-sum-span">479</span></p></div>
        </div>
    </div>
</section>
<section class="video-form-section">
    <div class="container"><h1 class="video-header" data-i18n="">Bitcoin está tornando as pessoas ricas</h1>
        <p class="video-subheader"><span data-i18n="">E você pode se tornar o</span> <span class="yellow" data-i18n="">Próximo milionário...</span>
        </p>
        <div class="row mob-video-block">
            <div class="col-md-6 col-lg-8">
                <div class="video-wrapper">
                    <video id="my-video" autoplay muted controls="" class="video-js vjs-default-skin vjs-big-play-centered vjs-show-big-play-button-on-pause video">
                        <source src="media/en-1.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div id="form" class="form-container">
                    <h1 class="formHeader" data-i18n="">MUDE SUA VIDA HOJE!</h1>
                    <div class="progbar"><ul class="formUl"><li class="active"></li><li></li><li></li></ul></div>
                    <div class="formwrap-outer">
                        <div class="formwrap">
                            <div class="form-body">
                                <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 400px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="confirm-text_links col-md-4 offset-md-8"></div>
        </div>
    </div>
</section>
<section class="intro-section-mobile">
    <div class="container">
        <div class="intro-part-2">
            <div class="exclusive-offers-wrapper intro-margin-div" style="">
                <div class="exclusive-offers-text"><span class="purple"
                                                         data-i18n="">OFERTA EXCLUSIVA PARA</span><br><span class="red"
                                                                                                            data-i18n="">TRADERS BRASILEIROS </span><span
                        class="red country-name-span">Brazil</span></div>
                <img data-init="country-flag" height="50" class="flag-pic" style="margin:auto;display:block"
                     src="images/BR.png"></div>
            <div class="dynamic-person-div">
                <div class="dynamic-person-img-wrapper"><img src="images/1.jpg" alt="" class="dynamic-person-img"></div>
                <p class="dynamic-person-p"><span class="dynamic-person-name-span">Keila N.</span><br><span
                        data-i18n="">acabou de fazer</span><br><span class="dynamic-person-sum-span">479</span> <span
                        data-init="visitor-currency-symbol" class="dollar-shake"><span class="currency">$</span></span>
                </p></div>
        </div>
    </div>
</section>
<section class="logos-section">
    <div class="container">
        <div class="logos-wrapper"><img src="images/bitgo.png" class="logo" alt="bitgo logo"> <img
                src="images/norton.png" class="logo" alt="norton logo"> <img src="images/secure-trading.png"
                                                                             class="logo" alt="secure trading logo">
            <img src="images/mcafee.png" class="logo" alt="mcafee logo"></div>
    </div>
</section>
<section class="join-us-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8"><h1 class="join-us-header"><span
                    data-i18n="">Junte-se a nós e comece a Fazer Dinheiro </span><span style="color:#5f3394"
                                                                                       data-i18n="">com Bitcoin Bank!</span>
            </h1><br>
                <p class="join-us-p"><span data-i18n="">O Bitcoin Bank é um grupo reservado exclusivamente para pessoas que saltaram nos retornos insanos que o Bitcoin oferece e assim acumularam uma fortuna silenciosamente. Nossos membros curtem viagens ao redor do mundo todos os meses enquanto ganham dinheiro em seu laptop com apenas alguns minutos de “trabalho” por dia.</span>
                </p></div>
        </div>
    </div>
</section>
<section class="fake-news-section">
    <div class="container">
        <div class="row fake-news-section_row">
            <div class="col-md-5"><p class="seenon-p" data-i18n="">Como visto em</p>
                <p class="fake-news-logos-wrapper"><img src="images/seenon.png" alt="media logos"></p></div>
            <div class="col-md-7">
                <div class="join-us-img-wrapper"><img src="images/girl-holding-bitcoin.png" alt="join us"
                                                      class="join-us-img"></div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials-section">
    <div class="container-fluid"><h4 class="testimonials-header purple" data-i18n="">Depoimentos reais de nossos
        usuários</h4>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                <div class="testimonial-wrapper testimonial-wrapper-1">
                    <div class="testimonial-intro-text white"><span data-i18n="">Marcos C.</span><br><span data-i18n="">Belo Horizonte</span><br><span
                            class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span
                            data-init="visitor-currency-symbol"><span class="currency">$</span></span>12,853</span>
                    </div>
                    <div class="testimonial-hover-text"><i>"Eu sou um membro da "Revolução Bitcoin" por apenas 47 dias.
                        Mas minha vida já mudou! Não só fiz meus primeiros <span class="currency">$</span> 10K, mas
                        também conheci muita gente incrível no processo. Obrigado, Bitcoin Bank!"</i></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                <div class="testimonial-wrapper testimonial-wrapper-2">
                    <div class="testimonial-intro-text white"><span data-i18n="">Laura P.</span><br><span data-i18n="">Gramado</span><br><span
                            class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span
                            data-init="visitor-currency-symbol"><span class="currency">$</span></span>7192</span></div>
                    <div class="testimonial-hover-text"><i>Eu finalmente sei como é viver o sonho. Eu não sinto mais que
                        estou do lado de fora olhando enquanto todo mundo tem toda a diversão. A Bitcoin Bank me
                        permitiu me aposentar cedo e viver o estilo de vida que só 1% da população tem</i></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                <div class="testimonial-wrapper testimonial-wrapper-3">
                    <div class="testimonial-intro-text white"><span data-i18n="">Matheus I.</span><br><span
                            data-i18n="">Salvador</span><br><span class="yellow testimonial-profit-span"><span
                            data-i18n="">Lucro</span>: <span data-init="visitor-currency-symbol"><span class="currency">$</span></span>10519</span>
                    </div>
                    <div class="testimonial-hover-text"><i>Em 10 anos investindo na bolsa nunca vi nada assim. Todos
                        mundo no trabalho achou que eu tava louco quando larguei a empresa para investir com o software
                        Bitcoin Bank em tempo integral. <span class="currency">$</span> 38.459 em lucros mais tarde,
                        todos os meus colegas estão agora me IMPLORANDO para eu deixar eles entrarem.</i></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                <div class="testimonial-wrapper testimonial-wrapper-4">
                    <div class="testimonial-intro-text white"><span data-i18n="">Jane A.</span><br><span data-i18n="">Porto Alegre</span><br><span
                            class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span
                            data-init="visitor-currency-symbol"><span class="currency">$</span></span>8519</span></div>
                    <div class="testimonial-hover-text"><i>Duas semanas atrás, eu fui demitida. Sem opções e com essa
                        crise toda, achei que minha vida tinha acabado. Agora estou ganhando mais de R$ 1.261,42 todos
                        os dias. E pela primeira vez em 2 meses, minha conta não ficou no vermelho. obrigada, Bitcoin
                        Bank!</i></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 feature-wrapper-col">
                <div class="feature-wrapper">
                    <div class="feature-img-wrapper"><img src="images/feature-img-1.png" class="feature-img"
                                                          alt="feature 1"></div>
                    <h5 class="feature-header" data-i18n="">DESEMPENHO COM PRECISÃO DE LASER</h5>
                    <p class="feature-description" data-i18n="">Não há outro aplicativo de negociação no mundo que tenha
                        um nível de precisão de 99,4% que o The Bitcoin Bank consegue atingir. É por isso que nossos
                        membros de todo o mundo confiam em nós para dobrar triplicar e quadruplicar seu dinheiro
                        suado.</p></div>
            </div>
            <div class="col-lg-4 feature-wrapper-col">
                <div class="feature-wrapper">
                    <div class="feature-img-wrapper"><img src="images/feature-img-2.png" class="feature-img"
                                                          alt="feature 1"></div>
                    <h5 class="feature-header" data-i18n="">TECNOLOGIA DE PONTA</h5>
                    <p class="feature-description" data-i18n="">O software Bitcoin Bank foi criado usando a programação
                        mais avançada que o mundo comercial já viu. O software está &nbsp; frente dos mercados em 0,01
                        segundo. Este 'salto de tempo' faz do software o aplicativo comercial mais consistente do
                        planeta.</p></div>
            </div>
            <div class="col-lg-4 feature-wrapper-col">
                <div class="feature-wrapper feature-wrapper_small">
                    <div class="feature-img-wrapper"><img src="images/feature-img-3.png" class="feature-img"
                                                          alt="feature 1"></div>
                    <h5 class="feature-header" data-i18n="">APP DE NEGOCIAÇÃO PREMIADO</h5>
                    <p class="feature-description" data-i18n="">O aplicativo Bitcoin Bank ganhou vários prêmios. Os
                        prêmios mais recentes que tivemos a honra de receber estão ficando em primeiro lugar na
                        categoria de software de negociação da US Trading Association.</p></div>
            </div>
        </div>
    </div>
</section>
<section class="live-results-section">
    <div class="container relative">
        <div class="live-results-table-wrapper">
            <button class="yellow-btn join-now-btn scroll-top-btn"><span data-i18n="">ENTRE AGORA!</span></button>
            <h1 class="dark-purple bold live-results-header text-center" data-i18n="">Resultados de lucro ao vivo!</h1>
            <table class="live-results-table">
                <thead class="thead">
                <tr>
                    <th class="dark-purple padding-left-td" data-i18n="">The Bitcoin&nbsp;Bank</th>
                    <th class="dark-purple padding-left-td" data-i18n="">Lucro</th>
                    <th class="dark-purple padding-left-td" data-i18n="">Hora da operação</th>
                    <th class="dark-purple padding-left-td" data-i18n="">Cryptomoeda</th>
                    <th class="dark-purple padding-left-td" data-i18n="">Resultado</th>
                </tr>
                </thead>
                <tbody class="tbody">
                <tr>
                    <td class="bold">Ivanise Martins.</td>
                    <td class="bold"><span class="currency">$</span>1179</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Egil Nascimento.</td>
                    <td class="bold"><span class="currency">$</span>1089</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Zenóbia Carvalho.</td>
                    <td class="bold"><span class="currency">$</span>627</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>BTC/ETH</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Baldomero Cardoso.</td>
                    <td class="bold"><span class="currency">$</span>655</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>BTC/ETH</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Adail Araújo.</td>
                    <td class="bold"><span class="currency">$</span>864</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Ivanise Martins.</td>
                    <td class="bold"><span class="currency">$</span>1164</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>BTC/ETH</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Jasão de Souza.</td>
                    <td class="bold"><span class="currency">$</span>678</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Zenóbia Carvalho.</td>
                    <td class="bold"><span class="currency">$</span>1089</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold">Nélio Pinto.</td>
                    <td class="bold"><span class="currency">$</span>665</td>
                    <td class="trade-time-td padding-left-td">25/4/2023</td>
                    <td>ETH/LTC</td>
                    <td><img src="images/tick.png" alt="tick"></td>
                </tr>
                <tr>
                    <td class="bold last-td">Isabella Engel.</td>
                    <td class="bold last-td"><span class="currency">$</span>996</td>
                    <td class="trade-time-td padding-left-td last-td">25/4/2023</td>
                    <td class="last-td">ETH/LTC</td>
                    <td class="last-td"><img src="images/tick.png" alt="tick"></td>
                </tr>
                </tbody>
            </table>
            <div class="currency--table-hide" style="display:none">$</div>
        </div>
    </div>
</section>
<section class="how-it-works-section text-center">
    <div class="container">
        <div class="how-it-works-wrapper"><h1 class="dark-purple bold how-it-works-header" data-i18n="">Como
            funciona</h1>
            <div class="row">
                <div class="col-md-4 no-padding step-wrapper-col">
                    <div class="step-wrapper step-wrapper-1"><h3 class="step-header white step-header-1" data-i18n="">
                        Passo 1</h3>
                        <div class="step-img-wrapper"><img src="images/step-img-1.png" alt="step 1" class="step-img">
                        </div>
                        <div class="step-description"><h5 class="step-subheader bold dark-purple" data-i18n="">
                            Cadastre-se no site</h5>
                            <p class="card-text" data-i18n="">Assim que seu cadastro for aceito, você se tornará
                                automaticamente o mais novo membro da Bitcoin Bank. E você conseguirá ter acesso ao
                                nosso software próprio de negociação de bitcoin gratuitamente</p></div>
                    </div>
                </div>
                <div class="col-md-4 no-padding step-wrapper-col">
                    <div class="step-wrapper step-wrapper-2"><h3 class="step-header white step-header-2" data-i18n="">
                        Passo 2</h3>
                        <div class="step-img-wrapper"><img src="images/step-img-2.png" alt="step 2" class="step-img">
                        </div>
                        <div class="step-description"><h5 class="step-subheader bold dark-purple" data-i18n="">Aplicar
                            na sua conta</h5>
                            <p><span data-i18n="" class="card-text">Como qualquer negócio, você precisa de capital de giro para começar. Então, para começar a lucrar com a Bitcoin Bank, você deve investir qualquer quantia desejada de R$ 800,00 ou mais.</span>
                            </p></div>
                    </div>
                </div>
                <div class="col-md-4 no-padding step-wrapper-col">
                    <div class="step-wrapper last-step-wrapper step-wrapper-3"><h3
                            class="step-header white step-header-3" data-i18n="">Passo 3</h3>
                        <div class="step-img-wrapper"><img src="images/step-img-3.png" alt="step 3" class="step-img">
                        </div>
                        <div class="step-description"><h5 class="step-subheader bold dark-purple" data-i18n="">
                            Terminar</h5>
                            <p data-i18n="" class="card-text">Clique em negociar para desfrutar do preciso premiado e, o
                                mais importante, automático software de negociação. Você também pode definir a
                                negociação para manual, se você preferir negociar por conta própria</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-it-works-btn-wrapper">
        <button class="yellow-btn open-free-account-btn scroll-top-btn"><span data-i18n="">Abrir conta grátis</span>
        </button>
    </div>
</section>
<section class="faq-section">
    <div class="container"><h2 class="faq-section-header text-center dark-purple bold" data-i18n="">Perguntas
        frequentes</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-1"><h4 class="faq-question light-purple bold" data-i18n="">
                            Que tipo de resultados posso esperar?</h4>
                            <p class="faq-answer">Os membros geralmente lucram um mínimo de diariamente</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-2"><h4 class="faq-question light-purple bold" data-i18n="">
                            Quantas horas por dia eu preciso trabalhar?</h4>
                            <p class="faq-answer" data-i18n="">Nossos membros trabalham em média 20 minutos por dia ou
                                menos. Como o software lida com a negociação, a quantidade de 'trabalho' necessária é
                                mínima.</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-3"><h4 class="faq-question light-purple bold" data-i18n="">
                            Qual é o valor máximo que posso fazer?</h4>
                            <p class="faq-answer" data-i18n="">Seus lucros são ilimitados no The Bitcoin Bank. Alguns
                                membros ganharam seu primeiro milhão em apenas 61 dias.</p></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-4"><h4 class="faq-question light-purple bold" data-i18n="">
                            Quanto custa o software?</h4>
                            <p class="faq-answer" data-i18n="">Os membros do The Bitcoin Bank recebem uma cópia do nosso
                                software proprietário gratuitamente. Para se tornar um membro, basta preencher o
                                formulário nesta página.</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-5"><h4 class="faq-question light-purple bold" data-i18n="">É
                            como MMN, marketing multi nivel, piramide ou Marketing de afiliados?</h4>
                            <p class="faq-answer" data-i18n="">Isto não é como MLM, marketing afiliado ou qualquer outra
                                coisa lá fora. O software vence negócios com 99,4% de precisão.</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="faq-wrapper faq-wrapper-6"><h4 class="faq-question light-purple bold" data-i18n="">
                            Existem taxas?</h4>
                            <p class="faq-answer" data-i18n="">Não há taxas ocultas. Sem taxas de corretagem ou
                                comissões. Todo o seu dinheiro é 100% seu e você é livre para retirá-lo a qualquer
                                momento que escolher sem demora.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pre-footer-section">
    <div class="container">
        <button class="pre-footer-btn scroll-top-btn">Comece agora</button>
    </div>
</section>
<footer class="footer text-center">
    <div class="container">
        <ul class="footer-ul">
            <li><a id="privacy-policy" href="#form">PRIVACIDADE</a></li>
            <li><a id="terms" href="#form">TERMOS</a></li>
            <li><a id="earnings-disclaimer" href="#form">ISENÇÃO DE RESPONSABILIDADE</a></li>
            <li><a id="report-abuse" hhref="#form" style="text-transform:uppercase">Denunciar&nbsp;abuso&nbsp;/&nbsp;spam</a>
            </li>
        </ul>
        <div id="disclaimerAndText"
             style="font-family:inherit;font-size:.7em;margin:auto;max-width:600px;color:inherit;padding:15px;border:1px solid inherit;margin-top:15px">
            IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span
                class="disclaimer-brand_name__new">bl.bitcbanksprofit.com</span>, (collectively “This Website”) only
            used as aspirational examples of your earnings potential. The success of those in the testimonials and other
            examples are exceptional results and therefore are not intended as a guarantee that you or others will
            achieve the same results. Individual results will vary and are entirely dependent on your use of <span
                class="disclaimer-brand_name__new">bl.bitcbanksprofit.com</span>. This Website is not responsible for
            your actions. You bear sole responsibility for your actions and decisions when using products and services
            and therefore you should always exercise caution and due diligence. You agree that this Website is not
            liable to you in any way for the results of using our services. See our Website terms of use for our full
            disclaimer of liability and other restrictions. Trading can generate notable benefits, however, it also
            involves the risk of partial/full loss of the invested capital, therefore, you should consider whether you
            can afford to invest. ©<span id="yearDisclaimerNew">2023</span><br>USA REGULATION NOTICE: Trading Forex,
            CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or
            regulated by any financial agencies nor US agencies. Any unregulated trading activity by U.S. residents is
            considered unlawful. This Website does not accept customers located within the United States or holding an
            American citizenship. This Website is not responsible for actions of customers located within the United
            States or holding an American citizenship. Customers located within the United States or holding an American
            citizenship bear sole responsibility for their actions and decisions when using products and services of
            this Website. In any and all circumstances the choice to use the Website, the Service and/or the Software is
            under full responsibility of User, who should comply with the current legislation.
        </div>
        <img src="images/logo.png" class="footer-logo" alt="logo"></div>
</footer>
<div class="modal in" id="finishPopup" tabindex="-1" role="dialog" aria-labelledby="congratulationsLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" id="congratulationsLabel" data-i18n="congratulations">
                Parabéns</h5>
                <p data-i18n="recommended-broker">Corretor recomendado</p></div>
            <div class="modal-body">
                <div class="modal-markets"><img data-init="broker-logo" class="broker-logo broker_image"
                                                src="images/bitgo.png" alt="market"> <img class="stars"
                                                                                          src="images/5stars.svg"
                                                                                          alt="market">
                    <p id="modal-score">4.8/5</p></div>
                <div class="modal-priority"><h4><i class="brshield"></i> <a data-i18n="your-safety">A SUA SEGURANÇA É A
                    NOSSA PRIORIDADE</a></h4>
                    <p><a data-i18n="as-determined">Conforme determinado pelo seu estatuto regulatório </a><span
                            data-init="broker-name" class="broker-name"></span> <a data-i18n="take-strict-measures">toma
                        medidas rigorosas para salvaguardar os fundos do cliente e a sua privacidade</a></p></div>
                <div class="inner">&nbsp;</div>
                <div class="modal-priority"><h4><i class="brmoney"></i><a data-i18n="high-payout">OPÇÕES DE PAGAMENTO
                    ELEVADO</a></h4>
                    <p><span data-init="broker-name" class="broker-name"></span> <a data-i18n="offers-return">oferece
                        até 88% de lucro por trade bem sucedido!</a></p></div>
            </div>
            <div class="modal-footer"><a style="text-decoration:none" class="btn-send-thanks">
                <button data-init="broker-url" type="button" class="btn broker-url" data-i18n="start-trading">Comece a
                    Negociar Agora
                </button>
            </a></div>
        </div>
    </div>
</div>
<style>
    #bitcoin-widget {
    position: fixed;
    display: flex;
    justify-content: space-around;
    bottom: 10px;
    left: 10px;
    color: #ccdae5;
    background: #383a48;
    border-radius: 15px;
    z-index: 5;
    width: 285px;
    height: 90px;
    box-shadow: 1px -7px 20px 6px rgba(0, 0, 0, .25);
    padding: 2px 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 9999
}

#bitcoin-widget h5 {
    font-size: 16px
}

#bitcoin-widget .bitcoin-widget-list-item__title-group svg {
    width: 50px;
    fill: #f8a137
}

#bitcoin-widget .bitcoin-widget-crypto-group {
    width: 100%;
    align-items: center;
    justify-content: center;
    display: flex
}

#bitcoin-widget li, #bitcoin-widget ul {
    margin: 0;
    padding: 0
}

#bitcoin-widget li {
    list-style: none;
    display: flex
}

#bitcoin-widget .bitcoin-widget-list-item__title-group {
    display: flex;
    align-items: center
}

#bitcoin-widget .bitcoin-widget-coin-name {
    margin-left: 5px;
    margin-bottom: 0;
    margin-top: 0
}

#bitcoin-widget .bitcoin-widget-coin-value {
    margin: 0;
    line-height: 1.5
}

#bitcoin-widget .bitcoin-widget-close, #bitcoin-widget .bitcoin-widget-show {
    width: 20px;
    position: absolute;
    top: 5px;
    right: 10px
}

#bitcoin-widget .bitcoin-widget-show {
    display: none
}

#bitcoin-widget .bitcoin-widget-close__item, #bitcoin-widget .bitcoin-widget-show__item {
    cursor: pointer
}

.custom-dropdown {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 5px 0
}

.custom-dropdown select {
    direction: rtl;
    background-color: #383a48;
    color: #fff;
    font-size: inherit;
    padding: 0 .2em;
    padding-left: 1.6em;
    border: 0;
    margin: 0;
    border-radius: 3px;
    text-indent: .01px;
    text-overflow: "";
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none
}

.custom-dropdown::after, .custom-dropdown::before {
    content: "";
    position: absolute;
    pointer-events: none
}

.custom-dropdown::before {
    content: "\25BC";
    height: 1em;
    font-size: .625em;
    line-height: 1;
    left: .8em;
    top: 50%;
    margin-top: -.5em
}

.custom-dropdown::after {
    width: 1.5em;
    left: 0;
    top: 0;
    bottom: 0;
    border-radius: 0 3px 3px 0
}

.custom-dropdown select[disabled] {
    color: rgba(255, 255, 255, .37)
}

.custom-dropdown select[disabled]::before {
    color: rgba(255, 255, 255, .36)
}

.custom-dropdown::after {
    background-color: rgba(0, 0, 0, .15)
}

.custom-dropdown::before {
    color: rgba(255, 255, 255, .4)
}

@media (max-width: 1024px) {
    #bitcoin-widget {
        display: none
    }
}</style>
<div id="bitcoin-widget" style="opacity:1;left:10px">
    <div class="bitcoin-widget-close" style="display:block">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
             data-icon="angle-double-left" class="bitcoin-widget-close__item" role="img" viewBox="0 0 448 512">
            <path fill="#fff"
                  d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path>
        </svg>
    </div>
    <div class="bitcoin-widget-show" style="display:none">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
             data-icon="angle-double-right" class="bitcoin-widget-show__item" role="img" viewBox="0 0 448 512">
            <path fill="#fff"
                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path>
        </svg>
    </div>
    <div class="bitcoin-widget-crypto-group" style="display:flex">
        <ul id="bitcoin-widget-coin-list">
            <li class="bitcoin-widget-list-item widget-bitcoin">
                <div class="bitcoin-widget-list-item__title-group">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab"
                         data-icon="bitcoin" class="bitcoin" role="img" viewBox="0 0 512 512">
                        <path fill="FFAD02"
                              d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-141.651-35.33c4.937-32.999-20.191-50.739-54.55-62.573l11.146-44.702-27.213-6.781-10.851 43.524c-7.154-1.783-14.502-3.464-21.803-5.13l10.929-43.81-27.198-6.781-11.153 44.686c-5.922-1.349-11.735-2.682-17.377-4.084l.031-.14-37.53-9.37-7.239 29.062s20.191 4.627 19.765 4.913c11.022 2.751 13.014 10.044 12.68 15.825l-12.696 50.925c.76.194 1.744.473 2.829.907-.907-.225-1.876-.473-2.876-.713l-17.796 71.338c-1.349 3.348-4.767 8.37-12.471 6.464.271.395-19.78-4.937-19.78-4.937l-13.51 31.147 35.414 8.827c6.588 1.651 13.045 3.379 19.4 5.006l-11.262 45.213 27.182 6.781 11.153-44.733a1038.209 1038.209 0 0 0 21.687 5.627l-11.115 44.523 27.213 6.781 11.262-45.128c46.404 8.781 81.299 5.239 95.986-36.727 11.836-33.79-.589-53.281-25.004-65.991 17.78-4.098 31.174-15.792 34.747-39.949zm-62.177 87.179c-8.41 33.79-65.308 15.523-83.755 10.943l14.944-59.899c18.446 4.603 77.6 13.717 68.811 48.956zm8.417-87.667c-7.673 30.736-55.031 15.12-70.393 11.292l13.548-54.327c15.363 3.828 64.836 10.973 56.845 43.035z"></path>
                    </svg>
                    <h5 class="bitcoin-widget-coin-name">Bitcoin -</h5>&nbsp;<h5 class="bitcoin-widget-coin-value"
                                                                                  style="padding-left:16px">
                    27326.59</h5></div>
            </li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.scroll-top-btn').click(function() {
            $('html, body').animate({
                scrollTop: $('.form-container').offset().top
            });
        });
    });
</script>

<?php $settings->in_footer();?>
</body>
</html>