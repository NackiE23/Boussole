<?php
/*
Template Name: home */
get_header();
?>

<section id="hero-section" class="hero-section">

    <div class="hero-content">
        <h1 class="text-h1"><?php the_field('heading-one') ?></h1>
        <p class="text-b1"><?php the_field('description-one') ?> </p>
    </div>
    <button onclick="scrollToElement('#details')" class="button-main arrow-white">Допомога ЗСУ</button>
</section>


<!-- <section class="counter-section">
    <div class="container">
        <ul class="counters-list">
            <li class="counter-box">
                <p class="text-h2">1039</p>
                <h3 class="text-b2">Лічильник успішних проєктів</h3>
            </li>
            <li class="counter-box">
                <p class="counter-indicator text-h2">98</p>
                <h3 class="text-b2">Лічильник успішних проєктів</h3>
            </li>
            <li class="counter-box">
                <p class="counter-indicator text-h2">9.4 млн</p>
                <h3 class="text-b2">Лічильник успішних проєктів</h3>
            </li>
            <li class="counter-box">
                <p class="counter-indicator text-h2">75%</p>
                <h3 class="text-b2">Лічильник успішних проєктів</h3>
            </li>
        </ul>
    </div>
</section> -->

<section id="fundraising-section" class="fundraising-section">
    <div class="fundraising-section-title">
        <h2 class="text-h2">Збори</h2>
        <div class="fundraising-tabs text-h5">
            <p value="actual" class="tab" onclick="alert('Наразі всі збори закрито, зовсім скоро ви зможете долучитись')">Актуальні</p>
            <p value="closed" class="tab">Закриті</p>
        </div>
    </div>
    <div class="container">


        <ul id="fundraising-actual" class="fundraising-list ">
            <?php
            global $post;

            $myposts = get_posts(['numberposts' => 6, 'category_name' => 'actual-fundraising',]);
            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    // Отримати ID прикріпленого зображення (thumbnail)
                    $thumbnail_id = get_post_thumbnail_id();
                    // Отримати атрибут 'alt' для прикріпленого зображення
                    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            ?>
                    <li class="fundraising-card">
                        <article>
                            <a href="#" class="fundraising-img-box">
                                <?php the_post_thumbnail(array(520, 347), array(
                                    'class' => "fundraising-img",
                                    'alt'   => $alt_text,
                                )); ?>
                            </a>
                            <h3 class="fundraising-title text-b1"><?php the_title(); ?></h3>
                            <!-- <div class="fundraising-description"><?php // echo get_the_content(); 
                                                                        ?></div> -->
                            <a class="arrow-secondary">Детальніше</a>
                        </article>
                    </li>
            <?php
                }
            } else {
                // Постів не знайдено
            }
            wp_reset_postdata(); // Скидуємо $post
            ?>


        </ul>
        <ul id="fundraising-closed" class="fundraising-list ">
            <?php
            global $post;

            $myposts = get_posts(['numberposts' => 6, 'category_name' => 'closed-fundraising',]);
            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    // Отримати ID прикріпленого зображення (thumbnail)
                    $thumbnail_id = get_post_thumbnail_id();
                    // Отримати атрибут 'alt' для прикріпленого зображення
                    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            ?>
                    <li class="fundraising-card">
                        <article>
                            <a href="#" class="fundraising-img-box">
                                <?php the_post_thumbnail(array(520, 347), array(
                                    'class' => "fundraising-img",
                                    'alt'   => $alt_text,
                                )); ?>
                            </a>
                            <h3 class="fundraising-title text-b1"><?php the_title(); ?></h3>
                            <!-- <div class="fundraising-description"><?php // echo get_the_content(); 
                                                                        ?></div> -->
                            <a class="arrow-secondary">Детальніше</a>
                        </article>
                    </li>
            <?php
                }
            } else {
                // Постів не знайдено
            }
            wp_reset_postdata(); // Скидуємо $post
            ?>


        </ul>
    </div>
</section>

