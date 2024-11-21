<?php

//;

$dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$p_keyword = $_GET['keyword'] ?? "Vortice Ethereum"; // Replace with your offer name
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
//require_once dirname(__DIR__) . '/../../_assets/Settings.php';
$settings = new Settings();
$params = $settings->before_html($p_lang,$p_country);
$params .="&utm_campaign=". $p_keyword;
$params .="&lang=". $p_lang;
$params .="&offer_url=". $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?=$p_keyword?>">
    <link rel="stylesheet" href="css/funnel.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?=$p_keyword?></title>

    <?php $settings->in_header();?>
    <style>
        .logo {
            vertical-align: middle;
            color: aliceblue;
        }
        .intro {
            display: flex;
            align-items: center; /* Vertically centers the image and text */
        }
    </style>
</head>

<body>
<?php $settings->in_body();?>

<div class="bitcode-method bitcode-method-twostep">

    <section class="warning">
        <div class="container">
            <p class="text-center warning_text p-2 text-sm">
                ATENÇÃO: Alta demanda de mídia, inscrições se encerrando em
                <span id="counter">09:45</span>
            </p>
        </div>
    </section>

    <section class="intro">
        <img class="intro_logo intro_logo_first" src="images/logo.png" alt="Logo" style="max-width: 50px">
        <span class="logo" style="vertical-align: middle; color: aliceblue;"><?=$p_keyword?></span>
    </section>
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main_wrapper">
                        <h5 class="main_title">Crie sua conta gratuita </h5>
                        <ul class="main_list">
                            <li>Gerente de Conta Pessoal Gratuito</li>
                            <li>Nenhuma Experiência em Negociação Necessária</li>
                            <li>Comece em 15 minutos</li>
                        </ul>
                        <img class="main_img" src="images/forbes-verified.png" alt="Forbes">
                        <div class="box"></div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_wrapper">
                        <div class="steps">
                            <!--<p data-v-621c596f="" class="text-xs text-gray-400 border-b pb-1">Step
                                <span id="currentStep">1</span>
                                of
                                <span id="lastStep">2</span>
                            </p>-->
                        </div>
                        <div class="form-header">
                            <div class="form-header-text">
                                Crie sua conta gratuita
                            </div>
                            <div class="form-header-lines">
                                <div class="line line-1 active"></div>
                                <div class="line line-2"></div>
                            </div>
                        </div>
                        <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" style="border: none;min-height: 400px;"></iframe>
                        <div class="d-flex align-items-center justify-content-center form-footer">
                            <img class="form_img_1" src="images/norton.png" alt="Norton">
                            <img class="form_img_2" src="images/forbes-verified.png" alt="Forbes">
                        </div>
                    </div>
                    <div class="d-flex align-items-center space-between under-form">
                        <img class="form_img_2" src="images/forbes-verified.png" alt="Forbes">
                        <img class="form_img_2" src="images/bitgo.png" alt="Bitgo">
                        <img class="form_img_1" src="images/norton.png" alt="Norton">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container w-1140">
            <div class="footer-links">
                <a class="fancy"
                   href="<?=$settings->terms()?>">Contrato do Website</a>
                <!--<a class="fancy"
                   href="#">Risk Disclaimer</a>-->
                <a class="fancy"
                   href="<?=$settings->policy()?>">Política de Privacidade</a>
               <!-- <a class="fancy"
                   href="#">Report Abuse</a>-->
                <!--<a class="fancy"
                   href="#">Contact Us</a>-->
            </div>
            <div class="foter-disclaimer">
                <p>
                    REGULAÇÃO E AVISO DE INVESTIMENTO DE ALTO RISCO: Negociar Forex, CFDs e Criptomoedas é altamente especulativo, carrega um nível de risco e pode não ser adequado para todos os investidores. Você pode perder parte ou todo o seu capital investido, portanto, não deve especular com capital que não pode se dar ao luxo de perder. Por favor, clique aqui para ler um aviso de risco completo. Ethereum BotApp é um serviço de tecnologia, marketing e publicidade. Ethereum BotApp não ganha nem perde lucros com base nos seus resultados de negociação e opera como um serviço de tecnologia, marketing e publicidade. Ethereum BotApp não é uma empresa de serviços financeiros e não opera como uma empresa de serviços financeiros, sendo apenas usado como uma ferramenta de marketing por anunciantes e corretores terceirizados para atrair clientes. É sua obrigação verificar e decidir se o corretor ao qual você foi conectado está de acordo com todas as regras e regulamentos locais e é regulamentado na jurisdição do seu país e se é permitido receber clientes da sua localização, antes de financiar sua conta com o corretor e começar a negociar com ele. Por favor, reporte o Ethereum BotApp (clicando em report abuse) se descobrir que o corretor atribuído a você não está regulamentado na sua jurisdição para que possamos cancelar sua conta com o Ethereum BotApp.
                </p>
                <p>
                    Somos obrigados a informar aos potenciais investidores que o desempenho passado de nosso software não necessariamente prevê resultados futuros, portanto, você não deve especular com capital que não pode se dar ao luxo de perder.
                </p>
                <p>
                    AVISO DE REGULAÇÃO DOS EUA: A negociação de opções não é regulamentada nos Estados Unidos. Ethereum BotApp não é supervisionado ou regulamentado por nenhuma agência financeira ou agência dos EUA. Qualquer atividade de negociação não regulamentada por residentes nos EUA é considerada ilegal. Ethereum BotApp não aceita clientes localizados nos Estados Unidos ou que possuam cidadania americana.
                </p>
                <p>
                    DIVULGAÇÃO DE RISCO DO SITE: Ethereum BotApp não aceita qualquer responsabilidade por perdas ou danos decorrentes da confiança nas informações contidas neste site; isso inclui material educativo, cotações de preços e gráficos, e análises. Esteja ciente dos riscos associados à negociação nos mercados financeiros; nunca invista mais dinheiro do que pode arriscar perder. Os riscos envolvidos na negociação de Forex, CFDs e Criptomoedas podem não ser adequados para todos os investidores. Ethereum BotApp não se responsabiliza por quaisquer perdas de negociação que você possa enfrentar como resultado do uso dos dados hospedados neste site.
                </p>
                <p>
                    RESTRIÇÕES LEGAIS: sem limitar as disposições abaixo mencionadas, você entende que as leis sobre contratos financeiros variam em todo o mundo, e é sua responsabilidade garantir que você cumpra adequadamente qualquer lei, regulamento ou diretriz em seu país de residência referente ao uso do Site. Para evitar qualquer dúvida, a capacidade de acessar nosso Site não significa necessariamente que nossos Serviços e/ou suas atividades por meio do Site sejam legais de acordo com as leis, regulamentos ou diretrizes relevantes para o seu país de residência.
                </p>
                <p>
                    Observe que o Ethereum BotApp recebe taxas de publicidade por direcionar usuários para abrir uma conta com os corretores/anunciantes e/ou por direcionar tráfego para o site do anunciante.
                </p>
                <p>
                    Se você acha que chegou a esta página por má conduta e/ou informações enganosas de um anúncio, pre lander, e-mail ou qualquer outra promoção de um site/promotor de terceiros ou por favor
                </p>
                <p>
                    Nós colocamos cookies no seu computador para ajudar a melhorar sua experiência ao visitar este site. Você pode alterar as configurações de cookies no seu computador a qualquer momento. O uso deste site indica sua aceitação da <a class="fancy" href="<?=$settings->policy()?>">Política de Privacidade</a> deste site.
                </p>
                <br>
                <p>
                    © 2024 Todos os direitos reservados - <?=$p_keyword?>
                </p>
            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script>
    var counterElement = document.getElementById('counter');
    var startTime = counterElement.innerHTML;
    var timeArray = startTime.split(':');
    var minutes = parseInt(timeArray[0], 10);
    var seconds = parseInt(timeArray[1], 10);

    function updateCounter() {
        var totalSeconds = minutes * 60 + seconds;
        counterElement.innerHTML = formatTime(minutes, seconds);
        if (totalSeconds > 0) {
            totalSeconds--;
            minutes = Math.floor(totalSeconds / 60);
            seconds = totalSeconds % 60;
            setTimeout(updateCounter, 1000);
        }
    }
    function formatTime(minutes, seconds) {
        return (
            (minutes < 10 ? '0' : '') + minutes +
            ':' +
            (seconds < 10 ? '0' : '') + seconds
        );
    }
    updateCounter();
</script>

<?php $settings->in_footer();?>
</body>
</html>