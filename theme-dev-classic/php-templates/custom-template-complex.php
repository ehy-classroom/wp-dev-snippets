<?php
/*
Template Name: Custom Page Template Complex
*/

get_header();

?>
<main id="main-content">
    <?php if (is_front_page()) : ?>
        <h1><?php bloginfo('name'); ?></h1>
    <?php else : ?>
        <p><?php the_title(); ?></p>
    <?php endif; ?>
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