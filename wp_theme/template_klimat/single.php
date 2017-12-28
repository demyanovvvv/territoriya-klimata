<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-9 mt-3 single_body">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb single_body__breadcrumb">
                    <li class="breadcrumb-item single_body__breadcrumb-item">
                        <a href="/">Главная</a>
                    </li>
                    <li class="breadcrumb-item single_body__breadcrumb-item">
                        <a href="<?php $cat = get_the_category(); $cat = $cat[0]; echo get_category_link($cat->cat_ID);?>">
                            <?php $cat = get_the_category(); echo $cat[0]->cat_name;?>
                        </a>
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
                <?php if ( get_the_post_thumbnail($page->ID) ) : ?>
                <?php echo get_the_post_thumbnail($page->ID, 'img-fluid img-thumbnail border-0 single_body__price_block-img pt-3  mx-auto') ?>
                <?php else: ?>
                <img src="https://placeimg.com/840/250/tech/grayscale" class="img-fluid img-thumbnail border-0 single_body__price_block-img pt-3  mx-auto">
                <?php endif; ?>
                <div class="single_body__price_block mx-auto">
                    <div class="single_body__price_block-price">
                        <div class="d-inline-block single_body__price_block-price-num align-middle">
                            <?php echo get_post_meta($post->ID, 'price', true) ?> руб.</div>
                        <div class="d-inline-block single_body__price_block-price-call align-middle">
                            <a href="#" class="btn single_body__price_block-price__button-call" data-toggle="modal" data-target="#modal-zakaz-<?php echo get_the_ID(); ?>"
                                data-whatever="<?php the_title(); ?>">
                                <span class="single_body__price_block-price__button-call-icon"></span>
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="multiple-items mb-5">
                    <?php
                    $loop = CFS()->get( 'gallery' );
                    foreach ( $loop as $row ) {
                        echo 
                            '<div class="ml-3 mt-3">
                                <a class="fancybox-auto" href="', $row['image'], '">', '<img src="', $row['image'], '" class="single_body__price_block-img img-thumbnail"></a>
                            </div>';
                    }
                ?>
                </div>
                <div class="single_body__content row">
                    <ul class="nav nav-tabs col-xl-12" id="single_tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Описание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Характеристики</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Отзывы</a>
                        </li>
                    </ul>
                    <div class="tab-content single_body__content-descript p-3 col-xl-12" id="single_tabsContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php while (have_posts()) : the_post();
                            the_content();
                            endwhile; ?>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php if ( get_post_meta($post->ID, 'power', true) ) : ?>Мощность:
                            <b>
                                <?php echo get_post_meta($post->ID, 'power', true) ?> кВт</b>
                            <?php endif; ?>
                            <?php if ( get_post_meta($post->ID, 'characteristics', true) ) : ?>
                            <p>
                                <?php echo get_post_meta($post->ID, 'characteristics', true) ?>
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card border-0 mt-3 phone">
                <div class="card-body p-2">
                    <p class="phone__number">
                        <span>+7 (473) 2-600-600</span>
                        <span>+7 (473) 2-600-600</span>
                    </p>
                    <button data-toggle="modal" data-target="#phoneCall" class="btn btn-primary float-right" type="submit">Заказать звонок</button>
                </div>
            </div>

            <div class="card border-0 mt-3 address">
                <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/images/staticmap.png" alt="">
                <div class="card-body mt-3 p-2 address__text">
                    <b>Адрес: </b>
                    <p>Россия, Воронежская область, Воронеж, ул. Острогожская, 73А</p>
                    <a href="https://www.google.ru/maps/place/%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%B5%D0%B6,+%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%B5%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB./@51.6936647,39.0510767,10z/data=!3m1!4b1!4m5!3m4!1s0x413b2f5ce874e813:0x48d94c0efba762bd!8m2!3d51.6754966!4d39.2088823" class="btn btn-primary float-right">Смотреть на карте</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal zakaz -->
<div class="modal fade" id="modal-zakaz-<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-zakaz-<?php get_the_ID(); ?>Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-zakaz-<?php echo get_the_ID(); ?>Label">Заказ продукта
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="75" title="Заказ продукта"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>