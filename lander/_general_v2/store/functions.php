<?php
function get_pixel_by_media($media,$pixel_id = null){

    $pixel = $pixel_id = $_GET['pixel'] ??  '';

    switch ($media) {
        case 22:
        case 'FB':
        case 'facebook':
            facebook_pixel($pixel_id);
            break;
        case 23:
        case 'GG':
        case 'google':

            google_pixel($pixel_id);
            break;
        case 24:
        case 'TT':
        case 'tiktok':

            tiktok_pixel($pixel_id);
            break;
        case 25:
        case 'TB':
        case 'taboola':

            taboola_pixel($pixel_id);
            break;
        case 28:
        case 'TW':
        case 'twitter':

            twitter_pixel($pixel_id);
            break;
        case 29:
        case 'JB':
        case 'jubna':

            jubna_pixel($pixel_id);
            break;

        case 26:
        case 'OB':
        case 'outbrain':

            outbrain_pixel($pixel_id);
            break;
        case 32:
        case 'SP':
        case 'speakol':

            speakol_pixel($pixel_id);
            break;
        case 33:
        case 'SN':
        case 'Snapchat':

            snapchat_pixel($pixel_id);
            break;
        case 34:
        case 'BG':
        case 'Bing':

            bing_pixel($pixel_id);
            break;
        case 35:
        case 'MG':
        case 'Mgid':

            mgid_pixel($pixel_id);
            break;
        case 'AK':
            adskeeper_pixel($pixel_id);
            break;
    }
}



function google_pixel($pixel_id){
    $conversion_label = $_GET['conversion_label'] ?? $_GET['label'] ?? 'Isy8CI_VvJQZEKuhnaw9';
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
        gtag('event', 'conversion', {'send_to': 'AW-<?=$pixel_id?>/<?=$conversion_label?>'});
    </script>
    <?php
}

function taboola_pixel($pixel_id){
    ?>
    <img src='https://trc.taboola.com/<?=$pixel_id?>/log/3/unip?en=lead'  width='0' height='0' style='display:none' referrerpolicy='no-referrer-when-downgrade'/>
    <!-- End of Taboola Pixel Code -->
    <?php
}

function facebook_pixel($pixel_id){
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
        fbq('track', 'CompleteRegistration');
        fbq('track', 'Lead');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?=$pixel_id?>&noscript=1&ev=Lead"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <?php
}

function tiktok_pixel($pixel_id){
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
            ttq.track('CompleteRegistration');
            ttq.track('Lead');
        }(window, document, 'ttq');
    </script>

    <?php
}

function twitter_pixel($pixel_id){
    ?>
    <!-- Twitter conversion tracking base code -->
    <script>
        !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
        },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='https://static.ads-twitter.com/uwt.js',
            a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
        twq('config','<?=$pixel_id?>');
        twq('event', 'Lead')

    </script>
    <!-- End Twitter conversion tracking base code -->

    <?php
}

function jubna_pixel($pixel_id){
    ?>
    <!-- jubna_pixel -->
    <img src="https://app.jubnaadserve.com/api/conversion/23482?jubna_click_id=<?=$pixel_id?>" alt="jubla" width="1px" height="1px" style="display:none">
    <!-- End jubna_pixel -->

    <?php
}

function outbrain_pixel($pixel_id){
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

        //obApi('track', 'LEAD');
        obApi('track', 'Lead');
    </script>

    <?php
}

function speakol_pixel($pixel_id = 'ID-120'){
    ?>
    <script>
        !function (e, s, t, a, n, p, i, o, c){
            e[n] || ((i = e[n] = function () {i.process ? i.process.apply(i, arguments) : i.queue.push(arguments)}).queue = [], i.t = 1 * new Date, (o = s.createElement(t)).async = 1,o.src = "https://cdn.speakol.com/pixel/js/sppixel.min.js?t=" + 864e5 * Math.ceil(new Date / 864e5),(c = s.getElementsByTagName(t)[0]).parentNode.insertBefore(o, c))}(window, document, "script", 0, "spix"),spix("init", "<?=$pixel_id?>"),spix("event", "pageload");
    </script>

    <script>
        spix('event','lead');
    </script>
    <?php
}

function snapchat_pixel($pixel_id){
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
        snaptr('track', 'LEAD');
    </script>

    <?php
}

function bing_pixel($pixel_id){
    ?>
    <!-- Bing Pixel Code -->
    <script>
        !function(c,e,t,n,o){c[n]=c[n]||function(){(c[n].q=c[n].q||[]).push(arguments)},c[n].l=1*new Date;var a=e.createElement(t),r=e.getElementsByTagName(t)[0];a.async=1,a.src="https://www.bing.com/aria/boot/track",r.parentNode.insertBefore(a,r)}(window,document,"script","bing","bat");
        bing('create', '<?=$pixel_id?>', 'auto');
        bing('trackPageView');
    </script>
    <!-- End Bing Pixel Code -->
    <script>
        window.uetq = window.uetq || [];
        window.uetq.push('event', 'submit_lead_form', {});
    </script>
    <?php
}


function mgid_pixel($pixel_id){
    $click_id = $_GET['click_id'] ?? '';
    ?>
    <!-- Mgid Sensor -->
    <!--<script type="text/javascript"> (function() { var d = document, w = window; w.MgSensorData = w.MgSensorData || []; w.MgSensorData.push({ cid:<?/*=$pixel_id*/?>, lng:"us", project: "a.mgid.com" }); var l = "a.mgid.com"; var n = d.getElementsByTagName("script")[0]; var s = d.createElement("script"); s.type = "text/javascript"; s.async = true; var dt = !Date.now?new Date().valueOf():Date.now(); s.src = "https://" + l + "/mgsensor.js?d=" + dt; n.parentNode.insertBefore(s, n); })();
    </script>-->
    <!-- /Mgid Sensor -->

    <!-- Mgid Sensor -->
    <script type="text/javascript">
        (function() {
            var d = document, w = window;
            w.MgSensorData = w.MgSensorData || [];
            w.MgSensorData.push({
                cid:<?=$pixel_id?>,
                lng:"us",
                project: "a.mgid.com"
            });
            var l = "a.mgid.com";
            var n = d.getElementsByTagName("script")[0];
            var s = d.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            var dt = !Date.now?new Date().valueOf():Date.now();
            s.src = "https://" + l + "/mgsensor.js?d=" + dt;
            n.parentNode.insertBefore(s, n);
        })();
    </script>
    <!-- /Mgid Sensor -->
<!--    <iframe src="<?/*="//a.mgid.com/postback?c=".$click_id."&e=Lead"*/?>" width="1px"></iframe>-->
<?php
}

function adskeeper_pixel($pixel_id){
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
    $click_id = $_GET['click_id'] ?? '';
    $pixel = $_GET['pixel'] ?? '';

    ?>
   <!-- <iframe src="<?/*="//a.adskeeper.co.uk/postback?c=".$click_id."&e=lead".$pixel*/?>" width="1px"></iframe>-->

    <?php
}