<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flash</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

</head>
<body>
<section id="products">
    <div class="container">
        <div class="title">
            <img src="{{ asset('i/product_header_text.png') }}" class="text" style="" alt="">
        </div>
        <div class="wrapper product-items">
            <div class="product-item mojito">
                <img src="{{ asset('i/product_energy_mojito.png') }}" alt="Flash" class="body">
                <img src="{{ asset('i/product_energy_mojito_text_ru.png') }}" alt="Flash" class="head">
            </div>
            <div class="product-item ultra">
                <img src="{{ asset('i/product_energy_ultra.png') }}" alt="Flash" class="body">
                <img src="{{ asset('i/product_energy_ultra_text_ru.png') }}" alt="Flash" class="head">
            </div>
            <div class="product-item energy">
                <img src="{{ asset('i/product_energy_energy.png') }}" alt="Flash" class="body">
                <img src="{{ asset('i/product_energy_energy_text_ru.png') }}" alt="Flash" class="head">
            </div>
            <div class="product-item berry">
                <img src="{{ asset('i/product_energy_berry.png') }}" alt="Flash" class="body">
                <img src="{{ asset('i/product_energy_berry_text_ru.png') }}" alt="Flash" class="head">
            </div>
        </div>

        <div class="swiper product-items-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide mojito">
                    <img src="{{ asset('i/product_energy_mojito_text_ru.png') }}" alt="Flash" class="head">
                    <img src="{{ asset('i/product_energy_mojito.png') }}" alt="Flash" class="body ">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('i/product_energy_ultra_text_ru.png') }}" alt="Flash" class="head">
                    <img src="{{ asset('i/product_energy_ultra.png') }}" alt="Flash" class="body">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('i/product_energy_energy_text_ru.png') }}" class="head">
                    <img src="{{ asset('i/product_energy_energy.png') }}" alt="Flash" class="body">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('i/product_energy_berry_text_ru.png') }}" class="head">
                    <img src="{{ asset('i/product_energy_berry.png') }}" class="body">
                </div>
            </div>
            <div class="swiper-actions">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="social-items">
                <div class="social-item">
                    <img src="{{ asset('i/icon-social-facebook.png') }} " width="54" height="54" alt="facebook">

                </div>
                <div class="social-item">
                    <img src="{{ asset('i/icon-social-vk.png') }}" width="54" height="54" alt="vk">
                </div>
                <a class="social-item" href="https://flashupenergy.kz/instagram" target="_blank">
                    <img src="{{ asset('i/icon-social-insta.png') }}" width="277" height="53" alt="insta">
                </a>
        </div>


    </div>
    <img src="{{ asset('i/bg_left_arrow.png') }}" alt="arrow" class="left_arrow">
    <img src="{{ asset('i/bg_right_arrow.png') }}" alt="arrow" class="right_arrow">
</section>

<script type="text/javascript" src=" {{ asset('js/script.js')}}"></script>

<script type="text/javascript">
    $(document).ready(() => {
        window.index()
        $('[data-remodal-id=promo_closed]').remodal().open()
    })
</script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".product-items-slider", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>
</html>
