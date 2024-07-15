<div class="spacer front">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="banner-img">
    <div class="opis"> 
        <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <p><?php the_content(); ?></p>
                    <?php
                endwhile;
            else :
                ?>
                <p>No content found.</p>
                <?php
            endif;
        ?>
    </div>
</div>