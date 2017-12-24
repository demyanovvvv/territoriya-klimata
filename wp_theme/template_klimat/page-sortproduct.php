<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 mt-5">
            <div class="row">
                <div class="col-xl-10">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb single_body__breadcrumb">
                            <li class="breadcrumb-item single_body__breadcrumb-item">
                                <a href="/">Главная</a>
                            </li>
                            <li class="breadcrumb-item single_body__breadcrumb-item active" aria-current="page">
                                <?php printf(__('Результаты поиска %s'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="single_body__h1">
                        <?php printf(__('Результаты поиска %s'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
                        <a href="#sort" class="badge ">к сортировке</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mt-3">
            <div class="row ">
                <?php
             $args = array(); // подготовим массив
             $args['meta_query'] = array('relation' => 'OR'); // отношение между условиями, у нас это "И то И это", можно ИЛИ(OR)
             global $wp_query; // нужно заглобалить текущую выборку постов
         
             if ($_GET['power_ot'] != '' || $_GET['power_do'] != '') { // если передано поле "Цена от" или "Цена до"
                 if ($_GET['power_ot'] == '') {
                     $_GET['power_ot'] = 0;
                 } // если "Цена от" пустое, то значит от 0 и выше
                 if ($_GET['power_do'] == '') {
                     $_GET['power_do'] = 9999999;
                 } // если "Цена до" пустое, то будет до 9999999
                $args['meta_query'][] = array( // пешем условия в meta_query
                    'key' => 'power', // название произвольного поля
                    'value' => array( (int)$_GET['power_ot'], (int)$_GET['power_do'] ), // переданные значения ОТ и ДО для интервала передаются в массиве
                    'type' => 'numeric', // тип поля - число
                    'compare' => 'BETWEEN' // тип сравнения, здесь это BETWEEN - т.е. между "Цены от" и до "Цены до"
                    );
             }

             if ($_GET['price_ot'] != '' || $_GET['price_do'] != '') { // если передано поле "Цена от" или "Цена до"
                 if ($_GET['price_ot'] == '') {
                     $_GET['price_ot'] = 0;
                 } // если "Цена от" пустое, то значит от 0 и выше
                 if ($_GET['price_do'] == '') {
                     $_GET['price_do'] = 9999999;
                 } // если "Цена до" пустое, то будет до 9999999
                 $args['meta_query'][] = array( // пешем условия в meta_query
                     'key' => 'price', // название произвольного поля
                     'value' => array( (int)$_GET['price_ot'], (int)$_GET['price_do'] ), // переданные значения ОТ и ДО для интервала передаются в массиве
                     'type' => 'numeric', // тип поля - число
                     'compare' => 'BETWEEN' // тип сравнения, здесь это BETWEEN - т.е. между "Цены от" и до "Цены до"
                     );
             }
                     
             query_posts(array_merge($args, $wp_query->query));

            $wpb_all_query = new WP_Query($args); ?>
                    <?php if ($wpb_all_query->have_posts()) : ?>
                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <div class="col-xl-3">
                        <div class="card border-0 cat-card">
                            <div class="card-body cat-product">
                                <div class="px-3 pt-2 cat-product__inner">
                                    <a class="cat-product-link" href="<?php the_permalink(); ?>">
                                        <div style="height: 180px">
                                            <?php if (get_the_post_thumbnail($page->ID)) : ?>
                                            <?php echo get_the_post_thumbnail($page->ID, 'thumbnail', array('class' => 'img-fluid img-thumbnail cat-product__img mt-3 mb-3')) ?>
                                            <?php else: ?>
                                            <img src="https://placeimg.com/200/200/tech/grayscale" class="img-fluid img-thumbnail border-0 single_body__price_block-img pt-3 mt-3">
                                            <?php endif; ?>
                                        </div>
                                        <div class="cat-product__inner-link mt-3 mb-3">
                                            <div class="cat-product__link">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- <div class="mt-1 cat-product__reviews">

                        </div> -->
                                    <div class="row">
                                        <div class="col-xl-8 mt-1 mb-4">
                                            <a class="cat-product__price-link" href="<?php the_permalink(); ?>">
                                                <div class="cat-product__price">
                                                    <?php echo get_post_meta($post->ID, 'price', true) ?> руб.
                                                    <span>Подробнее</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-4 cat-product__button">
                                            <a href="#" class="btn btn-primary btn-sm cat-product__button-call" data-toggle="modal" data-target="#modal-zakaz-<?php echo get_the_ID(); ?>"
                                                data-whatever="<?php the_title(); ?>" role="button">
                                                <span class="cat-product__button-call-icon"></span>
                                                заказать
                                            </a>
                                        </div>
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

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p>
                        <?php _e('Извините, нет записей, соответствуюших Вашему запросу.'); ?>
                    </p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="sort"></div>
    <?php get_template_part('sort_section'); ?>

</div>
<?php get_footer(); ?>