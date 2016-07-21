<?php
/**
 * The template part for displaying if there is no content
 *
 *
 * @package E-Net
 * @subpackage enet
 * @since E-Net 1.0
 */
get_header();
get_sidebar();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'enet' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'enet' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(sprintf(__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'enet' ),get_the_title()),'<footer class="entry-footer"><span class="edit-link">','</span></footer><!-- .entry-footer -->');
	?>

</article><!-- #post-## -->
<?php 
get_footer();