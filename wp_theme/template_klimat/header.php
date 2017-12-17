<!doctype html>
<html lang="ru">

<head>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
<!-- 
    <div class="container">
        <nav class="top_menu text-right">
            <ul class="top_menu__list">
                <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">О нас</a></li>
                <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Доставка</a></li>
                <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Контакты</a></li>
            </ul>
        </nav>
    </div>

    <nav class="main_menu navbar navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="main_menu__logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_img.svg" alt="">
            </a>
            <span class="main_menu__logo-text">Интернет-каталог <br> климатической техники</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto ">
                    <li class="main_menu__nav-item nav-item dropdown">
                        <a class="nav-link main_menu__nav-item-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="main_menu__nav-item-icon" src="images/view-list.svg" alt=""> Каталог
                        </a>
                        <div class="dropdown-menu border-0 main_menu__nav-dropcat" aria-labelledby="navbarDropdown">
                        <?php if ( function_exists( 'wp_nav_menu' ) ){
                        wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_id' => 'dropdown_nav', 'container_class' => 'bottomMenu', 'fallback_cb'=>'primarymenu') );
                        }else{
                        primarymenu();
                        }?>
                        </div>
                    </li>
                    <li class="main_menu__nav-item nav-item">
                        <a class="main_menu__nav-item-link nav-link" href="#"><img class="main_menu__nav-item-icon" src="images/wrench.svg" alt=""> Услуги</a>
                    </li>
                    <li class="main_menu__nav-item nav-item">
                        <a class="nav-link" href="#"><img class="main_menu__nav-item-icon" src="images/cart.svg" alt=""> Как купить?</a>
                    </li>
                </ul>
                <form class="form-inline main_menu__search my-2 my-lg-0">
                    <div class="input-group">
                        <input type="text" class="form-control main_menu__search-input" placeholder="Что найти?" aria-label="Search for...">
                        <span class="input-group-btn">
                                <button class="btn main_menu__search-button" type="button"><img class="main_menu__search-button-icon" src="<?php bloginfo('template_url'); ?>/images/magnify.svg" alt=""></button>
                                </span>
                    </div>
                </form>
            </div>
        </div>
</nav>

<div class="container">
    <nav class="top_menu text-right">
        <ul class="top_menu__list">
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">О нас</a></li>
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Доставка</a></li>
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Контакты</a></li>
        </ul>
    </nav>
</div> -->

<div class="container">
    <nav class="top_menu text-right">
        <ul class="top_menu__list">
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">О нас</a></li>
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Доставка</a></li>
            <li class="top_menu__item d-inline"><a class="top_menu__item-link" href="#">Контакты</a></li>
        </ul>
    </nav>
</div>

<nav class="main_menu navbar navbar-expand-xl navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="main_menu__logo-img" src="<?php bloginfo('template_directory'); ?>/images/logo_img.svg" alt="">
        </a>
        <span class="main_menu__logo-text">Интернет-каталог <br> климатической техники</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="main_menu__nav-item nav-item dropdown">
                    <a class="nav-link main_menu__nav-item-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="main_menu__nav-item-icon" src="<?php bloginfo('template_directory'); ?>/images/view-list.svg" alt=""> Каталог
                    </a>
                    <div class="dropdown-menu border-0 main_menu__nav-dropcat" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header mt-3 main_menu__nav-dropcat-header">Кондиционеры</h6>
                        <div class="row">
                            <div class="col-xl-4">
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Сплит-системы</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Мульти сплит-системы с инверторным управлением</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Кассетные сплит-системы</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Инверторные кондиционеры</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Кассетные сплит-системы</span></a>
                            </div>
                            <div class="col-xl-4">
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Инверторные кондиционеры</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Колонные сплит-системы</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Канальные сплит-системы</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Инверторные кондиционеры</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Канальные кондиционеры</span></a>
                            </div>
                            <div class="col-xl-4">
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Мобильные кондиционеры</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Напольно-потолочные сплит-системы</span></a>
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Кондиционеры АКЦИИ</span></a>
                            </div>
                        </div>
                        <h6 class="dropdown-header mt-3 main_menu__nav-dropcat-header">Увлажнители / Осушители</h6>
                        <div class="row">
                            <div class="col-xl-4">
                                <a class="dropdown-item main_menu__nav-dropcat-link" href="#"><span>Увлажнители и очистители воздуха</span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="main_menu__nav-item nav-item">
                    <a class="main_menu__nav-item-link nav-link" href="#"><img class="main_menu__nav-item-icon" src="<?php bloginfo('template_directory'); ?>/images/wrench.svg" alt=""> Услуги</a>
                </li>
                <li class="main_menu__nav-item nav-item">
                    <a class="nav-link" href="#"><img class="main_menu__nav-item-icon" src="<?php bloginfo('template_directory'); ?>/images/cart.svg" alt=""> Как купить?</a>
                </li>
            </ul>
            <form class="form-inline main_menu__search my-2 my-lg-0">
                <div class="input-group">
                    <input type="text" class="form-control main_menu__search-input" placeholder="Что найти?" aria-label="Search for...">
                    <span class="input-group-btn">
                              <button class="btn main_menu__search-button" type="button"><img class="main_menu__search-button-icon" src="<?php bloginfo('template_directory'); ?>/images/magnify.svg" alt=""></button>
                            </span>
                </div>
            </form>
        </div>
    </div>
</nav>