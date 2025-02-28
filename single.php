<?php get_header(); ?>

<?php 
global $post;

if (have_posts()) : 
    while (have_posts()) : the_post(); 
?>
    <div class="center-wpis">
        <div class="wpis">
            <div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
<?php 
    endwhile; 
else : 
    echo "<p>Nie znaleziono treści dla podanego adresu URL.</p>";
endif;
?>

<?php get_template_part('includes/section', 'kontakt'); ?>
<?php get_footer(); ?>