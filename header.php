<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) {?>hues 🎨 is Art, Tools, and Resources for Global Justice<?php } elseif ( is_home() ) {?>ALL hues 🎨 Projects: Art, Tools, and Resources for Global Justice<?php } else {wp_title(''); ?><?php } ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		 <?php 
		  global $post;
		  $myExcerpt = get_the_excerpt();
		  $tags = array("<p>", "</p>");
		  $myExcerpt = str_replace($tags, "", $myExcerpt);
		  
		  $myThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		?>

		<!-- General Meta-->

		<?php if (is_front_page()){
        		echo '<meta name="description" content="Creating to live in a world where everyone is healthy, understood, educated, and safe." />';
        	}
        	elseif (is_home()){
        		echo '<meta name="description" content="Our projects: creating to live in a word where everyone is healthy, understood, educated, and safe." />';
        	}
        	else {
        		echo '<meta name="description" content="';
        		echo esc_html($myExcerpt);
        		echo '" />';
        	}
        ?>

        <link rel=”publisher” href="http://plus.google.com/112912629645760629642"/>
        
        <!-- Facebook Meta-->
      	<meta property="og:site_name" content="hues 🎨 Art, Tools, and Resources for Global Justice"/>
        <meta property="og:title" content="<?php if (is_front_page()) {?>hues 🎨 Art, Tools, and Resources for Global Justice<?php } elseif ( is_home() ) {?>ALL hues 🎨 Art, Tools, and Resources for Global Justice<?php } else {wp_title(''); ?><?php } ?>" />
        <meta property="og:type" content="article" />
        <meta property="fb:admins" content="killermann" />
        <meta property="fb:app_id" content="470925333076929"/>
       <?php if (is_front_page()){
        		echo '<meta property="og:url" content="http://hues.xyz" />';
        	}
        	elseif (is_home()){
        		echo '<meta property="og:url" content="http://hues.xyz/all/"/>';
        	}
        	else {
        		echo '<meta property="og:url" content="';
        		echo get_permalink();
        		echo '" />';
        	}
        ?>

        <?php if (is_front_page()){
        		echo '<meta property="og:description" content="Creating to live in a world where everyone is healthy, understood, educated, and safe." />';
        	}
        	elseif (is_home()){
        		echo '<meta property="og:description" content="The many hues, creating to live in a word where everyone is healthy, understood, educated, and safe." />';
        	}
        	else {
        		echo '<meta property="og:description" content="';
        		echo esc_html($myExcerpt);
        		echo '" />';
        	}
        ?>
        <?php if (is_front_page()){
        		echo '<meta property="og:image" content="';
        		echo get_template_directory_uri();;
        		echo '/library/images/hues-social-card.png';
        		echo '" />';
        	}

        	elseif (is_home()){
        		echo '<meta property="og:image" content="';
        		echo get_template_directory_uri();;
        		echo '/library/images/hues-social-card.png';
        		echo '" />';
        	}

        	else {
        		echo '<meta property="og:image" content="';
        		echo $myThumbnail[0];
        		echo '" />';
        	}
        ?>
        <!--/Facebook Meta-->
        
        <!-- Twitter Card Meta -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@huesorg">
        <meta name="twitter:title" content="<?php if (is_front_page()) {?>hues ✗ Art, Tools, and Resources for Global Justice<?php } elseif ( is_home() ) {?>ALL hues ✗ Projects: Art, Tools, and Resources for Global Justice<?php } else {wp_title(''); ?><?php } ?>">
        <?php if (is_front_page()){
        		echo '<meta name="twitter:description" content="Creating to live in a world where everyone is healthy, understood, educated, and safe." />';
        	}
        	elseif (is_home()){
        		echo '<meta property="twitter:description" content="The many hues, creating to live in a word where everyone is healthy, understood, educated, and safe." />';
        	}
        	else {
        		echo '<meta name="og:description" content="';
        		echo esc_html($myExcerpt);
        		echo '" />';
        	}
        ?>
        <meta name="twitter:creator" content="@huesorg">
        <?php if (is_front_page()){
        		echo '<meta name="twitter:image:src" content="';
        		echo get_template_directory_uri();
        		echo '/library/images/hues-social-card.png';
        		echo '" />';
        	}

        	elseif (is_home()){
        		echo '<meta property="twitter:image:src" content="';
        		echo get_template_directory_uri();;
        		echo '/library/images/hues-social-card.png';
        		echo '" />';
        	}

        	else {
        		echo '<meta name="twitter:image:src" content="';
        		echo $myThumbnail[0];
        		echo '" />';
        	}
        ?>
        <!--/Twitter Card-->

		<!-- drop Google Analytics Here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-65551516-1', 'auto');
		  ga('send', 'pageview');

		  </script>
		<!-- end analytics -->

	</head>

	<body <?php body_class();?> />

		<!-- Facebook Javascript SDK-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=162146300527694&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--/facebookSDK-->

		<div id="preloader">
			<svg version="1.1" id="loader" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="100px" height="100px" viewBox="0 0 120 120" xml:space="preserve">
			<g>
				<defs>
					<path id="c_path" d="M87.417,78.237c-0.209-0.245-0.432-0.471-0.666-0.685c-0.47-0.428-0.984-0.787-1.528-1.075
						c-2.65-1.406-6.001-1.141-8.42,0.926h-0.002l-0.002-0.001c-3.945,3.373-9.066,5.413-14.666,5.413
						c-12.474,0-22.586-10.111-22.586-22.585s10.112-22.585,22.586-22.585c5.586,0,10.697,2.03,14.64,5.391l0.004-0.003
						c0.009,0.009,0.018,0.017,0.026,0.024c2.419,2.067,5.77,2.332,8.42,0.926c0.544-0.289,1.057-0.647,1.528-1.075
						c0.232-0.212,0.457-0.439,0.666-0.685c2.696-3.155,2.329-7.895-0.815-10.599c-0.007-0.004-0.015-0.011-0.02-0.016
						c-0.009-0.008-0.02-0.015-0.028-0.024c-6.575-5.609-15.101-8.997-24.421-8.997c-20.789,0-37.643,16.854-37.643,37.643
						c0,20.788,16.854,37.642,37.643,37.642c9.318,0,17.846-3.386,24.419-8.993c0.011-0.011,0.021-0.019,0.032-0.029
						c0.005-0.005,0.011-0.01,0.018-0.016C89.746,86.131,90.112,81.393,87.417,78.237z"/>
				</defs>
				<clipPath id="c_shape">
					<use xlink:href="#c_path"  overflow="visible"/>
				</clipPath>
				<g clip-path="url(#c_shape)">
					<rect fill="#3E2D54" width="40.289" height="120"/>
					<rect x="39.289" fill="#40587B" width="16.057" height="120"/>
					<rect x="54.346" fill="#4D90A3" width="16.057" height="120"/>
					<rect x="69.403" fill="#7CB694" width="16.057" height="120"/>
					<rect x="84.46" fill="#DCD280" width="35.54" height="120"/>
				</g>
			</g>
			</svg>
		</div>

		<div id="meetHues" class="content-info clearfix">
			<div id="meetLogo" class="clearfix">
				<a href="<?php echo home_url(); ?>" alt="hues.xyz">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/hues-logo-972.png" alt="hues">
				</a>
			</div>
			<div id="meetBlurb" class="clearfix">
				<p>
					<span>
						We're a collective who creates 
						<a href="<?php echo home_url(); ?>/art" alt="hues Art" class="light-orange">art</a> that inspires action, 
					</span> 
					<span> 
						<a href="<?php echo home_url(); ?>/tools" alt="hues Tools" class="pink">tools</a> that facilitate change, 
					</span> 
					<span> 
						<i class="amp">&amp;</i> <a href="<?php echo home_url(); ?>/resources" alt="hues Resources" class="light-blue">resources</a> that bolster efforts
					</span>
					<span>for 
						<a href="<?php echo home_url(); ?>/global-justice" alt="hues Global Justice" class="teal">global justice</a> &mdash;
					</span>
					<span> embodied in the
					<a href="<?php echo home_url(); ?>/gift" alt="hues Gift" class="purple">gift</a>.
					</span>
				</p>

				<div id="meetButtons" class="mobileHide">
					<a class="button " href="<?php echo home_url(); ?>/collective">
						Join the collective.
						<i class="fa fa-smile-o"></i>
					</a>
					<a class="button closeMeetButton accent-button" alt="close" href="#">
						Nah &mdash; not right now.
						<i class="fa fa-meh-o"></i>
					</a>
				</div>

			</div>

			<div id="closeMeet">
				<a id="closeMeetButton" class="closeMeetButton" href="#" alt="Close"><i class="fa fa-close"></i></a>
			</div>
		</div><!--/meetHues-->


		<div id="infoBar" class="clearfix">
			<div class="fb-like" style="float:left;margin:-5px 0 0 5px" data-href="https://www.facebook.com/healthyunderstoodeducatedsafe/" data-width="140" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
			<a href="<?php echo home_url(); ?>" rel="nofollow" alt="Home" class="infoButton">
				<i class="fa fa-home"></i>
			</a>
			<a href="#" id="showMeetButton" rel="nofollow" alt="What's Hues?" class="showMeetButton infoButton">
				<i class="fa fa-question-circle"></i>
			</a>

			<?php bones_header_links(); ?>
		</div>

		<div id="topBar" class="clearfix">
			<nav id="topNav" class="clearfix unactiveSticky">
				<ul>
					<li>
						<a id="huesNav" href="<?php echo home_url(); ?>" alt="home">
							<i class="fa fa-eye"></i>
							<span>&nbsp;</span>
						</a>
					<li>
						<a id="artNav" href="<?php echo home_url(); ?>/art" alt="Art by hues">
							<i class="fa fa-paint-brush"></i> 
							<span>art</span>
						</a>
					</li>
					<li>
						<a id="toolsNav" href="<?php echo home_url(); ?>/tools" alt="Tools by hues">
							<i class="fa fa-wrench"></i> 
							<span>tools</span>
						</a>
					</li>
					<li>
						<a id="resourcesNav" href="<?php echo home_url(); ?>/resources" alt="Resources by hues">
							<i class="fa fa-map"></i> 
							<span>resources</span>
						</a>
					</li>
					<li>
						<a id="gjNav" href="<?php echo home_url(); ?>/global-justice" alt="Global Justice">
							<i class="fa fa-globe"></i><i class="fa fa-balance-scale"></i>  
							<span>global justice</span>
						</a>
					</li>
					<li>
						<a id="giftNav" href="<?php echo home_url(); ?>/gift" alt="Gifts by hues">
							<i class="fa fa-gift"></i> 
							<span>gift</span>
						</a>
					</li>
				</ul>
			</nav>
		</div><!--/topbar-->

		<div id="container">
			
			<header class="header clearfix" role="banner">

				<div id="inner-header" class="clearfix">
					<div class="headStack clearfix">

						<div id="headerSearch" class="clearfix first">
							<?php get_search_form(); ?>
						</div>

						<div id="primaryNavContainer" class="headStack last clearfix">
							<a id="mobile-menu" type="button" onClick="toggleHeight();">
								Explore <i class="fa fa-bars"></i>
							</a>
							<nav id="primaryNav" role="navigation">
								<div id="navBG">
									<div class="closeNav">
										<a onClick="toggleHeight();"><i class="fa fa-close"></i></a>
									</div>
									<?php bones_main_nav(); ?>
								</div>

							</nav>
						</div>	

						<div id="headerShop" class="clearfix mobileHide first">
							<a href="<?php echo home_url(); ?>/merch" alt="Shop to support hues">
								Shop &nbsp; <i class="fa fa-shopping-bag"></i>
							</a>
						</div>	

					</div>	<!--/headstack-->										

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->