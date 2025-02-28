<div class="spacer dlaczego">
    <?php if(is_front_page()) { ?>
        <h2>Co nas Wyróżnia ?</h2>
    <?php } ?>
    <?php 
        $args = array(
            'post_type' => 'post',
            'post_per_page' => '10',
            'category_name' => 'hero',
        );

        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
    ?>
        
        <div class="dlaczego-element" >
            <div>
                <h2><?= get_the_title(); ?></h2>
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