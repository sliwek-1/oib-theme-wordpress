<div class="spacer onas">
    <h1>O nas</h1>

    <?php
    $query = new WP_Query(array('pagename' => 'o-nas'));

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <p><?php the_content(); ?></p>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <p>No content found.</p>
        <?php
    endif;
    ?>
</div>