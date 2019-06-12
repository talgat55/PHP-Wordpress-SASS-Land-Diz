<?php


get_header(); ?>
    <h1 class="hide-title"><?php wp_title(''); ?></h1>
    <section id="slider">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-sm-9 col-xs-12 ">
                    <div class="content">
                        <p>
                            Только у нас
                        </p>
                        <h2 class="title-sub">
                            <span>Доставим дизельное топливо</span>
                            по Омску и Омской области за 24 часа


                        </h2>
                        <ul class="list-service row">
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-1.png') ?>" alt="иконка">
                                <h4 class="title">
                                    Бесплатная доставка
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-2.png') ?>" alt="иконка">
                                <h4 class="title">
                                    Напрямую от Газпрома<br>
                                    и ВПК-ОЙЛ
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-3.png') ?>" alt="иконка">
                                <h4 class="title">
                                    От 100 литров
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-4.png') ?>" alt="иконка">
                                <h4 class="title">
                                    Гарантия качества топлива
                                </h4>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="samples-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-sm-6 col-xs-12 text-center">

                    <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                         data-src="<?php echo get_theme_file_uri('/assets/images/botls.png') ?>" alt="Изображение">
                </div>
                <div class="col-sm-6 col-xs-12">
                    <?= do_shortcode('[contact-form-7 id="5" title="Заказа образцов топлива" html_class="form-sample"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="price-section">
        <div class="container ">
            <div class="row  ">
                <div class="col-sm-12 col-xs-12 text-center">

                    <h2 class="title-section">
                        цены<br>
                        <span>на топливо</span>
                    </h2>

                </div>
            </div>
            <div class="row  ">
                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="price-block">
                        <h4 class="title">
                            Евро-3
                            <span>
                                ВПК-ОЙЛ Коченевский НПЗ
                            </span>
                        </h4>
                        <img src="<?php echo get_theme_file_uri('/assets/images/price-1.jpg') ?>" alt="Изображение">
                        <div class="content">
                            <div class="price">
                                от <span>36,50*</span> руб./л
                            </div>
                            <div class="description">
                                <span>*</span>При самовывозе с базы
                            </div>

                        </div>
                        <div class="bottom">
                            <div class="row">
                                <a href="#" class="first-link col-sm-6 col-xs-12">
                                    Заказать онлайн
                                </a>
                                <a href="#" class="sescond-link col-sm-6 col-xs-12">
                                    Паспорт качества
                                </a>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="price-block">
                        <h4 class="title">
                            Евро-5
                            <span>
                              ГАЗПРОМНЕФТЬ НПЗ
                            </span>
                        </h4>
                        <img src="<?php echo get_theme_file_uri('/assets/images/price-2.jpg') ?>" alt="Изображение">
                        <div class="content">
                            <div class="price">
                                от <span>36,50*</span> руб./л
                            </div>
                            <div class="description">
                                <span>*</span>При самовывозе с базы
                            </div>

                        </div>
                        <div class="bottom">
                            <div class="row">
                                <a href="#" class="first-link col-sm-6 col-xs-12">
                                    Заказать онлайн
                                </a>
                                <a href="#" class="sescond-link col-sm-6 col-xs-12">
                                    Паспорт качества
                                </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="third-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-sm-7 col-xs-12  ">
                    <h2 class="title-section">
                        «Газпром» и «ВПК-ОЙЛ»<br>
                        <span>Мы работаем Напрямую от производителей</span>
                    </h2>
                    <ul class="list-text">
                        <li class="flex-container-row">
                            <span>
                                1
                            </span>
                            <p>
                                На заводе пломбируем цистерну и снимаем пломбу при вас.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>
                                2
                            </span>
                            <p>
                                При сливе используем двухступенчатую систему фильтрации. Благодаря этому топливо
                                сливается без конденсата, примесей и отходов.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>
                                3
                            </span>
                            <p>
                                В результате вы получаете дизельное топливо, безопасное для ваших ДВС.
                            </p>
                        </li>

                    </ul>


                </div>
                <div class="col-sm-5 col-xs-12">
                    <div class="bg-img">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/third-img.jpg') ?>"
                             alt="Изображение">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="four-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-sm-5 col-xs-12">
                    <div class="bg-img">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/four-img.png') ?>"
                             alt="Изображение">
                    </div>

                </div>
                <div class="col-sm-7 col-xs-12  ">
                    <h2 class="title-section white">
                        Отгружаем точное количество топлива
                    </h2>
                    <ul class="list-text">
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                При сливе используем топливные счетчики с погрешностью 0.1%. Вы лично контролируете
                                объём поставки.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Используем пистолеты с отсекателями, которые не допускают переливов.

                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Менеджер отслеживает отгрузку топлива с помощью глонасс мониторинга.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Заказы доставляют цистерны, которые оборудованные датчиками, не позволяющими незаметно
                                слить топливо.

                            </p>
                        </li>

                    </ul>


                </div>

            </div>
        </div>
    </section>
    <section id="step-section">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="title-section tree  ">
                        Этапы работы
                    </h2>
                </div>

            </div>
            <div class="row position-relative">
                <div class="col-sm-4 col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-1.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Менеджер связывается с вами, договаривается о встрече
                        </p>

                    </div>

                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-2.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Привозим образцы топлива, и вы оцениваете качество
                        </p>

                    </div>

                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-3.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Привозим ваш заказ в течение 24 часов со всеми документами

                        </p>

                    </div>

                </div>


            </div>
        </div>
    </section>
<?php get_footer();
