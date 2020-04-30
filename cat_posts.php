<?php
    require('admin/init.php');

    if(empty($_GET['id'])){
        redirect("Home"); 
    }else{
        $catId = $_GET['id'];
    }

    $year = date("Y");
    $month = date("m");
    $day = date("d");

    // gets the user IP Address
    $userIp = ipAddr();

    $check_ip = $db->query("SELECT `userip` FROM `catview` WHERE cat_id='$catId' AND userip='$userIp'");

    if(mysqli_num_rows($check_ip)>=1){
        //Do Nothing
    }else{
        $insertview = $db->query("INSERT INTO `catview` 
                                  (cat_id, userip, year, month, day)
                                   VALUES
                                  ('$catId','$userIp','$year','$month','$day')");
      }

    $posts = Post::findByCatId($_GET['id']);
    $posts5 = Post::getRecentPosts5();
    // $postsRand = Post::findAllPostsRandom();

    $categories = Category::findAll();
?>

<!doctype html>
<html AMP lang="en">

<!-- Mirrored from mobius.studio/themes/MobNews/LTR/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 May 2018 10:13:07 GMT -->
<head>
    <base href="/">
    
    <meta charset="utf-8">
    
    <title> <?php echo catname($catId); ?> | Ipublicizenaija</title>
    
    <meta name="author" content="intense.ng" />
    
    <meta name="description" content="<?php echo $webName; ?> <?php echo $webDesc; ?>, <?php echo catname($catId); ?>" />
    <meta name="keywords" content="<?php echo $webKey; ?>" />
    
    <link rel="canonical" href="index.php" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">

    <!--*
        *   FavIcons
        **-->
    <meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#2e811f">
    
	<link rel="apple-touch-icon" sizes="180x180" href="img/ipub_logo.png">
	<link rel="icon" type="image/png" href="img/ipub_logo.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/ipub_logo.png" sizes="16x16">
	<link rel="mask-icon" href="img/ipub_logo.png" color="#2e811f">
    
	<link rel="manifest" href="manifest.json">

	<!-- Allow web app to be run in full-screen mode. -->
	<meta name="apple-mobile-web-app-capable"
	      content="yes">

	<!-- Configure the status bar. -->
	<meta name="apple-mobile-web-app-status-bar-style"
	      content="black">

	<!-- iPad retina portrait startup image -->
	<link href="img/ipub_logo.png"
	      media="(device-width: 768px) and (device-height: 1024px)
	                 and (-webkit-device-pixel-ratio: 2)
	                 and (orientation: portrait)"
	      rel="apple-touch-startup-image">

	<!-- iPhone 6 Plus portrait startup image -->
	<link href="img/ipub_logo.png"
	      media="(device-width: 414px) and (device-height: 736px)
	                 and (-webkit-device-pixel-ratio: 3)
	                 and (orientation: portrait)"
	      rel="apple-touch-startup-image">

	<!-- iPhone 6 startup image -->
	<link href="img/ipub_logo.png"
	      media="(device-width: 375px) and (device-height: 667px)
	                 and (-webkit-device-pixel-ratio: 2)"
	      rel="apple-touch-startup-image">

	<!-- iPhone 5 startup image -->
	<link href="img/ipub_logo.png"
	      media="(device-width: 320px) and (device-height: 568px)
	                 and (-webkit-device-pixel-ratio: 2)"
	      rel="apple-touch-startup-image">

    <!--*
        *   Fonts
        **-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!--*
        *   JavaScripts to Include
        **-->
    <!--CDN for AMP js scripts-->
    <!--AMP analytics-->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    
    <!--AMP ads-->
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    
    <!--AMP install service worker-->
    <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
	
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-vimeo" src="https://cdn.ampproject.org/v0/amp-vimeo-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async  src="https://cdn.ampproject.org/v0.js"></script>

    <!--*
        *   Structured Data
        **-->
    <script type="application/ld+json">
        {
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Ipiblicize Naija",
			"alternateName": "Ipublicize Naija",
			"description": "Ipublicize Naija",
			"url": "http://ipublicizenaija.com"
		}
    </script>

    <!--*
        *   Required CSS Code (AMP Boilerplate)
        **-->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <!--*
        *   Custom CSS Code
        **-->
    <style amp-custom>
        /* GLOBAL STYLES */
		/**---------------------
		  *
		  * Resets
		  *
		  *---------------------**/
		figure{margin: 0}
		*{box-sizing: border-box}
		button{background: none; border: none}
		a{text-decoration: none}
		:focus{outline: 0;}
		ul{padding-left: 20px}

		/**---------------------
		  *
		  * Global Styles
		  *
		  *---------------------**/
		html{font-size: 62.5%; box-sizing: border-box;}
		body{font-size: 1.3rem; line-height: 1.8; -webkit-font-smoothing: antialiased; color: #818181;}

		.font-1, html{font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif; font-weight: 300}

		.text-center{text-align: center}
		.margin-0{
    margin-top: 5px;
    margin-right: 5px;
    margin-left: 5px;
    margin-bottom: 5px
}
		.margin-top-0{margin-top: 0}
		.margin-bottom-0{margin-bottom: 0}
		.minus-margin-top-bottom-15{margin-top: -15px; margin-bottom: -15px}

		.space{height: 10px}
		.space-2{height: 20px}
		.space-3{height: 30px}

		.divider{margin: 0;}
		.divider-30{margin: 30px 0;}
		.divider.colored{height: 1px; background: rgba(0,0,0,.07)}
		.divider-30.colored{height: 1px; background: rgba(0,0,0,.07)}

		.pull-left{float: left}
		.pull-right{float: right}

		.clearfix:after,
		.clearfix:before {
			display: table;
			content: "";
			line-height: 0
		} .clearfix:after {clear: both}

		h2{margin-bottom: 7.5px}
		p{margin: 7.5px 0 0;}
		small{
    font-size: 1.2rem;
    line-height: 1;
    font-weight: 400;
}
		strong,b{font-weight: 500}

		h1,h2,h3,h4,h5,h6{
			font-weight: 500;
			line-height: 1.4;
			color: #414141;
		}

		h1,.h1{font-size: 2.7rem}
		h2,.h2{font-size: 1.9rem}
		h3,.h3{font-size: 1.7rem}
		h4,.h4{font-size: 1.5rem}
		h5,.h5{font-size: 1.3rem}
		h6,.h6{font-size: 1rem}

		a,
		.primary-color{
    color: #065900;
    font-weight: 400;
}
		.secondary-color{color: #442672}
		.light-color{color: #FFF}
		.light-color-2{color: rgba(255,255,255,.54)}
		.dark-color{color: #333030;}
		.ocean-color{color: #2b90d9;}
		.grass-color{color: #3ac569;}
		.salmon-color{color: #ff7473;}
		.sun-color{color: #feee7d;}
		.alge-color{color: #79a8a9;}
		.flower-color{color: #353866;}

		.primary-bg{
    background-color: #378e20
}
		.secondary-bg{background-color: #442672}
		.light-bg{background-color: #fff;}
		.dark-bg{background-color: #333030;}
		.ocean-bg{background-color: #2b90d9;}
		.grass-bg{background-color: #3ac569;}
		.salmon-bg{background-color: #ff7473;}
		.sun-bg{background-color: #feee7d;}
		.alge-bg{background-color: #79a8a9;}
		.flower-bg{background-color: #353866;}

		.circle{border-radius: 50%}

		[dir="rtl"] .pull-left{float: right}
		[dir="rtl"] .pull-right{float: left}
		body {text-align: left}
		body[dir="rtl"] {text-align: right}

		.text-center{text-align: center}

		code {
			padding: .2rem .4rem;
			font-size: 90%;
			color: #bd4147;
			background-color: #f7f7f9;
			border-radius: .25rem;
		}

		/**---------------------
		  *
		  * Header Styles
		  *
		  *---------------------**/
		.fixed-header header{
			position: fixed;
			width: 100%;
			top: 0;
			z-index: 1;
		}

		.fixed-header{
			padding-top: 55px;
		}

		header{
    position: relative;
    min-height: 55px;
    padding: 0 5px;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/rgb(52,73,94)+0,442672+100 */
    background: #2a9204; /* Old browsers */
		}

		header .fa{
			color: #FFF;
			opacity: .87;
			font-size: 17px;
			line-height: 56px;
			height: 55px;
			padding: 0 15px;
			margin: 0;
		}

		#logo{
			height: 55px;
			line-height: 62px;
			display: inline-block;
			position: absolute;
			left: 50%;
			-webkit-transform: translateX(-50%);
			transform: translateX(-50%);
		}

		/**---------------------
		  *
		  * Sidebar Styles
		  *
		  *---------------------**/
		#mainSideBar{
			min-width: 300px;
			padding-bottom: 30px;
		}

		#mainSideBar > div:not(.divider){
			padding: 17px 20px;
		}

		#mainSideBar figure{
			width: 300px;
			max-width: 100%;
			padding: 0 20px;
			position: relative;
		}

		#mainSideBar button{
			position: absolute;
			right: 20px;
			top: 20px;
		}

		#mainSideBar amp-img{
			margin-bottom: 5px;
		}

		#mainSideBar h3,
		#mainSideBar h5{
			margin: 0;
			line-height: 1.5;
		}

		#menu{margin-top: 15px}
		#menu div{padding: 0}

		#menu h6,
		#menu a{
			color: inherit;
			font-size: 1.3rem;
			font-weight: 300;
			padding:0;
			border: none;
		}

		#menu a,
		#menu span{
			padding: 14px 20px 14px 53px;
			display: block;
			color: inherit;
			position: relative;

			-webkit-transition: all ease-in-out .2s;
			transition: all ease-in-out .2s;
		}

		#menu section[expanded] > h6 span{
			background-color: rgba(0,0,0,.06);
			color: rgb(52,73,94);
		}

		#menu h6 span:after{
			position: absolute;
			right: 20px;
			top: 0;
			font-family: 'FontAwesome';
			font-size: 12px;
			line-height: 47px;
			content: '\f0dd';
		}

		#menu i,
		#mainSideBar li i{
			font-size: 1.7rem;
			position: absolute;
			left: 20px;
		}

		#panel-logo{
			display: inline-block;
		    height: 55px;
		    line-height: 62px;
		}

		#panel-logo amp-img{
			margin: 0;
		}

		#panel-search{
			background-color: rgba(0,0,0,.2);
			margin: 0 -20px;
			padding: 0 20px;
		}

		#panel-search input{
			border: none;
			background: none;
			outline: none;
		    height: 55px;
		    line-height: 55px;
			color: rgba(255,255,255,.87);
			width: 100%;
		}

		#panel-search input[type="submit"]{
			display: none;
		}

		.social-ball{
			font-size: 1.6rem;
			display: inline-block;
			text-align: center;
			line-height: 30px;
			height: 30px;
			width: 30px;
			border-radius: 50%;
			color: #FFF;
			margin-right: 5px;
		}

		.social-ball.fa-facebook{background-color: #4867AA}
		.social-ball.fa-twitter{background-color: #00ACED}
		.social-ball.fa-linkedin{background-color: #0177B5}
		.social-ball.fa-behance{background-color: #010103}
		.social-ball.fa-dribbble{background-color: #E04C86}

		/**---------------------
		  *
		  * Grid
		  *
		  *---------------------**/
		[class*="col-"]{margin-bottom: 20px;}.container-fluid{padding-right:20px;padding-left:20px;margin-right:auto;margin-left:auto}.row{margin-right:-10px;margin-left:-10px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:10px;padding-left:10px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}

        /* /GLOBAL STYLES */

        /* INDEX PAGE STYLES */

        /**---------------------
		  *
		  * Title Normal
		  *
		  *---------------------**/
		.normal-title{
			margin: 0;
		}

		.normal-title h2{
    margin: 0;
    line-height: 1.4;
    padding-left: 10px;
    border-left: 5px solid #2a9204;
		}

        /**---------------------
          *
          * Icon Info Box
          *
          *---------------------**/
		.image-info-box{
			position: relative;
		}

		.image-info-box .preview{
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			padding: 3px;
			border: 1px solid rgba(0,0,0,.06)
		}

		.image-info-box amp-img{
			display: block;
		}

		.image-info-box .details{
			margin-left: 75px;
		}

		.image-info-box h2{
			line-height: 1;
			margin: 0 0 5px;
		}

		.image-info-box p{
			margin: 0 0 5px;
			font-size: 1.2rem;
		}

		.image-info-box .meta a{
			font-size: 1.1rem;
			opacity: .54;
			display: block;
			float: left;
		}

		.image-info-box .meta a:last-child{
			float: right;
		}

		.image-info-box .meta a:not(:first-child){
			margin-left: 7px;
		}

        /**---------------------
		  *
		  * Small News Item
		  *
		  *---------------------**/
		.small-news-item{
			position: relative;
		}

		.small-news-item .preview,
		.small-news-item amp-img{
			display: block;
		}

		.small-news-item h2{
			line-height: 1.3;
			margin: 10px 0 5px;
		}

		.small-news-item .meta a{
    font-size: 1.1rem;
    opacity: .54;
    display: block;
    float: left;
		}

		.small-news-item .meta a:not(:first-child){
			margin-left: 7px;
		}

        /**---------------------
		  *
		  * Full Video Preview News Item
		  *
		  *---------------------**/
		.full-video-preview-news-item h2{
			margin: 10px 0
		}
		.full-video-preview-news-item .meta a{
			font-size: 1.2rem;
			opacity: .54;
			display: block;
			float: left;
		}

		.full-video-preview-news-item .meta a:not(:first-child){
			margin-left: 7px;
		}

		.full-video-preview-news-item .meta a:last-child{
			float: right;
		}

        /**---------------------
          *
          * News Carousel
          *
          *---------------------**/
		.news-carousel-item amp-img{
			display: block;
		}

		.news-carousel-item{
			position: relative;
		}

		.news-carousel-item-caption{
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: #FFF;
			padding: 10px 0 0;
			line-height: 1;
		}

		.news-carousel-item-caption h5{
			line-height: 1.3;
			margin-bottom: 3px;
			font-size: 1.2rem;
            white-space: normal;
		}

		.news-carousel-item-caption span{
			font-size: 1.1rem;
			opacity: .54;
		}

        /**---------------------
          *
          * Grid Gallery with Lightbox
          *
          *---------------------**/
		.lightbox-item-with-caption figcaption{display: none;}
		.lightbox-item-with-caption amp-img{display: block;}
		.amp-image-lightbox-caption{padding: 15px}

        /**---------------------
		  *
		  * News Item
		  *
		  *---------------------**/
		.news-item .preview {
			display: block;
			margin-bottom: 15px
		}

		.subtitle{font-size: 1.2rem}

        /**---------------------
		  *
		  * Pagination
		  *
		  *---------------------**/
		.pagination {
			text-align: center;
			margin: 15px 0 0
		}

		.pagination a {
			display: inline-block;
			margin: 0;
			border-radius: 50%;
			color: #212121;
			min-width: 30px;
			min-height: 30px;
			line-height: 30px;
		}

		.pagination a.active {
    color: #FFF;
    background-color: #378e20
		}

        /**---------------------
		  *
		  * Sidebar Box
		  *
		  *---------------------**/
		.news-sidebar-box{margin-bottom: 30px;}

        /**---------------------
		  *
		  * Photo Row
		  *
		  *---------------------**/
		.photo-row {
			margin: 15px -2.5px 0
		}

		.photo-row a {
			width: 33.33333333333333%;
			padding: 0 2.5px;
			float: left;
			display: block
		}

        /**---------------------
		  *
		  * Media List
		  *
		  *---------------------**/
		.media-list{
			list-style: none;
			padding: 0;
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

		.media-list a{
			position: relative;
			display: block;
		}

		.media-list i{
			position: absolute;
			right: 5px;
			top: 50%;
			line-height: 10px;
			margin-top: -17px;
			display: block;
		}

		.media-list amp-img{
			display: block;
		}

		.media-list div{
			margin-left: 80px;
			padding-bottom: 15px;
			margin-bottom: 15px;
		}

		.media-list li:not(:last-child) div{
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

        /**---------------------
		  *
		  * Bordered List
		  *
		  *---------------------**/
		.bordered-list{
			padding-left: 0;
			list-style: none;
		}

		.bordered-list a{
			color: inherit;
			display: block;
			position: relative;
			padding: 10px 15px 8px 0;
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

		.bordered-list a:after{
			position: absolute;
			right: 5px;
			top: 0;
			font-size: 12px;
			line-height: 47px;
			font-weight: 500;
			content: '+';
		}
        
        /*font awesome icon colour*/
        .fa-facebook-color{
            color:#2A54F3;
        }
        
        .fa-twitter-color{
            color:#028AE1;
        }
        
        .fa-instagram-color{
            color:#F3300C;
        }
        
        /*Right side*/
        .rightside-img{
            width: 80px;
            height: 80px;
        }
        
        .rightside-span{
            padding-bottom: 5px;
        }

        /* /INDEX PAGE STYLES */
    </style>
    
    
    <!--Google Adsense-->
    <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-2517860043128385",
              enable_page_level_ads: true
         });
    </script>-->
</head>

<body dir="ltr" class="fixed-header">
    
    <!--AMP Analytics-->
<amp-analytics type="googleanalytics">
    <script type="application/json">
        {
        "vars": {
          "account": "UA-116318219-2"
        },
        "triggers": {
          "trackPageview": {
            "on": "visible",
            "request": "pageview"
          },
          "trackEvent": {
            "selector": "#event-test",
            "on": "click",
            "request": "event",
            "vars": {
              "eventCategory": "ui-components",
              "eventAction": "click"
            }
          }
        }
        }
    </script>
</amp-analytics>

<!--Amp ads-->
					<amp-ad 
					  width="100vw" 
					  height=320
					  type="adsense"
					  data-ad-client="ca-pub-2517860043128385"
					  data-ad-slot="5323688141"
					  data-auto-format="rspv"
					  data-full-width>
						<div fallback>
							<p>No Ads for now!</p>
						</div>
						<div overflow></div>
					</amp-ad>

    <header itemscope itemtype="https://schema.org/WPHeader">
        <?php include('layouts/head.php'); ?>
    </header><!-- TOP NAVBAR ENDS -->

	<div class="container-fluid">
        
        <div class="space-3"></div>
        
        <div class="row">
            <div class="col-xs-12">
                <div class="normal-title">
                    <h2>Trending Posts</h2>
                </div><!-- TITLE ENDS -->
            </div><!-- COL-XS-12 ENDS -->
        </div><!-- ROW ENDS -->

		<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="news-carousel" layout="fixed-height" height=300>
                    
                    <?php include('layouts/topside.php'); ?>

				</amp-carousel><!-- NEWS CAROUSEL ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->

		<div class="row">
			<div class="col-xs-12">
				<div class="divider colored"></div><!-- DIVIDER ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
		

		<div class="row">
            
            <!--Main Section-->
            <div class="col-sm-9">

            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Recent Posts</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
                
            <!--Post Section-->    
            <?php include('layouts/postcontent.php'); ?>
			
			<!--In feeds Ad-->
			<amp-ad 
			  width="100vw" 
			  height=320
			  type="adsense"
			  data-ad-client="ca-pub-2517860043128385"
			  data-ad-slot="6033972880"
			  data-auto-format="rspv"
			  data-full-width>
				<div fallback>
					<p>No Ads for now!</p>
				</div>
				<div overflow></div>
			</amp-ad>
            
            </div>
            
            <!--Side Bar-->
			<div class="col-sm-3">

                <?php include('layouts/rightside.php') ?>
                
			</div>
            
		</div><!-- ROW ENDS -->

		<div class="row">
			<div class="col-xs-12">
				<div class="divider colored"></div><!-- DIVIDER ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
        

		<div class="space-3"></div>
        
        <div class="pagination">
            <a href="news-category.html" rel="prev" class="fa fa-angle-left"></a>
            <a href="news-category.html" class="active">1</a>
            <a href="news-category.html">2</a>
            <a href="news-category.html">3</a>
            <a href="news-category.html">4</a>
            <a href="news-category.html" rel="next" class="fa fa-angle-right"></a>
        </div>
        
        <div class="space-2"></div>
        
        <div class="divider colored"></div>
        
        <div class="space-2"></div>
        
        <!--Footer-->
        <?php include('layouts/foot.php'); ?>

        <div class="space-2"></div>
	</div>

    <amp-sidebar id='mainSideBar' layout='nodisplay'>
        
        <?php include('layouts/navbar.php'); ?>
        
    </amp-sidebar><!-- SIDEBAR ENDS -->

   <amp-install-serviceworker src="sw.js"
	  data-iframe-src="<?php echo $webUrl; ?>"
	  layout="nodisplay">
	</amp-install-serviceworker>
</body>

</html>