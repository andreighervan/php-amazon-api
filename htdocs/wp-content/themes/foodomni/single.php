<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WP
 */

get_header('single'); ?>

<section class="blog-single">
    <div class="container">
        <div class="col-lg-9 col-md-9 col-sm-9">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content-single' ); ?>

                <?php //the_post_navigation(); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // End of the loop. ?>

        </div><!-- #main -->
        <aside class="col-sm-3 right-blog-single col-md-3">
            <?php get_sidebar();?>
        </aside>
    </div>
</section>

<?php get_footer(); ?>
