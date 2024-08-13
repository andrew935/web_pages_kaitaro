<?php
require_once dirname(__DIR__).'/store/Irev.php';

echo 'Line :'.__LINE__.' ';
$kaitaro_post_back_url='https://keitaro.madia-tech.xyz/1d549f1/postback';



$respond = new stdClass();
$respond->platform = 'kaitaro';
$respond->success = 1;
$respond->message = '';


echo 'Line :'.__LINE__.' ';


$Irev = new Irev();

$subid = $data['subid'] ?? '';

$lead_data['fname'] =  'test_lead';
$lead_data['lname'] = 'test_lead';
$lead_data['email'] = 'test_lead'.time().'@aol.com';
$lead_data['password'] = $data['password'] ?? 'Aa123456';
$lead_data['tel_number'] = '74102545';
$lead_data['tel_country_code'] = '+91';
//$lead_data['iso'] = strtoupper($data['iso2']);
//$lead_data['language'] = $data['lang'] ?? 'en';


$lead_data['tp_aff_sub']  = $data['tp_aff_sub']  ?? '';
$lead_data['tp_aff_sub2'] = $data['tp_aff_sub2'] ?? '';
$lead_data['tp_aff_sub3'] = $data['tp_aff_sub3'] ?? '';
$lead_data['tp_aff_sub4'] = $data['tp_aff_sub4'] ?? '';
$lead_data['tp_aff_sub5'] = $data['subid']  ?? $data['tp_aff_sub5'] ?? '';

$lead_data['ip'] =   "1.187.".rand(1,255).".".rand(1,255) ;
$lead_data['offer_url'] =  $data['offer_url'] ?? '';

$lead_data['telegram'] =  $data['telegram'] ?? 0 ;



$lead_data['media']  = $media = $data['media'] ?? '';

echo 'Line :'.__LINE__.' ';

var_dump($lead_data);
include_once './Irev.php';
$response_json = $Irev->create_lead($lead_data);

$respond->data = $lead_data;
$respond->brand = json_decode($response_json);

var_dump($response_json);

echo $respond->brand ; die;


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

if (isset($respond->brand->error)){
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
    //$save_error_leads = 'https://deva.platformreports.co/lead/error/store';

    //$respond_db = file_get_contents($save_error_leads.'?'.http_build_query($data));
    //send_to_telegram($respond_db);
    die;
}


//send_to_telegram('Media '.$media);

if ($data['media'] == 'PR' && $respond->success == 1 ){

    $propelor_url ="http://ad.propellerads.com/conversion.php?aid=3466353&pid=&tid=127703&visitor_id=";
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

    $adskeeper_url ="https://a.adskeeper.co.uk/postback?c=".$data['click_id']."&e=lead".$lead_data['pixel'];
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
    $mgid_url_postback ="http://a.mgid.com/postback?c=".$data['adclid']."&e=Lead";
    $mgid_respond= file_get_contents($mgid_url_postback);

    if(isset($data['telegram'])){
        if($data['telegram'] == 1){
            send_to_telegram('Media '.$data['media']);
            send_to_telegram($mgid_url_postback);
            send_to_telegram($mgid_respond);

        }
    }
}


// kaitaro posbck

if (isset($data['subid'])){
    $respond->postback = file_get_contents($kaitaro_post_back_url.'/postback?subid=' . $data['subid'] . '&status=lead');
}



$respond->brand->redirectUrl = $respond->brand->auto_login_url ?? $respond->brand->thank_you_url ?? 'https://yahoo.com';

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
    $apiToken = "7325897078:AAGCzVh_hyi7a6xlW-VPkvsASJskRAbfMSY";
    //$params['ipAddress'] = get_ip() ;
    $data = [
        'chat_id' => '-1002240714879',
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