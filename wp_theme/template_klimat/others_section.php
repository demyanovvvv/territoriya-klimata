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
                        <div class="px-3  pt-2 cat-product__inner">
                            <a class="cat-product-link" href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail($page->ID, 'img-fluid img-thumbnail cat-product__img') ?>
                                <div class="cat-product__inner-link">
                                    <div class="cat-product__link"><?php the_title(); ?></div>
                                </div>
                            </a>
                            <div class="mt-1 cat-product__reviews">
                            <?php echo do_shortcode('[mr_rating_result]'); ?>
                                <!-- <img class="cat-product__reviews-stars" src="<?php bloginfo('template_directory'); ?>/images/stars.svg" alt=""> <span class="badge badge-light cat-product__reviews-num">(10)</span> <span class="badge badge-light cat-product__reviews-link">(<a href="#">отзывы</a>)</span> -->
                            </div>
                            <div class="row">
                                <div class="col-xl-8 mt-1">
                                    <a class="cat-product__price-link" href="<?php the_permalink(); ?>">
                                        <div class="cat-product__price">
                                        <?php echo get_post_meta($post->ID, 'price', true) ?> руб.
                                            <span>Подробнее</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 cat-product__button">
                                    <a class="btn btn-primary btn-sm cat-product__button-call" href="#" role="button">
                                        <span class="cat-product__button-call-icon"></span>
                                        заказать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="container"><?php _e('Извините, нет записей, соответствуюших Вашему запросу.'); ?></p>
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
                            <div class="px-3  pt-2 cat-product__inner">
                                <a class="cat-product-link" href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail($page->ID, 'img-fluid img-thumbnail cat-product__img') ?>
                                    <div class="cat-product__inner-link">
                                        <div class="cat-product__link"><?php the_title(); ?></div>
                                    </div>
                                </a>
                                <div class="mt-1 cat-product__reviews">
                                <?php echo do_shortcode('[mr_rating_result]'); ?>
                                    <!-- <img class="cat-product__reviews-stars" src="<?php bloginfo('template_directory'); ?>/images/stars.svg" alt=""> <span class="badge badge-light cat-product__reviews-num">(10)</span> <span class="badge badge-light cat-product__reviews-link">(<a href="#">отзывы</a>)</span> -->
                                </div>
                                <div class="row">
                                    <div class="col-xl-8 mt-1">
                                        <a class="cat-product__price-link" href="<?php the_permalink(); ?>">
                                            <div class="cat-product__price">
                                            <?php echo get_post_meta($post->ID, 'price', true) ?> руб.
                                                <span>Подробнее</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 cat-product__button">
                                        <a class="btn btn-primary btn-sm cat-product__button-call" href="#" role="button">
                                            <span class="cat-product__button-call-icon"></span>
                                            заказать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p class="container"><?php _e('Извините, нет записей, соответствуюших Вашему запросу.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>