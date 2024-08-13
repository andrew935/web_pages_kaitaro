<?php
//$kaitaro_post_back_url = 'http://216.238.105.254/38e5d01/postback';
//$kaitaro_post_back_url='http://216.238.105.254/postback';
$kaitaro_post_back_url='https://keitaro.invest-education.com/0dd875c/postback';



$respond = new stdClass();
$respond->platform = 'n2';
$respond->success = 1;
$respond->message = '';

$data =[];
if (isset($_POST)){
    $data = $_POST;
}

if (isset($data['platform'])){
    $respond->platform = $data['platform'];
}

//send_to_telegram($data);

/*
if (isset($_GET)){
    $data = $_GET;
}*/


if (sizeof($data) <1){
    $respond->success = 0;
    $respond->message = ' required parameter missing .';
    echo json_encode($respond);
    die;
}
if (!isset($data['fname']) || $data['fname']=='' ){
    $respond->success = 0;
    $respond->message = ' required parameter missing first name';
    echo json_encode($respond);
    die;
}
if (!isset($data['lname']) || $data['lname']==''){
    $respond->success = 0;
    $respond->message = ' required parameter missing last name';
    echo json_encode($respond);
    die;
}
if (!isset($data['email']) || $data['email']==''){
    $respond->success = 0;
    $respond->message = ' required parameter missing email';
    echo json_encode($respond);
    die;
}
if (!isset($data['phone']) || $data['phone']==''){
    $respond->success = 0;
    $respond->message = ' required parameter missing tel_number' ;
    echo json_encode($respond);
    die;
}

if (!isset($data['dialCode']) || $data['dialCode']==''){
    $respond->success = 0;
    $respond->message = ' required parameter missing dialCode';
    echo json_encode($respond);
    die;
}
if (!isset($data['iso2']) || $data['iso2']==''){
    $respond->success = 0;
    $respond->message = ' required parameter missing iso';
    echo json_encode($respond);
    die;
}

if ($respond->success == 0){
    echo json_encode($respond);
    die;
}


include_once './Monstrack.php';
$affiliate_data['token'] = 'CfDJ8LaBmQ4zm01GhOoDiflmGMNT-j8okWEWtW_oSDSArIAdIb8nQzEbvTcVrwJWMATAw5W-WcBNk6dyi_LW61R0aiOpxSKYDRaqV7WyVxTYTGGZ-7YKsVvafvnb5b7Ml9kOM0__LmfLBUY3ZeHMSRjGAwERIyHqQKSEA3q6KVmoPRqcUPiW8V1-2dTVeQMxFi-JxA';
$affiliate_data['end_point'] = 'https://integration.liquinix.monstrack.com/api/system/v1/leads';


$Monstrack = new Monstrack($affiliate_data);



$lead_data['fname'] =  str_replace(' ', '', $data['fname']);
$lead_data['lname'] = str_replace(' ', '', $data['lname']);
$lead_data['email'] = $data['email'];
$lead_data['password'] = $data['password'] ?? 'Aa123456';
$lead_data['currency'] = $data['currency'] ?? 'USD';
$lead_data['tel_number'] = $data['phone'];
$lead_data['tel_country_code'] = $data['dialCode'];
$lead_data['iso'] = strtoupper($data['iso2']);
$lead_data['language'] = $data['lang'] ?? 'en';


// optional params
$lead_data['pixel'] = $pixel = $data['pixel'] ?? '';

$lead_data['subCampaign']  = $data['sub_campaign'] ?? $data['subCampaign'] ?? '' ;
$lead_data['utm_medium']   = $data['utm_medium'] ?? '' ;
$lead_data['utm_campaign'] = $data['utm_campaign'] ?? '';
$lead_data['keyword']   = $_SERVER['HTTP_HOST'] ;
$lead_data['ipAddress'] = $data['ipAddress'] = get_ip() ;
$lead_data['comment']   =  $data['comment'] ?? '';
$lead_data['sub2']      =  $data['sub2'] ?? $data['utm_creative'] ?? '';
$lead_data['offer_url'] =  $data['offer_url'] ?? '';
$lead_data['placement'] =  $data['placement'] ?? '';
$lead_data['mb'] =  $data['mb'] ?? '';


$lead_data['deviceType'] = $data['device_type'] ?? $data['deviceType'] ?? '' ;
$lead_data['deviceName'] = $data['device_name'] ?? $data['deviceName'] ?? '' ;


$lead_data['utm_campaign_fb']  = $data['utm_campaign_fb'] ;

$lead_data['telegram'] =  $data['telegram'] ?? 0 ;

$lead_data['carrier'] = $pixel ;


//$subid = $lead_data['clickId'] =  $data['subid'] ;

$subid = $lead_data['clickId'] = $data['n2id'] ?? $data['subid'] ;


$lead_data['media']  = $media = $data['media'] ?? '-';
$utm_campaign_fb = $data['utm_campaign_fb'] ?? $data['subCampaign'] ??'';

$lead_data['utm_source']      = $data['utm_source'] ?? $media."-".$utm_campaign_fb ;





$response_json = $Monstrack->create_lead($lead_data);

$respond->data = $lead_data;
$respond->brand = json_decode($response_json);

//echo $respond->brand ; die;


$respond->step = 0;

if ($respond->brand === null){
    $respond->success = 0;
    $respond->message = ' Brand Error ';

    echo json_encode($respond);

    $respond->lead_data = $lead_data;
    $respond->step = 1;
    send_to_telegram($respond);

    die;
}

$respond->step = 2;

