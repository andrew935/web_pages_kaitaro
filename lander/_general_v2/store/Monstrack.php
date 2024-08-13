<?php

class Monstrack
{

    public $end_point = 'https://integration.liquinix.monstrack.com/api/system/v1/leads';
    public $token = '';

    function __construct($affilaite = [])
    {
        $this->token = $affilaite['token'] ?? 'CfDJ8LaBmQ4zm01GhOoDiflmGMNT-j8okWEWtW_oSDSArIAdIb8nQzEbvTcVrwJWMATAw5W-WcBNk6dyi_LW61R0aiOpxSKYDRaqV7WyVxTYTGGZ-7YKsVvafvnb5b7Ml9kOM0__LmfLBUY3ZeHMSRjGAwERIyHqQKSEA3q6KVmoPRqcUPiW8V1-2dTVeQMxFi-JxA';
        $this->end_point = $affilaite['end_point'] ?? 'https://integration.liquinix.monstrack.com/api/system/v1/leads';
    }

    function create_lead($lead){

        $end_point = $this->end_point;
        $lead_data['firstName'] = $lead['fname'];
        $lead_data['lastName']  = $lead['lname'];
        $lead_data['email']     = $lead['email'];
        $lead_data['password']  = $lead['password'] ?? 'Aa123456!';
        $tel_number = str_replace(" ","",$lead['tel_number']);
        $tel_number = str_replace("-","",$tel_number);
        $tel_number = str_replace("+","",$tel_number);
        if ($lead['tel_country_code'] =='false'){
            $lead_data['phone'] = '+'.$tel_number;
        }else{
            $lead_data['phone'] = '+'.$lead['tel_country_code'].$tel_number;
        }

        $lead_data['clickId']   = $lead['clickId'] ?? '';

        $lead_data['countryCode'] = $lead['iso'];
        $lead_data['languageCode'] = $lead['language'];

        $subCampaign =  $lead['subCampaign'] ?? $lead['sub_campaign'] ??$lead['utm_campaign_fb'] ?? '';
        $media = $lead['media'] ?? '';

        /*if ($lead['subCampaign'] != ''){
            $subCampaign =  $lead['subCampaign'] ;
        }elseif (isset($lead['utm_campaign_fb'])){
            if ($lead['utm_campaign_fb']!=''){
                $subCampaign =  $lead['utm_campaign_fb'] ;
            }
        }else{
            $subCampaign = '';
        }*/

        // Optional Params
        $lead_data['subCampaign'] =  "$media-$subCampaign";
        $lead_data['placement']   = $lead['utm_campaign']  ?? $lead['placement'] ?? '';
        $lead_data['referralUrl'] = $lead['offer_url']  ?? '';
        $lead_data['keyword']     = $lead['keyword'] ?? '';
        $lead_data['sub2']        = $lead['sub2'] ?? $lead['utm_source'] ?? '';
        $lead_data['ipAddress']   = $lead['ipAddress'] ?? '';
        $lead_data['comment']     = $lead['deviceName'].'-'. $lead['pixel'] ??  '' ; //$lead['comment'] ??

        $lead_data['osName']     =  $this->getOS();
        $lead_data['browser']    =  $this->getBrowser();
        $lead_data['deviceType'] =  $lead['deviceType'] ?? $lead['device_type'] ??$this->mobile();
        $lead_data['deviceName'] =  'MB-'.$lead['mb'] ?? $lead['deviceName']  ?? '';



        $sent_request_to_telegram = $lead['telegram'] ?? 0;


        foreach ($lead_data as $key=>$val){
            $lead_data[$key] = trim($val);
        }


        //$lead_data['placement'] = str_replace(" ",'_',$lead_data['placement']);




        return $this->send($lead_data,$end_point,$sent_request_to_telegram);

    }


    private function send($lead_data,$end_point, $sent_request_to_telegram = 0){

        if ($sent_request_to_telegram==1){
            $this->send_to_telegram('Request');
            $this->send_to_telegram($end_point);
            $this->send_to_telegram($lead_data);
        }

       // var_dump($lead_data);
       // var_dump($end_point);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $end_point,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($lead_data),
            CURLOPT_HTTPHEADER => array(
                    'Authorization: ApiToken '.$this->token,
                    'Content-Type: application/json'
                ),
            ));

        $response_json = curl_exec($curl);

        if ($sent_request_to_telegram==1){
            $this->send_to_telegram('Respond');
            $this->send_to_telegram($response_json);
        }



        // var_dump($response_json);
        return $response_json;
    }

    function getOS() {

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $os_platform  = "Unknown OS Platform";

        $os_array     = array(
            '/windows nt 10/i'      =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;

        return $os_platform;
    }

    function getBrowser() {

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $browser        = "Unknown Browser";

        $browser_array = array(
            '/msie/i'      => 'Internet Explorer',
            '/firefox/i'   => 'Firefox',
            '/safari/i'    => 'Safari',
            '/chrome/i'    => 'Chrome',
            '/edge/i'      => 'Edge',
            '/opera/i'     => 'Opera',
            '/netscape/i'  => 'Netscape',
            '/maxthon/i'   => 'Maxthon',
            '/konqueror/i' => 'Konqueror',
            '/mobile/i'    => 'Handheld Browser'
        );

        foreach ($browser_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $browser = $value;

        return $browser;
    }


    function isMobileDevice() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"]);
    }
    function mobile(){
        $device = '';
        if($this->isMobileDevice()){
            $device =  "Mobile";
        }

        return $device;
    }


    function send_to_telegram($data){
        $apiToken = "6517851769:AAHDuX3-QZ_Al0LuPCGnmXdWmgC3xVD5EcE";
        $data = [
            'chat_id' => '@error_on_monstrack_api',
            'text' => json_encode($data)
        ];
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
}
