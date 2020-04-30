<?php
    require('admin/init.php');

    $year = date("Y");
    $month = date("m");
    $day = date("d");

    // gets the user IP Address
    $userIp = ipAddr();

    $check_ip = $db->query("SELECT `userip` FROM `pageview` WHERE page='home' AND userip='$userIp'");

    if(mysqli_num_rows($check_ip)>=1){
        //Do Nothing
    }else{
        $insertview = $db->query("INSERT INTO `pageview` 
                                  (page, userip, year, month, day)
                                   VALUES
                                  ('home','$userIp','$year','$month','$day')");
      }

    //$posts = Post::findAll();

    // pagination
 //   $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
//    $itemsPerPage = 10;
//    $itemsTotalCount = Post::countAll();
//    
//    // pagination Class
//    $paginate = new Paginate($page, $itemsPerPage, $itemsTotalCount);
//
//    $sql = "SELECT * FROM posts ";
//    $sql .= "LIMIT {$itemsPerPage} ";
//    $sql .= "OFFSET {$paginate->offset()}";
//    
//    $posts = Post::findByQuery($sql);

    $posts5 = Post::getRecentPosts5();
    $recent = Post::getRecentPosts7();

    $trending = Post::catPosts4(1);
    $metro = Post::catPosts4(2);
    $entertainment = Post::catPosts4(3);
    $lifestyle = Post::catPosts4(7);
    $reviews = Post::catPosts4(8);
    $health = Post::catPosts4(9);
    $business = Post::catPosts4(10);
    $sports = Post::catPosts4(11);
    $music = Post::catPosts4(12);
    $relationship = Post::catPosts4(13);

    $categories = Category::findAll();
?>

<!doctype html>
<html AMP lang="en">

<head>

    <meta charset="utf-8">
    
    <title>Home | <?php echo $webName; ?> - <?php echo $webTitle; ?></title>
    
    <meta name="author" content="intense.ng" />
    
    <meta name="description" content="<?php echo $webName ?>, <?php echo $webDesc; ?>" />
    <meta name="keywords" content="<?php echo $webName; ?>, <?php echo $webKey; ?>" />
    
    <meta property="og:image" content="http://ipublicizenaija.com/img/ipub_logo.png" />
    <meta property="og:image:width" content="120" />
    <meta property="og:image:height" content="105" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webName ?> - <?php echo $webTitle; ?>" />
    <meta property="og:description" content="ipublicizenaija - Get the latest Nigerian news, entertainments, gossips and updates" />
    <meta property="og:url" content="<?php echo $webUrl; ?>" />
    <meta property="og:site_name" content="ipublicizenaija blog posts, gist and entertainment" />

    <meta name="amp-google-client-id-api" content="googleanalytics">

	<!--Allow add to home screen-->
    <meta name="mobile-web-app-capable" content="yes">

    <!--Add Manifest-->
    <link rel="manifest" href="manifest.json">

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Weather PWA">
    <link rel="apple-touch-icon" href="img/ipub_logo.png">

    <meta name="msapplication-TileImage" content="img/ipub_logo.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <link rel="canonical" href="https://ipublicizenaija.com/Home" />

	<!--Tell browser were to find the manifest starting from the root directory of the website-->
	<!-- <link rel="manifest" href="/manifest.json">  -->
       
    <script type="application/ld+json">
    {"@context":"http://schema.org","@type":"WebSite","url":"http://ipublicizenaija.com/","name":"ipublicizenaija","potentialAction":{"@type":"SearchAction","target":"http://ipublicizenaija.com/search/{search_term_string}","query-input":"required name=search_term_string"}}
    
    </script>
    
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">

    <!--*
        *   FavIcons
        **-->
    <meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#2e811f">
	<link rel="manifest" href="manifest.json">
	<link rel="icon" sizes="192x192" href="img/ipub_logo_192.png">
    
	<link rel="apple-touch-icon" sizes="180x180" href="img/ipub_logo.png">
	<link rel="icon" type="image/png" href="img/ipub_logo_32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/ipub_logo_16.png" sizes="16x16">
	<link rel="mask-icon" href="img/ipub_logo.png" color="#2e811f">
    

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
        *   Fonts Awesome
        **-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--*
        *   JavaScripts to Include
        **-->
    
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
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://ipublicizenaija.com/home"
  },

  "headline": "Ipublicizenaija - Get the latest gist on news, health, gossips, lifestyle and celebrities",
  "image": {
    "@type": "ImageObject",
    "url": "https://ipublicizenaija.com/img/ipub_logo.png",
    "height": 100,
    "width": 100
  },
	
  "author": "Intense Digital and Marketing Agency",
  "datePublished": "2015-02-05T08:00:00+08:00",
  "dateModified": "2015-02-05T09:20:00+08:00",
 
   "publisher": {
    "@type": "Organization",
    "name": "Intense Digital and Marketing Agency",
    "logo": {
      "@type": "ImageObject",
      "url": "https://ipublicizenaija.com/img/ipub_logo.png",
      "width": 60,
      "height": 60
    }
  },
 
  "description": "Ipublicizenaija - Get the latest Nigerian news and updates",
  
  "sameAs": [
		"https://www.instagram.com/ipublicizenaija/",
		"https://twitter.com/iPUBLICIZEnaija",
		"https://www.facebook.com/IpublicizeNaija/"
   ]
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
		[class*="col-"]{margin-bottom: 20px;}.container-fluid{padding-right:20px;padding-left:20px;margin-right:auto;margin-left:auto}.row{margin-right:-10px;margin-left:-10px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:10px;padding-left:10px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{
    width: 75%;
    clear: right;
}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{
    width: 25%;
    /* [disabled]clear: both; */
}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}

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