if (isset($respond->brand->errors)){
    $respond->step = 3;
    $respond->success = 0;
    foreach ($respond->brand->errors as $error){
        if ($error!=''){
            $respond->message = $respond->brand->errors->message = $error;
        }
    }

    switch ($lead_data['language']){
        case 'en':
        case 'es':
        case 'de':
        case 'pt':
        case 'zh':
        case 'ko':
        case 'ar':
            require_once './lang/'.$lead_data['language'].'.php';
            break;
        default:
            require_once './lang/en.php';
    }

    if (isset($respond->brand->errors->Email)){
        $respond->message = $text->email_exist ?? 'This email exist';
        $respond->email   = $data['email'];
    }
    if (isset($respond->brand->errors->Phone)){
        $respond->message = $text->phone_exist;
        $respond->phone   = $data['phone'];
    }



    if ($respond->message == '' || $respond->message == null || $respond->message == 'null'){
        $respond->message = $text->general;
    }
    $respond->errors =  $respond->brand->errors;


    $haystack = $respond->brand->message;
    $needle   = 'not allowed for country';

    if (strpos($haystack, $needle) !== false) {
        $respond->message = 'Sorry, we do not operate in your country';
    }

    $haystack2 = $respond->brand->message;
    $needle2   = 'Duplicate lead';

    if (strpos($haystack2, $needle2) !== false) {
        $respond->message = 'This email or phone number is already registered, please use a new one';
    }



    echo json_encode($respond);

    $respond->lead_data = $lead_data;
    $respond->step = 2;
    send_to_telegram($respond);

    // save error leads
    $save_error_leads = 'https://deva.platformreports.co/lead/error/store';

    $respond_db = file_get_contents($save_error_leads.'?'.http_build_query($data));
    //send_to_telegram($respond_db);
    die;
}


// N2
/*if ( $subid !='' && $respond->success == 1 ){

    $post_back_url = "https://newcentral.n2.app/cv?s=".$subid;;
    $respond_postback = file_get_contents($post_back_url);
    if(isset($data['telegram'])){
        if($data['telegram'] == 1){
            send_to_telegram('Media '.$data['media']);
            send_to_telegram($post_back_url);
            send_to_telegram($respond_postback);
        }
    }
}*/


if (isset($data['subid']) && $respond->success == 1){
    $respond->postback = file_get_contents($kaitaro_post_back_url.'?subid=' . $data['subid'] . '&status=Lead');
    if(isset($data['telegram'])){
        if($data['telegram'] == 1){
            send_to_telegram('Kataro Media '.$data['media']);
            send_to_telegram($respond);
            send_to_telegram($respond->postback);
        }
    }
}




//  propellerads.com   postback
$propelor_subid = $data['clickid'] ?? '';
$propelor_payout = $data['cost'] ?? '';


//send_to_telegram('Media '.$media);

if ($data['media'] == 'PR' && $respond->success == 1 ){

    $propelor_url ="http://ad.propellerads.com/conversion.php?aid=3466353&pid=&tid=127703&visitor_id=$propelor_subid";
    $propelor_postback = file_get_contents($propelor_url);


    if(isset($data['telegram'])){
        send_to_telegram('Media '.$data['media']);
        send_to_telegram($propelor_url);
        send_to_telegram($propelor_postback);
    }

}

if ($data['media'] == 'JB' && $respond->success == 1 ){
    $jubna_url ="https://app.jubnaadserve.com/api/conversion/23482?jubna_click_id=".$data['click_id'];
    $jubna_postback = file_get_contents($jubna_url);

    if(isset($data['telegram'])){
        send_to_telegram('Media '.$data['media']);
        send_to_telegram($jubna_url);
        send_to_telegram($jubna_postback);
    }
}

if ($data['media'] == 'AK' && $respond->success == 1 ){

    $adskeeper_url ="https://a.adskeeper.co.uk/postback?c=".$data['click_id']."&e=lead";
    $adskeeper_postback = file_get_contents($adskeeper_url);


    //$adskeeper_postback =  send_pixel($adskeeper_url);

    //sleep(1);
    if(isset($data['telegram']) ){
        send_to_telegram('Media '.$data['media']);
        send_to_telegram($adskeeper_url);
        send_to_telegram('respond ='.$adskeeper_postback);
    }
}

if ($data['media'] == "MG" && $respond->success == 1 ){
    $mgid_url_postback ="http://a.mgid.com/postback?c=".$data['click_id']."&e=Lead";
    $mgid_respond= file_get_contents($mgid_url_postback);

    if(isset($data['telegram'])){
        if($data['telegram'] == 1){
            send_to_telegram('Media '.$data['media']);
            send_to_telegram($mgid_url_postback);
            send_to_telegram($mgid_respond);

        }
    }
}

if ($data['media'] == 32 && $respond->success == 1 ){

    $speakol_url ="https://pixel.speakol.com/postback?id=".$data['pixel']."&spcid=".$data['spcid']."&ev=lead";
    $speakol_postback = file_get_contents($adskeeper_url);

    if(isset($data['telegram']) ){
        if($data['telegram'] == 1){
            send_to_telegram('Media 32');
            send_to_telegram($speakol_url);
            send_to_telegram($speakol_postback);

        }
    }
}

//$respond->data = $data;
//$respond->lead_data = $lead_data;

echo json_encode($respond);

function get_ip(){
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    return $ip;
}


function send_to_telegram($params){
    $apiToken = "6517851769:AAHDuX3-QZ_Al0LuPCGnmXdWmgC3xVD5EcE";
    //$params['ipAddress'] = get_ip() ;
    $data = [
        'chat_id' => '@error_on_monstrack_api',
        'text' => json_encode($params)
    ];
    file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}


function send_pixel($url){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}