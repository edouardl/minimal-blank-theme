<?php
// Duplicate this file to create archive, tax, search, etc. templates. And customize it
?>
<?php get_header(); ?>
<section class="entry-section">

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	<article <?php post_class( 'entry' ); ?> id="post-<?php the_ID(); ?>" role="article">
			<h3 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<section class="entry-content">
				<?php the_excerpt(); ?>
			</section>
			<a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Read more', 'minimal-blank-theme' ); ?></a>
	</article>
	<?php endwhile; endif; ?>
	
</section>
<?php get_footer(); ?>