<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>

    <?php wp_head() ?>

    <!-- <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./script.js"></script> -->

</head>

<body>
    <header>
        <div class="container">
            <div class="header-flex">
                <nav class="header-nav">

                    <?
                    // отримуємо посилання на лого
                    $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>

                    <a href="/"><img src="<?php echo $custom_logo__url[0]; ?>" alt="Logo"></a>
                    <ul class="header-menu text-b2">
                        <li class="scroll-link" onclick="scrollToElement('#fundraising-section')">Збори</li>
                        <li class="scroll-link" onclick="scrollToElement('#about-us')">Про нас</a></li>
                        <li class="scroll-link" onclick="scrollToElement('#faq-reports')">Звіти</a></li>
                        <li class="scroll-link" onclick="scrollToElement('#faq-content')">Часті питання</a></li>
                        <li class="scroll-link" onclick="scrollToElement('#contacts')">Контакти</li>
                        <li class="scroll-link arrow-secondary" onclick="scrollToElement('#send-request')">Надіслати запит</li>
                    </ul>
                    <div id="switch-lang">
                        <div class="current-lang">
                            <a class="text-btn1 language-btn">ENG</a>
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
                                    <path d="M480,344.181L268.869,131.889c-15.756-15.859-41.3-15.859-57.054,0c-15.754,15.857-15.754,41.57,0,57.431l237.632,238.937   c8.395,8.451,19.562,12.254,30.553,11.698c10.993,0.556,22.159-3.247,30.555-11.698l237.631-238.937   c15.756-15.86,15.756-41.571,0-57.431s-41.299-15.859-57.051,0L480,344.181z"/>
                            </svg>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="dropdown-lang">
                                <a href="#" lang="uk" class="text-btn1 language-btn" onclick="alert('Sorry, it`s coming soon!')">UKR</a>
                                <a href="#" lang="jp" class="text-btn1 language-btn" onclick="alert('Sorry, it`s coming soon!')">日本語</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <address class="header-address text-h5">
                    <a href="tel:+380965009550" class="phone-nomber">+380 96 500 95 50</a>
                </address>

                <div id="menu-opener">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="full-page-menu">
                    <div class="inner">
                        <div class="scroll-link" onclick="scrollToElement('#hero-section')">Головна</div>
                        <div class="scroll-link" onclick="scrollToElement('#fundraising-section')">Збори</div>
                        <div class="scroll-link" onclick="scrollToElement('#about-us')">Про нас</a></div>
                        <div class="scroll-link" onclick="scrollToElement('#faq-reports')">Звіти</a></div>
                        <div class="scroll-link" onclick="scrollToElement('#faq-content')">Часті питання</a></div>
                        <div class="scroll-link" onclick="scrollToElement('#contacts')">Контакти</div>
                        <div class="scroll-link arrow-secondary" onclick="scrollToElement('#send-request')">Надіслати запит</div>

                        <button onclick="scrollToElement('#details')" class="button-main">Допомогти ЗСУ</button>

                        <a href="mailto:boussole.com.ua@gmail.com">
                            <p class="text-h4">boussole.com.ua@gmail.com</p>
                        </a>

                        <div class="footer-social">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/elements/facebook.svg" alt=""></a>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/elements/instagram.svg" alt=""></a>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/elements/twiter.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>