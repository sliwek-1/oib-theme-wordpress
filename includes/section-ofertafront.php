<?php if(is_page('strona-glowna')) { ?> 
    <div name="Oferta" class="spacer oferta-front">
        <h1>Oferta</h1>
        <div class="center-front">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => '10',
                    'category_name' => 'oferta',
                );

                $query = new WP_Query($args);

                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
            ?>
                
                <div class="animation-card-front" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?= get_the_title(); ?>.png" alt="" class="banner-img">
                    <div>
                        <h2><?= get_the_title(); ?></h2>
                        <p>
                            <?= get_the_excerpt(); ?>
                        </p>
                        <a href="<?= get_the_permalink(); ?>">więcej</a>
                    </div>
                </div>

            <?php 
                    }
                    wp_reset_postdata();
                } else {
                    echo "Brak postów";
                }
            ?>
        </div>
    </div>
<?php } else { ?>
    <div class="info">
        <h1>Nasza Oferta</h1>
    </div>
    <?php get_template_part('includes/oferta', 'mnioferta') ?>
<?php } ?>