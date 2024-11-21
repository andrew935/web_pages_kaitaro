<?php


$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$p_keyword = "Oil Trade"; // Replace with your offer name
$p_lang    = "pt"; // Replace with the language of your offer
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "BR"; // Replace with the default country of your offer

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

$params .="&lang=". $p_lang;
   $params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="pt">
<head>

    <link data-type="F1TFunnelSdkCss" rel="stylesheet" href="./static/funnels-sdk/v6/dist/assets/css/main.min.css?v=6.1.7">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Oil Trade</title>

    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link rel="stylesheet" href="./assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/calculator.css">
    <link rel="stylesheet" href="./assets/css/checkbox-svg.css">
    <link rel="stylesheet" href="./assets/css/step.css?v=3">
    <link rel="stylesheet" href="./assets/css/custom.css">

    <?php $settings->in_header();?>
</head>

<body>
<div class="advertorialWrp">
    <a class="topTextASet" href="#form">
        -&nbsp;Advertorial&nbsp;&amp;&nbsp;DMCA&nbsp;Protected&nbsp;-
    </a>
</div>
<div class="hero_scrollArrWrp">
    <img class="hero_scrollArr" src="./assets/images/icon_1.svg" alt="">
</div>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <img src="./assets/images/Logo.svg" alt="" class="header_logo">
            <div class="header_textWrp">
                <h2 class="header_title">
                    Devido à demanda crescente, temos apenas
                </h2>
                <p class="header_subtext">
                    Os candidatos serão aceitos por ordem de chegada
                </p>
                <p class="header_text">
                    Enquanto o formulário de registro continuar sendo exibido nesta
                    página, você ainda terá uma chance
                </p>
            </div>
            <div class="header_counterWrp">
                <h3 class="header_counter">92</h3>
                <p class="header_spots accent">lugares restantes</p>
            </div>
        </div>
    </div>
</header>
<section class="hero">
    <div class="container">
        <div class="hero_inner">
            <div class="hero_textWrp">
                <h1 class="hero_title mainTitle">
              <span class="hero_titleL1" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
                <span class="accent">Ganhe total</span>
                <span class="ipad accent">liberdade </span>
                <span class="tab accent">liberdade </span>
                <span class="mob accent">Financial</span>
              </span>
                    <br>
                    <span class="hero_titleL2" data-aos="fade-down" data-aos-delay="600" data-aos-duration="400">
                <span class="accent desk">liberdade financeira</span>
                <span class="ipad"><span class="accent">financeira</span> ao ganhar com
                </span>
                <span class="tab"><span class="accent">financeira</span> ao ganhar</span>
                <span class="mob"><span class="accent">financeira</span> ao ganhar
                </span>
              </span>
                    <br>
                    <span class="hero_titleL3" data-aos="fade-down" data-aos-delay="900" data-aos-duration="400">
                <span class="desk">ao ganhar com o petróleo!</span>
                <span class="ipad">o petróleo! </span>
                <span class="tab">com o petróleo! </span>
                <span class="mob"> com o petróleo! </span>
              </span>
                </h1>
                <p class="hero_text">
                    Entre agora e veja como é fácil ganhar dinheiro com petróleo
                    usando o algoritmo inteligente da Oil Trade!
                </p>
            </div>
            <div id="form" class="form">
                <h2 class="form__title">ENRIQUEÇA COM PETRÓLEO EM MEIO À CRISE</h2>
                <h3 class="form__subtitle">
                    Insira suas informações para começar:
                </h3>
                <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>


            </div>
        </div>
    </div>
