<?php if(is_page('oferta') || is_page('strona-glowna')) { ?> 
    <div name="Oferta" class="spacer oferta">
        <div class="info">
            <h1>Oferta</h1>
        </div>
        <div class="center">
            <?php get_template_part('includes/section', 'ofertadynamic'); ?>
        </div>
    </div>
<?php } else { ?>
    <div class="info">
        <h1>Nasza Oferta</h1>
    </div>
    <?php get_template_part('includes/oferta', 'mnioferta') ?>
<?php } ?>