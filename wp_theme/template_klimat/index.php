    <?php get_header(); ?>
    <div class="container">
        <?php get_template_part( 'offer_section' ); ?>
        <?php get_offer_section(); ?>
        <?php get_sort_section(); ?>
        <?php get_catalog_section(); ?>
        <?php get_others_section(); ?>
    </div>
    <?php get_footer(); ?>