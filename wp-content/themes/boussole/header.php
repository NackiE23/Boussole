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
                    <a href="#" lang="en" class="text-btn1 language-btn" onclick="alert('Sorry, it`s coming soon!')">ENG</a>
                </nav>
                <address class="header-address text-h5">
                    <a href="tel:+380965009550" class="phone-nomber">+380 96 500 95 50</a>
                </address>
            </div>
        </div>
    </header>