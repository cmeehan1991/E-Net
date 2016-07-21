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
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php 
        // Start the loop
        while (have_posts()){
            the_post();
            // Include the page content template
            get_template_part('template-parts/content','page');
            
            // If the comments are open or we have at least one comment, load up the comment template
            if(comments_open() || get_comments_number()){
                comments_template();
            }
        }
        ?>
    </main>
</div>
