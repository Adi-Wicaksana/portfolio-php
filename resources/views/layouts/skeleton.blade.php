<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/favicon_io/icon.ico') }}" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">

    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">

    <title>@yield('title')</title>
</head>

<body class="mt-2 body-wrap">
    <div class="container">
        @include('layouts.navbar')

        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(document).ready(function() {
            // ============== SWIPER ==============
            // ================
            // ===== HOME =====
            // ================
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                speed: 1000,
                followFinger:false,
                allowTouchMove: false,
                // freeMode: true,
            });

            $('a[data-slide]').click(function(e) {
                $('a[data-slide]').removeClass('active');

                e.preventDefault();
                var slideno = $(this).data('slide');
                swiper.slideTo(slideno, 1000)
                $(this).toggleClass('active');
            });

            swiper.on('slideChangeTransitionEnd', function() {
                $('a[data-slide]').removeClass('active');

                var active = swiper.activeIndex;
                $('a[data-slide="' + active + '"]').addClass('active');
            });

            // ====================
            // ===== FAMILIAR =====
            // ====================
            const swiper_familiar = new Swiper('.swiper-familiar', {
                // Optional parameters
                direction: 'vertical',
                freeMode: true,
                grabCursor: true,
                autoHeight: false,
                slidesPerView: 4,
                mousewheel: {
                    forceToAxis: true,
                    sensitivity: 1,
                    releaseOnEdges: true,
                },
            });
            // ====================================

            // =====================
            // === SCROLL SMOOTH ===
            // =====================
            function onMouseWheel(e) {
                clearTimeout($.data(this, 'timer'));
                $(".swiper-familiar .swiper-wrapper").addClass('mousewheel');
                $.data(this, 'timer', setTimeout(function() {
                    $(".swiper-familiar .swiper-wrapper").removeClass('mousewheel')
                }, 250));
            }

            window.addEventListener('mousewheel', onMouseWheel, false)
            window.addEventListener('DOMMouseScroll', onMouseWheel, false)
        })
    </script>
</body>

</html>