<?php
    require('admin/init.php');
    $categories = Category::findAll();
?>

<!doctype html>
<html AMP lang="en">

<!-- Mirrored from mobius.studio/themes/MobNews/LTR/news-detail-sample-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 May 2018 10:14:03 GMT -->
<head>
    <meta charset="utf-8">
    
    <title>Contact us - <?php echo $webName; ?></title>
    
    <meta name="author" content="intense.ng" />
    
    <meta name="description" content="<?php echo $webName; ?>. <?php echo $webDesc; ?>" />
    <meta name="keywords" content="<?php echo $webName; ?>. <?php echo $webKey; ?>" />
    
    <link rel="canonical" href="<?php echo $webUrl; ?>" />
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
    <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
	
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-vimeo" src="https://cdn.ampproject.org/v0/amp-vimeo-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>

    <script async  src="https://cdn.ampproject.org/v0.js"></script>

    <script type="text/javascript"  src="assets/js/jquery.min.js"></script>
    
    <script>
    //Ajax Comment
    $(document).ready(function(e){
        $("#contact-form").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'ajax_contact.php',
                data: new FormData(this),
                dataType: "html",
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function(){
                    $('.submit').attr("disabled","disabled");
                    $('#contact-form').css("opacity",".5");
                },

                //success after submittion
                success: function(status){
                    $('#status').html(status)

                    //quick transparency after submission
                    $('#contact-form').css("opacity","");

                    //clear all fields after submittion
                    $("#contact-form")[0].reset();
                    $(".submit").removeAttr("disabled");
                }
            });
        });

    });
    </script>

    <!--*
        *   Structured Data
        **-->
    <script type="application/ld+json">
        {
			"@context":"http://schema.org",
			"@type":"Blog",
			"@id":"https://mobius.studio/themes/MobNews/news-detail-sample-post.html",
			"about":{
				"@type":"CreativeWork",
				"name":"MobNews Template"
			},
			"headline":"MobNews News Posts",
			"description":"This data is for blog post list page.",
			"blogPost":[ {
				"@type":"BlogPosting",
				"name":"Sample Post",
				"headline":"Sample Post",
				"articleBody": "Compellingly incentivize intuitive ...",
				"datePublished":"2016-07-02T13:08:00-07:00",
				"dateModified":"2016-07-03T13:08:00-07:00",
				"mainEntityOfPage":"https://mobius.studio/themes/MobNews/news-detail-sample-post.html",
				"author":"Mobius Studio",
				"publisher":{
					"@type":"organization",
					"name": "Mobius Studio",
					"logo": {
						"@type": "ImageObject",
						"url": "https://mobius.studio/themes/MobNews/https://img.mobius.studio/themes/MobNews/LTR/assets/img/logo_dark@2x.png",
						"width": 177,
						"height": 60
					}
				},
				"image": {
					"@type": "ImageObject",
					"url": "https://mobius.studio/themes/MobNews/https://img.mobius.studio/themes/MobNews/LTR/assets/img/json-ld_post_image_696x391.jpg",
					"width": 696,
					"height": 391
				}
			} ],
			"comment": [ {
				"headline": "First Comment",
				"author":"Mobius Studio",
				"about":{
					"@type":"CreativeWork",
					"name":"MobNews Template"
				},
				"text": "Maecenas cursus efficitur purus, sit amet porttitor sem tincidunt sit amet. In sit amet urna bibendum augue ultricies dictum vulputate ac orci."
			}, {
				"headline": "Second Comment",
				"author":"Mobius Studio",
				"about":{
					"@type":"CreativeWork",
					"name":"MobNews Template"
				},
				"text": "Maecenas cursus efficitur purus, sit amet porttitor sem tincidunt sit amet. In sit amet urna bibendum augue ultricies dictum vulputate ac orci."
			}, {
				"headline": "Third Comment",
				"author":"Mobius Studio",
				"about":{
					"@type":"CreativeWork",
					"name":"MobNews Template"
				},
				"text": "Maecenas cursus efficitur purus, sit amet porttitor sem tincidunt sit amet. In sit amet urna bibendum augue ultricies dictum vulputate ac orci."
			} ]
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
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 5px;
    margin-bottom: 2px
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
		p{
    margin: 7.5px 0 0;
    color: #262626;
}
		small{
    font-size: 1.2rem;
    line-height: 1
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
    color: #378e20
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
    background: #378e20; /* Old browsers */
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
    padding-top: 0px;
    padding-right: 0px;
    padding-left: 0px;
    padding-bottom: 0px;
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

        /**---------------------
		  *
		  * Social Share
		  *
		  *---------------------**/
		.social-share-container{
			height: 30px;
		}

		.socials-share-title{
			line-height: 30px;
			display: inline-block;
			vertical-align: top;
			margin-right: 10px;
		}

		amp-social-share[type=facebook],
		amp-social-share[type=gplus],
		amp-social-share[type=pinterest],
		amp-social-share[type=email],
		amp-social-share[type=twitter],
		amp-social-share[type=linkedin]{
			background-image: none;
		}

		amp-social-share[type=whatsapp]{
			background-color: #189D0E;
		}

		amp-social-share[type=baidu]{
			background-color: #4252A2;
		}

		amp-social-share{
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

        /**---------------------
		  *
		  * Comment Items
		  *
		  *---------------------**/
		.comment-item>h4,
		.comment-item>small {
			line-height: 1.5
		}

		.comment-item>h4 {
			margin-top: 0;
			margin-bottom: 10px
		}

		.comment-item {
    margin-bottom: 10px;
    padding: 7px;
    background: #ebfed3;
		}

		.comment-item>small a {
			float: right
		}

		.comment-item>small span {
			float: left
		}

		.comment-item.child {
			margin-left: 30px
		}

		h3+.comment-item {
			margin-top: 15px
		}

		.comment-item>small div.stars {
			float: right
		}

		.comment-item>small div.stars i {
			float: left;
			font-size: 1.4rem
		}

        /*Comment Form*/
        .login-card {
    padding-top: 10px;
    padding-right: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
    width: 80%;
    background-color: #FFFFFF;
    margin-top: 0;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 10px;
    border-radius: 2px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.login-card h1 {
  font-weight: 100;
  text-align: center;
  font-size: 2.3em;
}

.login-card input[type=submit] {
    width: 40%;
    display: block;
    margin-bottom: 10px;
    position: relative;
    /* [disabled]align-self: center; */
}

.login-card input[type=text], input[type=password], input[type=email], textarea{
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-card input[type=text]:hover, input[type=password]:hover, input[type=email]:hover, textarea:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
    /* border: 1px solid #3079ed; */
    border: 0px;
    color: #fff;
    text-shadow: 0 1px rgba(0,0,0,0.1);
    background-color: #378e20;  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-submit:hover {
    /* border: 1px solid #2f5bb7; */
    border: 0px;
    text-shadow: 0 1px rgba(0,0,0,0.3);
    background-color: #8cd12b;  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-card a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
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
    
    <header itemscope itemtype="https://schema.org/WPHeader">
        <?php include('layouts/head.php'); ?>
    </header><!-- TOP NAVBAR ENDS -->

    <div class="container-fluid">
		<div class="space-2"></div>

		<div class="row">
            
			<div class="col-sm-12">

				<div class="divider-30 colored"></div>

				<div class="news-sidebar-box">
                    
                    <h3 class="margin-0">Our Location</h3>
                    
					<p>
                        <strong>Mobile:</strong> 08033919051 <br> 
                        <strong>Address:</strong> 2nd Floor Kings Deck Building, Alternate Route, Off Chevron Drive, Lekki-Ajah, Lagos <br> 
                        <strong>Email:</strong>  <br> 
                    </p>
                    
                    <!--<div id="map" align="center" style="margin-bottom: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.579323180862!2d3.5300883146203432!3d6.448019225825473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf772dba86411%3A0x36dc8fcb19772489!2sINTENSE+DIGITAL+MARKETING+%26+SOCIAL+MEDIA+MANAGEMENT+AGENCY!5e0!3m2!1sen!2sng!4v1526457334062" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>-->
                    
                    <amp-iframe width="100%" height="450"
                        sandbox="allow-scripts allow-same-origin"
                        layout="responsive"
                        frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.579323180862!2d3.5300883146203432!3d6.448019225825473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf772dba86411%3A0x36dc8fcb19772489!2sINTENSE+DIGITAL+MARKETING+%26+SOCIAL+MEDIA+MANAGEMENT+AGENCY!5e0!3m2!1sen!2sng!4v1526457334062">
                        <amp-img placeholder layout="fill"
                              src="http://ipublicizenaija.com/img/google_maps_512.png">
                        </amp-img>
                    </amp-iframe>

					<h3 class="margin-0">Contact us</h3>
					<p>Send us a message</p>
                    
                    <div class="login-card" align="center">
                        
                        <form id="contact-form" method="post" action-xhr="https://ipublicizenaija.com/Contact" target="_top">

                            <input id="name" name="name" placeholder="Your name" maxlength="30" required="required" type="text" />
                            
                            <input id="email" name="email" placeholder="Your Email Address" maxlength="30" required="required" type="email" />
                            
                            <input id="mobile" name="mobile" placeholder="Your Mobile Number" maxlength="30" type="text" />

                            <textarea id="body" name="body" placeholder="Enter your comment here..." rows="6" required="required"></textarea>

                            <input name="submit" class="submit login login-submit" value="Send" type="submit"/>
                        </form>
                        
                    </div>
                    
				</div><!-- SIDEBAR-BOX ENDS -->
 
			</div><!-- COL-SM-9 ENDS -->
            
		</div><!-- ROW ENDS -->

	</div><!-- CONTAINER-FLUID ENDS -->

	<div class="container-fluid">
		<div class="divider colored"></div>

        <div class="space-2"></div>

        <!--Footer-->
        <?php include('layouts/foot.php'); ?>

        <div class="space-2"></div>
	</div><!-- CONTAINER-FLUID ENDS -->

    <amp-sidebar id='mainSideBar' layout='nodisplay'>
         <?php include('layouts/navbar.php'); ?>
    </amp-sidebar><!-- SIDEBAR ENDS -->

   
    <amp-install-serviceworker src="sw.js"
	  data-iframe-src="<?php echo $webUrl; ?>"
	  layout="nodisplay">
	</amp-install-serviceworker>
</body>


</html>