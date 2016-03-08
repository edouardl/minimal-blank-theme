<?php get_header(); ?>
<section class="entry-section">

    <?php if( have_posts() ): the_post(); ?>
    <article <?php post_class( 'entry' ); ?> id="page-<?php the_ID(); ?>" role="article">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <section class="entry-content">
            <?php the_content(); ?>
        </section>
    </article>
    <?php endif; ?>
	
	<?php wp_link_pages(); ?>
</section>
<?php get_footer(); ?>