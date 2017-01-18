<?php
// Almost the same version as in twentytwelve

if ( post_password_required() ):
    return false;
endif;
?>
<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>
    <?php if( have_comments() ): ?>
        <h2 class="comments-title">
            <?php
            printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'minimal-blank-theme' ),
            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); //@TODO : change i18n domain name to yours
            ?>
        </h2>

        <ol class="commentlist">
            <?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
        </ol><!-- .commentlist -->

        <?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
        <nav id="comment-nav-below" class="navigation" role="navigation">
            <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'minimal-blank-theme' ); //@TODO : change i18n domain name to yours ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'minimal-blank-theme' ) ); //@TODO : change i18n domain name to yours ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'minimal-blank-theme' ) ); //@TODO : change i18n domain name to yours ?></div>
        </nav>
        <?php endif; ?>

        <?php if( ! comments_open() && get_comments_number() ): ?>
            <p class="nocomments"><?php _e( 'Comments are closed.' , 'minimal-blank-theme' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>