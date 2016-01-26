<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php wp_title('•'); ?></title>
    <link rel="stylesheet" href="/wp-content/themes/journaldomexpo/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
	<link href="/favicon.png" rel="shortcut icon">
	<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-retina.png" />
	<link rel="alternate" type="application/rss+xml" title="jefaisconstruire.fr : Flux RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="jefaisconstruire.fr : Flux Atom" href="<?php bloginfo('atom_url'); ?>" />
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="/wp-content/themes/journaldomexpo/css/ie8.css">
	<![endif]-->
	<script src="/wp-content/themes/journaldomexpo/js/css_browser_selector.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26261139-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<header class="wrapper container">
		<?php if (is_home() && !is_paged()): ?>
			<h1>Je fais construire</h1>
		<?php else : ?>
			<a href="/" class="logo">Je fais construire</a>
		<?php endif; ?>
		<nav>
			<a href="/construction" title=""<?php if (in_category('construction') && !is_front_page()) echo ' class="active"'; ?>>Construction</a>
			<a href="/normes-eco-construction" title=""<?php if (in_category('normes-eco-construction') && !is_front_page()) echo ' class="active"'; ?>>Normes &amp; éco-construction</a>
			<a href="/financement" title=""<?php if (in_category('financement') && !is_front_page()) echo ' class="active"'; ?>>Financement</a>
			<a href="/garanties-ccmi" title="" class="last<?php if (in_category('garanties-ccmi') && !is_front_page()) echo ' active'; ?>">Garanties &amp; CCMI</a>
		</nav>
		<a href= "http://www.domexpo.fr" target="_blank" class="retour-domexpo">Un site parrainé par Domexpo</a>
	</header>