<section class="become-a-partner-section">
    <div class="container">
        <div class="become-a-partner-box">
            <div class="become-a-partner-decoration">
                <div class="become-a-partner-union-box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elements/union.svg" alt="" class="become-a-partner-union">
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/elements/sqr.svg" alt="" class="become-a-partner-sqr">
            </div>
            <div class="become-a-partner-content-box">
                <h2 class="text-h2">Стати партнером</h2>
                <p class="text-b2">Ми – сильні, коли об’єднані. Разом ми можемо зробити кратно більше. Якщо у вас є
                    пропозиції, або якщо ви бажаєте долучитись до діючих ініціатив – напишіть нам.</p>
                <button onclick="location.href='mailto:boussole.com.ua@gmail.com'" class="button-white">Зв’язатися з нами</button>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="about-us-section">
    <div class="container">
        <article class="about-us-box">
            <div class="about-us-main">
                <h2 class="text-h2">Про нас</h2>
                <p class="text-b2">«Бусоль» — благодійний фонд, створений для ефективної допомоги українським військовим. Ми зосереджені на закупівлі спецзасобів і товарів подвійного призначення та підтримці ініціатив, спрямованих на покращення боєздатності підрозділів.
                </p>
                <p class="text-b2">Фонд займається не лише наданням тимчасової допомоги, а й створенням середовища, де військовослужбовці можуть отримати компетентну допомогу в будь-який час.</p>
                <p class="text-b2">Наша місія — посилювати обороноздатність України, та окремих підрозділів ЗСУ, та реалізовувати сучасні проєкти, спрямовані на модернізацію засобів протидії ворогу. Наші цінності можна описати трьома словами: відповідальність, вмотивованість, саморозвиток.</p>
            </div>

            <img class="about-us-img" src="<?php bloginfo('template_url'); ?>/assets/img/map.svg" alt="">

            <ul class="about-us-data">
                <li>
                    <p class="about-us-data-name text-b2">Рік заснування</p>
                    <p class="text-h4">2023</p>
                </li>
                <li>
                    <p class="about-us-data-name text-b2">Штаб-квартира</p>
                    <p class="text-h4">Хмельницький</p>
                </li>
                <li>
                    <p class="about-us-data-name text-b2">Виконаних запитів</p>
                    <p class="text-h4">140+</p>
                </li>
                <li>
                    <p class="about-us-data-name text-b2">Робітників</p>
                    <p class="about-us-data-value text-h4">20</p>
                </li>
            </ul>
        </article>
    </div>
</section>

<section class="advantages-section">
    <div class="container">
        <div class="advantages-box">
            <h2 class="hide">Наші переваги</h2>
            <article class="advantages-block">
                <p class="advantages-nomber text-h2">01</p>
                <h3 class="advantages-heading text-h5">Спрямованість</h3>
                <p class="advantages-description text-b2">Ми сфокусовані на вузькому переліку обладнання: FPV-дрони,
                    квадрокоптери, телеметрія, засоби зв’язку. Основа нашої ефективності — живе спілкування з
                    кращими фахівцями, які щодня застосовують вищевказані засоби на практиці.</p>
            </article>
            <article class="advantages-block">
                <p class="advantages-nomber text-h2">02</p>
                <h3 class="advantages-heading text-h5">Логістика й точковість</h3>
                <p class="advantages-description text-b2">Доставляємо допомогу в будь-яку точку ведення бойових дій
                    та напряму співпрацюємо з військовими на передовій. Це дозволяє нам швидко закривати «гарячі»
                    запити. Точкова допомога — це те, що потрібно «на вже».</p>
            </article>
            <article class="advantages-block">
                <p class="advantages-nomber text-h2">03</p>
                <h3 class="advantages-heading text-h5">Пріоритизація запитів</h3>
                <p class="advantages-description text-b2">Беремо запити, які можемо закрити швидко та якісно. Інформаційний супровід та цільові збори для всіх, хто звертається по допомогу. Щоденні комунікації з військовими на різних ділянках фронту формують чітку мапу потреб на найближчі місяці.</p>
            </article>
            <article class="advantages-block">
                <p class="advantages-nomber text-h2">04</p>
                <h3 class="advantages-heading text-h5">Звітність</h3>
                <p class="advantages-description text-b2">Мова не тільки про фото та відео передачі майна та акти
                    приймання-передачі. Завдяки нам ви завжди знаєте, кому і чим допомогли ваші донати, та яким
                    чином ваша допомога покращує боєздатність армії та наближає перемогу. </p>
            </article>
        </div>
    </div>
</section>


