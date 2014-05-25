<html <?php language_attributes( 'html' ) ?>>
<head>
	<title><?php wp_title(); ?></title>
	<!-- Basic Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- WordPress -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="site-header">
		<div id="site-title">
			<?php if ( is_front_page() ) echo( '<h1>' ); ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php if ( is_front_page() ) echo( '</h1>' ); ?>
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_id'    => 'site-navigation',
					'items_wrap'      => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
					'depth'           => '2'
					)
				);
		?>
	</header><!--end header-->