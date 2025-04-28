<?php
/*
Template Name: Custom Page Template
*/

get_header();

?>
<main id="main-content">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            ?>
            <p><?php _e('Sorry, no content available.', 'theme-dev-classic'); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>
<?php

get_footer();
?>