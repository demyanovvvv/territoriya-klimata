<div class="row mt-5 other-section">
    <div class="col-xl-6">
        <h3 class="other-section__header-promo">Акции</h3>
        <div class="row">
            <div class="col-xl-12 mt-3">
                <div class="row ">
                    <?php
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name' => 'akcii')); ?>
                        <?php if ($wpb_all_query->have_posts()) : ?>
                        <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                        <div class="col-xl-6">
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
                        <p class="container">
                            <?php _e('Извините, нет записей, соответствуюших Вашему запросу.'); ?>
                        </p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <h3 class="other-section__header-bestsellers">Хиты продаж</h3>
        <div class="row">
            <div class="col-xl-12 mt-3">
                <div class="row ">
                    <?php
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name' => 'hity-prodazh')); ?>
                        <?php if ($wpb_all_query->have_posts()) : ?>
                        <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                        <div class="col-xl-6">
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
                        <p class="container">
                            <?php _e('Извините, нет записей, соответствуюших Вашему запросу.'); ?>
                        </p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>