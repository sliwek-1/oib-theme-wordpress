<div class="portfoilio-main">
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
            <div class="portfolio-article">
                <h2 class="portfolio-title"><?php the_title(); ?></h2>
                <div class="tags-section">
                    <?php 
                        if($tags) {
                            foreach($tags as $tag) {
                    ?>
                                <p class="portfolio-tag">#<?= $tag->name ?></p>
                    <?php        
                            }
                        }
                    ?>
                </div>
                <div class="portfolio-schort-desc">
                    <?php the_content(); ?>
                </div>
            </div>

    <?php
            }
        } else {
            echo 'Brak wpisów do wyświetlenia.';
        }
        wp_reset_postdata();
    ?>
</div>