<section id="main-activity" class="main-activity-section">
    <div class="container">
        <article class="main-activity-box">
            <div class="main-activity-content">
                <h2 class="h-decoration text-h2">Основні напрямки діяльності</h2>
            </div>
            <ul class="main-activity-list">


                <?php
                global $post;

                $myposts = get_posts(['numberposts' => 6, 'category_name' => 'main-activity',]);
                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        // Отримати ID прикріпленого зображення (thumbnail)
                        $thumbnail_id = get_post_thumbnail_id();
                        // Отримати атрибут 'alt' для прикріпленого зображення
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>


                        <li>
                            <?php the_post_thumbnail(array(520, 347), array(
                                'alt'   => $alt_text,
                            )); ?>
                            <div>
                                <h3 class="text-b1"><?php the_title(); ?></h3>
                                <div class="text-info"><?php echo get_the_content(); ?></div>
                            </div>
                        </li>
                <?php
                    }
                } else {
                    // Постів не знайдено
                }
                wp_reset_postdata(); // Скидуємо $post
                ?>


            </ul>
        </article>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <div class="partners_box">
            <h2 class="text-h2">Наші партнери</h2>
            <ul>

                <?php
                global $post;
                $myposts = get_posts(['numberposts' => 3, 'category_name' => 'partners',]);
                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        // Отримати ID прикріпленого зображення (thumbnail)
                        $thumbnail_id = get_post_thumbnail_id();
                        // Отримати атрибут 'alt' для прикріпленого зображення
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                        <li> <?php
                                the_post_thumbnail(
                                    array(520, 347), // вказані розміри
                                    array(
                                        'class' => "partner-img",
                                        'alt'   => $alt_text,
                                    )
                                );
                                ?>
                        </li>
                <?php
                    }
                } else {
                    // Постів не знайдено
                }
                wp_reset_postdata(); // Скидуємо $post
                ?>
            </ul>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="faq-box">
            <div class="faq-left">
                <div id="faq-reports" class="faq-reports">
                    <h2 class="text-h2">Звіти</h2>
                    <div class="archive">
                        <p class="text-h5 arrow-white">Грудень 2023</p>
                        <p class="text-h5 arrow-white">Листопад 2023</p>
                        <p class="text-h5 arrow-white">Всі звіти</p>
                    </div>
                </div>
                <div class="faq-other-questions">
                    <p class="text-h5">Залишились питання?</p>
                    <a href="mailto:boussole.com.ua@gmail.com" class="text-b2 telegram-icon">Напишіть нам</a>
                </div>
            </div>
            <div id="faq-content" class="faq-content">
                <h2 class="text-h2">Часті питання</h2>
                <ul class="expland">
                    <li>
                        <article>
                            <div class="expland-title">
                                <h3 class="text-b1">Хто ми і чим займаємося?</h3>
                                <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                            </div>
                            <p class="expland-description text-b2">Ми — команда волонтерів і фахівців різних напрямків, які об’єдналися, щоб допомогти армії ефективно і безпечно робити свою роботу. Коли «несистемна» волонтерка стала займати більше часу, ніж професійна діяльність, ми об’єднались, щоб разом вирішувати складні та, подекуди, новаторські завдання, шукати перевірені рішення, та втілювати новітні ідеї з використанням сучасних технологій. Важливо не тільки перемогти ворога зараз, а забезпечити такий рівень розвидку, який унеможливлює наступні акти агресії.</p>
                        </article>

                    </li>
                    <li>
                        <article>
                            <div class="expland-title">
                                <h3 class="text-b1">Яка подальша доля мого донату?</h3>
                                <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                            </div>
                            <p class="expland-description text-b2">100% ваших донатів йдуть на закриття актуальних потреб ЗСУ. Кожен цільовий збір чітко спрямований на конретну ініціативу. Навіть якщо ви просто робите переказ на фонд, у вас завжди є можливість вибрати напрямок руху коштів з переліку активних ініціатив.</p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <div class="expland-title">
                                <h3 class="text-b1">Я живу за кордоном, як залишити донат?</h3>
                                <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                            </div>
                            <p class="expland-description text-b2">Дуже просто, за номером рахунку у зручній для вас валюті (EUR, USD, UAH), або на PayPal.</p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <div class="expland-title">
                                <h3 class="text-b1">Де я можу переглянути звіти?</h3>
                                <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                            </div>
                            <p class="expland-description text-b2">Для ознайомлення з цифрами перейдіть до блоку «Звіти», для знайомства з людьми, яким ви допомогли перегляньте блок «Результати», або фото та відео звіти у нас в соцмережах.</p>
                        </article>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="result-section">
    <div class="container">
        <div class="result-box">
            <h2 class="text-h2">Результати</h2>

            <div class="result-slider-arrows">
                <img class="left-arrow" src="<?php bloginfo('template_url'); ?>/assets/img/elements/slider-arrow-disable.svg" alt="">
                <img class="right-arrow" src="<?php bloginfo('template_url'); ?>/assets/img/elements/slider-arrow-active.svg" alt="">
            </div>

            <div class="result-slider">
                <? $result_img_urls = get_img_urls_from_post(88);
                foreach ($result_img_urls as $img_url) {
                    echo '<img src="' . esc_url($img_url) . '" alt="">';
                } ?>
            </div>
        </div>
    </div>
</section>

