$(function () {
    // Згортає всі окрім першого блоку тексту
    $('.expland').each(function () {
        var firstDescription = $(this).find('.expland-description').first();
        var firstBtn = firstDescription.prev('.expland-title').find('.expland-btn');

        $(this).find('.expland-description').not(firstDescription).slideUp();
        $(this).find('.expland-title .expland-btn').not(firstBtn).attr('src', "/wp-content/themes/boussole/assets/img/elements/+.svg");
    });

    // Обробник кліків для розгортання блоків
    $('.expland-title').on('click', function () {
        var parent = $(this).closest('.expland');
        var description = $(this).next('.expland-description');
        var btn = $(this).find('.expland-btn');
        var isVisible = description.is(':visible'); // Фактичний стан видимості

        description.stop(true).slideToggle();
        btn.attr('src', isVisible ? "/wp-content/themes/boussole/assets/img/elements/+.svg" : "/wp-content/themes/boussole/assets/img/elements/-.svg");

        var siblings = parent.find('.expland-title').not(this);
        siblings.next('.expland-description').stop(true).slideUp();
        siblings.find('.expland-btn').attr('src', "/wp-content/themes/boussole/assets/img/elements/+.svg");
    });




    //перемикання табів
    // Початкове значення для перемикача табів
    let tab_value = "closed";

    // Функція для перемикання табів
    function switchTabs() {
        $('.tab').removeClass('active');
        $('.tab[value="' + tab_value + '"]').addClass('active');

        if (tab_value === 'actual') {
            // $('#fundraising-closed').hide();
            // $('#fundraising-actual').show();
        } else if (tab_value === 'closed') {
            $('#fundraising-closed').show();
            $('#fundraising-actual').hide();
        }
    }


    // Обробник кліку на таб
    $('.tab').on('click', function () {
        // tab_value = $(this).attr('value');
        switchTabs(); // Викликати функцію перемикання табів при кожному кліку
    });

    // Викликати функцію перемикання табів при завантаженні сторінки
    $(document).ready(function () {
        switchTabs();
    });



    //слайдер
    let slider_position = 0;
    let sliders_count = $('.result-slider').children().length;
    let touchStartX, touchEndX;
    let containerWidth;
    let slideWidth;
    let maxSlidesToShow;
    let slideSpacingPercentage;
    let transformValue;
    $('.result-slider').on('touchstart mousedown', function (e) {
        touchStartX = e.originalEvent.touches ? e.originalEvent.touches[0].clientX : e.clientX;
    });

    $('.result-slider').on('touchend mouseup', function (e) {
        touchEndX = e.originalEvent.changedTouches ? e.originalEvent.changedTouches[0].clientX : e.clientX;

        handleSwipe();
    });


    function handleSwipe() {
        const swipeThreshold = 50;

        if (touchStartX - touchEndX > swipeThreshold && slider_position < sliders_count - maxSlidesToShow) {
            slider_position += 1;
            updateSliderTransform();
        } else if (touchEndX - touchStartX > swipeThreshold && slider_position > 0) {
            slider_position -= 1;
            updateSliderTransform();
        }
    }

    $('.right-arrow').on('click', function () {
        if (slider_position < sliders_count - maxSlidesToShow) {
            slider_position += 1;
            updateSliderTransform();
        }
    });

    $('.left-arrow').on('click', function () {
        if (slider_position > 0) {
            slider_position -= 1;
            updateSliderTransform();
        }
    });

    function getMaxSlidesToShow() {
        containerWidth = $('.result-slider').width();
        slideWidth = $('.result-slider > *').first().width();
        return Math.floor(containerWidth / slideWidth);
    }
    function updateSliderTransform() {
        maxSlidesToShow = getMaxSlidesToShow();
        slideSpacingPercentage = parseFloat($('.result-slider').css('gap'));
        if (slider_position > sliders_count - maxSlidesToShow) {
            slider_position = sliders_count - maxSlidesToShow;
        }

        transformValue = `translate(calc(${slider_position} * (-100% - ${slideSpacingPercentage}%) * 1/${maxSlidesToShow}))`;

        $('.result-slider').css('transform', transformValue);

        // Оновлення стрілок
        if (slider_position === 0) {
            $('.left-arrow').attr('src', "../wp-content/themes/boussole/assets/img/elements/slider-arrow-disable.svg");
        } else if (slider_position === $('.result-slider').children().length - maxSlidesToShow) {
            $('.right-arrow').attr('src', "../wp-content/themes/boussole/assets/img/elements/slider-arrow-disable.svg");
        } else {
            $('.left-arrow, .right-arrow').attr('src', "../wp-content/themes/boussole/assets/img/elements/slider-arrow-active.svg");
        }
    }

    // Обробник події resize
    $(window).on('resize', function () {
        // Викликаємо функцію оновлення при зміні розміру вікна
        updateSliderTransform();
    });

    // Викликаємо функцію при завантаженні сторінки для ініціалізації
    $(document).ready(function () {
        updateSliderTransform();
    });

});

// плавний скролл
function scrollToElement(selector, offset) {
    var targetElement = document.querySelector(selector);
    var offsetTop = offset || -200;

    if (targetElement) {
        var scrollPosition = targetElement.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({
            top: scrollPosition + offsetTop,
            behavior: "smooth"
        });
    }
}

