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
                        <?php printf(__('Результаты поиска: %s'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
                    </li>
                </ol>
            </nav>
            <h1 class="single_body__h1">
                <?php printf(__('Результаты поиска: %s'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
            </h1>
            <div class="card border-0 mt-3 pb-3 px-3">

                <div class="pt-3">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xl-12">
                        <div class="card border-0 cat-card mt-4 mb-4">
                            <div class="card-body cat-product">
                                <div class="px-3 pt-2 cat-product__inner clearfix">
                                    <a class="cat-product-link" href="<?php the_permalink(); ?>">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                    </a>
                                    <div class="mt-1 cat-product__reviews float-right">
                                        <?php if (get_post_meta($post->ID, 'price', true)) : ?>Цена:
                                        <b>
                                            <?php echo get_post_meta($post->ID, 'price', true) ?> руб. </b> /
                                        <?php endif; ?>
                                        <?php if (get_post_meta($post->ID, 'power', true)) : ?>/ Мощность:
                                        <b>
                                            <?php echo get_post_meta($post->ID, 'power', true) ?> кВт</b>
                                        <?php endif; ?>
                                    </div>
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
    </div>
</div>
<?php get_footer(); ?>