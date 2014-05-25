<?php get_header(); ?>
	<h1 class="page-title">
		<?php _e( '404: Page Not Found', 'billy' ); ?>
	</h1>
	<article>
		<p><?php _e( 'We are terribly sorry, but the URL you typed no longer exists. It might have been moved or deleted. Try searching the site:', 'billy' ); ?></p>
		<?php get_search_form(); ?>
	</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>