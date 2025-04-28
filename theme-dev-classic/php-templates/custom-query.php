<?php
// Custom Query für eine bestimmte Kategorie
$args = [
    'category_name' => 'example-category', // Ersetze 'example-category' durch den Slug deiner Kategorie
    'posts_per_page' => 5, // Anzahl der anzuzeigenden Beiträge
];

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    endwhile;
    wp_reset_postdata(); // Wichtig, um die Haupt-Query zurückzusetzen
else :
    ?>
    <p><?php _e('Sorry, no posts matched your criteria.', 'theme-dev-classic'); ?></p>
    <?php
endif;
?>