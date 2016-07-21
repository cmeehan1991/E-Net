<?php
/**
 * This is the main template file
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
        /*         * *******************************************************************************
         * Check if there are any posts. If so then check if this is the front page. 
         * If this is the home page, but is not the front page then display the post title
         * Display the Loop for all posts 
         * If there are not any posts then display the none template
         * ****************************************************************************** */



        if (have_posts()) {

            if (is_home() && !is_front_page()) {
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'preview');
                }
            } else if (is_home() && is_front_page()) {
                get_template_part('template-parts/content', 'home');
            }
        } else {
            get_template_part('template-parts/content', 'home');
        }
        ?>
    </main><!--.site-main-->
</div><!--.content-area-->
<?php
get_footer();
