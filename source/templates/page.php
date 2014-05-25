<?php get_header(); ?>
	<?php the_post(); ?>
		<article id="page-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
			<?php } ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php comments_template( '', true ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>