<?php
$domain = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Forex,Education">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">


    <title><?=$domain?></title>
    <link rel="icon" href="" sizes="32x32"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./images/favicon-48x48.png" sizes="48x48">


    <style>

        @import url('https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@400;500;600;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100&family=Quicksand:wght@300;500;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,900&display=swap');



        @font-face {
            font-family: 'Montserrat', sans-serif;
        }
        @font-face {
            font-family: 'Roboto', sans-serif;
        }

        body {
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
            color: #313131;
        }
        .name-logo {
            margin-top: -3em;
            margin-left: 0.5em;
        }
        h3,h4 {
            color: rgb(0, 31, 94);
            font-size: 2.4em;
            letter-spacing: 1.5px;
        }
        h4.big-text {
            font-size: 4em;
        }

        .global-logo {
            position: absolute;
            left: calc(50% - 590px);
            top: -1em;
        }
        .title-box {
            max-width: 35em;
        }
        .blue-text {
            color: rgb(23, 60, 145);
        }
        .title-box p {
            font-size: 3.3em;
            line-height: 1.1;
            color: rgb(11, 85, 249);
            letter-spacing: -0.04em;
        }
        .blue-box {
            background: #1b2d54;
        }
        .white-text {
            color: white;
        }
        .blue-box p {
            font-size: 1.8em;
        }
        .padding-box{
            padding: 3em 0;
        }
        h2 {
            font-size: 1em;
            font-weight: bold;
        }
        .text-box p {
            font-size: 1.4em;
        }
        .padding-img {
            padding-top: 11em;
            padding-bottom: 2em;
        }
        .btn-default {
            background-color: #ffdd00;
            border-radius: 10px;
            font-size: 1.7em;
            width: 100%;
            font-weight: 600;
            line-height: 1.2;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 4px 9px;
            padding: 0.5em;
            border-radius: 46px;
            max-width: 33em;
        }
        .btn-default.btn-blue {
            background: #1b2d54;
            color:white;
            max-width: 20em;
        }
        .btn-red:hover{
            color: white;
            background-color: rgb(186 5 5);
        }
        .lh-base {
            line-height: 1.7;
        }
        .blue-block {
            background: #1b2d54;
        }
        .graph-box h2 {
            font-size: 2.5em;
        }
        .graph-box p {
            font-size: 1.7em;
        }
        #star h2 {
            font-size: 2em;
        }
        #star .wrapper {
            background: rgb(241, 241, 241);
            background-position: center;
        }
        .star-box {
            max-width: 60%;
            margin:auto;
        }
        .icon-box p {
            font-size: 1.3em;
            padding: 0 2em;
        }#star {
             position: relative;
         }
        #star:before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-top: 27px solid rgb(241, 241, 241);
            border-left: 27px solid transparent;
            border-right: 27px solid transparent;
        }
        footer {
            background: rgb(229, 229, 229);
        }
        footer .list-group-item {
            background: transparent;
            border: none;
        }
        footer .list-group-item a {
            color: black;
        }
        #form-box {
            position: absolute;
            right: calc(50% - 49em);
            top: 3em;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;
            border-radius: 10px;
            z-index: 30;
            background: white;
        }
        .top-form {
            color: black;
            border-radius: 10px 10px 0px 0px;
            font-size: 1.5em;
            line-height: 1.2;
            max-width: 20em;
        }
        .footer-form {
            background: rgb(239, 239, 239);
            border-radius: 0px 0px 10px 10px;
            padding: 1em 0;
        }
        p.text-form {
            max-width: 23em;
            margin: auto;
            text-align: center;
            padding-bottom: 0.5em;
        }
        .policy  .wrapper{
            background-image: none;
            color: #646262;
        }
        .policy h3 {
            font-weight: 300;
            padding: 0.5em 0;
        }
        .policy li {
            padding: 0.3em 0;
        }

        a.ui-slider-handle.ui-state-default.ui-corner-all {
            background: blue;
            width: 50px;
            height: 50px;
            margin-top: -20px;
        }



        .comeZQ {
            position: relative;
            background: #fff;
            border: 4px solid #f5af02;
            box-shadow: 0px 5px 32px rgba(0, 0, 0, 0.15);
            border-radius: 14px;
            padding: 31px 36px 101px 39px;
            width: 100%;
            width: 762px;
            max-width: 100%;
            margin: 0 auto;
            border-color: #ffffff;
            box-shadow: 0 5px 32px rgba(0, 0, 0, 0.15);
            margin-bottom: 54px;
            padding: 53px 15px 101px;
        }
        .rc-slider-track, .rc-slider-rail, .rc-slider-step {
            height: 18px;
        }
        .rc-slider-handle::before {
            content: "<";
            padding: 3px;
            top: 17px;
            border-color: rgb(255, 255, 255);
            border-width: 0px 2px 2px 0px;
        }
        .rc-slider-handle::after {
            content: ">";
            padding: 3px;
            top: 17px;
            border-color: rgb(255, 255, 255);
            border-width: 0px 2px 2px 0px;

        }

        #slider {
            background: #f2f2f2;
            height: 20px;
            border: none;
            border-radius: 10px;
            border: 1px solid rgb(233, 233, 233);
        }
        .rc-slider-mark {
            padding-top: 15px;
            font-weight: 300;
            color: rgb(198, 198, 198);
        }
        .rc-slider-step {
            position: absolute;
            width: 100%;
            height: 16px;
            background: transparent;
        }
        .rc-slider {
            position: relative;
            height: 43px;
            padding: 5px 0px;
            width: 90%;
            border-radius: 6px;
            touch-action: none;
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        .ftCLZn div:first-child {
            color: rgb(27, 45, 84);
            font-weight: 400;
            font-size: 17px;
            line-height: 126.1%;
        }
        .cAKAyJ {
            font-size: 45px;
            line-height: 126.1%;
            text-align: center;
            letter-spacing: 0.02em;
            font-family: Montserrat, sans-serif;
            font-weight: 700;
            display: flex;
            flex-direction: row-reverse;
        }
        #price. {
            font-size: 45px;
            line-height: 1;
            text-align: center;
            letter-spacing: 0;
            font-weight: 700;

        }
        .gZSibe {
            font-size: 45px;
            line-height: 1;
            text-align: center;
            letter-spacing: 0;
            font-weight: 700;
        }
        .title-slider {
            font-size: 26px;
            max-width: 596px;
            text-align: center;
            margin: 0px auto 67px;
            font-weight: 700;
            color: rgb(0, 0, 0);
            letter-spacing: 0.02em;
            line-height: 117.1%;
        }
        .cgtxOn {
            padding: 0px 50px;
        }
        .rc-slider-rail {
            position: absolute;
            top: 0px;
            width: 100%;
            background-color: rgb(246, 246, 246);
            height: 16px;
            border-radius: 40px;
            box-shadow: rgb(240, 240, 240) 0px 1px 1px inset, rgb(187, 187, 187) 0px 3px 6px -5px;
        }
        .rc-slider-track {
            background: rgb(224, 224, 224);
        }
        #custom-handle {
            border-color: #1b2d54;
            background: #1b2d54;
            color: #fff;
            text-align: center;
            margin-top: -7px;
            font-size: 17px;
            padding-top: 9px;
            font-size: 15px;
            color: rgb(255, 255, 255);
            background: #1b2d54;
            width: 106px;
            height: 42px;
            letter-spacing: 0.02em;
            border: transparent;
            box-shadow: rgba(0, 0, 0, 0.17) 0px 2px 9px;

        }
        .ftCLZn {
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            width: 281px;
            height: 109px;
            position: absolute;
            bottom: -54px;
            cursor: pointer;
            transition: all 0.15s ease 0s;
            background: #ffdd00;
            color: rgb(27, 45, 84);
        }
        @media (max-width: 640px){
            body {
                font-size: 8px;
            }
            .wrapper {
                background-position: 28%;
                background-size: cover;
                background-repeat: no-repeat;
                min-height: 290px;
            }
            .title-box .img-logo {
                max-width: 8em;
            }
            h1 {
                font-size: 3.5em;
                font-weight: bold;
                padding: 0 1.5em;
            }
            .title-box .name-logo {
                max-width: 22em;
            }
            .title-box p {
                font-size: 2.5em;
                padding: 0 1.5em;
                padding-bottom: 3em;
            }
            #form-box {
                position: relative;
                right: 0;
                max-width: 44em;
                left: 0;
                margin: -8.5em auto;
            }
            p.text-form {
                padding-bottom: 2em;
                font-size: 1.8em;
            }
            .footer-form {
                padding: 3em 0;
            }
            .top-form {
                font-size: 2.5em;
            }
            .blue-box {
                padding-top: 12em;
            }
            .blue-box p{
                font-size: 3em;
                line-height: 1.2;
            }
            .blue-box img {
                position: relative;
                left: -3em;
            }
            .d-sm-none {
                display:none;
            }
            .padding-img {
                padding-top: 0;
            }
            h2 {
                font-size: 5em;
            }
            .text-box p {
                font-size: 2.5em;
            }
            .btn-red {
                font-size: 2.5em;
            }
            .graph-box h2 {
                font-size: 3.5em;
            }
            .graph-box p {
                font-size: 2.5em;
            }
            .icon-box p {
                font-size: 2.5em;
                padding: 0 0.5em;
            }
            .btn-red {
                max-width: 17em;
            }
            footer {
                font-size: 1.6em;
            }
            section.policy {
                font-size: 1.5em;
            }
        }
    </style>

