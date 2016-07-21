<?php
/**
 * The template part for displaying if there is no content
 *
 *
 * @package E-Net
 * @subpackage enet
 * @since E-Net 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
</article>