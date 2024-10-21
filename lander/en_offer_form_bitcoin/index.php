<?php

$keyword = $_GET['keyword'] ?? 'page Key word';

 $dev = $_GET['dev'] ?? 0;
if ($dev == 1){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

 $p_keyword = "Bitcoin-Bank"; // Replace with your offer name
$p_lang    = "en"; // page Language LOW CASE 
$p_country = $_GET['country'] ?? $_SERVER["HTTP_CF_IPCOUNTRY"] ?? "IN"; // Replace with the default country ISO Upper case for arabic make AE

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
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
      <title>Bitcoin Bank</title>
      <link href="assets/favicon.ico" rel="shortcut icon" type="image/x-icon" />
      <link href="assets/Style.css" rel="stylesheet" /> 
      <?php $settings->in_header();?>
   </head>
   <body cz-shortcut-listen="true">
      <?php $settings->in_body();?>
      <div class="logo">
         <img alt="logo" class="logo-img" src="assets/logo2.png" style="max-width: 200px"/>
      </div>
      <div class="custom-form">
            <div class="custom-form-slide active">
                <p class="p1">Create your account</p>
                <p class="p2">
                  Telephone verification is required to complete registration. The phone
                  number will be used to verify the account.
                </p>
            </div>
            <div class="form-wrapper">
                  <iframe id="registerForm" src="./form_only<?php echo $params?>" width="100%" height="350px" style="border: none; overflow: hidden" scrolling="no"></iframe>
            </div>
      </div>
      <?php $settings->in_footer();?>
   </body>
</html>