</section>
<section class="alerts">
    <div class="container">
        <div class="alerts_inner">
            <img src="./assets/images/img_3-min.jpg" alt="" class="alerts_img" data-aos="fade-right"
                 data-aos-delay="300" data-aos-offset="300" data-aos-duration="400">
            <div class="alerts_p2">
                <img class="alerts_imgP2" src="./assets/images/img_2-min.jpg" alt="" data-aos="fade-right"
                     data-aos-offset="300">
                <h2 class="alerts_title mainTitle">
              <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">
                <span class="accent">Ganhe dinheiro</span>
                <span class="mob accent">ainda</span>
              </span>
                    <br>
                    <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
                <span class="desk tab"><span class="accent">ainda hoje</span> com alertas</span>
                <span class="mob"><span class="accent">hoje</span> com alertas de
                </span>
              </span>
                    <br>
                    <span class="mainTitle_l3" data-aos="fade-down" data-aos-delay="450" data-aos-duration="400"><span
                                class="desk tab"> de trading em tempo real!</span><span class="mob">trading em tempo real!</span>
              </span>
                </h2>
                <p class="alert_text">
                    Graças ao inovador algoritmo da Oil Trade e à demanda cada vez
                    maior pelo petróleo, agora você pode fazer trades em tempo real.
                    Este sistema é tão simples que é possível usá-lo mesmo sem ter
                    conhecimento nenhum sobre trading... Até mesmo se você nunca fez
                    um único investimento na sua vida.
                </p>
                <div class="alert_list">
                    <div class="alert_itemWrp">
                        <span>&#183;</span>
                        <p class="alert_item">
                            Você <b>NÃO precisa</b> saber nada sobre trading
                        </p>
                    </div>
                    <div class="alert_itemWrp">
                        <span>&#183;</span>
                        <p class="alert_item">
                            Você <b>NÃO precisa</b> saber nada sobre investimentos
                        </p>
                    </div>
                    <div class="alert_itemWrp">
                        <span>&#183;</span>
                        <p class="alert_item">
                            Você <b>NÃO precisa</b> de muito dinheiro
                        </p>
                    </div>
                    <div class="alert_itemWrp">
                        <span>&#183;</span>
                        <p class="alert_item">
                            Você <b>NÃO precisa</b> de muito tempo disponível
                        </p>
                    </div>
                </div>
                <p class="alert_text">
                    Você só precisa saber que é possível começar transferindo apenas
                    R$&nbsp;1330 para a conta de uma corretora 100% segura e lucrar
                    com um clique.
                </p>
                <button class="btn alert_btn scrollToForm">Entrar agora!</button>
            </div>
        </div>
    </div>
</section>
<section class="calculator">
    <div class="container">
        <div class="calculator_inner">
            <h3 class="calculator__title mainTitle">
            <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">
              <span class="accent">Calcule </span> seu
            </span>
                <br>
                <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
              possível <span class="accent">lucro</span>
            </span>
            </h3>
            <div class="calculator__wrapper">
                <div class="calculator__inner">
                    <div class="controls">
                        <div class="control__wrapper">
                            <h3 class="control__name">Você deposita:</h3>
                            <input class="control__input control__dep" type="text" value="">
                            <div class="control__range">
                                <span>R$&nbsp;1330 </span> <span>R$&nbsp;50 000</span>
                            </div>
                        </div>
                        <div class="control__wrapper days">
                            <h3 class="control__name">Período de investimento:</h3>
                            <input class="control__input control__days" type="text" value="45">
                            <div class="control__range">
                                <span>A partir de 1 dia</span> <span>A 3 meses</span>
                            </div>
                        </div>
                    </div>
                    <div class="output">
                        <h4 class="output_title">
                            Retorno possibility of return sobre o seu investimento em
                            petróleo:
                        </h4>
                        <span class="output__sum">
                  <h3 class="output__title">Pode ganhar</h3>
                  <p class="output__earn">R$&nbsp;1 302 000</p>
                </span>
                        <div class="output__inner">
                            <div class="output__wrapper">
                                <h3 class="output__subtitle">Rentabilidade</h3>
                                <p class="output__value output__profitability">1 800%</p>
                            </div>
                            <div class="output__wrapper">
                                <h3 class="output__subtitle revenue">Renda</h3>
                                <p class="output__value output__revenue">
                                    R$&nbsp;1 296 750
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trends">
    <div class="container">
        <div class="trends_inner">
            <h2 class="trends_title mainTitle">
            <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">
              <span class="accent">As tendências do </span>
            </span>
                <br>
                <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
              <span class="desk tab"><span class="accent">mercado</span> falam por si</span>
              <span class="mob"><span class="accent">mercado</span> falam por si</span>
            </span>
            </h2>
            <img src="./assets/images/img_5.2-min.jpg" alt="" class="trends_bgImg trends_img1" data-aos="fade-right"
                 data-aos-delay="300" data-aos-offset="300" data-aos-duration="400">
            <img src="./assets/images/img_5.1-min.jpg" alt="" class="trends_bgImg trends_img2" data-aos="fade-right"
                 data-aos-delay="450" data-aos-offset="300" data-aos-duration="400">
            <img src="./assets/images/img_5.3-min.jpg" alt="" class="trends_bgImg trends_img3" data-aos="fade-right"
                 data-aos-delay="600" data-aos-offset="300" data-aos-duration="400">
            <img src="./assets/images/img_4-min.jpg" alt="" class="trends_bgImg trends_img4" data-aos="fade-right"
                 data-aos-delay="300" data-aos-offset="300" data-aos-duration="400">
            <div class="trends_innerWpr">
                <p class="trends_text">
                    O preço da gasolina subiu em 18 dos 21 países das Américas no
                    primeiro semestre deste ano.
                </p>
                <p class="trends_text">
                    O Brasil ficou em 15º lugar no ranking dos países nos quais os
                    preços dos combustíveis mais subiram.
                </p>
                <p class="trends_banner">
                    O preço da gasolina no país teve alta de 9,7% no primeiro semestre
                    de 2022 e continua subindo constantemente. Os especialistas
                    preveem um aumento de preço de 34% a 59% já no início do próximo
                    mês.
                </p>
                <p class="trends_accentText accent">
                    Este é um ótimo momento para comprar, pois a expansão dos negócios
                    está impulsionando o crescimento do mercado.
                </p>
                <button class="btn trends_btn scrollToForm">Entrar agora!</button>
            </div>
        </div>
    </div>
