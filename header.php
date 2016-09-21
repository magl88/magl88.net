<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage magl88-template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo( 'rdf_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo( 'rss_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS"
	      href="<?php bloginfo( 'comments_rss2_url' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title><?php typical_title(); ?></title>
	<?php wp_head(); ?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-62694904-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header>
		<div class="container">
			<div class="col-sm-6 log-warap">
				<a class="logo" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			<div class="col-sm-6">
				<div class="soc-link">
					<a href="http://vk.com/magl88" target="_blank"><span class="socicon">;</span></a>
					<a href="https://www.facebook.com/magl88net" target="_blank"><span class="socicon">b</span></a>
					<a href="https://plus.google.com/u/1/100662298123891003191/" target="_blank"><span
							class="socicon">c</span></a>
					<a href="https://github.com/magl88" target="_blank"><span class="socicon">Q</span></a>
					<a href="mailto:magl88net@gmail.com"><span class="socicon">@</span></a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav"
							        aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="#" class="navbar-brand  collapsed" data-toggle="collapse" data-target="#topnav">Меню</a>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array(
								'theme_location' => 'top',
								'container'      => false,
								'menu_id'        => 'top-nav-ul',
								'items_wrap'     => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class'     => 'top-menu',
								'walker'         => new bootstrap_menu( true )
							);
							wp_nav_menu( $args );
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>