<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<section>
					<?php printf( __( 'by %s on', 'billy' ), get_the_author() ); ?> <?php the_date(); ?>
				</section>
				<section class="entry">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit this', 'billy' ), '<p>', '</p>' ); ?>
					<?php wp_link_pages(); ?>
				</section><!--end entry-->
				<section class="post-footer">
					<div class="tags">
						<?php the_tags( __( 'Tags: ', 'billy' ), ', ', '' ); ?>
					</div>
					<div class="cats">
						<?php printf( __( 'From: %s', 'billy' ), get_the_category_list( ', ' ) ); ?>
					</div>
				</section><!--end post footer-->
			</article><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php comments_template( '', true ); ?>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>