<?php
/**
 * This is the template for the article archive
 * 
 * @package E-Net
 * @subpackage enet
 * 
 */
get_header();
get_sidebar();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()):
            ?>
            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>
            </header><!-- .page-header -->
            <?php
        endif;
        ?>
    </main>
</div>