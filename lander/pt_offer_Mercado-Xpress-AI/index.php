<?php

$keyword = $_GET['keyword'] ?? 'Mercado Xpress AI';

 $dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = $keyword; // Replace with your offer name
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
<html lang="pt">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$p_keyword?></title>
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <?php $settings->in_header();?>
</head>
<body>
    <?php $settings->in_body();?>
    <header class="header">
        <div class="container" style="max-width: 1400px;">
            <div class="row header-row align-items-center justify-content-between">
                <div class="">
                    <a href="#" class="logo d-flex align-items-center"><svg
                            id="fi_12636204" style="width: 2em; height: 2em;" fill="#FFFFFF"
                            enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="m309.39 61.86h129.01v128.98h-129.01zm108.02 15h-60.81c-1.59 0-3.1.63-4.25 1.76l-26.18
     26.18c-1.14 1.13-1.76 2.65-1.76 4.24v60.8c0 3.31 2.65 6 6 6h86.99c3.31 0 5.96-2.69 
     5.96-6v-86.97c.01-3.31-2.64-6.01-5.95-6.01zm-64.49 66.89h20.34l.57 1.13c1.02 2.1 3.14 3.32 5.35 3.32.9 0 1.84-.21 2.7-.64 
     2.94-1.48 4.17-5.08 2.65-8.05l-16.09-32.18c-1.02-2.04-3.1-3.32-5.35-3.32-2.29 0-4.37 1.28-5.39 3.32l-16.09 32.18c-1.47 
     2.97-.24 6.57 2.7 8.05 2.98 1.49 6.57.28 8.05-2.68zm38.84-33.74v32.19c0 3.31 2.7 6 6 6 3.31 0 6-2.69 
     6-6v-32.19c0-3.31-2.7-6-6-6-3.3.01-6 2.69-6 6zm-24.5 21.75-4.17-8.32-4.17 8.32zm-198.03 197.02c30.79-23.7 57.91-52.29 
     80.86-85.1l1.88 8.88c.57 2.82 3.1 4.76 5.88 4.76.37 0 .82-.04 1.23-.13 3.23-.68 5.31-3.86 
     4.61-7.1l-4.78-22.73c-.65-3.24-3.84-5.32-7.11-4.64l-22.71 4.78c-3.27.68-5.31 3.87-4.66 7.11.69 3.24 3.88 5.32 7.11 
     4.63l8.21-1.72c-47.65 67.78-113.68 116.2-196.46 143.99-3.14 1.05-4.82 4.45-3.76 7.6.86 2.5 3.19 4.09 5.68 4.09.65 0 
     1.27-.1 1.92-.32 45.73-15.35 86.82-36.92 122.1-64.1zm-75.75 156.76v-57.79h-54.73v57.79zm102.58 
     0h-54.68v-108.49h54.68zm102.59 
     0h-54.68v-165.02h54.68zm102.59-213.47h-54.68v213.48h54.68zm-67.18-191.67c0-3.32-2.7-6-6-6h-.33c-3.35 0-6 2.68-6 6 0 3.31 
     2.65 6 6 6h.33c3.3 0 6-2.7 6-6zm-36.64 12.9v27.05h-28.34c-3.31 0-6 2.69-6 6s2.7 6 6 6h28.34v27.05h-28.34c-3.31 0-6 2.68-6 
     6 0 3.31 2.7 6 6 6h28.34v25.44c0 3.31 2.65 6 5.96 6h25.44v28.32c0 3.31 2.7 6 6 6 3.31 0 6-2.69 6-6v-28.32h27.08v28.32c0 
     3.31 2.7 6 6 6 3.31 0 5.96-2.69 5.96-6v-28.32h27.08v28.32c0 3.31 2.7 6 6 6 3.31 0 6-2.69 6-6v-28.32h25.44c3.31 0 6-2.69 
     6-6v-25.44h28.3c3.31 0 6-2.69 6-6 0-3.32-2.7-6-6-6h-28.3v-27.05h28.3c3.31 0 6-2.69 6-6s-2.7-6-6-6h-28.3v-27.05h28.3c3.31 
     0 6-2.69 6-6s-2.7-6-6-6h-28.3v-25.44c0-3.31-2.7-6-6-6h-25.44v-28.32c0-3.31-2.7-6-6-6-3.31 0-6 2.69-6 
     6v28.32h-27.08v-28.32c0-3.31-2.65-6-5.96-6-3.35 0-6 2.69-6 6v28.32h-27.08v-28.32c0-3.31-2.7-6-6-6-3.31 0-6 2.69-6 
     6v28.32h-25.44c-3.31 0-5.96 2.69-5.96 6v25.44h-28.34c-3.31 0-6 2.69-6 6 0 3.32 2.7 6 6 6z" fill-rule="evenodd">
                            </path>
                        </svg>
                        <div class="logo-text"><?=$p_keyword?></div>
                    </a>
                </div>
                <div class="col-12 col-md-6 order-3 order-md-2 d-flex justify-content-end">
                    <ul class="header-menu">
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Acesse Sua Conta</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container text-center mb-md-5" style="max-width: 1350px;">
            <h1 class="main-header"><?=$p_keyword?></h1>
        </div>
        <div class="container" style="max-width: 1350px;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="main-image">
                        <picture>
                            <img src="assets/video-image.jpg" width="831" height="584"
                                alt="Digital Wealth Navigator Main">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="req-form-section" class="main-form">
                        <div class="main-form-title">Explore <span><?=$p_keyword?></span></div>
                        <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="400px" style="border: none; overflow: hidden" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="half-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="title">Explore <?=$p_keyword?></h2>
                    <p><strong>Procurando clareza na sua jornada financeira?</strong></p>
                    <p>Bem-vindo à <?=$p_keyword?>, seu principal centro
                        online projetado para guiá-lo pelo mundo complexo dos investimentos.
                        Considere-nos seu aliado conhecedor, conectando você com especialistas
                        do setor prontos para iluminar seu caminho financeiro. Nosso serviço é
                        totalmente gratuito!</p>
                    <div class="group-text-wrap">
                        <input type="checkbox" id="group-text-1">
                        <div class="group-text">
                            <p>Nossos especialistas estabeleceram parcerias com
                                as principais empresas de educação em investimentos, ansiosas para
                                compartilhar seu conhecimento sem custo. Imagine um navegador dedicado
                                ajudando em sua transição para um investidor bem-informado, facilitado
                                por nossos links diretos com esses pioneiros educacionais.</p>
                            <p>A <?=$p_keyword?> visa desmistificar a
                                educação financeira, tornando o conhecimento sobre investimentos
                                acessível a todos, independentemente do histórico financeiro ou
                                experiência.</p>
                            <p>Comece sua jornada de investimento com a Impulso
                                Prospero AI sem qualquer custo. Envolva-se com o mentor ideal para uma
                                experiência de aprendizado que é tão enriquecedora quanto agradável.
                                Continue lendo para obter mais insights, apresentados de maneira fácil
                                de entender e envolvente.</p>
                        </div>
                        <label for="group-text-1" class="group-text-more">Leia mais</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="half-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <h2 class="title">Apresentando <?=$p_keyword?></h2>
                    <p><strong>Temos o orgulho de ser sua ponte confiável,
                            conectando você, um aprendiz ávido, a uma vasta riqueza de educação de
                            investimento confiável.</strong></p>
                    <div class="text-center text-md-left mt-3 mt-md-5">
                        <a href="#" class="main-form-btn">REGISTRE-SE GRATUITAMENTE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-60 bg-gray">
        <div class="container text-center">
            <h2 class="title">Sua Vantagem Exclusiva com <?=$p_keyword?> na Aprendizagem de Investimentos</h2>
        </div>
        <div class="container" style="max-width: 1280px;">
            <div class="py-4 text-center mb-4">
                <picture>
                    <img src="assets/img-1.jpg" width="1282" height="265"
                        alt="Educação Pioneira em Investimentos Inteligentes">
                </picture>
            </div>
            <div class="text-center mb-4">
                <h3 class="fs-18 text-uppercase"><strong>Interagindo com Mentores de Investimento de Elite</strong></h3>
                <p>Começar uma nova jornada de aprendizagem em investimentos
                    pode parecer assustador. <?=$p_keyword?> preenche a lacuna
                    educacional, conectando você com instituições líderes comprometidas em
                    fornecer insights profundos sobre investimentos.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="count-item">
                        <h2 class="count-item-title count-item-title--check">Compromisso com a Excelência: Navegando Seu
                            Caminho com <?=$p_keyword?></h2>
                        <div class="count-item-content">
                            <h3 class="fs-18 text-uppercase mb-4"><strong>Conectando Você a Insights de Primeira
                                    Linha.</strong></h3>
                            <ul class="list-check">
                                <li>Ingressar é simples e gratuito, acolhendo indivíduos de diversos níveis de
                                    habilidade e origens.</li>
                                <li>Após o registro, conectamos você a um
                                    parceiro educacional distinto, escolhido para atender aos seus objetivos
                                    específicos de aprendizagem.</li>
                                <li>Um especialista da nossa organização parceira entrará em contato para uma introdução
                                    virtual detalhada sobre suas ofertas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h2 class="count-item-title count-item-title--check">Alinhados com Provedores Líderes em
                            Educação de Investimento</h2>
                        <div class="count-item-content">
                            <h3 class="fs-18 text-uppercase mb-4"><strong>Uma Aliança Tripartida: Você, Impulso Prospero
                                    AI, e Mentores Especialistas</strong></h3>
                            <ul class="list-check">
                                <li>A qualidade é nossa prioridade máxima, garantindo uma experiência de aprendizagem
                                    incomparável para nossos usuários.</li>
                                <li>Nosso processo seletivo de parceria com provedores de educação é focado no seu
                                    avanço educacional e crescimento pessoal.</li>
                                <li>Considere-nos seu guia pessoal no reino da educação e mentoria em investimentos.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-1">
        <div class="padding-60 pb-2">
            <div class="container">
                <h2 class="title white text-center">Nossa Abordagem na <?=$p_keyword?></h2>
            </div>
        </div>
        <div class="half-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-5">
                        <div class="info-item">
                            <input type="checkbox">
                            <h3 class="info-item-title">Passo 1: Simplificando o Registro</h3>
                            <div class="info-item-content">
                                <p>Inscrever-se é simples e direto. Basta
                                    fornecer suas informações básicas: nome, e-mail e número de telefone.
                                    Complete os campos necessários e você estará pronto para o próximo
                                    passo.</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <input type="checkbox">
                            <h3 class="info-item-title">Passo 2: Correspondências Personalizadas</h3>
                            <div class="info-item-content">
                                <p>Nós personalizamos nosso processo de
                                    correspondência para conectá-lo com um provedor de educação em
                                    investimentos de elite que se alinha com suas aspirações financeiras
                                    únicas e estilo de aprendizado. Nosso foco é garantir o parceiro
                                    educacional ideal para sua jornada.</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <input type="checkbox">
                            <h3 class="info-item-title">Passo 3: Conversas Significativas</h3>
                            <div class="info-item-content">
                                <p>Em seguida, inicie uma conversa com um
                                    representante do seu provedor de educação correspondente. Esta discussão
                                    crucial é sua porta de entrada para insights essenciais e futuras
                                    oportunidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding-60 pt-2">
            <div class="container">
                <div class="text-center">
                    <a href="#" class="main-form-btn">INSCREVA-SE AGORA</a>
                </div>
            </div>
        </div>
    </section>

    <section class="half-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="title">Desbloqueando o Mundo da Educação em Investimentos</h2>
                    <p><b>Veja a educação em investimentos como sua bússola no
                            imenso oceano das finanças. É esse conhecimento que capacita você a
                            tomar decisões com confiança e evitar armadilhas. No dinâmico universo
                            financeiro, essa é sua vantagem, orientando-o de forma clara e sem
                            complicações.</b></p>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-60 pt-2">
        <div class="container">
            <div class="text-center mb-4 mb-md-5">
                <h2 class="title">Educação em Investimentos: Navegando Incertezas Financeiras</h2>
                <p><b>A educação em investimentos serve como seu guia no
                        complexo cenário financeiro. Ela capacita você a tomar decisões
                        informadas e evitar erros comuns. Em um ambiente financeiro em constante
                        evolução, é sua vantagem estratégica, fornecendo orientação clara sem
                        jargões confusos.</b></p>
            </div>
            <div class="row mb-4 mb-md-5">
                <div class="col-md-6">
                    <div class="item-box">
                        <div class="item-box-icon">
                            <picture>
                                <img src="assets/icon-1.png" width="78" height="96" alt="<?=$p_keyword?>">
                            </picture>
                        </div>
                        <h3 class="item-box-title">Dominando a Gestão de Riscos</h3>
                        <p>A educação em investimentos treina você para
                            equilibrar riscos e identificar oportunidades. Você compreenderá as
                            tendências do mercado e tomará decisões informadas, apoiado pela rede de
                            especialistas da <?=$p_keyword?>. Esse conhecimento capacita você a
                            enfrentar flutuações econômicas com uma abordagem estratégica.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item-box">
                        <div class="item-box-icon">
                            <picture>
                                <img src="assets/icon-2.png" width="105" height="103" alt="<?=$p_keyword?>">
                            </picture>
                        </div>
                        <h3 class="item-box-title">Abraçando a Diversificação</h3>
                        <p>Os fundamentos da diversificação são um componente
                            chave da educação em investimentos, destacando a importância de um
                            portfólio variado para reduzir riscos. A <?=$p_keyword?> oferece
                            acesso a especialistas que enriquecem sua compreensão da diversificação
                            estratégica.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h3 class="sub-title">Adaptando-se com Agilidade</h3>
                <p>A educação em investimentos arma você com a capacidade de se
                    adaptar rapidamente às mudanças do mercado. Ela promove a manutenção da
                    informação e a revisão de estratégias para aproveitar oportunidades. A
                    <?=$p_keyword?> conecta você a profissionais que enfatizam o papel
                    da flexibilidade no sucesso financeiro.</p>
                <div class="text-center mt-3 mt-md-4">
                    <a href="#" class="main-form-btn">INSCREVA-SE AGORA</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray">
        <div class="half-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="title">Pode a Educação em Investimentos Ancorar a Estabilidade Financeira?</h2>
                        <p><b>Globalmente, indivíduos se empenham para decifrar a
                                complexidade financeira. A jornada para a compreensão é multifacetada,
                                destacando a importância da educação em investimentos.</b></p>
                        <p>De cursos estruturados a programas de mentoria como
                            os que a <?=$p_keyword?> facilita, a educação em investimentos visa
                            desmistificar o reino dos investimentos. Isso levanta a questão: dominar
                            os conceitos de investimento realmente melhora sua acuidade financeira?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="padding-60 pt-2">
            <div class="container">
                <p>Sim, melhora! Equipado com conhecimentos em investimentos,
                    você possui uma ferramenta vital para tomar decisões financeiras mais
                    sábias, gerenciar riscos, diversificar seu portfólio de investimentos e
                    reagir às dinâmicas do mercado. A educação em investimentos o protege de
                    erros fiscais comuns, guiando-o pelo cenário financeiro como um farol.</p>
            </div>
        </div>
    </section>

    <section class="bg-image-2 padding-60">
        <div class="container mb-4 mb-md-5" style="max-width: 1330px;">
            <h2 class="title white text-center">Evitando as Armadilhas da Educação Insuficiente em Investimentos</h2>
            <p><b>A falta de uma educação sólida ou a má interpretação das
                    informações sobre investimentos pode resultar em erros graves, afetando
                    tanto iniciantes quanto investidores com alguma experiência. Abaixo,
                    destacamos quatro principais perigos de um conhecimento inadequado sobre
                    investimentos:</b></p>
        </div>
        <div class="container" style="max-width: 1250px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-item">
                        <input type="checkbox">
                        <h3 class="info-item-title info-item-title--check">Decisões Falhas</h3>
                        <div class="info-item-content">
                            <p>Sem uma base educacional sólida em investimentos,
                                suas decisões podem carecer de discernimento informado, levando a
                                possíveis armadilhas financeiras. Mergulhar no mercado sem entender
                                completamente suas nuances aumenta significativamente o risco de perdas.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <input type="checkbox">
                        <h3 class="info-item-title info-item-title--check">Superestimando o Risco</h3>
                        <div class="info-item-content">
                            <p>Uma compreensão parcial pode levar a
                                investimentos excessivamente arriscados sem um plano adequado,
                                aumentando a probabilidade de perdas financeiras. Essas ações podem
                                desviar você de seus objetivos financeiros.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-item">
                        <input type="checkbox">
                        <h3 class="info-item-title info-item-title--check">Visão de Curto Prazo</h3>
                        <div class="info-item-content">
                            <p>A falta de uma educação aprofundada em
                                investimentos pode resultar em um foco em ganhos imediatos em detrimento
                                do crescimento sustentável, possivelmente sacrificando vantagens de
                                longo prazo por ganhos rápidos.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <input type="checkbox">
                        <h3 class="info-item-title info-item-title--check">Reveses Financeiros</h3>
                        <div class="info-item-content">
                            <p>Ignorar os fundamentos da educação em
                                investimentos pode levar a quedas econômicas significativas, esgotando
                                recursos e causando tanto estresse imediato quanto desilusão financeira a
                                longo prazo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 mt-md-4">
                <a href="#" class="main-form-btn">COMECE A APRENDER</a>
            </div>
        </div>
    </section>


    <section class="half-6">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <h2 class="title">Redefinindo a Educação em Investimentos: A Visão da <?=$p_keyword?></h2>
                    <p><b>Na vanguarda de uma era revolucionária, a Impulso
                            Prospero AI está liderando a transformação da educação em investimentos
                            através de tecnologia de ponta. Nossa plataforma personaliza
                            experiências de aprendizado, atendendo ao ritmo e às necessidades únicas
                            de cada aprendiz com soluções digitais avançadas.</b></p>
                    <div class="group-text-wrap">
                        <input type="checkbox" id="group-text-2" checked="checked">
                        <div class="group-text">
                            <p>Empregando inteligência artificial (IA) e
                                aprendizado de máquina, a <?=$p_keyword?> revoluciona a educação em
                                investimentos. Ao analisar vastos conjuntos de dados, oferece insights e
                                estratégias personalizadas, elevando a jornada educacional para
                                usuários em todo o mundo.</p>
                            <p>Ferramentas inovadoras como realidade virtual
                                (VR) tornam o aprendizado uma jornada imersiva e interativa. Essas
                                tecnologias não apenas cativam os usuários, mas também aumentam a
                                retenção, preparando-os para enfrentar os mercados financeiros com
                                confiança e uma gama de recursos educacionais centrados no usuário.</p>
                            <p>Na confluência da educação e do avanço
                                tecnológico, a <?=$p_keyword?> colabora com educadores líderes para
                                oferecer ferramentas de aprendizado de ponta diretamente a você.</p>
                        </div>
                        <label for="group-text-2" class="group-text-more">Leia mais</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="half-7">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="title">Empoderamento Através da Educação em Investimentos</h2>
                    <p><b>Com a <?=$p_keyword?>, a educação em investimentos
                            vai além dos fundamentos das transações financeiras; ela proporciona
                            uma imersão profunda no mercado, capacitando você a dominar suas nuances
                            para alcançar estabilidade financeira e crescimento sustentáveis.</b></p>
                    <p>O impacto da educação em investimentos transcende os
                        aprendizes individuais, beneficiando também as comunidades, permitindo
                        que enfrentem desafios econômicos com eficácia. É um movimento coletivo
                        rumo ao empoderamento financeiro.</p>
                    <div class="group-text-wrap">
                        <input type="checkbox" id="group-text-3">
                        <div class="group-text">
                            <p>A <?=$p_keyword?> supera a gestão financeira
                                convencional, guiando você através das complexidades dos investimentos e
                                conectando-o com as principais instituições educacionais.</p>
                            <p>Esse tipo de educação tem um efeito positivo na
                                economia em geral, promovendo crescimento, inovação e criação de
                                empregos. É sobre formar uma sociedade informada, capaz de fazer
                                escolhas financeiras inteligentes, favorecendo uma economia mais
                                robusta.</p>
                            <p>Nossa missão é tornar a educação financeira
                                acessível a todos, garantindo que ninguém fique para trás na jornada
                                rumo à alfabetização e independência financeira.</p>
                        </div>
                        <label for="group-text-3" class="group-text-more">Leia mais</label>
                    </div>
                    <div class="text-center text-md-left mt-3 mt-md-4">
                        <a href="#" class="main-form-btn">DESCUBRA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-3 padding-60">
        <div class="container">
            <div class="text-center">
                <h2 class="title white">Ampliando o Acesso à Educação em Investimentos com a <?=$p_keyword?></h2>
                <p><b>A <?=$p_keyword?> está comprometida em democratizar a
                        educação em investimentos, derrubando barreiras ao conhecimento
                        financeiro e conectando alunos de diversos contextos a recursos
                        educacionais de primeira linha.</b></p>
            </div>
            <p>Esta iniciativa vai além de uma simples introdução às finanças;
                trata-se de cultivar uma cultura de aprendizado contínuo e adaptação ao
                dinâmico mundo financeiro, garantindo que cada aluno, seja iniciante ou
                especialista, esteja bem preparado para o sucesso.</p>
        </div>
    </section>

    <section class="padding-60">
        <div class="container">
            <h2 class="title text-center mb-md-5">Aprimore Sua Estratégia de Investimento com <?=$p_keyword?></h2>
            <div class="row count-item-row">
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Definição Estratégica de Metas Financeiras</h3>
                        <div class="count-item-content">
                            <p>O sucesso nos investimentos começa com metas
                                claras e alcançáveis. A <?=$p_keyword?> auxilia na identificação de
                                seus sonhos financeiros, sejam eles grandes ou modestos, destacando a
                                importância do planejamento estratégico em sua jornada financeira.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Otimização dos Horizontes Temporais de Investimento</h3>
                        <div class="count-item-content">
                            <p>O timing é essencial nos investimentos. A Impulso
                                Prospero AI esclarece a importância de alinhar suas estratégias de
                                investimento com os horizontes temporais adequados, maximizando as
                                chances de ganhos imediatos e a longo prazo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Técnicas de Orçamento Magistral</h3>
                        <div class="count-item-content">
                            <p>O orçamento é a base da educação financeira. A
                                <?=$p_keyword?> capacita a gestão eficiente de despesas e alocação
                                de recursos, direcionando cada dólar para alcançar suas metas
                                financeiras.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Estabelecimento de Fundos de Emergência Robustos</h3>
                        <div class="count-item-content">
                            <p>Preparar-se para desafios financeiros imprevistos
                                é crucial. A <?=$p_keyword?> destaca a importância dos fundos de
                                emergência, criando uma reserva financeira para proteger seus
                                investimentos e sua paz de espírito.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Navegando pela Tolerância ao Risco</h3>
                        <div class="count-item-content">
                            <p>Identificar sua tolerância ao risco é essencial
                                para decisões de investimento informadas. A <?=$p_keyword?> oferece
                                orientação para avaliar seu conforto com o risco, garantindo que suas
                                decisões de investimento reflitam suas metas financeiras e apetite por
                                risco.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="count-item">
                        <h3 class="count-item-title">Decifrando o Comportamento do Mercado</h3>
                        <div class="count-item-content">
                            <p>Compreender a dinâmica do mercado é fundamental. A
                                <?=$p_keyword?> investiga as tendências de mercado e possíveis
                                mudanças, fornecendo as ferramentas necessárias para elaborar
                                estratégias resilientes que possam suportar as flutuações do mercado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="half-8 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <h2 class="title">Seu Portal para a Maestria Financeira</h2>
                    <p><b>No mundo dinâmico das finanças, a importância de
                            estratégias de investimento sólidas é primordial. Esta realidade acentua
                            o papel das finanças informadas em nossas vidas diárias.</b></p>
                    <p>Apresentando <?=$p_keyword?>, seu parceiro inovador
                        que desmistifica o universo dos investimentos para os entusiastas. Nossa
                        plataforma serve como o elo crucial que conecta aprendizes ávidos com
                        instituições educacionais renomadas, oferecendo insights claros e
                        abrangentes sobre o mundo dos investimentos.</p>
                    <p>Para aqueles fascinados pelos mercados financeiros e que
                        buscam aprofundar seu conhecimento em investimentos, <?=$p_keyword?>
                        é o portal para insights especializados, proporcionando acesso gratuito
                        a uma riqueza de recursos educacionais, preparando o terreno para
                        decisões de investimento inteligentes e crescimento financeiro
                        sustentável.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-60">
        <div class="container text-center mb-md-5">
            <h2 class="title text-center">Perguntas Frequentes</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="faq-item">
                        <input type="checkbox">
                        <h3 class="faq-item-title">O que torna o <?=$p_keyword?> único se não oferece cursos
                            diretamente?</h3>
                        <div class="faq-item-content">
                            <p>Diferente das plataformas educacionais
                                tradicionais, o <?=$p_keyword?> atua como seu guia no universo da
                                educação em investimentos, proporcionando conexões fluidas com os
                                melhores provedores. Nosso objetivo é simplificar seu caminho para a
                                literacia financeira, ligando você a recursos e mentores de alto
                                calibre.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <input type="checkbox">
                        <h3 class="faq-item-title">Há alguma taxa para usar o <?=$p_keyword?>?</h3>
                        <div class="faq-item-content">
                            <p>Não, o <?=$p_keyword?> oferece acesso
                                completamente gratuito à educação em investimentos. Desde o registro até
                                a conexão com provedores educacionais de excelência, não há custos
                                envolvidos. Estamos dedicados a apoiar sua jornada de educação
                                financeira sem barreiras financeiras.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item">
                        <input type="checkbox">
                        <h3 class="faq-item-title">Quanto tempo devo dedicar ao aprendizado?</h3>
                        <div class="faq-item-content">
                            <p>O tempo que você deve dedicar à educação
                                financeira varia conforme seu ritmo de aprendizado e objetivos pessoais.
                                O <?=$p_keyword?> garante que você seja pareado com educadores que
                                ajustam seus programas às suas necessidades, proporcionando uma
                                experiência de aprendizado eficaz e personalizada.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 mt-md-4">
                <a href="#" class="main-form-btn">COMECE SUA JORNADA</a>
            </div>
        </div>
    </section>

    <section class="padding-60 highlight-bg">
        <div class="container">
            <table class="table-highlight">
                <caption>
                    <h2 class="title">Principais Benefícios na <?=$p_keyword?></h2>
                </caption>
                <tbody id="emojtable">
                    <tr>
                        <td>🤖 Custo de Inscrição</td>
                        <td>Sem Custo</td>
                    </tr>
                    <tr>
                        <td>💰 Taxas Adicionais</td>
                        <td>Inexistentes</td>
                    </tr>
                    <tr>
                        <td>📋 Simplicidade de Registro</td>
                        <td>Fácil e Rápido</td>
                    </tr>
                    <tr>
                        <td>📊 Foco Educacional</td>
                        <td>Blockchain, Mercados de Ações, Renda Fixa e Estratégias de Investimento Completas</td>
                    </tr>
                    <tr>
                        <td>🌎 Acesso</td>
                        <td>Disponível Globalmente, Algumas Restrições Aplicam-se</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <div id="openModalLoading" class="modalDialog">
        <div>
            <div class="loading-spinner"></div>
        </div>
        <div class="loading-text">Connecting you to the firm…</div>
    </div>

    <input type="checkbox" id="dialog-modal-check" class="dialog-modal-check">
    <section class="dialog">
        <div role="document" class="dialog-container">
            <div class="column-content">
                <div>
                    <div class="dialog-header">
                        Aviso Legal:
                        <label for="dialog-modal-check" class="dialog-close-over">×</label>
                    </div>
                    <div class="dialog-content">
                        <div class="dialog-text-wrap">
                            <input type="checkbox" id="dialog-text-1">
                            <div class="dialog-text">
                                <?=$p_keyword?> é um site utilizado para
                                fins de marketing.

                                O site e seu operador não oferecem ou fornecem
                                quaisquer serviços ou produtos de negociação, corretagem ou
                                investimento.

                                Após o registro, você será conectado a um
                                prestador de serviços que poderá entrar em contato com você para
                                fornecer informações genéricas, oportunidades de treinamento ou
                                pesquisas de mercado sobre instrumentos financeiros, commodities,
                                criptoativos, etc.

                                Este serviço pode gerar custos para você.
                                Verifique os Termos e Condições e as Informações fornecidas no site do
                                prestador de serviços.

                                O site e seu operador não verificam o status
                                regulatório de seus clientes ou sua conformidade com todas as leis e
                                regulamentos relevantes. O site e seu operador não podem ser
                                responsabilizados por qualquer infração de leis e regulamentos ou
                                qualquer dano que você possa incorrer com base em sua interação com o
                                prestador de serviços.

                                Esteja ciente de que qualquer investimento que
                                você deseje fazer carrega o risco de perda total do seu dinheiro.

                            </div>
                            <label for="dialog-text-1" class="dialog-text-more">Leia mais</label>
                        </div>
                    </div>
                </div>
                <div class="dialog-all-button-row">
                    <label for="dialog-modal-check" class="risk-popup-btn">Eu entendo</label>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="d-flex flex-column flex-md-row flex-wrap justify-content-between align-items-center">
                <a href="#" class="logo d-flex align-items-center">
                    <svg id="fi_12636204" style="width: 2em; height: 2em;" fill="#FFFFFF"
                        enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="m309.39 61.86h129.01v128.98h-129.01zm108.02 15h-60.81c-1.59 0-3.1.63-4.25 1.76l-26.18
     26.18c-1.14 1.13-1.76 2.65-1.76 4.24v60.8c0 3.31 2.65 6 6 6h86.99c3.31 0 5.96-2.69 
     5.96-6v-86.97c.01-3.31-2.64-6.01-5.95-6.01zm-64.49 66.89h20.34l.57 1.13c1.02 2.1 3.14 3.32 5.35 3.32.9 0 1.84-.21 2.7-.64 
     2.94-1.48 4.17-5.08 2.65-8.05l-16.09-32.18c-1.02-2.04-3.1-3.32-5.35-3.32-2.29 0-4.37 1.28-5.39 3.32l-16.09 32.18c-1.47 
     2.97-.24 6.57 2.7 8.05 2.98 1.49 6.57.28 8.05-2.68zm38.84-33.74v32.19c0 3.31 2.7 6 6 6 3.31 0 6-2.69 
     6-6v-32.19c0-3.31-2.7-6-6-6-3.3.01-6 2.69-6 6zm-24.5 21.75-4.17-8.32-4.17 8.32zm-198.03 197.02c30.79-23.7 57.91-52.29 
     80.86-85.1l1.88 8.88c.57 2.82 3.1 4.76 5.88 4.76.37 0 .82-.04 1.23-.13 3.23-.68 5.31-3.86 
     4.61-7.1l-4.78-22.73c-.65-3.24-3.84-5.32-7.11-4.64l-22.71 4.78c-3.27.68-5.31 3.87-4.66 7.11.69 3.24 3.88 5.32 7.11 
     4.63l8.21-1.72c-47.65 67.78-113.68 116.2-196.46 143.99-3.14 1.05-4.82 4.45-3.76 7.6.86 2.5 3.19 4.09 5.68 4.09.65 0 
     1.27-.1 1.92-.32 45.73-15.35 86.82-36.92 122.1-64.1zm-75.75 156.76v-57.79h-54.73v57.79zm102.58 
     0h-54.68v-108.49h54.68zm102.59 
     0h-54.68v-165.02h54.68zm102.59-213.47h-54.68v213.48h54.68zm-67.18-191.67c0-3.32-2.7-6-6-6h-.33c-3.35 0-6 2.68-6 6 0 3.31 
     2.65 6 6 6h.33c3.3 0 6-2.7 6-6zm-36.64 12.9v27.05h-28.34c-3.31 0-6 2.69-6 6s2.7 6 6 6h28.34v27.05h-28.34c-3.31 0-6 2.68-6 
     6 0 3.31 2.7 6 6 6h28.34v25.44c0 3.31 2.65 6 5.96 6h25.44v28.32c0 3.31 2.7 6 6 6 3.31 0 6-2.69 6-6v-28.32h27.08v28.32c0 
     3.31 2.7 6 6 6 3.31 0 5.96-2.69 5.96-6v-28.32h27.08v28.32c0 3.31 2.7 6 6 6 3.31 0 6-2.69 6-6v-28.32h25.44c3.31 0 6-2.69 
     6-6v-25.44h28.3c3.31 0 6-2.69 6-6 0-3.32-2.7-6-6-6h-28.3v-27.05h28.3c3.31 0 6-2.69 6-6s-2.7-6-6-6h-28.3v-27.05h28.3c3.31 
     0 6-2.69 6-6s-2.7-6-6-6h-28.3v-25.44c0-3.31-2.7-6-6-6h-25.44v-28.32c0-3.31-2.7-6-6-6-3.31 0-6 2.69-6 
     6v28.32h-27.08v-28.32c0-3.31-2.65-6-5.96-6-3.35 0-6 2.69-6 6v28.32h-27.08v-28.32c0-3.31-2.7-6-6-6-3.31 0-6 2.69-6 
     6v28.32h-25.44c-3.31 0-5.96 2.69-5.96 6v25.44h-28.34c-3.31 0-6 2.69-6 6 0 3.32 2.7 6 6 6z" fill-rule="evenodd">
                        </path>
                    </svg>
                    <div class="logo-text"><?=$p_keyword?></div>
                </a>
                <ul class="footer-menu">
                    <li><a href="php <?=$settings->terms()?>">Termos e Condições</a></li>
                    <li><a href="php <?=$settings->policy()?>">Política de Privacidade</a></li>
                    <li><a href="php <?=$settings->cookie()?>">Política de Cookies</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            // Get all the checkboxes in the FAQ section
            const checkboxes = document.querySelectorAll(".info-item input[type='checkbox']");

            // Loop through each checkbox
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener("change", function() {
                    // Get the content related to this checkbox
                    const content = this.parentElement.querySelector(".info-item-content");

                    // Toggle visibility based on checkbox state
                    if (this.checked) {
                        content.style.display = "block";  // Show content
                    } else {
                        content.style.display = "none";   // Hide content
                    }
                });

                // Initially hide all content
                const content = checkbox.parentElement.querySelector(".info-item-content");
                content.style.display = "none";
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
    <?php $settings->in_footer();?>
</body>
</html>