<!--Top Ad-->
<amp-ad 
  width="100vw" 
  height="320"
  type="adsense"
  data-ad-client="ca-pub-2517860043128385"
  data-ad-slot="5585096921"
  data-auto-format="rspv"
  data-full-width>
	<div fallback>
		<p>No Ads for now!</p>
	</div>
    <!--<div overflow></div>-->
</amp-ad>


<header itemscope itemtype="https://schema.org/WPHeader">
    <?php include('layouts/head.php'); ?>
</header><!-- TOP NAVBAR ENDS -->

	<div class="container-fluid">
        
        <div class="space-3"></div>
        
        <!--Trending-->
        <div class="row">
            <div class="col-xs-12">
                <div class="normal-title">
                    <h2>Recent Posts</h2>
                </div><!-- TITLE ENDS -->
            </div><!-- COL-XS-12 ENDS -->
        </div><!-- ROW ENDS -->

		<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="news-carousel" layout="fixed-height" height=300>

                    <?php foreach ($recent as $r): ?>

                    <a href="<?php echo $r->id; ?>/<?php echo prettyUrl($r->title); ?>" class="news-carousel-item">
                        <amp-img  src="admin/<?php echo $r->imagePathPlace(); ?>" width=400 height=300></amp-img>
                        <div class="news-carousel-item-caption">
                            <h4 class="margin-0"><?php echo $r->title; ?></h4>
                            <span><i class="fa fa-bars"></i> <?php echo catName($r->cat_id); ?></span>
                        </div>
                    </a>

                    <?php endforeach; ?>

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


            <!--Trending-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Trending</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($trending)):
                foreach($trending as $tr):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $tr->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $tr->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($tr->title); ?>" title="<?php echo $tr->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $tr->id; ?>/<?php echo prettyUrl($tr->title); ?>">
                            <h3><?php echo $tr->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $tr->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($tr->id); ?>
                            </a>
                            
							<a href="Category-amp/<?php echo $tr->cat_id; ?>/<?php echo catName($tr->cat_id); ?>" title="<?php echo catName($tr->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($tr->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($tr->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
                <h3>No posts available for <strong>Trending</strong></h3>
            <?php endif; ?>


            <!--Metro-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Metro</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($metro)):
                foreach($metro as $mt):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $mt->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $mt->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($mt->title); ?>" title="<?php echo $mt->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $mt->id; ?>/<?php echo prettyUrl($mt->title); ?>">
                            <h3><?php echo $mt->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $mt->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($mt->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $mt->cat_id; ?>/<?php echo catName($mt->cat_id); ?>" title="<?php echo catName($mt->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($mt->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($mt->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Metro</h3>
            <?php endif; ?>
                
                
            <!--Entertainment-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Entertainment</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($entertainment)):
                foreach($entertainment as $ent):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $ent->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $ent->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($ent->title); ?>" title="<?php echo $ent->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $ent->id; ?>/<?php echo prettyUrl($ent->title); ?>">
                            <h3><?php echo $ent->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $ent->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($ent->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $ent->cat_id; ?>/<?php echo catName($ent->cat_id); ?>" title="<?php echo catName($ent->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($ent->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($ent->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Entertainment</h3>
            <?php endif; ?>
                
                
                
            <!--Metro-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Lifestyle</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($Lifestyle)):
                foreach($lifestyle as $lf):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $lf->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $lf->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($lf->title); ?>" title="<?php echo $lf->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $lf->id; ?>/<?php echo prettyUrl($lf->title); ?>">
                            <h3><?php echo $lf->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $lf->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($lf->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $lf->cat_id; ?>/<?php echo catName($lf->cat_id); ?>" title="<?php echo catName($lf->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($lf->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($lf->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for LifeStyle</h3>
            <?php endif; ?>
                
                
                
            <!--Metro-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Reviews</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($reviews)):
                foreach($reviews as $rv):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $rv->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $rv->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($rv->title); ?>" title="<?php echo $rv->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $rv->id; ?>/<?php echo prettyUrl($rv->title); ?>">
                            <h3><?php echo $rv->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $rv->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($rv->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $rv->cat_id; ?>/<?php echo catName($rv->cat_id); ?>" title="<?php echo catName($rv->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($rv->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($rv->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Reviews</h3>
            <?php endif; ?>
                
                
                
            <!--Metro-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Health</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($health)):
                foreach($health as $ht):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $ht->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $ht->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($ht->title); ?>" title="<?php echo $ht->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $ht->id; ?>/<?php echo prettyUrl($ht->title); ?>">
                            <h3><?php echo $ht->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $ht->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($ht->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $ht->cat_id; ?>/<?php echo catName($ht->cat_id); ?>" title="<?php echo catName($ht->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($ht->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($ht->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Health</h3>
            <?php endif; ?>
                
                
            <!--Business-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Business</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($business)):
                foreach($business as $bn):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $bn->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $bn->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($bn->title); ?>" title="<?php echo $bn->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Posts/<?php echo $bn->id; ?>/<?php echo prettyUrl($bn->title); ?>">
                            <h3><?php echo $bn->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $bn->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($bn->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $bn->cat_id; ?>/<?php echo catName($bn->cat_id); ?>" title="<?php echo catName($bn->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($bn->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($bn->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Business</h3>
            <?php endif; ?>
                
                
            <!--Business-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Sports</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($sports)):
                foreach($sports as $sp):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $sp->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $sp->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($sp->title); ?>" title="<?php echo $sp->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $sp->id; ?>/<?php echo prettyUrl($sp->title); ?>">
                            <h3><?php echo $sp->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $sp->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($sp->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $sp->cat_id; ?>/<?php echo catName($sp->cat_id); ?>" title="<?php echo catName($sp->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($sp->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($sp->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Sports</h3>
            <?php endif; ?>
                
                
                
                <!--Business-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Music</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($music)):
                foreach($music as $ms):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $ms->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $ms->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($ms->title); ?>" title="<?php echo $ms->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $ms->id; ?>/<?php echo prettyUrl($ms->title); ?>">
                            <h3><?php echo $ms->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $ms->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($ms->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $ms->cat_id; ?>/<?php echo catName($ms->cat_id); ?>" title="<?php echo catName($ms->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($ms->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($ms->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Music</h3>
            <?php endif; ?>
                
                
                
                <!--Business-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="normal-title">
                        <h2>Relationship</h2>
                    </div><!-- TITLE ENDS -->
                </div><!-- COL-XS-12 ENDS -->
            </div><!-- ROW ENDS -->
               
            <!--Post Section-->    
            <?php 
               if (!empty($relationship)):
                foreach($relationship as $rs):
            ?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $rs->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $rs->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($rs->title); ?>" title="<?php echo $rs->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $rs->id; ?>/<?php echo prettyUrl($rs->title); ?>">
                            <h3><?php echo $rs->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $rs->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($rs->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $rs->cat_id; ?>/<?php echo catName($rs->cat_id); ?>" title="<?php echo catName($rs->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($rs->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($rs->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for Relationship</h3>
            <?php endif; ?>
            
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