</head>
<body>

<section class="policy">
    <div class="wrapper">
        <div class="container">
            <h3>Privacy Policy</h3>
            <p>At Community Base Studio, accessible from <?=$domain?>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Community Base Studio and how we use it.</p>
            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Community Base Studio. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the Privacy Policy Generator.</p>
            <h3>Consent</h3>
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
            <h3>Information we collect</h3>
            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

            <h3>How we use your information</h3>
            <p>We use the information we collect in various ways, including to:</p>
            <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve, personalize, and expand our website</li>
                <li>Understand and analyze how you use our website</li>
                <li>Develop new products, services, features, and functionality</li>
                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                <li>Send you emails</li>
                <li>Find and prevent fraud</li>

            </ul>
            <h3>Log Files</h3>
            <p>Community Base Studio follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users’ movement on the website, and gathering demographic information.</p>
        <h3>Cookies and Web Beacons</h3>
        <p>Like any other website, Community Base Studio uses ‘cookies’. These cookies are used to store information including visitors’ preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users’ experience by customizing our web page content based on visitors’ browser type and/or other information.</p>

        <p>For more general information on cookies, please read the Cookies Policy article.</p>
        <h3>Google DoubleClick DART Cookie</h3>
        <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – https://policies.google.com/technologies/ads</p>
        <h3>Our Advertising Partners</h3>
         <p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

          <a href="https://policies.google.com/technologies/ads" target="_blank">  Google policies https://policies.google.com/technologies/ads</a>


            <h3>Advertising Partners Privacy Policies</h3>
            <p>You may consult this list to find the Privacy Policy for each of the advertising partners of Community Base Studio.</p>
            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Community Base Studio, which are sent directly to users’ browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
            <p>Note that Community Base Studio has no access to or control over these cookies that are used by third-party advertisers.</p>
            <h3>Third Party Privacy Policies</h3>
            <p>Community Base Studio’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>

            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers’ respective websites.</p>
            <h3>CCPA Privacy Rights (Do Not Sell My Personal Information)</h3>
            <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <p>Request that a business that collects a consumer’s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
            <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
            <p>Request that a business that sells a consumer’s personal data, not sell the consumer’s personal data.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h3>GDPR Data Protection Rights</h3>
            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
            <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
            <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
            <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
            <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
            <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
            <h3>Children’s Information</h3>
            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
            <p>Community Base Studio does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
        </div>
    </div>
</section>


</body>
</html>