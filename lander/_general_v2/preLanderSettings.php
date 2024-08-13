<?php

class Settings
{
    function before_html() {


    }

    function get_url()
    {
        $base_url = '//'.$_SERVER['HTTP_HOST'];
       /* if (str_contains($base_url, 'localhost')) {
            $base_url = $base_url.'/web_pages_ocean';
        }*/
        return $base_url;

    }

    function in_header(){


        $media = $_GET['media'] ??'';
        if ($media !='GG'){ ?>
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

        <script  >
            console.log('media <?=$media?>' );
            let referrer = document.referrer;
            localStorage.setItem('referrer', referrer);
        </script>
        <?php

        $this->kaitaro_js();

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


    function in_body(){
        $media = $_GET['media'] ?? '';

        if ($media !='GG'){ ?>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ78ZCZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php }


    }

    function in_footer(){
        ?>
        <!--FOOTER-->
        <script src="<?=$this->get_url()?>/lander/_assets/js/jquery-3.7.1.min.js" ></script>

        <script>
            $(document).ready(function() {
                const url = "{offer}&get_page_vars=keyword&exit=1";
                $.ajax({
                    url: url,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.keyword) {
                            const keyword = response.keyword;
                            $('span.ikeyword').each(function() {
                                $(this).text(keyword);
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("An error occurred while fetching the data: ", status, error);
                    }
                });

                $('img').on('click', function() {

                    console.log('img');
                    window.location.href = '{offer}';
                });
                $('picture').on('click', function() {
                    console.log('picture');
                    window.location.href = '{offer}';
                });
                $('figure').on('click', function() {
                    console.log('figure');
                    window.location.href = '{offer}';
                });


            });
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