<?php
/**
 * This is the main template file
 * 
 * @package E-Net
 * @subpackage enet
 * 
 */
?>
<!--This is an unordered list that will display the five most recent posts. If there are not posts to display then the phoenix symbol will show in place of the posts.-->
<ul class="sidebar">
    <?php
    if (have_posts()) {
        $numOfPosts = wp_count_posts();
        if ($numOfPosts > 5) {
            while (have_posts()):the_post();
                $count = 0;
                while ($count < 5):
                    ?><li><a href="<?php the_permalink(); ?>" rel="bookmark" tytle="Permanent Link to <?php the_title_attribute(); ?>"><?php sprintf("%s", the_title_attribute()); ?></a></li><?php
                endwhile;
            endwhile;
        } elseif ($numOfPosts == 0) {
            ?><li><img src="images/phoenix.png" alt="The Phoenix"/></li> <?php
        } else {
            // Start the loop.
            while (have_posts()) : the_post();
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                ?><li><a href="<?php the_permalink(); ?>" rel="bookmark" tytle="Permanent Link to <?php the_title_attribute(); ?>"><?php sprintf("%s", the_title_attribute()); ?></a></li><?php
                // End the loop.
                endwhile;
            }
        }
        ?>

</ul>
