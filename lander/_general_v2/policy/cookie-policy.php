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
        <h3>Cookie Policy</h3>
          <p>This is the Cookie Policy for Community Base Studio, accessible from <?=$domain?></p>
          <h5>What Are Cookies</h5>
          <p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or ‘break’ certain elements of the sites functionality.</p>
          <h5>How We Use Cookies</h5>
          <p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
          <h5>Disabling Cookies</h5>
          <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies. This Cookies Policy was created with the help of the Cookies Policy Generator.</p>
          <h5>The Cookies We Set</h5>
          <ul>
              <li>Site preferences cookiesIn order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.</li>

          </ul>
        <h5>Third Party Cookies</h5>
          <p>In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>
          <ul>
              <li>We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; {List the social networks whose features you have integrated with your site?:12}, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.</li>

          </ul>
          <h5>More Information</h5>
          <p>Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren’t sure whether you need or not it’s usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>

          <p>For more general information on cookies, please read the Cookies Policy article.</p>

      </div>
    </div>
</section>


</body>
</html>