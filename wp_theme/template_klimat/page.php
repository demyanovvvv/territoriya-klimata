<?php get_header(); ?>
    <div class="container">
    <div class="row">
    <div class="col-xl-9">
    <div class="card border-0 mt-3 px-2">
    <?php while (have_posts()) : the_post();
        $more = 1; // отображаем полностью всё содержимое поста
        the_title(); // эта функция выводит заголовок
        the_content(); // выводим контент
    endwhile; ?>
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
            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/images/staticmap.png" alt="">
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