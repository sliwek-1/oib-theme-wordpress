<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'category_name' => 'Portfolio', // Opcjonalnie: Filtruj według kategorii
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $post_id = get_the_ID();
        $tags = get_the_tags($post_id);

?>

        <h2><?php the_title(); ?></h2>
        <div class="tags-section">
            <?php 
                if($tags) {
                    foreach($tags as $tag) {
            ?>
                        <p>#<?= $tag->name ?></p>
            <?php        
                    }
                }
            ?>
        </div>
        <p><?php the_date(); ?></p>
        <div><?php the_excerpt(); ?></div>
        <?php the_content(); ?>


<?php
        }
    } else {
        echo 'Brak wpisów do wyświetlenia.';
    }
    wp_reset_postdata();
?>