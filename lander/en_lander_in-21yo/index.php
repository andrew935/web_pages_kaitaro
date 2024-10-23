<?php
   $lang = 'en' ;// page language 
   $keyword = $_GET['keyword'] ?? 'Bitcoin Bank';
   require_once dirname(__FILE__).'/../_general_v2/preLanderSettings.php';
   //require_once dirname(__DIR__).'/../../_assets/preLanderSettings.php';
   $settings = new Settings();
   $settings->before_html();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Bitcoin Bank</title>
      <link rel="icon" href="assets/favicon.png?1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no; max-scale=1.0">
      <link href="assets/style.css?v1=v2" rel="stylesheet" type="text/css">
      <?php $settings->in_header()?>
   </head>
   <body>
      <?php $settings->in_body();?>
      <div id="root">
         <div class="App-containerClick">
            <div class="makeitBrand" id="BrandPageWrapper">
               <div>
                  <header class="MakeItGlobalNav-styles-makeit-container--tVhxO"
                     data-analytics="MakeItRegularArticle-MakeItGlobalNavigation" data-test="MakeItGlobalNavigation"
                     id="MakeItGlobalNavigation">
                     <div class="MakeItGlobalNav-styles-makeit-globalNavigation--3H4Wt">
                        <div class="MakeItGlobalNav-styles-makeit-gridContainer--1d6TD">
                           <div class="MakeItGlobalNav-styles-makeit-wrapper--1I98s">
                              <div class="MakeItGlobalNav-styles-makeit-hamburgerNav--3d44z">
                                 <a class="MakeItGlobalNav-styles-makeit-logo--5XxAv offer_url offerlink"
                                    href="{{offerlink}}">
                                 <img alt="logo" id="lang-logo" src="assets/logo_en.png"
                                    style="width: 157px;">
                                 </a>
                              </div>
                              <div class="nav-menu-styles-makeit-navMenu--2Cibz" id="nav-menu">
                                 <button aria-label="Open Navigation Menu"
                                    class="nav-menu-styles-makeit-desktopHamburger--1y-hA">
                                 <span class="icon-menu"></span>
                                 </button>
                                 <div class="nav-menu-styles-makeit-mainLinks--378W4">
                                    <div class="nav-menu-styles-makeit-mainLinksWrapper--2FWw_">
                                       <div class="nav-menu-styles-makeit-navLinks--3Niw-">
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg success">
                                             <a class="nav-menu-styles-makeit-button--2q4zV offer_url offerlink"
                                                href="{{offerlink}}">
                                             <span class="icon-success"></span>
                                             <span class="nav-menu-styles-makeit-buttonText--3ds-t"><span
                                                class="lang-en">Success</span></span>
                                             </a>
                                             <ul class="nav-menu-styles-makeit-subLinks--2fGsh"
                                                id="nav-menu-dropdownMenu">
                                                <li data-text="Start-ups">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Start-ups</a>
                                                </li>
                                                <li data-text="Side Hustles">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Side Hustles</a>
                                                </li>
                                                <li data-text="Power Players">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Power Players</a>
                                                </li>
                                                <li data-text="Young Success">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Young Success</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg money">
                                             <a class="nav-menu-styles-makeit-button--2q4zV offer_url offerlink"
                                                href="{{offerlink}}">
                                             <span class="icon-money"></span>
                                             <span class="nav-menu-styles-makeit-buttonText--3ds-t"><span
                                                class="lang-en">Money</span></span>
                                             </a>
                                             <ul class="nav-menu-styles-makeit-subLinks--2fGsh"
                                                id="nav-menu-dropdownMenu">
                                                <li data-text="Earn">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Earn</a>
                                                </li>
                                                <li data-text="Spend">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Spend</a>
                                                </li>
                                                <li data-text="Save and Invest">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Save and Invest</a>
                                                </li>
                                                <li data-text="Become Debt-Free">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Become Debt-Free</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg work">
                                             <a class="nav-menu-styles-makeit-button--2q4zV offer_url offerlink"
                                                href="{{offerlink}}">
                                             <span class="icon-work"></span>
                                             <span class="nav-menu-styles-makeit-buttonText--3ds-t"><span
                                                class="lang-en">Work</span></span>
                                             </a>
                                             <ul class="nav-menu-styles-makeit-subLinks--2fGsh"
                                                id="nav-menu-dropdownMenu">
                                                <li data-text="Land the Job">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Land the Job</a>
                                                </li>
                                                <li data-text="Get Ahead">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Get Ahead</a>
                                                </li>
                                                <li data-text="Closing The Gap">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Closing The Gap</a>
                                                </li>
                                                <li data-text="Science of Success">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Science of Success</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg life">
                                             <a class="nav-menu-styles-makeit-button--2q4zV offer_url offerlink"
                                                href="{{offerlink}}">
                                             <span class="icon-life"></span>
                                             <span class="nav-menu-styles-makeit-buttonText--3ds-t"><span
                                                class="lang-en">Life</span></span>
                                             </a>
                                             <ul class="nav-menu-styles-makeit-subLinks--2fGsh"
                                                id="nav-menu-dropdownMenu">
                                                <li data-text="Food, Travel and Tech">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Food, Travel and Tech</a>
                                                </li>
                                                <li data-text="Books and Culture">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Books and Culture</a>
                                                </li>
                                                <li data-text="Health and Wellness">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Health and Wellness</a>
                                                </li>
                                                <li data-text="Live the Dream">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Live the Dream</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg video">
                                             <a class="nav-menu-styles-makeit-button--2q4zV offer_url offerlink"
                                                href="{{offerlink}}">
                                             <span class="icon-video"></span>
                                             <span class="nav-menu-styles-makeit-buttonText--3ds-t"><span
                                                class="lang-en">Video</span></span>
                                             </a>
                                             <ul class="nav-menu-styles-makeit-subLinks--2fGsh"
                                                id="nav-menu-dropdownMenu">
                                                <li data-text="Most Popular">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">Most Popular</a>
                                                </li>
                                                <li data-text="CNBC TV">
                                                   <a class="nav-menu-styles-makeit-subLink--1yYsU offer_url offerlink"
                                                      href="{{offerlink}}"
                                                      tabindex="-1">CNBC TV</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div aria-hidden="true"
                                             class="nav-menu-styles-makeit-navUnderline--1YSPR"></div>
                                          <div aria-hidden="true"
                                             class="nav-menu-styles-makeit-navDropdownWrap--2_sF5"></div>
                                          <div class="nav-menu-styles-makeit-primaryLink--6v8bg hamburger">
                                             <button aria-label="Open Navigation Menu"
                                                class="nav-menu-styles-makeit-hamburger--1PqLT nav-menu-styles-makeit-button--2q4zV">
                                             <span class="icon-menu"></span>
                                             <span
                                                class="nav-menu-styles-makeit-buttonText--3ds-t">Menu</span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="nav-menu-styles-makeit-progressBarContainer--1GJev"></div>
                              </div>
                           </div>
                        </div>
                        <div class="MakeItGlobalNav-styles-makeit-rightSection--WAnA9">
                           <button aria-label="Search"
                              class="SearchToggle-styles-makeit-button--5tFlN SearchToggle-styles-makeit-makeit--iEtxd searchToggler analyticsSearchButton">
                           <span class="lang-en">SEARCH</span>
                           <i aria-hidden="true" class="icon-search icon-makeit-search"
                              data-analytics="makeit-search-icon" data-analytics-id="makeit-search-icon"></i>
                           </button>
                        </div>
                     </div>
                     <div class="MakeItGlobalNav-styles-makeit-hidden--Woe6J MakeItGlobalNav-styles-makeit-smallContainer--36C8o"
                        id="MakeIt-hidden"></div>
                  </header>
               </div>
               <div class="BrandPageWrapper-styles-makeit-contentWrapperMakeit--1zkyA BrandPageWrapper-styles-makeit-contentWrapper--3JhVV BrandPageWrapper-styles-makeit-contentWrapper--3JhVV"
                  id="MainContentContainer" role="main">
                  <p id="MainContent" tabindex="-1"></p>
                  <div>
                     <div class="MakeIt Regular Article PageBuilder-styles-makeit-page--EEP2X">
                        <div class="PageBuilder-styles-makeit-pageWrapper--1tgx0">
                           <div
                              class="PageBuilder-styles-makeit-containerWidth100--3ZUfU PageBuilder-styles-makeit-pageRow--2oHw5">
                              <div
                                 class="PageBuilder-styles-makeit-col-full--3MSa3 PageBuilder-styles-makeit-col--1vq1j PageBuilder-styles-makeit-article--1sqIm">
                                 <section
                                    class="FeaturedStories-styles-makeit-collapsibleContainer--2RXUl FeaturedStories-styles-makeit-container--3YRSC"
                                    data-analytics="MakeItRegularArticle-featuredStories-1-0"
                                    data-test="featuredStories-0" id="MakeItRegularArticle-FeaturedStories-1"
                                    role="banner">
                                    <div aria-hidden="true"
                                       class="FeaturedStories-styles-makeit-background--2ASvS"></div>
                                    <div class="FeaturedStories-styles-makeit-cardsWrapper--QQG25">
                                       <div style="position:relative">
                                          <div class="FeaturedStories-styles-makeit-cardsContainer--2T5q8"
                                             style="transform:translateX(-0%)">
                                             <div
                                                class="FeaturedStoryCard-styles-makeit-collapsedContainer--383YA FeaturedStoryCard-styles-makeit-collapsibleContainer--1LJxW FeaturedStoryCard-styles-makeit-container--2qyND c0">
                                                <span
                                                   class="FeaturedStoryCard-styles-makeit-divider--3siZK"></span>
                                                <a alt="This 29-year-old USPS mail carrier is on track to make over $90,000 this year"
                                                   class="FeaturedStoryCard-styles-makeit-mediaContainer--2VM7b offer_url offerlink"
                                                   href="{{offerlink}}"
                                                   tabindex="-1">
                                                   <div class="lazyload-placeholder" style="height:100%">
                                                   </div>
                                                </a>
                                                <div class="FeaturedStoryCard-styles-makeit-content--W6f7f">
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-eyebrow--ainav">
                                                   <a
                                                      href="{{offerlink}}" class="offer_url offerlink">Millennial
                                                   Money</a>
                                                   </span>
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-titleContainer--3wi2F FeaturedStoryCard-styles-makeit-titleVideoContainer--1b-Uq">
                                                   <a class="FeaturedStoryCard-styles-makeit-title--1XSUw offer_url offerlink"
                                                      href="{{offerlink}}">
                                                   <span><span class="lang-en">This 29-year-old
                                                   USPS mail carrier is on track to make
                                                   over ₹2,000,000 this year
                                                   </span></span>
                                                   </a>
                                                   </span>
                                                   <div
                                                      class="FeaturedStoryCard-styles-makeit-footer--34Osm">
                                                      <a class="offer_url offerlink FeaturedStoryCard-styles-makeit-byline--qYO2w FeaturedStoryCard-styles-makeit-meta--1kz-e"
                                                         href="{{offerlink}}">
                                                      <span>Taylor Locke</span>
                                                      <span
                                                         class="FeaturedStoryCard-styles-makeit-bylineAccent---8H7t"></span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div
                                                class="FeaturedStoryCard-styles-makeit-collapsedContainer--383YA FeaturedStoryCard-styles-makeit-collapsibleContainer--1LJxW FeaturedStoryCard-styles-makeit-container--2qyND c1">
                                                <span
                                                   class="FeaturedStoryCard-styles-makeit-divider--3siZK"></span>
                                                <a alt="From $70,000 to $120,000: Here’s how much 3 software engineers earn around the New Zealand"
                                                   class="offer_url offerlink FeaturedStoryCard-styles-makeit-mediaContainer--2VM7b"
                                                   href="{{offerlink}}"
                                                   tabindex="-1">
                                                   <div class="lazyload-placeholder" style="height:100%">
                                                   </div>
                                                </a>
                                                <div class="FeaturedStoryCard-styles-makeit-content--W6f7f">
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-eyebrow--ainav">
                                                   <a
                                                      href="{{offerlink}}" class="offer_url offerlink">Paycheck
                                                   to Paycheck</a>
                                                   </span>
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-titleContainer--3wi2F FeaturedStoryCard-styles-makeit-titleVideoContainer--1b-Uq">
                                                   <a class="offer_url offerlink FeaturedStoryCard-styles-makeit-title--1XSUw"
                                                      href="{{offerlink}}">
                                                   <span><span class="lang-en">From ₹2,500,000 to
                                                   ₹3,500,000: How much 3 software
                                                   engineers earn around India
                                                   </span>
                                                   </span>
                                                   </a>
                                                   </span>
                                                   <div
                                                      class="FeaturedStoryCard-styles-makeit-footer--34Osm">
                                                      <a class="offer_url offerlink FeaturedStoryCard-styles-makeit-byline--qYO2w FeaturedStoryCard-styles-makeit-meta--1kz-e"
                                                         href="{{offerlink}}">
                                                      <span>Jennifer Liu</span>
                                                      <span
                                                         class="FeaturedStoryCard-styles-makeit-bylineAccent---8H7t"></span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div
                                                class="FeaturedStoryCard-styles-makeit-collapsedContainer--383YA FeaturedStoryCard-styles-makeit-collapsibleContainer--1LJxW FeaturedStoryCard-styles-makeit-container--2qyND c2">
                                                <span
                                                   class="FeaturedStoryCard-styles-makeit-divider--3siZK"></span>
                                                <a alt="She pays $1,000 per month for a 1-bedroom apartment in Wellington — take a look inside"
                                                   class="offer_url offerlink FeaturedStoryCard-styles-makeit-mediaContainer--2VM7b"
                                                   href="{{offerlink}}"
                                                   tabindex="-1">
                                                   <div class="lazyload-placeholder" style="height:100%">
                                                   </div>
                                                </a>
                                                <div class="FeaturedStoryCard-styles-makeit-content--W6f7f">
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-eyebrow--ainav">
                                                   <a
                                                      href="{{offerlink}}" class="offer_url offerlink">Unlocked</a>
                                                   </span>
                                                   <span
                                                      class="FeaturedStoryCard-styles-makeit-titleContainer--3wi2F FeaturedStoryCard-styles-makeit-titleVideoContainer--1b-Uq">
                                                   <a class="offer_url offerlink FeaturedStoryCard-styles-makeit-title--1XSUw"
                                                      href="{{offerlink}}">
                                                   <span><span class="lang-en">Her 1-bedroom Delhi
                                                   apartment costs ₹80,000 per month—take a
                                                   look inside
                                                   </span>
                                                   </span>
                                                   </a>
                                                   </span>
                                                   <div
                                                      class="FeaturedStoryCard-styles-makeit-footer--34Osm">
                                                      <a class="offer_url offerlink FeaturedStoryCard-styles-makeit-byline--qYO2w FeaturedStoryCard-styles-makeit-meta--1kz-e"
                                                         href="{{offerlink}}">
                                                      <span>Cory Stieg</span>
                                                      <span
                                                         class="FeaturedStoryCard-styles-makeit-bylineAccent---8H7t"></span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                           <div
                              class="PageBuilder-styles-makeit-containerWidth100--3ZUfU PageBuilder-styles-makeit-pageRow--2oHw5">
                              <div
                                 class="PageBuilder-styles-makeit-col-full--3MSa3 PageBuilder-styles-makeit-col--1vq1j PageBuilder-styles-makeit-article--1sqIm">
                                 <div data-analytics="MakeItRegularArticle-articleHeader-3-0"
                                    data-test="articleHeader-0" id="MakeItRegularArticle-ArticleHeader-3">
                                    <header class="ArticleHeader-styles-makeit-articleHeader--2hCOp"
                                       id="main-article-header">
                                       <div class="ArticleHeader-styles-makeit-headerContentContainer--1n1uz">
                                          <div
                                             class="ArticleHeader-styles-makeit-wrapperHeroNoImage--1B27K ArticleHeader-styles-makeit-wrapperHero--3oNRk ArticleHeader-styles-makeit-wrapper--uJ7TO ArticleHeader-styles-makeit-wrapperNoImage--kSnai">
                                             <a class="offer_url offerlink ArticleHeader-styles-makeit-eyebrow--2XyZs"
                                                href="{{offerlink}}"><span
                                                class="lang-en">Young success
                                             </span>
                                             </a>
                                             <div>
                                                <h1 class="ArticleHeader-styles-makeit-headline--1DSjp">
                                                   <span class="lang-en">This 21-year-old waitress became a
                                                   multimillionaire after losing her job
                                                   </span>
                                                </h1>
                                             </div>
                                             <div class="ArticleHeader-styles-makeit-timeHidden--1c0wG">
                                                <time data-testid="published-timestamp"
                                                   datetime="2021-11-08T19:18:07+0000"
                                                   itemprop="datePublished">
                                                   <span class="lang-en">Published
                                                   </span>
                                                   <span class="dtime-1">
                                                      <script type="text/javascript">
                                                         var today = new Date();
                                                         var dd = String(today.getDate()).padStart(2, '0');
                                                         var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                         var yyyy = today.getFullYear();
                                                         
                                                         today = dd + '.' + mm + '.' + yyyy;
                                                         document.write(today);
                                                      </script>
                                                   </span>
                                                </time>
                                             </div>
                                          </div>
                                          <div class="ArticleHeader-styles-makeit-authorAndShare--K2G2z">
                                          </div>
                                       </div>
                                    </header>
                                 </div>
                              </div>
                           </div>
                           <div
                              class="PageBuilder-styles-makeit-containerFluidWidths--3O7SI PageBuilder-styles-makeit-pageRow--2oHw5">
                              <div
                                 class="PageBuilder-styles-makeit-col-9--4VOfc PageBuilder-styles-makeit-col--1vq1j PageBuilder-styles-makeit-article--1sqIm">
                                 <div data-analytics="MakeItRegularArticle-articleInlineMedia-4-0"
                                    data-test="articleInlineMedia-0">
                                    <div class="InlineImage-styles-makeit-imageEmbed--34uz8 InlineImage-styles-makeit-featuredMediaImage--2aQQH"
                                       data-test="InlineImage" id="MakeItRegularArticle-ArticleInlineMedia-4">
                                       <div
                                          class="InlineImage-styles-makeit-wrapper--2zwoR InlineImage-styles-makeit-wrapperFeaturedMedia--YOoyx">
                                          <p><span class="lang-en">Renu Bhatnagar, 21, says she <a
                                             href="{{offerlink}}" class="offer_url offerlink">raised
                                             ₹206,530,000</a> within 2 years from her Bitcoin
                                             investment.
                                             </span>
                                          </p>
                                          <div class="InlineImage-styles-makeit-imagePlaceholder--3rDiU">
                                             <a
                                                href="{{offerlink}}" class="offer_url offerlink">
                                                <div class="lazyload-placeholder"><img alt=""
                                                   src="assets/1.jpg">
                                                </div>
                                             </a>
                                          </div>
                                          <div class="InlineImage-styles-makeit-captionContainer--gGYTS">
                                             <div class="InlineImage-styles-makeit-imageEmbedCredit--1Wqj7">
                                                <span class="lang-en">In 2020, Renu Bhatnagar worked at a
                                                restaurant. Now the 21-year-old ex-waitress <a
                                                   href="{{offerlink}}" class="offer_url offerlink">makes
                                                ₹8,500,000 a month</a> and shares photos of her new
                                                fancy life on social media.
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="ArticleBody-styles-makeit-articleBody--3rfGP"
                                    data-analytics="MakeItRegularArticle-articleBody-5-1"
                                    data-module="ArticleBody" data-test="articleBody-1"
                                    id="MakeItRegularArticle-ArticleBody-5">
                                    <span class="HighlightShare-styles-makeit-hidden--3-0Re"
                                       style="top:0;left:0"></span>
                                    <div class="group">
                                       <p>
                                          <span class="lang-en">“I lost my parents early and lived with my
                                          grandmother. From the age of 15, I worked as a waitress in a
                                          local restaurant,” Renu says. “I knew I wouldn't be able to go
                                          to college after I graduated from high school, so I continued
                                          working full-time to earn money for college.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">But like millions around the world, Renu
                                          suddenly found herself unemployed in 2020.
                                          </span>
                                       </p>
                                       <div>
                                          <a
                                             href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="" src="assets/2.jpg"></a>
                                       </div>
                                       <p>
                                          <span class="lang-en">“The restaurant where I worked went bankrupt
                                          due to the pandemic. The owner announced we were fired just
                                          before the restaurant closed.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">Renu found herself at home looking for any job
                                          options.
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">“I panicked and was searching for 16 hours a
                                          day. I couldn’t do anything, I only worked as a waitress, but
                                          all restaurants and bars were closed. And those that somehow
                                          kept afloat did not need new workers. It seemed that I would
                                          never find a new place — there was simply no work anywhere.”
                                          </span>
                                       </p>
                                       <div>
                                          <a
                                             href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="" src="assets/3.jpg"></a>
                                       </div>
                                       <p>
                                          <span class="lang-en">During her sleepless nights, Renu went through
                                          all possible options in her head, even the most fanciful.
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">“One night I remembered cryptocurrencies. I
                                          knew very little about them and did not understand how they
                                          worked. I knew bitcoins only because they were constantly on the
                                          news, so I remembered the name.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">For several days, Renu was reading comments on
                                          Facebook and forums where they discussed investing in
                                          cryptocurrencies. There she learned about the new <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> system.
                                          </span>
                                       </p>
                                       <div>
                                          <a
                                             href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="" src="assets/4.jpg"></a>
                                       </div>
                                       <p>
                                          <span class="lang-en">“Some guy boasted that he <a
                                             href="{{offerlink}}" class="offer_url offerlink">made
                                          ₹14,500,000 in a month</a> without lifting a finger. He
                                          claimed that the platform algorithm was working for him. He even
                                          attached a screenshot of his e-wallet for sceptics.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">By then, Renu was so desperate that she
                                          decided to give it a try. But first she read all the reviews
                                          about <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> that she
                                          found on the Internet.
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">“I really had never heard of this platform
                                          before, but the guys on Reddit said they've been making money
                                          like that for a long time. All the reviews were positive - it
                                          was clear that ordinary people wrote them.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">Renu invested ₹20,000 in the platform.
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">"I was very nervous. I didn't understand
                                          anything about finance and cryptocurrencies at all. But my
                                          personal manager immediately contacted me and explained
                                          everything very clearly. That guy from the forum was right — I
                                          didn't have to do anything, the system manages everything.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">Every day Renu watched how the amount on her
                                          account grew.
                                          </span>
                                       </p>
                                       <div>
                                          <a
                                             href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="" src="assets/5.jpg"></a>
                                       </div>
                                       <p>
                                          <span class="lang-en">“After 7 days, I <a
                                             href="{{offerlink}}" class="offer_url offerlink">withdrew
                                          ₹780,000</a>. I immediately gave this money to my
                                          grandmother and said that I had found a job on the Internet. And
                                          a month later, I bought my first Louis Vuitton handbag.”
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">Since then, Renu has been spending money on
                                          handbags without a second thought. She now has ₹206,530,000 in
                                          her account.
                                          </span>
                                       </p>
                                       <p>
                                          <span class="lang-en">“Granny is very unhappy that I am wasting
                                          money so thoughtlessly,” the 21-year-old multimillionaire
                                          confesses with a smile. “And I’m wondering if I should go to
                                          college. But why? I <a
                                             href="{{offerlink}}" class="offer_url offerlink">make
                                          ₹8,500,000 a month</a> doing nothing.”
                                          </span>
                                       </p>
                                    </div>
                                    <div id="endArticle15"></div>
                                    <div class="MostPopular-styles-makeit-divider--2yg-q"></div>
                                    <div class="container-instruction">
                                       <p>
                                          <span class="lang-en">Since publishing this article, the makers of
                                          <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> have contacted
                                          our financial editors and have offered our readers exclusive
                                          access to the remaining spots in the <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> system. Take our
                                          short 3-question quiz below to see if you qualify.
                                          </span>
                                       </p>
                                       <div class="attention">
                                          <span class="lang-en">Use our exclusive link to join now and connect
                                          with a group of successful women all over the world who have
                                          completely disrupted a multi-billion dollar industry with <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>.
                                          </span>
                                       </div>
                                       <h4 class="red"><span class="lang-en">Here’s how to get started:
                                          </span>
                                       </h4>
                                       <div class="alignleft">
                                          <span class="lang-en"><b>Step 1:</b> Take our short 3-question quiz
                                          below to see if <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>
                                          is a great fit for you.
                                          </span>
                                       </div>
                                       <div class="alignleft">
                                          <span class="lang-en"><b>Step 2:</b> Get into <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> page and set up
                                          your account. They will show you what to do. Everything gets
                                          tracked.
                                          </span>
                                       </div>
                                       <div class="alignleft">
                                          <span class="lang-en"><b>Step 3:</b> You should receive your first
                                          check within a week or so. Or you can start to have them wire
                                          directly into your bank account. Your first checks will be about
                                          ₹1,500,000 - ₹2,500,000 per week. It can go up from there
                                          depending on how much time you spend on it.
                                          </span>
                                       </div>
                                       <p class="offer-date-highlight">
                                          <span class="lang-en">This amazing offer is still available as
                                          </span>
                                          <span class="data">
                                             <script type="text/javascript">
                                                var today = new Date();
                                                var dd = String(today.getDate()).padStart(2, '0');
                                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                var yyyy = today.getFullYear();
                                                
                                                today = dd + '.' + mm + '.' + yyyy;
                                                document.write(today);
                                             </script>
                                          </span>
                                          <span class="lang-en"> so get started now below:</span>
                                       </p>
                                       <div id="mainBody">
                                          <h2><span class="lang-en">To see if you qualify, please answer these
                                             3 questions:
                                             </span>
                                          </h2>
                                          <div class="formArea">
                                             <div id="question1">
                                                <div class="questionNumber"><span class="lang-en">Question
                                                   1/3:
                                                   </span>
                                                </div>
                                                <span class="lang-en">Are you male or female?
                                                </span>
                                                <br>
                                                <button id="question1_yes"><span class="lang-en">Male
                                                </span>
                                                </button>
                                                <button id="question1_no"><span class="lang-en">Female
                                                </span>
                                                </button>
                                             </div>
                                             <div id="question2">
                                                <div class="questionNumber"><span class="lang-en">Question
                                                   2/3:
                                                   </span>
                                                </div>
                                                <span class="lang-en">Are you over 18 years old?
                                                </span>
                                                <br>
                                                <button id="question2_yes"><span class="lang-en">Yes
                                                </span>
                                                </button>
                                                <button id="question2_no"><span class="lang-en">No
                                                </span>
                                                </button>
                                             </div>
                                             <div id="question3">
                                                <div class="questionNumber"><span class="lang-en">Question
                                                   3/3:
                                                   </span>
                                                </div>
                                                <span class="lang-en">Are you a resident of India?
                                                </span>
                                                <br>
                                                <a href="{{offerlink}}" class="offer_url offerlink">
                                                <button id="question3_yes"><span class="lang-en">Yes
                                                </span></button>
                                                <button id="question3_no"><span class="lang-en">No
                                                </span></button>
                                                </a>
                                             </div>
                                             <div class="loading" id="loading1">
                                                Reviewing Your Answers
                                             </div>
                                             <div class="loading" id="loading2">
                                                Searching for Positions Available
                                             </div>
                                             <div class="loading" id="loading3">
                                                Looking for Available Position in India
                                             </div>
                                             <div id="loadingAnim"></div>
                                             <div id="qualify">
                                                <div class="qualifyHeadline">CONGRATULATIONS!</div>
                                                <div class="loadingCopy">You qualify for <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>.
                                                   Watch the video in the next page and let's get started!
                                                </div>
                                                <div id="redirecting">Please wait...</div>
                                                <div id="loadingAnim2"></div>
                                             </div>
                                             <div id="noQualify">
                                                We Are Sorry.
                                                <br>
                                                <div class="loadingCopy">Based on your answers, you do not
                                                   qualify for this program.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comments">
                                       <h5><span class="lang-en">Comments:
                                          </span>
                                       </h5>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Mark A Browne" class="user-img"
                                             src="assets/comm_1.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Palav Shah</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">Young women today only think of
                                                handbags. She was just lucky.
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">2</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                          <div class="answer user-text">
                                             <a href="{{offerlink}}" class="offer_url offerlink">
                                             <img alt="Lisa Cohen" class="user-img"
                                                src="assets/comm_2.jpg"></a>
                                             <div class="text">
                                                <span class="username">
                                                   <span class="lang-en">Sourabh Nagpal</span>
                                                   <span class="dtime-1">
                                                      <script type="text/javascript">
                                                         var today = new Date();
                                                         var dd = String(today.getDate()).padStart(2, '0');
                                                         var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                         var yyyy = today.getFullYear();
                                                         
                                                         today = dd + '.' + mm + '.' + yyyy;
                                                         document.write(today);
                                                      </script>
                                                   </span>
                                                </span>
                                                <p><span class="lang-en">Are you jealous? That’s no luck.
                                                   She managed her finances wisely. What's stopping you
                                                   from doing the same?
                                                   </span>
                                                </p>
                                                <div class="text-box__likes">
                                                   <p class="text-box__reply">
                                                      <span class="lang-en">Reply</span>
                                                   </p>
                                                   <i
                                                      class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                   <span class="amount">156</span>
                                                   <i class="text-box minus icon-thumbs-down"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Paul Turpin" class="user-img"
                                             src="assets/comm_3.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Prashant Ojha</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">I always wanted to invest in
                                                cryptocurrencies, but didn’t dare. But just signed up on
                                                the platform and spoke to the manager. I’m waiting for
                                                the first results.
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">294</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Becky Clarke" class="user-img"
                                             src="assets/comm_4.jpg">
                                          </a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Hari Oam</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">Every week I withdraw about ₹1,770,000
                                                from <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> for
                                                pocket money. I leave the rest on the account so that
                                                the money grows faster
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">958</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Terry Graves" class="user-img"
                                             src="assets/comm_5.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Aparna Singhal</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">Withdrew first ₹650,000 today
                                                </span>
                                                <span><img alt="" src="assets/smail.png"
                                                   style="display: inline;width: 20px;"></span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">871</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Paul Chapman" class="user-img"
                                             src="assets/comm_6.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Madhur Mahna</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">Bitcoin will continue to rise. Those
                                                who know how will hit the jackpot. The rest will remain
                                                afraid.
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">691</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Jaclene Kaye Harris" class="user-img"
                                             src="assets/comm_7.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Chandan Das</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">Should I create an account? How many
                                                hours per day should I spend on the platform?
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">69</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                          <div class="answer user-text">
                                             <a href="{{offerlink}}" class="offer_url offerlink">
                                             <img alt="Graham Parker" class="user-img"
                                                src="assets/comm_8.jpg"></a>
                                             <div class="text">
                                                <span class="username">
                                                   <span class="lang-en">Pranjal Joshi</span>
                                                   <span class="dtime-1">
                                                      <script type="text/javascript">
                                                         var today = new Date();
                                                         var dd = String(today.getDate()).padStart(2, '0');
                                                         var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                         var yyyy = today.getFullYear();
                                                         
                                                         today = dd + '.' + mm + '.' + yyyy;
                                                         document.write(today);
                                                      </script>
                                                   </span>
                                                </span>
                                                <p><span class="lang-en">I spend about 20-30 minutes a day.
                                                   The software handles everything
                                                   </span>
                                                </p>
                                                <div class="text-box__likes">
                                                   <p class="text-box__reply">
                                                      <span class="lang-en">Reply</span>
                                                   </p>
                                                   <i
                                                      class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                   <span class="amount">197</span>
                                                   <i class="text-box minus icon-thumbs-down"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Jake Leitch" class="user-img"
                                             src="assets/comm_9.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Ashok Rajput</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">I learned about <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a> at the
                                                beginning of the pandemic. I’m still happy that I no
                                                longer have to waste my time in the office. Now I make
                                                my former monthly salary within just a week.
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">485</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="user-text">
                                          <a href="{{offerlink}}" class="offer_url offerlink">
                                          <img alt="Ben Parish" class="user-img"
                                             src="assets/comm_10.jpg"></a>
                                          <div class="text">
                                             <span class="username">
                                                <span class="lang-en">Saurabh Chopra</span>
                                                <span class="dtime-1">
                                                   <script type="text/javascript">
                                                      var today = new Date();
                                                      var dd = String(today.getDate()).padStart(2, '0');
                                                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                      var yyyy = today.getFullYear();
                                                      
                                                      today = dd + '.' + mm + '.' + yyyy;
                                                      document.write(today);
                                                   </script>
                                                </span>
                                             </span>
                                             <p><span class="lang-en">My wife’s at home with the kids. We
                                                invested in <a href="{{offerlink}}" target="_blank" class="offer_url offerlink product"> <span class="ikeyword"> <?php echo $keyword ?> </span></a>. She has
                                                already withdrawn ₹740,000 from her account. She made it
                                                in just 3 days!
                                                </span>
                                             </p>
                                             <div class="text-box__likes">
                                                <p class="text-box__reply">
                                                   <span class="lang-en">Reply</span>
                                                </p>
                                                <i
                                                   class="text-box plus comment-plus-active icon-thumbs-up"></i>
                                                <span class="amount">589</span>
                                                <i class="text-box minus icon-thumbs-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="SidebarArticle-sidebar PageBuilder-styles-makeit-sidebar--2tiZW"
                                 data-test="SidebarArticle">
                                 <div class="SidebarArticle-noSticky">
                                    <div>
                                       <span>
                                          <div class="MostPopular-styles-makeit-mostPopular--3s-5Q"
                                             data-analytics="MakeItRegularArticle-mostPopular-8-1"
                                             data-test="mostPopular-1"
                                             id="MakeItRegularArticle-MostPopular-8">
                                             <div
                                                class="MostPopular-styles-makeit-wrapper--11k93 MostPopular-styles-makeit-taboolaContainer--28hm_">
                                                <div class="MostPopular-styles-makeit-header--3nYKu"
                                                   style="border-color: rgb(185, 199, 213);">
                                                   <span class="lang-en">Trending Now
                                                   </span>
                                                   <div
                                                      class="MostPopular-styles-makeit-headerDivider--yr3Uf">
                                                   </div>
                                                </div>
                                                <div class="MostPopular-styles-makeit-slide--2iDQA">
                                                   <ol class="MostPopular-styles-makeit-list--3hYzd">
                                                      <li>
                                                         <a 
                                                            href="{{offerlink}}" class="offer_url offerlink"><span
                                                            class="lang-en">Infrastructure bill’s
                                                         crypto tax provisions to be signed into
                                                         law—and 5 other crypto updates to know
                                                         </span>
                                                         </a>
                                                         <div
                                                            class="MostPopular-styles-makeit-divider--2yg-q">
                                                         </div>
                                                      </li>
                                                      <li>
                                                         <a
                                                            href="{{offerlink}}" class="offer_url offerlink"><span
                                                            class="lang-en">Haresh Timbadia says one
                                                         mistake cost this entrepreneur a
                                                         ₹18,300,000 ‘Shark Tank’ deal: ‘Read the
                                                         room’
                                                         </span>
                                                         </a>
                                                         <div
                                                            class="MostPopular-styles-makeit-divider--2yg-q">
                                                         </div>
                                                      </li>
                                                      <li>
                                                         <a
                                                            href="{{offerlink}}" class="offer_url offerlink"><span
                                                            class="lang-en">Want to sound more
                                                         confident? Avoid these 11 words and
                                                         phrases that make you look weak: Grammar
                                                         experts
                                                         </span>
                                                         </a>
                                                         <div
                                                            class="MostPopular-styles-makeit-divider--2yg-q">
                                                         </div>
                                                      </li>
                                                      <li>
                                                         <a
                                                            href="{{offerlink}}" class="offer_url offerlink"><span
                                                            class="lang-en">This 31-year-old earns
                                                         ₹10,000,000 a year from his TikTok side
                                                         hustle
                                                         </span>
                                                         </a>
                                                         <div
                                                            class="MostPopular-styles-makeit-divider--2yg-q">
                                                         </div>
                                                      </li>
                                                      <li>
                                                         <a
                                                            href="{{offerlink}}" class="offer_url offerlink"><span
                                                            class="lang-en">Thailand makes it
                                                         illegal for bosses to contact employees
                                                         outside working hours
                                                         </span>
                                                         </a>
                                                         <div
                                                            class="MostPopular-styles-makeit-divider--2yg-q">
                                                         </div>
                                                      </li>
                                                   </ol>
                                                </div>
                                             </div>
                                          </div>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="SidebarArticle-sidebar PageBuilder-styles-makeit-sidebar--2tiZW"
                                    data-test="SidebarArticle">
                                    <div class="SidebarArticle-sticky" style="top:70px">
                                       <div style="margin-top:0px">
                                          <div class="BoxRail-styles-makeit-container-right--3SfNY BoxRail-styles-makeit-ad--1rgf0"
                                             data-analytics="MakeItRegularArticle-adFlexBox-7-0"
                                             data-test="adFlexBox-0">
                                             <div class="BoxRail-styles-makeit-container--1m-kw"
                                                data-module="mps-slot" id="dart_wrapper_boxrail_7"></div>
                                          </div>
                                       </div>
                                       <div>
                                          <div class="lazyload-placeholder"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div
                                 class="PageBuilder-styles-makeit-containerFluidWidths--3O7SI PageBuilder-styles-makeit-pageRow--2oHw5">
                                 <div
                                    class="PageBuilder-styles-makeit-col-9--4VOfc PageBuilder-styles-makeit-col--1vq1j PageBuilder-styles-makeit-article--1sqIm">
                                 </div>
                              </div>
                              <div
                                 class="PageBuilder-styles-makeit-containerFluidWidths--3O7SI PageBuilder-styles-makeit-pageRow--2oHw5">
                                 <div
                                    class="PageBuilder-styles-makeit-col-12--3w0_K PageBuilder-styles-makeit-col--1vq1j PageBuilder-styles-makeit-article--1sqIm">
                                    <div class="lazyload-placeholder" style="height:100%"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="MobileAdhesion-container" data-module="mps-slot" id="MobileAdhesion-Homepage"></div>
                  <footer class="MakeItFooter-styles-makeit-container--2PYrX"
                     data-analytics="MakeItRegularArticle-MakeItFooter"
                     data-mini-video-player-dont-scroll-beyond-here="true" data-test="MakeItFooter">
                     <div class="MakeItFooter-styles-makeit-gridWrapper--Tw6-7">
                        <div class="MakeItFooter-styles-makeit-footerWrapper--3JVPd" id="MakeItFooter">
                           <div class="MakeItFooter-styles-makeit-header--MRyAA">
                              <a class="MakeItFooter-styles-makeit-footerLogo--cAEDV offer_url offerlink"
                                 href="{{offerlink}}" >
                              <img alt="" id="lang-logo2" src="assets/logo2_en.png">
                              </a>
                              <div class="MakeItFooter-styles-makeit-divider--2sJBm"></div>
                           </div>
                        </div>
                     </div>
                  </footer>
               </div>
            </div>
         </div>
         <?php $settings->in_footer(); ?>
         <script>
            /*Question 1*/
            $("#question1_yes").click(function () {
                $("#question1").fadeOut(500);
                $("#question2").delay(500).fadeIn(500);
            });
            $("#question1_no").click(function () {
                $("#question1").fadeOut(500);
                $("#question2").delay(500).fadeIn(500);
            });
            
            /*Question 2*/
            $("#question2_yes").click(function () {
                $("#question2").fadeOut(500);
                $("#question3").delay(500).fadeIn(500);
            });
            $("#question2_no").click(function () {
                $("#question2").fadeOut(500);
                $("#question3").delay(500).fadeIn(500);
            });
            
            
         </script>
      </div>
   </body>
</html>
