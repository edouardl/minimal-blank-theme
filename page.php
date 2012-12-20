<?php get_header(); ?>
<section class="entry-section">

	<?php if( have_posts() ): the_post(); ?>
	<article <?php post_class( 'entry' ); ?> id="page-<?php the_ID(); ?>" role="article">
		<?php
		// Content example for CSS ajustments - Uncomment it if you need
		//get_template_part( 'content', 'example' );
		?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="entry-content">
			<?php the_content(); ?>
		</section>
	</article>
	<?php endif; ?>
	
</section>
<?php get_footer(); ?>