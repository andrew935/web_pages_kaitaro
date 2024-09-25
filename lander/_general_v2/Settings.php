<?php

class Settings
{


    function get_url(){


        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $currentUrl = $protocol . $_SERVER['HTTP_HOST'] ;
        return strtok($currentUrl, '?');
    }

    function before_html($page_lang= 'ar',$country='AE'){

        $country = $_GET['country'] ?? $_SERVER['CF-IPCountry'] ?? $country;
        $pixel = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';

        $params = '?country='.$country.'&pixel='.$pixel.'&subid={subid}&';


        if (isset($_GET)){
            foreach ($_GET as $key=>$val){
                if ($key == 'lang' || $val == null || $val == ''|| $key == 'pixel' || $key == 'Pixel' ){
                    continue;
                }
                $params.="$key=$val&";
            }
        }


        return $params;
    }

    function in_header_form()
    {
        ?>
         <script>
            var event = 'page_view';
            var d_id = 'GTM-MJ78ZCZ5';

            <?php if(isset($_GET['media'] )&& $_GET['media']=='GG'){ ?>

            <?php }else{ ?>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer',d_id,event);
            <?php } ?>
        </script>
        <?php
    }

    function in_header(){

        $media = $_GET['media'] ??'';
        if ($media !='GG') { ?>
            <!-- Google Tag Manager -->
            <script>
                var event = 'page_view';
                var g_id = 'GTM-MJ78ZCZ5';

                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer',g_id,event);

            </script>
        <?php } ?>

        <style>
            .form_header {
                text-align: center;
                font-size: 1.5em;
                font-weight: 700;
            }

            .form_header .title {
                background: red;
                padding-top: 1em;
                padding-bottom: 1em;
                border-radius: 10px;
                margin-bottom: 1em;
                color:#ffffff;

            }
            #registerForm {
              /*  max-width: 400px;*/
                margin: auto;
            }
        </style>

        <!-- Jquery  -->
        <script src="<?=$this->get_url()?>/lander/_assets/js/jquery-3.7.1.min.js" ></script>

        <?php

        $media = $_GET['media'] ?? '';
        switch ($media) {
            case 'FB':
            case 22:
                $this->facebook_pixel();
                break;
            case 'TT':
            case 24:
                $this->tiktok_pixel();
                break;
            case 'GG':
            case 23:
                $this->google_pixel();
                break;
            case 'TW':
            case 28:
                $this->twitter_pixel();
                break;
            case 'OB':
            case 26:
                $this->outbrain_pixel();
                break;
            case 'SP':
            case 32:
                $this->speakol_pixel();
                break;
            case 'SN':
            case 33:
                $this->snap_pixel();
                break;
            case 'BG':
            case 34:
                $this->bing_pixel();
                break;
            case 'AK':
                $this->adskeeper_pixel();
                break;
           /* case 'JB':
            case 29:
                $this->jubna_pixel();
                break;*/
            /*case 'MG':
            case 35:
                $this->mgid_pixel();
                break;*/
        }

