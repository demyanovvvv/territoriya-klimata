<div class="footer-container">
    <footer class="mt-5 container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row ">
                            <div class="col-xl-2">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="footer-container__nav-header">Компания</div>
                                        <nav class="nav flex-column footer-container__nav-links">
                                            <a class="nav-link" href="#">О компании</a>
                                            <a class="nav-link" href="#">Новости</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="footer-container__nav-header">Информация</div>
                                        <nav class="nav flex-column footer-container__nav-links">
                                            <a class="nav-link" href="#">Помощь</a>
                                            <a class="nav-link" href="#">Условия оплаты</a>
                                            <a class="nav-link" href="#">Описание процесса оплаты с помощью банковской карты</a>
                                            <a class="nav-link" href="#">Условия доставки</a>
                                            <a class="nav-link" href="#">Гарантия на товар</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="footer-container__nav-header">Помощь</div>
                                        <nav class="nav flex-column footer-container__nav-links">
                                            <a class="nav-link" href="#">Статьи</a>
                                            <a class="nav-link" href="#">Производители</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="footer-container__nav-header">Социальные</div>
                                        <div class="row mt-3">
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="footer-container__social">
                                                            <a class="footer-container__social-link" href="#">
                                                                <img class="mr-3" src="<?php bloginfo('template_directory'); ?>/images/vk.svg"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="footer-container__social">
                                                            <a class="footer-container__social-link" href="#">
                                                                <img class="mr-3" src="<?php bloginfo('template_directory'); ?>/images/facebook.svg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="footer-container__social">
                                                            <a class="footer-container__social-link" href="#">
                                                                <img class="mr-3" src="<?php bloginfo('template_directory'); ?>/images/instagram.svg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="footer-container__social">
                                                            <a class="footer-container__social-link" href="#">
                                                                <img class="mr-3" src="<?php bloginfo('template_directory'); ?>/images/odnoklassniki.svg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card border-0">
                                    <div class="card-body mx-2 px-1">
                                        <div class="phone mb-5">
                                            <p class="phone__number text-left">
                                                <span>+7 (473) 2-600-600</span>
                                                <span>+7 (473) 2-600-600</span>
                                            </p>
                                        </div>
                                        <div class="address">
                                            <div class="address__text">
                                                <b>Адрес: </b>
                                                <p>Россия, Воронежская область, Воронеж, ул. Острогожская, 73А</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="col-xl-3 offset-xl-9 text-right">
                        © TERRITORIYA-KLIMATA.RU
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal phone -->
<div class="modal fade" id="phoneCall" tabindex="-1" role="dialog" aria-labelledby="phoneCallLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="phoneCallLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="56" title="Заказ звонка"]'); ?>
            </div>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<?php wp_footer(); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts.js"></script>


<script type="text/javascript">
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3
    });
</script>

    <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name' => 'kondicionery')); ?>
    <?php if ($wpb_all_query->have_posts()) : ?>
    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
    <script>
        $('#modal-zakaz-<?php echo get_the_ID(); ?>').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Заказать ' + recipient)
            modal.find('.modal-body textarea').text('Хочу заказать ' + recipient)
            modal.find('.modal-body .hiddeninput-title-product input').text('Заказали:\n' + recipient +
                '\nCсылка: <?php the_permalink(); ?>')
        })
    </script>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    </body>

    </html>