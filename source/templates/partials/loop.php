<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="post-header">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					  <?php the_title(); ?>
					</a>
				</h2>
				<p><?php the_time( __( 'F jS, Y', 'billy' ) ); ?></p>
				<p><?php the_author(); ?></p>
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php } ?>
			</section><!--end post-header-->
			<section class="entry">
				<?php the_content( __( 'Read more', 'billy' )); ?>
				<?php edit_post_link( __( 'Edit this', 'billy' ), '<p>', '</p>' ); ?>
			</section><!--end entry-->
			<section class="post-footer">
				<p><?php comments_popup_link( __( 'Leave a comment', 'billy' ), __( '1 Comment', 'billy' ), __( '% Comments', 'billy' ) ); ?></p>
			</section><!--end post-footer-->
		</article><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="pagination index">
			<div class="alignleft">
				<?php previous_posts_link( __( '&larr; Newer entries', 'billy' )); ?>
			</div>
			<div class="alignright">
				<?php next_posts_link( __( 'Older entries &rarr;', 'billy' )); ?>
			</div>
		</div><!--end pagination-->
	<?php else : ?>
<?php endif; ?>