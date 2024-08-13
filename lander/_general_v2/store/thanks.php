<?php
require_once ('./functions.php');
$pixel = '';
$pixel = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
$lang = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';
$media = $_GET['media'] ?? $_COOKIE['media']  ?? '';

switch ($lang){
    case 'es':
    case 'en':
    case 'jp':
    case 'ko':
    case 'zh':
        require_once dirname(__FILE__) . '/lang/'.$lang.'.php';
        break;
    case 'ar':
        require_once dirname(__FILE__) . '/lang/'.$lang.'.php';
        $class = 'center';
        break;
    default:
        require_once dirname(__FILE__) . '/lang/en.php';
        break;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <script src="js/jquery.min.js"></script>
    <!--pixel holder-->


     <?php
     if ($media!='' ){

         get_pixel_by_media($media);
     }
     ?>

    <!--END pixel holder-->

    <style>
        h1{
            margin: auto;
            text-align: center;
            width: 100%;
        }

        .bg {
            background: url(/lander/_assets/img/bg-thanks-1.jpg);

            background-repeat: no-repeat;
            background-position: center;
            background-size: initial;
        }
        .loader{
            background: url('/lander/_assets/img/loader_1.gif');
            background-repeat: no-repeat;

            background-position: center;
            background-size: contain;

        }
        h2{
            text-align: center;

        }
        .popup-block {
            max-width: 40rem;
            margin: auto;
            margin-top: 10rem;
            background: #ffffffe8;
            box-shadow: 5px 2px 8px #d6d6d6;
            padding: 3rem;
            border: 1px solid silver;

        }
        .img-wait {
            width: 40px;
        }
        .title {
            color: #dc3545;
        }
        h2 {
            font-size: 1.5rem;
        }
        .loader-img {
            width: 10rem;
        }
        @media only screen and (max-width: 640px)  {
            .popup-block {
                margin-top: 6rem;
            }

            .bg {
                background-size: 100%;
                background-repeat: no-repeat;
                background-repeat-y: repeat;
            }
            .popup-block {
                padding: 1rem;
            }
        }
    </style>
</head>



<body class="bg">
<div class="container" >
    <div class="popup-block">
        <h1 class="title mb-4 pr-4 pl-4"> <?= $text->thanks ?? "Thanks for your registration" ?> </h1>
        <br>
        <h2 class=" mt-4 mb-4 "> <?= $text->redirect  ?? 'You Will be Transfer to Broker Site'?>  </h2>

        <h2 class="center">
            <p id="counter" class="mt-2"> 6 </p>

            <img src="/lander/_assets/img/loader_1.gif" alt="loader" class="loader-img" width="50px">
        </h2>
    </div>
    <br>

    <br>


</div>

<script>
    var counter = 5;
    const myCounter =  setInterval(function() {

        let count = document.getElementById("counter") ;
        count.innerHTML = counter--;

        if (counter == 3){
            console.log('redirect')
            let login_page = localStorage.getItem("login");
            if (login_page!=null){
                window.top.location.href =  login_page;
            }
        }
        if (counter == 0){
            clearInterval(myCounter);
        }

    }, 1000);


</script>


</body>
</html>