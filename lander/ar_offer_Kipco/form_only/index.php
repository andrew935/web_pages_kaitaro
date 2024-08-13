<?php

$general_url = 'https://'.$_SERVER['HTTP_HOST'];
$action_url = $general_url.'/_general_v2/form/register_lead.php';
$thanks_url = $general_url.'/_general_v2/form/thanks.php';


$pixel = $_GET['pixel'] ?? '';

$country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ??  'KW';
$lang =   'ar';
$lang = strtolower($lang);

$first_name = $_GET['first_name'] ?? '';
$last_name = $_GET['last_name'] ?? '';
$email = $_GET['email'] ?? '';


$labels = 1; // change to 0 for remove the labels
$class= '';

$direction = 'ltr';

switch ($lang){
    case 'es':
    case 'de':
    case 'en':
    case 'jp':
    case 'ko':
    case 'zh':
    case 'pt':
        require_once dirname(__FILE__) . '/lang/'.$lang.'.php';
        break;
    case 'ar':
        require_once dirname(__FILE__) . '/lang/'.$lang.'.php';
        $class = 'center';
        $direction = 'rtl';
        break;
    default:
        require_once dirname(__FILE__) . '/lang/en.php';
        break;

}

$direction = 'ltr';
if ($lang=='ar'){
    $direction = 'rtl';

}
$form_css = $_GET['form_css'] ?? '';
$bg_color = $_GET['bg_color'] ?? '';


 ?>

<!DOCTYPE html>
<html  dir="<?=$direction?>">
<head>
    <meta charset="utf-8">
    <title>Register form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/css/intlTelInput.css">
    <link rel="stylesheet" href="./build/css/demo.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">




    <style>
        

        <?php if($bg_color != ''){ ?>
        .submit_button{
            background-color:#<?=$bg_color?> !important;
        }
        <?php }?>
        #overlay{
            text-align:center;
            margin:auto;
        }
        .mb-3{
            margin-bottom:0.9rem;
        }
    </style>

    <?php if($form_css != ''){ ?>
        <link rel="stylesheet" href="//<?=$form_css?>">
    <?php } ?>

    <!-- Google Tag Manager -->
    <script>
        var event = 'page_view';
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WWQFQ7SD');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWQFQ7SD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div id="overlay">
    <img src="./img/loader_1.gif" alt="Loading" width="150px" />
</div>

<div class="register_form">
    <form method="post" action="<?=$action_url?>" id="register">
        <div class="mb-3 <?=$class?>" dir="<?=$direction?>">
            <?php if($labels == 1){?>
                <label for="first_name" class="form-label "><?php echo $text->first_name ?? '' ?></label>
            <?php } ?>
            <input id="first_name" name="fname"    type="text" class="<?=$class?>" placeholder="<?php echo $text->first_name ?>"  value="<?php echo $first_name?>" required="required">
        </div>
        <div class="mb-3 mt-2  <?=$class?>" dir="<?=$direction?>">
            <?php if($labels == 1){?>
            <label for="last_name" class="form-label"><?php echo $text->last_name ?></label>
            <?php } ?>
            <input id="last_name" name="lname" type="text"  class="<?=$class?>"  placeholder="<?php echo $text->last_name ?>" value="<?php echo $last_name?>" required="required">
        </div>
        <div class="mb-3 mt-2  <?=$class?>">
            <?php if($labels == 1){?>
            <label for="email" class="form-label"><?php echo $text->email ?></label>
            <?php } ?>
            <input id="email" name="email" type="email"
                   class="<?=$class?>"
                   value="<?php echo $email?>"
                   placeholder="<?php echo $text->email ?>"
                   required="required"
                   pattern="[A-Za-z0-9._%+-]{1,}@[a-zA-Z0-9._%+-]{1,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z0-9._%+-]{2,}[.]{1}[a-zA-Z]{2,})"
                   
            >
        </div>
        <div class="mb-3 mt-2 <?=$class?>" style="direction: ltr;">
            <?php if($labels == 1){?>
            <label for="phone" class="form-label"  style="direction: <?=$direction?>;"><?php echo $text->phone ?></label>
            <?php } ?>
            <input id="phone" dir="ltr"  name="phone" type="tel" required="required" style="direction: ltr;" >
            <input id="phone_pre" name="dialCode" type="hidden" >
        </div>

        <input id="country" name="iso2" type="hidden" >


        <?php
        foreach ($_GET as $key=>$val){
            if ($val=='' || $val=='undefined' || $val=='null'){
                continue;
            }?>
            <input  name="<?=$key?>"  value="<?=$val?>" type="hidden" >
        <?php } ?>

        <button id="submit" type="submit" class="submit_button" >
            <span id="register_button" > <?php echo $text->register ?> </span>
            <span id="loading_button" style="display: none" > <img src="img/loader_1.gif" width="25px"> </span>
        </button>
        <i class="closer center invest_250" style="font-size: 0.8em;"> <?=$text->end ?></i>
        <h3 class="errors" style="display: none"> </h3>
    </form>
</div>


  <div class="redirect_popup" style="display: none">
  </div>

    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./build/js/intlTelInput.js"></script>

  <script>

   const input = document.querySelector("#phone");
    var iti = intlTelInput(input, {
      // any initialisation options go here
      initialCountry: "<?=$country?>",
      excludeCountries: ["US"],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });


   var countryData = iti.getSelectedCountryData();
   $('#phone_pre').val(countryData.dialCode);
   $('#country').val(countryData.iso2.toUpperCase());

   console.log(countryData);


   input.addEventListener("countrychange", function() {
       var countryData = iti.getSelectedCountryData();
       $('#phone_pre').val(countryData.dialCode);
       $('#country').val(countryData.iso2.toUpperCase());

   });


   $("#register").submit(function(event) {

       console.log('register');
       event.preventDefault();
       $('#submit').prop('disabled', true);
       $('.errors').hide(250);
       $('.closer').show();
       $('#register_button').hide();
       $('#loading_button').show();


       let $form = $(this),
           url = $form.attr('action');
       let data = $( this ).serialize();
       console.log('url');
       console.log(url);

       console.log('data');
       console.log(data);

       $.ajax({
           type: "POST",
           url: url,
           data: data,
           success: function(result_json) {
               let result = JSON.parse(result_json)

               console.log('result_json');
               console.log(result_json);

               console.log('result');
               console.log(result);
              if (result.success  ) {
                  if (result.brand.redirectUrl != undefined){
                      localStorage.setItem("login", result.brand.redirectUrl);
                      let urlParams = new URLSearchParams(window.location.search);

                      window.top.location.href = '<?=$thanks_url?>?'+ urlParams +'&url='+result.brand.redirectUrl;
                  }
               }else{
                   $('.errors').text( result.message);
                   let error = result.message;
                   $('.errors').text(error);
                   $('.closer').hide();
                   $('.errors').show(250);
                   $('#loading_button').hide();
                   $('#register_button').show();
                   $('#submit').prop('disabled', false);
               }

           },
           error: function(xhr, status, error) {
               console.log('Error:' );
               console.log(error );
               console.log('status:' );
               console.log(status );
               console.log('xhr:' );
               console.log(xhr );
               $('#loading_button').hide();
               $('#register_button').show();

               $('#submit').prop('disabled', false);

           }
       });
   });

   $(document).ready(function () {
       $('#overlay').hide(150);
       console.log('document');
   });
  </script>

  <style type="text/css">

        </style>
</body>

</html>
