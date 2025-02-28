<div class="spacer front">
    <img src="<?php echo get_template_directory_uri(); ?>/images/500px.png" alt="" class="banner-img">
    <div class="opis"> 
        <?php
			$query = new WP_Query(array(
				'post_type' => 'post',
				'post_per_page' => '10',
				'category_name' => 'o-nas',
			));

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
</div>