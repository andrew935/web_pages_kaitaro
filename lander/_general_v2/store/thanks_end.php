<?php
require_once ('./functions.php');
$pixel = '';
$pixel = $_GET['pixel'] ??  $_COOKIE['pixel'] ?? '';
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

    <script src="/lander/js/jquery.min.js"></script>
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
        .bg{
            background: url(./img/bg-top.png);
            background-size: 75%;
            background-repeat: no-repeat;
        }
        .loader{
            background: url('./img/loader_1.gif');
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
            color: #db581e;
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
        <h1 class="title mb-4 pr-4 pl-4"> <?= $text->thanks ?? 'Thank you for registration' ?> </h1>
        <img src="./img/hourglass.png" class="img-fluid m-auto d-block img-wait" />
        <h2 class=" mt-4 mb-4 "> <?= $text->contact_you  ?? 'We Will contact you shortly '?>  </h2>
    </div>
    <br>

    <br>


</div>




</body>
</html>