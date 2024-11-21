<?php
$lang = 'en' ;// page language 
$keyword = $_GET['keyword'] ?? 'Immediate 8X Intal';
$title = "HDFC Bank sues Venu Srinivasan for what he said live on television";

$platform = 'kataro';
switch ($platform) {
    case 'n2':
        require_once dirname(__DIR__) . '/../../_assets/preLanderSettings.php';
        $url = "{{offerlink}}";
        break;
    case 'kataro':
        require_once dirname(__FILE__) . '/../_general_v2/preLanderSettings.php';
        $url = "{offerl}";
        break;
}

$settings = new Settings();
$settings->before_html();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$keyword?></title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
  <link rel="stylesheet" href="assets/styles.css" media="screen">

<?php $settings->in_header()  ?>
</head>

<body>
	 <?php $settings->in_body(); ?>

  <div id="tower_conatainer" class="tower_conatainer" style="display: block;">

    <div id="div_left_tower" class="left_tower" style="display: block;"><ins data-revive-zoneid="757"
        data-revive-source="_blank" data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
        data-zonename="Rediff_ROS_120x600_ATF_INTL_Left_Margin"></ins></div>

    <div id="div_right_tower" class="right_tower" style="display: block;"><ins data-revive-zoneid="759"
        data-revive-source="_blank" data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
        data-zonename="Rediff_ROS_120x600_ATF_INTL_Right_Margin"></ins></div>

  </div><input type="hidden" id="OAS_subsection" name="OAS_subsection" value="business-interview-the">

  <div class="fnt0"><ins data-revive-zoneid="333" data-revive-source="_blank" data-revive-target="_blank"
      data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd" data-zonename="Rediff_ROS_OutstreamVideo_INTL"></ins>

  </div>

  <div id="trans_div"></div>

  <div class="popupcontainer">

    <div id="div_shareframe"></div>

    <div id="div_signup"></div>

    <div id="div_signin"></div>

    <div id="div_confirm"></div>

  </div>

  <div id="bubbletiptop" class="bubbletip">

    <div class="homesprite topl"></div>

    <div class="topmid"></div>

    <div class="homesprite topr"></div>

    <div class="clear"></div>

    <div class="bubblecontent"></div>

    <div class="clear"></div>

    <div class="homesprite botl"></div>

    <div class="botmid"></div>

    <div class="homesprite botr"></div>

    <div class="homesprite botarr1"></div>

  </div>

  <div id="bubbletipbot" class="bubbletip">

    <div class="homesprite toparr1"></div>

    <div class="homesprite topl"></div>

    <div class="topmid"></div>

    <div class="homesprite topr"></div>

    <div class="clear"></div>

    <div class="bubblecontent"></div>

    <div class="clear"></div>

    <div class="homesprite botl"></div>

    <div class="botmid"></div>

    <div class="homesprite botr"></div>

  </div>

  <div class="topfixedrow">

    <div class="toplogotable">

      <div class="cell1" style="position: relative;"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/blank.gif" class="n_redifflogo" alt="Rediff.com"></a></div>

      <div class="cell2">

        <div class="n_tabsul">

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">News</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabsel">Business</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Movies</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Sports</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Cricket</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Get Ahead</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Money Tips</div>

          </a>

          <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

            <div class="n_tabnormal">Shopping</div>

          </a>

        </div>

      </div>

      <div class="cell3">





        <div class="floatR relative" style="margin:10px 0 0 0;">

          <form name="newsrchform">

            <div class="div_n_srchbox"><input type="text" id="srchquery_tbox" name="srchquery_tbox" class="n_srchbox"
                autocomplete="off" placeholder="Search news" aria-label="Search news">

            </div>

            <div class="btndiv"><input type="submit" value=" " class="n_srchbtn" title="Search" aria-label="Submit">
            </div>

            <span class="clear"></span>

          </form>

        </div>

        <div id="newsAppPop" class="newsapppop" style="z-index:1005;">


          <div><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

              <div class="appthumb">News APP</div>

            </a>

            <div class="apppromoright">

              <p class="f18 bold">NewsApp <span class="freeaap">(Free)</span></p>Read news as it

              happens<br>

              <p class="grey1">Available on &nbsp;</p>

            </div><span class="clear"></span>

          </div>

        </div><i class="clear ht15"></i>

      </div>

    </div>

    <i class="clear"></i>

  </div>

  <!-- wrapper starts -->

  <div id="wrapper">

    <i class="topgap"></i>

    <div id="div_samsung"></div>

    <div id="div_transitionAD">

    </div>

    <i class="clear ht10"></i>

    <i class="clear ht5"></i>

    <div class="toprightlinks"><!-- Begin comScore Tag -->

      <span id="username"></span>

      <span id="signin_info"> <a href="<?=$url?>" title="Already a user? Sign in" target="_blank" class="offer_url offerlink">Sign in</a> &nbsp;|&nbsp; <a
          href="<?=$url?>" target="_blank" class="offer_url offerlink">Create a Rediffmail

          account</a></span>

    </div><i class="clear ht10"></i>

    <!-- leftcontainer starts -->

    <div id="leftcontainer" class="red_leftcontainer">

      <div>

        <div class="grey1 sm1" itemprop="breadcrumb"><a href="<?=$url?>" class="orange offer_url offerlink" target="_blank">Home</a>&nbsp; »&nbsp;<a href="<?=$url?>" class="orange offer_url offerlink" target="_blank">Business</a>
            »&nbsp; <?=$title?>

        </div>

      </div>

      <h1 itemprop="headline" class="arti_heading">
          <?=$title?>

      </h1>

      <span class="clear"></span>

      <span class="byspan">

        By <a href="<?=$url?>" class="blue offer_url offerlink" target="_blank">SUCHETA

          DALAL, DEBASHIS BASU</a>

      </span>

      <div class="floatR sm1 grey1">Last updated on: <!-- --> <!-- -->

        <script language="javascript">

          var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday",

            "Thursday", "Friday", "Saturday");


          // Array of month Names

          var monthNames = new Array(

            "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",

            "Aug", "Sep", "Oct", "Nov", "Dec");


          var now = new Date();

          var dayOfTheWeek = now.getDay();

          now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);


          document.write(monthNames[(now.getMonth())] + " " + now.getDate() + ", " + now.getFullYear()) // returns new calculated date

        </script>

        <script>// Get the current date and time

          const currentDate = new Date();



          // Calculate the time 2 hours and 41 minutes ago

          const agoDate = new Date(currentDate);

          agoDate.setHours(currentDate.getHours() - 2);

          agoDate.setMinutes(currentDate.getMinutes() - 41);



          // Format the result as "HH:mm"

          const formattedAgo = `${String(agoDate.getHours()).padStart(2, '0')}:${String(agoDate.getMinutes()).padStart(2, '0')}`;



          // Display the result

          document.write(formattedAgo)

        </script> IST  

        <a target="_blank" href="<?=$url?>" title="Share by Email" class="offer_url offerlink"><img class="socialIcons" src="assets/shareiconsprite.png"></a>

      </div>

      <i class="ht10 clear"></i>


      <i class="clear"></i>

      <div id="arti_content_n" class="arti_contentbig" itemprop="articleBody">

        <a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img fetchpriority="high" src="<?= file_get_contents('./img_1.txt')?>" class="" style="width: 100%;"></a>

        <p style="font-size: 12px;">Venu Srinivasan comes out with new secret investment that's making hundreds

          of people in India very rich<br><br></p>




          <!--/// //-->
            <?php include "./main_text.php"?>
              <center><a href="<?=$url?>" target="_blank" class="offer_url offerlink" style="background-color: #296068; color: white; display: block; margin: 0 auto; max-width: 80%; text-align: center; text-decoration: none; text-transform: uppercase; margin-bottom: 1rem; padding: .6rem 0;">VISIT

                  THE OFFICIAL WEBSITE</a></center>

              <p
                style="text-align: center; display: block; max-width: 60%; margin: 0 auto; color: #000; font-size: 1rem; box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.25);; padding: 1rem;">

                Only <span style="color: red">126</span> spots left

              </p>

            </em></em>
        </em>
      </div><em><em><em>


            <i class="clear ht10"></i>

            <div id="span_subscibe">

              <div id="div_subscribe_in" class="div_keepupadte" style="display: block;">

                <form name="frm_subscription_in" method="POST" id="frm_subscription_in">

                  <span class="f17 bold"><span class="f17 red">Get Rediff News</span> in your Inbox: </span><label
                    class="hlabel" for="sub_email_in">email</label><input type="text" onblur="showDefValue(this);"
                    onfocus="showDefValue(this);" autocomplete="off" id="sub_email_in" name="sub_email_in"
                    value="Email Address" class="sub_email_in"><input type="button" value="Keep Me Updated"
                    id="subscribe_btn_in" class="subscribe_btn_in"><i id="subwait" class="subwait"></i>

                </form>

                <div id="div_subscrip_message_in" class="hide"></div>

              </div>

            </div>

            <i class="ht5 clear"></i><span class="grey1"><a href="<?=$url?>" class="blue offer_url offerlink" target="_blank">SUCHETA

                DALAL, DEBASHIS BASU</a> </span><i class="clear ht10"></i>

            <span class="clear ht15"></span>

            <div class="floatL">&nbsp;</div>

            <div class="floatR"><a href="<?=$url?>" target="_blank" class="black offer_url offerlink" rel="noreferrer"><u>Print this article</u></a>
            </div>

            <span class="clear ht20"></span>



            <div id="world_bottom1"><ins data-revive-zoneid="256" data-revive-source="_blank"
                data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
                data-zonename="Rediff_ROS_Native_Widget_BTF_INTL"></ins></div>

            <span class="clear ht10"></span>

            <div id="rediff_reco_article_1"></div>

            <span class="clear ht10"></span>

            <span class="clear ht10"></span>

            <div id="div_ad_bottom3"><ins data-revive-zoneid="259" data-revive-source="_blank"
                data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
                data-zonename="Rediff_ROS_Native_Widget_BTF2_INTL"></ins></div><i class="clear ht20"></i>

            <i class="ht30"></i>

          </em></em></em>
    </div><!-- leftcontainer ends --><em><em><em>

          <!-- rightcontainer starts -->

          <div id="rightcontainer" class="red_rightcontainer">

            <i class="ht5"></i>

            <div>

              <i class="ht10"></i>

              <div id="world_right2"><ins data-revive-zoneid="265" data-revive-source="_blank"
                  data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
                  data-zonename="Rediff_ROS_300x250_BTF_INTL"></ins></div><i class="clear ht15"></i><i
                class="clear sepline"></i><i class="clear ht15"></i>

              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/10tata1.jpg" width="335"
                      alt="What Ratan Tata Told Harvard: Must Read" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="What Ratan Tata Told Harvard: Must Read" class="alsoreadcopy offer_url offerlink"
                    target="_blank">What Ratan Tata Told

                    Harvard: Must Read</a></div>

              </div>



              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/28tata-jrd1(1).jpg"
                      width="335" alt="'I may have gone back to the US'" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="'I may have gone back to the US'" class="alsoreadcopy offer_url offerlink" target="_blank">'I may
                    have gone back

                    to the US'</a></div>

              </div>



              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/28tata-jrd3.jpg" width="335"
                      alt="Exclusive! Zubin Mehta on Ratan Tata" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="Exclusive! Zubin Mehta on Ratan Tata" class="alsoreadcopy offer_url offerlink"
                    target="_blank">Exclusive! Zubin Mehta on

                    Ratan Tata</a></div>

              </div>



              <i class="clear ht10"></i>

              <div id="div_AD_box10" class="div_ad_box10"><ins data-revive-zoneid="271" data-revive-source="_blank"
                  data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
                  data-zonename="Rediff_ROS_300x250_BTF2_INTL"></ins></div>

              <i class="clear ht20"></i>

              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/14fmcg.jpg" width="335"
                      alt="RBI's inflation caution may halt FMCG rally" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="RBI's inflation caution may halt FMCG rally" class="alsoreadcopy offer_url offerlink"
                    target="_blank">RBI's inflation

                    caution may halt FMCG rally</a></div>

              </div>



              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/11arjun-lead1.jpg" width="335"
                      alt="Arjun Mathur, Tiya Tejpal Wed" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="Arjun Mathur, Tiya Tejpal Wed" class="alsoreadcopy offer_url offerlink" target="_blank">Arjun
                    Mathur, Tiya Tejpal Wed</a>

                </div>

              </div>



              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/11cameron-green.jpg"
                      width="335" alt="Green faces tough choice: Surgery or India series" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="Green faces tough choice: Surgery or India series" class="alsoreadcopy offer_url offerlink"
                    target="_blank">Green faces

                    tough choice: Surgery or India series</a></div>

              </div>



              <div class="alsoreaddiv">

                <div class="alsoreadthumb_n"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/11movie-lead2.jpg" width="335"
                      alt="Raat Jawaan Hai Review" loading="lazy"></a></div>

                <div><a href="<?=$url?>" title="Raat Jawaan Hai Review" class="alsoreadcopy offer_url offerlink" target="_blank">Raat Jawaan Hai
                    Review</a></div>

              </div>



              <i class="clear ht10"></i>

              <div id="div_AD_box09" class="div_ad_box09"><ins data-revive-zoneid="268" data-revive-source="_blank"
                  data-revive-target="_blank" data-revive-id="4b71f4079fb345c8ac958d0e9f0b56dd"
                  data-zonename="Rediff_ROS_300x250_BTF3_INTL"></ins></div>

              <i class="clear ht10"></i>

              <p class="f14"><b>Moneywiz Live!</b></p><i class="ht5"></i>

              <div class="storytext"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/scr.png" alt=""></a></div>

              <i class="clear"></i>

              <span class="ht10"></span>

              <div id="div_localads"></div>

              <span class="ht10"></span>

            </div>

          </div>

          <!-- rightcontainer ends -->

          <span class="clear ht20"></span>

          <div id="boardiframe"></div>

          <i class="clear"></i>

          <div id="div_morelike_in_container" class="hide">

            <div class="div_morelike_in">

              <h4 class="alignL orange">More like this</h4>

              <div class="table1">

                <div class="cell">

                    <h5><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/28tata-jrd1.jpg" alt="Working with Ratan Tata"
                          loading="lazy"></a>

                    </h5>

                  <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

                    <h3>Working with Ratan Tata</h3>

                  </a><i class="clear"></i></div>

                <div class="gapcell"></div>

                <div class="cell">

                    <h5><a href="<?=$url?>" target="_blank" class="offer_url offerlink" ><img src="assets/15tata6.jpg"
                          alt="Exclusive: The Ratan Tata Few Know" loading="lazy"></a></h5>

                  <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >

                    <h3>Exclusive: The Ratan Tata Few Know</h3>

                  </a><i class="clear"></i></div>

              </div>

            </div>

          </div>

          <div id="footerLinks"><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Rediffmail

                for Work</a></span><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Book

                a domain</a></span><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Rediffmail</a></span><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink">Money</a></span><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Online

                Shopping</a></span><span><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Videos</a></span></div>

          <div class="alignC">

            <div class="footer">

              <p class="grey1"><a href="<?=$url?>" target="_blank" class="offer_url offerlink" >India Business News</a>&nbsp; | &nbsp;<a href="<?=$url?>"
                  target="_blank" class="offer_url offerlink">Indian Stock Market News</a>&nbsp; | &nbsp;<a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Bollywood
                  Movies</a>&nbsp; | &nbsp;<a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Indian Cricket News</a>&nbsp; | &nbsp;<a href="<?=$url?>" target="_blank" class="offer_url offerlink">India News</a></p>

              <span class="ht5"></span>

              © <script>document.write(new Date().getFullYear())</script>  Rediff.com<span class="grey1"> - <a href="<?=$url?>"
                  target="_blank" class="offer_url offerlink">Investors</a> - <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Advertise</a> - <a href="<?=$url?>"
                  target="_blank" class="offer_url offerlink">Disclaimer</a> - <a href="<?=$settings->policy()?>" target="_blank" class="offer_url offerlink" >Privacy</a> - <a href="<?=$url?>"
                  target="_blank" class="offer_url offerlink">Feedback</a> - <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >About us</a>&nbsp;|&nbsp;<a href="<?=$settings->terms()?>"
                  target="_blank" class="offer_url offerlink">Terms of use</a> - <a href="<?=$url?>" target="_blank" class="offer_url offerlink" >Grievances</a></span>

            </div>

          </div>

          <div id="floater_ad_container" class="ad_bottom1 alignC">

            <div id="div_ad_Bottom1"></div>

          </div>

          <div id="up_scroll_arrow" class="up_scroll_arrow" title="Go to Top" style="display: none;">▲</div>

        </em></em></em>
  </div>
<?php $settings->in_footer(); ?>


</body>

</html>