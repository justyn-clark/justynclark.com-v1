<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!-- CSS Stylesheets -->
	<link rel='stylesheet'  href='http://www.justynclark.com/wp-content/themes/justynclark/css/foundation-icons.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='http://www.justynclark.com/wp-content/themes/justynclark/css/animate.min.css' type='text/css' media='all' />

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header class="header" role="banner"> 
<nav class="navigation" role="navigation">
<div id="header-menu" class="header-menuwrapper"> 
<button class="header-trigger">
<span>J</span>
</button>
<ul class="header-menu">
	<li> <a href="/">
	<i class="fi-home">
	</i> Home</a>
	</li>
	<li> <a href="/portfolio"><i class="fi-folder"></i>Portfolio</a>
	</li>
	<li>
	<a href="/blog" title="Blog" class="featured">
	<i class="fi-pencil">
	</i> Blog</a>
	</li>
	<li>
	<a href="http://resume.justynclark.com" target="_blank" title="Blog" class="featured">
	<i class="fi-page">
	</i> Resume</a>
	</li>
	<li>
	<a href="mailto:justyn@justynclark.com" title="Contact" class="featured">
	<i class="fi-mail">
	</i>Contact</a>
	</li>
	<hr style="margin: 0;">

<ul class="socialHome">
<li class="socialHome"><a href="https://instagram.com/justyn.clark" title="Instagram" class="featured" target="_blank"><i class="fi-social-instagram"></i></a></li>
<li class="socialHome"><a href="https://facebook.com/justynclark" title="Facebook" class="featured" target="_blank"><i class="fi-social-facebook"></i></a></li>
<li class="socialHome"><a href="https://twitter.com/justynclark" title="Twitter" class="featured" target="_blank"><i class="fi-social-twitter"></i></a></li>
<li class="socialHome"><a href="https://github.com/justyn-clark" title="GitHub" class="featured" target="_blank"><i class="fi-social-github"></i></a></li>
<li style="padding: 0px" class="socialHome"><a href="https://www.linkedin.com/in/justinclarkjohnson" title="LinkedIn" class="featured" target="_blank"><i class="fi-social-linkedin"></i></a></li>
</ul>


</ul>
</div>
 </nav>
  </header>