<section id="contacts" class="contacts-section">
    <div class="container">
        <div class="contacts-section-box">
            <div id="details" class="details">
                <h2 class="text-h2">Реквізити для донату</h2>
                <ul class="expland">
                    <li>
                        <div class="expland-title">
                            <h3 class="text-b1">Банківський переказ по Україні</h3>
                            <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                        </div>
                        <div class="expland-description text-b2">
                            <p class="text-h4">UA 64 305299 00000 26003036011461</p>
                            <p>Одержувач: БО БФ БУСОЛЬ</p>
                            <p>ЄДРПОУ: 45255268</p>
                            <p>Назва банку: АТ КБ "ПРИВАТБАНК"</p>
                            <p>Призначення платежу: Благодійний безповоротний внесок</p>
                        </div>
                    </li>
                    <li>
                        <div class="expland-title">
                            <h3 class="text-b1">SWIFT перекази з-за кордону</h3>
                            <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                        </div>
                        <div class="expland-description text-b2">
                            <p>Euros (EUR)</p>
                            <p class="text-h4">UA 79 305299 00000 26000026009817</p>
                            <p>US Dollars (USD)</p>
                            <p class="text-h4">UA 64 305299 00000 26002006013081</p>
                            <p>Beneficiary: Boussole Charity organization</p>
                            <p>Beneficiary Address: 29013, Ukraine, Khmelnytskyi, Kamianetska street, build. 72, sq. 2</p>
                            <p>Beneficiary bank: JSC CB PRIVATBANK</p>
                            <p>Bank Address: PRIVATBANK, 1D Hrushevskogo str., Kyiv, 01001, Ukraine
                                SWIFT code: PBANUA2X</p>
                        </div>

                    </li>
                    <li>
                        <div class="expland-title">
                            <h3 class="text-b1">Переказ на карту</h3>
                            <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                        </div>
                        <div class="expland-description text-b2">
                            <p>ПриватБанк</p>
                            <p class="text-h4">5221 1911 0137 3370</p>
                            <p>Монобанк</p>
                            <p class="text-h4">5375 4114 1958 7543</p>
                            <p>Одержувач: Палига Микола</p>
                            <p>Призначення платежу: Благодійний безповоротний внесок</p>
                        </div>
                    </li>
                    <li>
                        <div class="expland-title">
                            <h3 class="text-b1">Paypal</h3>
                            <img class="expland-btn" src="<?php bloginfo('template_url'); ?>/assets/img/elements/-.svg" alt="">
                        </div>
                        <div class="expland-description text-b2">
                            <p class="text-h4">mykola.palyha@gmail.com</p>
                            <p>Обов’язковий коментар: Благодійний безповоротний внесок</p>
                        </div>
                    </li>
                    </li>
                </ul>
            </div>
            <address class="contacts">
                <h2 class="h-decoration text-h2">Контакти</h2>
                <div class="contacts-description text-b2">
                    <p>Наш фонд завжди відкритий для співпраці та допомоги.</p>
                    <p>Маєте питання, ідеї чи просто хочете обговорити можливості спільної роботи? Зв'яжіться з нами зручним для вас способом:</p>
                </div>
                <ul>
                    <li>
                        <p class="contact-name text-b2">Номер телефону</p>
                        <a href="tel:+380965009550" class="text-h4">+380 96 500 95 50</a>
                    </li>
                    <li>
                        <p class="contact-name text-b2">Електрона адреса</p>
                        <a href="mailto:boussole.com.ua@gmail.com" class="text-h4">boussole.com.ua@gmail.com</a>
                    </li>
                    <li>
                        <p class="contact-name text-b2">Соціальні мережі</p>
                        <div class="contacts-social">
                            <a href="#" class="arrow-secondary text-b1">Facebook</a>
                            <a href="#" class="arrow-secondary text-b1">Instagram</a>
                            <a href="#" class="arrow-secondary text-b1">Twitter</a>
                        </div>
                    </li>
                </ul>
            </address>
        </div>
    </div>
</section>

<section id="send-request" class="send-request-section">
    <div class="container">
        <div class="send-request-box">
            <div class="send-request-content">
                <h2 class="text-h2">Надіслати запит</h2>
                    <p class="text-b2">Ваша робота важлива, і ми тут, щоб допомогти. Напишіть нам про свої потреби. Ми спробуємо надати Вам належну підтримку. Дякуємо за вашу службу.</p>
                    <button onclick="location.href='mailto:boussole.com.ua@gmail.com'" class="button-white">Зв’язатися з нами</button>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/send-request-man2.png" alt="">
        </div>
    </div>
</section>

<?php get_footer() ?>