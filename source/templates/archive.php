<?php get_header(); ?>
<article id="content">
	<?php if ( have_posts() ) : ?>
		<h1 class="small-header"><?php _e( 'Blog Archives', 'billy' ); ?></h1>
		<?php get_template_part( 'loop' ); ?>
	<?php else : ?>
		<p><?php _e( 'No posts found.', 'billy' ); ?></p>
	<?php endif; ?>
</article><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>