</section>
<section class="benefit">
    <div class="container">
        <div class="benefit_inner">
            <h2 class="benefit_title mainTitle">
            <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">
              <span class="desk">O <span class="accent">que você recebe</span></span>
              <span class="tab">O <span class="accent">que você recebe</span></span>
              <span class="mob">O <span class="accent">que você recebe</span></span>
            </span>
                <br>
                <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
              <span class="desk"><span class="accent">ao investir R$&nbsp;1330 </span> ou
                mais</span>
              <span class="tab"><span class="accent">ao investir R$&nbsp;1330</span></span>
              <span class="mob"><span class="accent">ao investir R$&nbsp;1330</span> ou
              </span>
            </span>
                <br>
                <span class="mainTitle_l3" data-aos="fade-down" data-aos-delay="450" data-aos-duration="400">
              <span class="desk">com a <span class="accent">Oil Trade:</span></span>
              <span class="tab">
                ou mais com a <span class="accent">Oil Trade:</span></span>
              <span class="mob">mais com a <span class="accent">Oil Trade:</span></span>
            </span>
                <br>
                <span class="mainTitle_l4" data-aos="fade-down" data-aos-delay="600" data-aos-duration="400">
              <span class="tab"></span>
            </span>
            </h2>
            <div class="benefit_list">
                <div class="benefit_item benefit_1" data-aos="fade-right" data-aos-delay="150" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="benefit_name accent">
                        Você se torna automaticamente um investidor oficial no mercado
                        de petróleo.
                    </h4>
                    <p class="benefit_text">
                        As reservas de petróleo do mundo estão se esgotando, o que
                        significa que seus preços aumentam a cada dia. Este é o momento
                        perfeito para comprar, pois a expansão dos negócios levará o
                        mercado às alturas.
                    </p>
                    <img src="./assets/images/icon_3.svg" alt="" class="benefit_img">
                </div>
                <div class="benefit_item benefit_2" data-aos="fade-right" data-aos-delay="300" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="benefit_name accent">
                        Fluxo constante de dinheiro na sua conta pessoal.
                    </h4>
                    <p class="benefit_text">
                        A Oil Trade usa o mais recente mecanismo de trading para que
                        todos os seus trades funcionem com eficácia e sem complicação,
                        garantindo que você tenha a melhor proteção disponível.
                    </p>
                    <img src="./assets/images/icon_4.svg" alt="" class="benefit_img">
                </div>
                <div class="benefit_item benefit_3" data-aos="fade-right" data-aos-delay="450" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="benefit_name accent">
                        Seu dinheiro e seus dados permanecem seguros.
                    </h4>
                    <p class="benefit_text">
                        Desde o momento em que o seu primeiro depósito de R$&nbsp;1330 é
                        efetuado, você se torna um parceiro da Oil Trade e recebe
                        suporte e proteção legal para os seus dados e investimentos.
                    </p>
                    <img src="./assets/images/icon_5.svg" alt="" class="benefit_img">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="step">
    <div class="container">
        <h2 class="step_heroTitle mainTitle">
          <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">Como começar a usar
          </span>
            <br>
            <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
            a <span class="accent">plataforma Oil Trade</span>
          </span>
        </h2>
        <div class="step_wrp">
            <div class="step_half1">
                <div class="step_itemWrp step1 active">
                    <div class="step_inner">
                        <h4 class="step_title">Registre-se no sistema</h4>
                        <p class="step_text">
                            Informe seu nome e sobrenome, endereço de e-mail, senha de
                            segurança e número de telefone. Após confirmar os dados
                            inseridos, você se tornará um membro da plataforma.
                        </p>
                    </div>
                </div>
                <div class="step_itemWrp step2">
                    <div class="step_inner">
                        <h4 class="step_title">Faça o depósito inicial na sua conta</h4>
                        <p class="step_text">
                            Faça um depósito inicial (R$&nbsp;1330) na sua conta antes de
                            começar a usar a plataforma. Siga as instruções exibidas na
                            tela para concluir esta etapa.
                        </p>
                    </div>
                </div>
                <div class="step_itemWrp step3">
                    <div class="step_inner">
                        <h4 class="step_title">
                            Atenda a uma chamada para começar a receber renda passiva
                            todos os dias
                        </h4>
                        <p class="step_text">
                            Após realizar o seu registro, aguarde alguns minutos e atenda
                            à chamada do nosso gerente. Todas as suas perguntas serão
                            respondidas e você descobrirá como é possível ganhar dinheiro
                            na plataforma com facilidade.
                        </p>
                    </div>
                </div>
            </div>
            <div class="step_half2">
                <div class="step_img step1 step1--pt active">
                    <p class="step_img_desc">
                        Insira seu endereço de e-mail para obter acesso VIP ao sistema
                    </p>
                    <p class="step_img_desc">
                        Insira seu número de celular para confirmar a sua identidade
                    </p>
                    <img class="" src="./assets/images/img_7-min-pt.jpg" alt="">
                </div>
                <div class="step_img step2 step2--pt">
                    <p class="step_img_desc">
                        Para ativar a sua conta e começar a ganhar, você precisa
                        investir um valor que seja igual ou superior ao depósito mínimo.
                    </p>
                    <img class="" src="./assets/images/img_8-min-pt.jpg" alt="">
                </div>
                <div class="step_img step3">
                    <img class="" src="./assets/images/img_9-min.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="step_mob">
            <div class="step_itemWrp step1 active">
                <div class="step_inner">
                    <h4 class="step_title">Registre-se no sistema</h4>
                    <p class="step_text">
                        Informe seu nome e sobrenome, endereço de e-mail, senha de
                        segurança e número de telefone. Após confirmar os dados
                        inseridos, você se tornará um membro da plataforma.
                    </p>
                </div>
            </div>
            <div class="step_img step1 step1--pt active">
                <p class="step_img_desc">
                    Insira seu endereço de e-mail para obter acesso VIP ao sistema
                </p>
                <p class="step_img_desc">
                    Insira seu número de celular para confirmar a sua identidade
                </p>
                <img class="" src="./assets/images/img_7-min-pt.jpg" alt="">
            </div>
            <div class="step_itemWrp step2 active">
                <div class="step_inner">
                    <h4 class="step_title">Faça o depósito inicial na sua conta</h4>
                    <p class="step_text">
                        Faça um depósito inicial (R$&nbsp;1330) na sua conta antes de
                        começar a usar a plataforma. Siga as instruções exibidas na tela
                        para concluir esta etapa.
                    </p>
                </div>
            </div>
            <div class="step_img step2 step2--pt active">
                <p class="step_img_desc">
                    Para ativar a sua conta e começar a ganhar, você precisa investir
                    um valor que seja igual ou superior ao depósito mínimo.
                </p>
                <img class="" src="./assets/images/img_8-min-pt.jpg" alt="">
            </div>
            <div class="step_itemWrp step3 active">
                <div class="step_inner">
                    <h4 class="step_title">
                        Atenda a uma chamada para começar a receber renda passiva todos
                        os dias
                    </h4>
                    <p class="step_text">
                        Após realizar o seu registro, aguarde alguns minutos e atenda à
                        chamada do nosso gerente. Todas as suas perguntas serão
                        respondidas e você descobrirá como é possível ganhar dinheiro na
                        plataforma com facilidade.
                    </p>
                </div>
            </div>
            <div class="step_img step3 active">
                <img class="" src="./assets/images/img_9-min.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="faq">
    <div class="container">
        <div class="faq_inner">
            <h2 class="faq_heroTitle mainTitle">
                <span class="mainTitle_l1 accent" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">PERGUNTAS FREQUENTES</span>
            </h2>
            <div class="faq_list1">
                <div class="faq_item faq1" data-aos="fade-right" data-aos-delay="150" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="faq_name accent">Quanto eu posso ganhar?</h4>
                    <p class="faq_text">
                        Seu lucro depende das suas decisões e aportes. Usuários que têm
                        interesse em fazer trades com valores mais elevados ganham mais
                        do que os usuários que efetuam trades com quantias inferiores.
                        No entanto, isso depende totalmente da forma como você deseja
                        fazer os seus trades.
                    </p>
                    <img src="./assets/images/icon_6.svg" alt="" class="faq_img">
                </div>
                <div class="faq_item faq2" data-aos="fade-right" data-aos-delay="300" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="faq_name accent">
                        Preciso ter experiência com trading?
                    </h4>
                    <p class="faq_text">
                        A Oil Trade foi desenvolvida para traders de todos os níveis e
                        oferece as habilidades e a confiança que você precisa para fazer
                        trades de alto nível. A plataforma apresenta as informações
                        necessárias para começar a negociar, independentemente de você
                        ser um iniciante no mercado ou trader profissional.
                    </p>
                    <img src="./assets/images/icon_6.svg" alt="" class="faq_img">
                </div>
            </div>
            <div class="faq_list2">
                <div class="faq_item faq3" data-aos="fade-right" data-aos-delay="450" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="faq_name accent">Quanto custa?</h4>
                    <p class="faq_text">
                        Nossa plataforma é totalmente gratuita. Você só precisa ter o
                        capital inicial de R$&nbsp;1330, que será usado para investir e
                        fazer os trades.
                    </p>
                    <img src="./assets/images/icon_6.svg" alt="" class="faq_img">
                </div>
                <div class="faq_item faq4" data-aos="fade-right" data-aos-delay="600" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="faq_name accent">
                        Quantos membros a plataforma possui?
                    </h4>
                    <p class="faq_text">
                        Temos mais de 250.000 membros usando os nossos serviços ao redor
                        do mundo.
                    </p>
                    <img src="./assets/images/icon_6.svg" alt="" class="faq_img">
                </div>
                <div class="faq_item faq5" data-aos="fade-right" data-aos-delay="750" data-aos-offset="300"
                     data-aos-duration="400">
                    <h4 class="faq_name accent">A quais empresas eu tenho acesso?</h4>
                    <p class="faq_text">
                        Você pode negociar ações de todas as empresas públicas presentes
                        nas principais bolsas de valores do mundo. Se você já ouviu
                        falar de uma ação, poderá negociá-la!
                    </p>
                    <img src="./assets/images/icon_6.svg" alt="" class="faq_img">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="last">
    <div class="container">
        <div class="last_inner">
            <div class="last_part1">
                <h2 class="last_title mainTitle">
              <span class="mainTitle_l1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="400">
                <span class="desk">Entre na <span class="accent">plataforma </span></span>
                <span class="ipad">Entre na <span class="accent">plataforma de</span></span>
                <span class="tab">Entre na <span class="accent">plataforma </span></span>
                <span class="mob">Entre na <span class="accent">plataforma </span></span>
              </span>
                    <br>
                    <span class="mainTitle_l2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="400">
                <span class="desk"><span class="accent">de trading mais </span></span>
                <span class="ipad"><span class="accent">trading mais requisitada </span> de 2022
                </span>
                <span class="tab"><span class="accent">trading mais requisitada</span></span>
                <span class="mob"><span class="accent">de trading mais </span></span>
              </span>
                    <br>
                    <span class="mainTitle_l3" data-aos="fade-down" data-aos-delay="450" data-aos-duration="400">
                <span class="desk"><span class="accent">requisitada</span> de 2022 e
                </span>
                <span class="ipad">
                  e <span class="accent">enriqueça </span>em meio à crise!</span>
                <span class="tab">de 2022 e <span class="accent">enriqueça </span> em
                </span>
                <span class="mob"><span class="accent">requisitada</span> de 2022
                </span>
              </span>
                    <br>
                    <span class="mainTitle_l4" data-aos="fade-down" data-aos-delay="600" data-aos-duration="400">
                <span class="desk"><span class="accent">enriqueça </span> em meio
                </span>
                <span class="ipad"></span>
                <span class="tab">meio à crise!</span>
                <span class="mob">e <span class="accent">enriqueça</span> em meio
                </span>
              </span>
                    <br>
                    <span class="mainTitle_l5" data-aos="fade-down" data-aos-delay="750" data-aos-duration="400">
                <span class="desk">à crise!</span> <span class="ipad"></span>
                <span class="tab"></span> <span class="mob">à crise!</span>
              </span>
                </h2>
            </div>
            <div class="form">
                <h2 class="form__title">ENRIQUEÇA COM PETRÓLEO EM MEIO À CRISE</h2>
                <h3 class="form__subtitle">
                    Insira suas informações para começar:
                </h3>
                <iframe id="registerForm2" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>

            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <img src="./assets/images/Logo.svg" alt="">
            <ul class="footer_disclaimers">
                <li class="footer_disclaimer first"><a href="../_general_v2/policy/policy.php">Privacidade</a> </li>
                <li class="footer_disclaimer"><a href="../_general_v2/policy/termsandconditions.php">Termos</a></li>
                <li class="footer_disclaimer"><a href="../_general_v2/policy/termsandconditions.php">Renúncia</a></li>

            </ul>
        </div>
        <p class="footer_text">
            <b>IMPORTANT</b> : Earnings and Legal Disclaimers Earnings and income
            representations made by
            <span class="disclaimer-brand_name__new">en.bitcoincodev3.com</span>,
            (collectively “This Website”) only used as aspirational examples of
            your earnings potential. The success of those in the testimonials and
            other examples are exceptional results and therefore are not intended
            as a guarantee that you or others will achieve the same results.
            Individual results will vary and are entirely dependent on your use of
            <span class="disclaimer-brand_name__new">en.bitcoincodev3.com</span>.
            This Website is not responsible for your actions. You bear sole
            responsibility for your actions and decisions when using products and
            services and therefore you should always exercise caution and due
            diligence. You agree that this Website is not liable to you in any way
            for the results of using our services. See our Website terms of use
            for our full disclaimer of liability and other restrictions. Trading
            can generate notable benefits, however, it also involves the risk of
            partial/full loss of the invested capital, therefore, you should
            consider whether you can afford to invest. ©<span id="yearDisclaimerNext">2022</span><br><br>
            <b>USA REGULATION NOTICE</b>: Trading Forex, CFDs and Cryptocurrencies
            is not regulated within the United States. Invest in Crypto is not
            supervised or regulated by any financial agencies nor US agencies. Any
            unregulated trading activity by U.S. residents is considered unlawful.
            This Website does not accept customers located within the United
            States or holding an American citizenship. This Website is not
            responsible for actions of customers located within the United States
            or holding an American citizenship. Customers located within the
            United States or holding an American citizenship bear sole
            responsibility for their actions and decisions when using products and
            services of this Website. In any and all circumstances the choice to
            use the Website, the Service and/or the Software is under full
            responsibility of User, who should comply with the current
            legislation.
        </p>
    </div>
</footer>

<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/ion.rangeSlider.min.js"></script>
<script src="./assets/js/aos.js"></script>
<script src="./assets/js/index.js?v=3"></script>
</body>
</html>
