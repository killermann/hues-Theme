<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65551516-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-65551516-1');
		</script>

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

        <link rel=”publisher” href="https://plus.google.com/112912629645760629642"/>


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
						<a href="<?php echo home_url(); ?>/about/global-justice" alt="hues Global Justice" class="teal">global justice</a> &mdash;
					</span>
					<span> embodied in the
					<a href="<?php echo home_url(); ?>/about/gift" alt="hues Gift" class="purple">gift</a>.
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
						<a id="gjNav" href="<?php echo home_url(); ?>/about/global-justice" alt="Global Justice">
							<i class="fa fa-globe"></i><i class="fa fa-balance-scale"></i>
							<span>global justice</span>
						</a>
					</li>
					<li>
						<a id="giftNav" href="<?php echo home_url(); ?>/about/gift" alt="Gifts by hues">
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

						<div id="headerShop" class="clearfix first">
							<a href="https://hues.xyz/shop" alt="Shop to support hues">
								<i class="fa fa-shopping-bag"></i> Shop &nbsp; <i class="fa fa-external-link"></i>
							</a>
						</div>

					</div>	<!--/headstack-->

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
