<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 mt-3 single_body">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb single_body__breadcrumb">
                    <li class="breadcrumb-item single_body__breadcrumb-item">
                        <a href="/">Главная</a>
                    </li>
                    <li class="breadcrumb-item single_body__breadcrumb-item active" aria-current="page">
                        <?php the_title(); ?>
                    </li>
                </ol>
            </nav>
            <h1 class="single_body__h1">
                <?php the_title(); ?>
            </h1>
            <div class="card border-0 mt-3 px-3">
                <?php echo get_the_post_thumbnail($page->ID, 'img-fluid img-thumbnail border-0 single_body__price_block-img pt-3') ?>
                <div class="pt-3">
                    <?php while (have_posts()) : the_post();
                    the_content(); // выводим контент
                    endwhile; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>