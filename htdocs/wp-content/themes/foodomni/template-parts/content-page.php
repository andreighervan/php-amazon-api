<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Perth
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->