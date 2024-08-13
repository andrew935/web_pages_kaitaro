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
          <h3>Terms and Conditions</h3>
          <p>These terms and conditions (“Agreement”) sets forth the general terms and conditions of your use of the Community Base Studio website (“Website” or “Service”) and any of its related products and services (collectively, “Services”). This Agreement is legally binding between you (“User”, “you” or “your”) and this Website operator (“Operator”, “we”, “us” or “our”). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms “User”, “you” or “your” shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Website and Services. You acknowledge that this Agreement is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.</p>
          <h3>ACCOUNTS AND MEMBERSHIP</h3>
          <p>You must be at least 18 years of age to use the Website and Services. By using the Website and Services and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account on the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and start using the Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>
          <h3>LINKS TO OTHER RESOURCES</h3>
          <p>Although the Website and Services may link to other resources (such as websites, mobile applications, etc.), we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked resource, unless specifically stated herein. Some of the links on the Website may be “affiliate links”. This means if you click on the link and purchase an item, the Operator will receive an affiliate commission. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their resources. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any resource which you access through a link on the Website and Services. Your linking to any other off-site resources is at your own risk.</p>
          <p>PROHIBITED USES</p>
          <p>In addition to other terms as set forth in the Agreement, you are prohibited from using the Website and Services or Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Website and Services, third party products and services, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Website and Services, third party products and services, or the Internet. We reserve the right to terminate your use of the Website and Services for violating any of the prohibited uses.</p>
          <h3>INTELLECTUAL PROPERTY RIGHTS</h3>
          <p>“Intellectual Property Rights” means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by the Operator or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with the Operator. All trademarks, service marks, graphics and logos used in connection with the Website and Services, are trademarks or registered trademarks of the Operator or its licensors. Other trademarks, service marks, graphics and logos used in connection with the Website and Services may be the trademarks of other third parties. Your use of the Website and Services grants you no right or license to reproduce or otherwise use any of the Operator or third party trademarks.</p>
          <h3>LIMITATION OF LIABILITY</h3>
          <p>To the fullest extent permitted by applicable law, in no event will the Operator, its affiliates, directors, officers, employees, agents, suppliers or licensors be liable to any person for any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use of content, impact on business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort, warranty, breach of statutory duty, negligence or otherwise, even if the liable party has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum extent permitted by applicable law, the aggregate liability of the Operator and its affiliates, officers, employees, agents, suppliers and licensors relating to the services will be limited to an amount greater of one dollar or any amounts actually paid in cash by you to the Operator for the prior one month period prior to the first event or occurrence giving rise to such liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.</p>
          <h3>INDEMNIFICATION</h3>
          <p>You agree to indemnify and hold the Operator and its affiliates, directors, officers, employees, agents, suppliers and licensors harmless from and against any liabilities, losses, damages or costs, including reasonable attorneys’ fees, incurred in connection with or arising from any third party allegations, claims, actions, disputes, or demands asserted against any of them as a result of or relating to your Content, your use of the Website and Services or any willful misconduct on your part.</p>
          <h3>SEVERABILITY</h3>
          <p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>
          <h3>DISPUTE RESOLUTION</h3>
          <p>The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Singapore without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of Singapore. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the courts located in Singapore, and you hereby submit to the personal jurisdiction of such courts. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</p>
          <h3>CHANGES AND AMENDMENTS</h3>
          <p>We reserve the right to modify this Agreement or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do, we will revise the updated date at the bottom of this page. Continued use of the Website and Services after any such changes shall constitute your consent to such changes.</p>
          <h3>ACCEPTANCE OF THESE TERMS</h3>
          <p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to access or use the Website and Services.</p>
          <h3>CONTACTING US</h3>
          <p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to info@<?=$domain?></p>


      </div>
    </div>
</section>


</body>
</html>