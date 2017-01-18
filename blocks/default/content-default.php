<article <?php post_class( 'entry' ); ?> id="post-<?php the_ID(); ?>" role="article">
	<h1 class="entry-title"><?php the_title(); ?></h1>
		<section class="entry-content">
			<?php
			// Content example for CSS ajustments - Uncomment it if you need
			//get_template_part( 'blocks/default/the-content', 'example' );
			the_content();
			 ?>
	</section>
</article>