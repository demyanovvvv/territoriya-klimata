<?php get_header(); ?>
<div class="container">
<div class="row">
    <div class="col-xl-9 mt-3 single_body">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb single_body__breadcrumb">
                <li class="breadcrumb-item single_body__breadcrumb-item">
                    <a href="#">Главная</a>
                </li>
                <li class="breadcrumb-item single_body__breadcrumb-item">
                    <a href="<?php $cat = get_the_category(); $cat = $cat[0]; echo get_category_link($cat->cat_ID);?>">
                        <?php $category = get_the_category(); echo $category[0]->cat_name;?>
                    </a>
                </li>
                <li class="breadcrumb-item single_body__breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
        <h1 class="single_body__h1"><?php the_title(); ?></h1>
        <div class="card border-0 mt-3 px-3">
            <?php echo get_the_post_thumbnail($page->ID, 'img-fluid img-thumbnail border-0 single_body__price_block-img pt-3') ?>
            <div class="single_body__price_block mx-auto">
                <div class="single_body__price_block-price">
                    <div class="d-inline-block single_body__price_block-price-num align-middle"><?php echo get_post_meta($post->ID, 'price', true) ?> руб.</div>
                    <div class="d-inline-block single_body__price_block-price-call align-middle">
                        <a class="btn single_body__price_block-price__button-call" href="#" role="button">
                            <span class="single_body__price_block-price__button-call-icon"></span>
                            заказать
                        </a>
                    </div>
                </div>
            </div>

            <div class="multiple-items mb-5">
                <div class="ml-3 mt-3">
                    <a href="#">
                        <img src="https://placeimg.com/200/200/people" class="single_body__price_block-img img-thumbnail">
                    </a>
                </div>
                <div class="ml-3 mt-3">
                    <a href="#">
                        <img src="https://placeimg.com/200/200/people" class="single_body__price_block-img img-thumbnail">
                    </a>
                </div>
            </div>

            <div class="text-right mb-3"><?php echo do_shortcode('[mr_rating_result]'); ?></div>

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
                        <?php while( have_posts() ) : the_post();
                        the_content(); // выводим контент
                        endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php echo get_post_meta($post->ID, 'characteristics', true) ?>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <?php echo do_shortcode('[]'); ?>
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
            <button class="btn btn-primary float-right" type="submit">Заказать звонок</button>
        </div>
    </div>

    <div class="card border-0 mt-3 address">
        <img class="card-img-top" src="images/staticmap.png" alt="">
        <div class="card-body mt-3 p-2 address__text">
            <b>Адрес: </b>
            <p>Россия, Воронежская область, Воронеж, ул. Острогожская, 73А</p>
            <button class="btn btn-primary float-right" type="submit">Смотреть на карте</button>
        </div>
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>