<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config("app.name") }}</title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        @yield('css')
        @vite('resources/css/app.css')

    </head>
    <body class=" bg-[#FBFBFB]">
             {{-- Nav Start --}}
        <div class=" flex justify-between items-center px-5 md:px-12 bg-white shadow py-2 mb-5 sticky top-0 z-10">
            {{-- <img src="{{ asset() }}" alt=""> --}}
            <a href="{{ route('products') }}">
                <h3 class=" text-2xl px-4 py-1 rounded-full">Lara <span class=" text-violet-500">Shop</span></h3>
            </a>

            <div class=" text-2xl relative">
                <i class="bx bx-heart"></i>
                <i class="bx bx-user"></i>
                <a href="{{ route('cart') }}"><i class="bx bx-cart"></i></a>
                <span class=" absolute top-0 -right-2.5 bg-indigo-500 rounded-full w-4 h-4 text-xs text-white text-center">3</span>
            </div>
        </div>
             {{-- Nav End --}}

        <main>@yield('content')</main>

        <footer class="">
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-5">

            </div>
            <p class=" text-gray-400 text-center my-3">Copyright {{ date('Y') }} Lara Shop | Designed by <a class=" underline" href="https://zawyenaung.site/">ZYN</a></p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:false,
                    dots:false,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:1,
                        }
                    }
                })
            });
        </script>
        @yield('scripts')
    </body>
</html>