        $this->kaitaro_js();
    }

    function google_pixel(){
        $pixel_id =    $_GET['pixel'] ?? $_GET['google'] ?? $_COOKIE['google'] ?? '';
        ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$pixel_id?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-<?=$pixel_id?>');
        </script>
        <script>

            if (getCookie('google')== null){
                setCookie('google','<?=$pixel_id?>')
            }else {
                setCookie('google','',-1)
                document.cookie = "google=<?=$pixel_id?>";
            }
        </script>
        <?php
    }

    function taboola_pixel(){
        $pixel_id = $_GET['taboola'] ??  $_GET['pixel'] ?? $_COOKIE['taboola'] ?? '';
        ?>
        <img src='https://trc.taboola.com/<?=$pixel_id?>/log/3/unip?en=page_view'  width='0' height='0' style='display:none' referrerpolicy='no-referrer-when-downgrade'/>
        <script>

            if (getCookie('taboola') == null){
                setCookie('taboola','<?=$pixel_id?>')
            }else {
                setCookie('taboola','',-1)
                document.cookie = "taboola=<?=$pixel_id?>";
            }
        </script>
        <?php
    }

    function facebook_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
        ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?=$pixel_id?>');
            fbq('trackCustom', 'offerView');
            fbq('trackCustom', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id=<?=$pixel_id?>&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

        <?php
    }

    function tiktok_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';

        ?>
        <script>
            !function (w, d, t) {
                w.TiktokAnalyticsObject=t;
                var ttq=w[t]=w[t]||[];
                ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],
                    ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};
                for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
                )ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};

                ttq.load('<?=$pixel_id?>');
                ttq.page();
            }(window, document, 'ttq');
        </script>

        <script>

            if (getCookie('tiktok') == null){
                setCookie('tiktok','<?=$pixel_id?>')
            }else {
                setCookie('tiktok','',-1)
                document.cookie = "tiktok=<?=$pixel_id?>";
            }
        </script>

        <?php
    }

    function twitter_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
        ?>
        <!-- Twitter conversion tracking base code -->
        <script>
            !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
            },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='https://static.ads-twitter.com/uwt.js',
                a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
            twq('config','<?=$pixel_id?>');
            twq('event', 'status', 'started')
        </script>
        <!-- End Twitter conversion tracking base code -->
        <script>

            if (getCookie('twitter') == null){
                setCookie('twitter','<?=$pixel_id?>')
            }else{
                setCookie('twitter','',-1)
                //document.cookie = "twitter=<?=$pixel_id?>";
            }
        </script>
        <?php
    }

    function outbrain_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
        ?>
        <script data-obct type = "text/javascript">
            /** DO NOT MODIFY THIS CODE**/
            !function(_window, _document) {
                var OB_ADV_ID = '<?=$pixel_id?>';
                if (_window.obApi) {
                    var toArray = function(object) {
                        return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];
                    };
                    _window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));
                    return;
                }
                var api = _window.obApi = function() {
                    api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);
                };
                api.version = '1.1';
                api.loaded = true;
                api.marketerId = OB_ADV_ID;
                api.queue = [];
                var tag = _document.createElement('script');
                tag.async = true;
                tag.src = '//amplify.outbrain.com/cp/obtp.js';
                tag.type = 'text/javascript';
                var script = _document.getElementsByTagName('script')[0];
                script.parentNode.insertBefore(tag, script);
            }(window, document);

            obApi('track', 'PAGE_VIEW');
        </script>
        <script>

            if (getCookie("outbrain"))
                setCookie('outbrain','<?=$pixel_id?>')
            }else{
                setCookie('outbrain','',-1)
                document.cookie = "outbrain=<?=$pixel_id?>";
            }
        </script>
        <?php
    }

    function speakol_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
        ?>
        <script>
            !function (e, s, t, a, n, p, i, o, c){
                e[n] || ((i = e[n] = function () {i.process ? i.process.apply(i, arguments) : i.queue.push(arguments)}).queue = [], i.t = 1 * new Date, (o = s.createElement(t)).async = 1,o.src = "https://cdn.speakol.com/pixel/js/sppixel.min.js?t=" + 864e5 * Math.ceil(new Date / 864e5),(c = s.getElementsByTagName(t)[0]).parentNode.insertBefore(o, c))}(window, document, "script", 0, "spix"),spix("init", "<?=$pixel_id?>"),spix("event", "pageload");
        </script>
        <?php
    }

    function snap_pixel(){
        $pixel_id = $_GET['pixel'] ?? $_COOKIE['pixel'] ?? '';
        ?>
        <!-- Snap Pixel Code -->
        <script type='text/javascript'>
            (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
            {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
                a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
                r.src=n;var u=t.getElementsByTagName(s)[0];
                u.parentNode.insertBefore(r,u);})(window,document,
                'https://sc-static.net/scevent.min.js');

            snaptr('init', '<?=$pixel_id?>');
            snaptr('track', 'PAGE_VIEW');
        </script>
        <?php
    }

    function bing_pixel(){
        $pixel_id = $_GET['pixel'];
        ?>
        <!-- Snap Pixel Code -->
        <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"<?=$pixel_id?>"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
        <noscript><img src="//bat.bing.com/action/0?ti=<?=$pixel_id?>&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>

        <?php
    }

    function mgid_pixel(){
        $pixel_id = $_GET['pixel'];
        $lang = $_GET['lang'] ?? 'en'
        ?>
        <!-- Mgid Sensor -->
        <script type="text/javascript"> (function() { var d = document, w = window; w.MgSensorData = w.MgSensorData || []; w.MgSensorData.push({ cid:<?=$pixel_id?>, lng:"<?=$lang?>", project: "a.mgid.com" }); var l = "a.mgid.com"; var n = d.getElementsByTagName("script")[0]; var s = d.createElement("script"); s.type = "text/javascript"; s.async = true; var dt = !Date.now?new Date().valueOf():Date.now(); s.src = "https://" + l + "/mgsensor.js?d=" + dt; n.parentNode.insertBefore(s, n); })();
        </script>
        <!-- /Mgid Sensor -->
        <?php
    }

    function jubna_pixel(){
        $pixel_id = $_GET['pixel'];
        ?>
        <script type="text/javascript">
            (function(a,b,c,d,e){var f=d.getDate().toString()+d.getMonth().toString()+d.getFullYear().toString(),g=b.createElement(c);g.type="text/javascript",g.async=1,g.setAttribute("data-script-id","jb-leads-code"),g.src="https://static.jubnaadserve.com/api/conversion/js/"+e+"?jcv="+f,document.getElementsByTagName("head")[0].appendChild(g)})(window,document,"script",new Date,<?=$pixel_id?>);
        </script>
        <?php
    }

    function adskeeper_pixel(){
        $pixel_id = $_GET['pixel'];
        ?>
        <!-- Adskeeper Sensor -->
    <script type="text/javascript">
        (function() {
            var d = document, w = window;
            w.MgSensorData = w.MgSensorData || [];
            w.MgSensorData.push({
                cid:<?=$pixel_id?>,
                lng:"us",
                project: "a.adskeeper.co.uk"
            });
            var l = "a.adskeeper.co.uk";
            var n = d.getElementsByTagName("script")[0];
            var s = d.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            var dt = !Date.now?new Date().valueOf():Date.now();
            s.src = "https://" + l + "/mgsensor.js?d=" + dt;
            n.parentNode.insertBefore(s, n);
        })();
    </script>
    <!-- /Adskeeper Sensor -->
        <?php
    }

    function in_body(){
        if (isset($_GET['media']) && $_GET['media'] == 'GG'){ ?>

        <?php }else {?>
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ78ZCZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <?php }
    }

    function in_body_form(){
        if (isset($_GET['media']) && $_GET['media'] == 'GG'){ ?>

        <?php }else {?>
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ78ZCZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <?php }
    }

    function in_footer($agency_url = null){
        ?>
        <!-- FOOTER -->
        <script>
            $("a.scroll_to_register").click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#registerForm").offset().top
                }, 500);
            });
            $("img").click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#registerForm").offset().top
                }, 500);
            });

            console.log("<?=$agency_url?>");
            document.addEventListener("DOMContentLoaded", function() {
                <?php if($agency_url!=null) { ?>
                   // var fullHost = window.location.hostname;

                    // Split the host by '.' and keep the last two parts (e.g., "example.com")
                    //var hostParts = fullHost.split('.');
                    //var mainDomain = hostParts.slice(-2).join('.');

                    let agency_url = "<?=$agency_url?>";
                    console.log(agency_url);
                    fetchAndUpdatePage(agency_url);
                <?php  } ?>
            });


            function fetchAndUpdatePage(apiUrl) {
                console.log(' apiUrl '+apiUrl);
                fetch(apiUrl)
                    .then(response => response.json()) // Parse the response as JSON
                    .then(data => {
                        // Check if data exists
                        if (data) {
                            console.log(data);
                            var fullHost = window.location.hostname;
                            var hostParts = fullHost.split('.');
                            var mainDomain = hostParts.slice(-2).join('.');

                            // Check and update brand name if it exists
                            if (data.name !== undefined) {
                                document.querySelectorAll('.brandName').forEach(el => {
                                    el.textContent = data.name;
                                });
                            }

                            // Check and update terms link if it exists
                            if (data.terms !== undefined) {
                                document.querySelectorAll('.termsLink').forEach(el => {
                                    el.href = mainDomain + data.terms;
                                });
                            }

                            // Check and update privacy policy link if it exists
                            if (data.privacyPolicy !== undefined) {
                                document.querySelectorAll('.privacyPolicyLink').forEach(el => {
                                    el.href = mainDomain + data.privacyPolicy;
                                });
                            }

                            // Check and update contact us link if it exists
                            if (data.contactUs !== undefined) {
                                document.querySelectorAll('.contactUsLink').forEach(el => {
                                    el.href = mainDomain + data.contactUs;
                                });
                            }

                            // Check and update logo image if it exists
                            if (data.logo !== undefined) {
                                document.querySelectorAll('.logoImg').forEach(el => {
                                    el.src = mainDomain + data.logo;
                                });
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            }


        </script>
        <?php


    }

    function terms(){
        echo "/lander/_general_v2/policy/termsandconditions.php";
    }

    function cookie(){
        echo "/lander/_general_v2/policy/cookie-policy.php";
    }

    function policy(){
        echo "/lander/_general_v2/policy/policy.php";
    }


    function kaitaro_js(){
        ?>
        <!-- JS adapter start -->
        <script type="application/javascript">
            function getCookie(name) {
                var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
                var value = v ? v[2] : null;
                return value && value !== "undefined" ? value : null;
            }

            function setCookie(name, value, days) {
                var d = new Date();
                d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
                document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
            }

            function getSubId() {
                var params = new URLSearchParams(document.location.search.substr(1));
                if (!"{subid}".match("{")) {
                    return "{subid}";
                }
                var clientSubid = '<?php echo isset($client) ? $client->getSubid() : "" ?>';
                if (clientSubid && !clientSubid.match(">")) {
                    return clientSubid;
                }
                if (params.get("_subid")) {
                    return params.get("_subid");
                }
                if (params.get("subid")) {
                    return params.get("subid");
                }
                if (getCookie("subid")) {
                    return getCookie("subid");
                }
                if (getCookie("_subid")) {
                    return getCookie("_subid");
                }
            }

            function getToken() {
                var params = new URLSearchParams(document.location.search.substr(1));
                if (!"{token}".match("{")) {
                    return "{token}";
                }
                var clientToken = '<?php echo isset($client) ? $client->getToken() : "" ?>';
                if (clientToken && !clientToken.match(">")) {
                    return clientToken;
                }
                if (params.get("_token")) {
                    return params.get("_token");
                }
                if (params.get("token")) {
                    return params.get("token");
                }
                if (getCookie("token")) {
                    return getCookie("token");
                }
                return null;
            }

            function getPixel() {
                var params = new URLSearchParams(document.location.search.substr(1));
                if (!"{pixel}".match("{")) {
                    return "{pixel}";
                }
                if (params.get("pixel")) {
                    return params.get("pixel");
                }

                if (getCookie("pixel")) {
                    return getCookie("pixel");
                }

                return null;
            }

            if (typeof URLSearchParams === "function") {
                document.addEventListener("DOMContentLoaded", function (event) {
                    var params = new URLSearchParams(document.location.search.substr(1));
                    var subid = getSubId();
                    var token = getToken();
                    var pixel = getPixel();

                    params.set("_token", token);
                    setCookie("pixel", pixel);
                    setCookie("token", token);
                    setCookie("subid", subid);

                    // Adds params to the links
                    document.querySelectorAll("a").forEach(function (link) {
                        try {
                            var url = new URL(link.href);
                            params.forEach(function (v, k) {
                                url.searchParams.append(k, v);
                            });
                            link.href = url.toString();
                        } catch (e) {
                            console.error(
                                `[Exception] Bad params: unexpected link '${link.href}' for new Url()`
                            );
                        }
                    });

                    var SUBID_TEMPLATE_NAME = "subid";
                    var TOKEN_TEMPLATE_NAME = "token";
                    var PIXEL_TEMPLATE_NAME = "pixel";

                    // Replace placeholders to actual values for input[hidden] fields
                    var subIdRegExp = new RegExp(`\{${SUBID_TEMPLATE_NAME}\}`, "g");
                    var tokenRegExp = new RegExp(`\{${TOKEN_TEMPLATE_NAME}\}`, "g");
                    var pixelRegExp = new RegExp(`\{${PIXEL_TEMPLATE_NAME}\}`, "g");

                    document
                        .querySelectorAll('input[type="hidden"]')
                        .forEach(function (input) {
                            if (subIdRegExp.test(input.value)) {
                                input.value = input.value.replaceAll(subIdRegExp, subid);
                            }
                            if (tokenRegExp.test(input.value)) {
                                input.value = input.value.replaceAll(tokenRegExp, token);
                            }
                            if (pixelRegExp.test(input.value)) {
                                input.value = input.value.replaceAll(pixelRegExp, pixel);
                            }
                        });

                    // Adds params as hidden inputs to the forms
                    document.querySelectorAll("form").forEach(function (form) {
                        params.forEach(function (v, k) {
                            var input = document.createElement("input");
                            input.type = "hidden";
                            input.name = k;
                            input.value = v;

                            form.append(input);
                        });
                    });
                });
            }
        </script>
        <!-- JS adapter end -->
        <?php
    }

    function get_agency_url()
    {
        $base_url = str_replace('lp.','',$_SERVER['HTTP_HOST']);
        $base_url = str_replace('cl.','',$base_url);
        $base_url = str_replace('web.','',$base_url);
        return '//'.$base_url;
    }

    function get_agency_logo()
    {
        $base_url = str_replace('lp.','',$_SERVER['HTTP_HOST']);
        $base_url = str_replace('cl.','',$base_url);
        $base_url = str_replace('web.','',$base_url);
        return '//'.$base_url.'/logo/1.jpg';

    }
}