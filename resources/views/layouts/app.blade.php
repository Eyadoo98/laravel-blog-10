<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            /*font-family: url('fonts/Readex_Pro/OFL.txt');*/
        }
        @font-face {
            font-family: readexPro;
            src: url('/fonts/Readex_Pro/static/ReadexPro-VariableFont_HEXP,wght.ttf');
        }
        body {
            font-family: readexPro !important;
        }
        @font-face {
            font-family: readexProBold;
            src: url('/fonts/Readex_Pro/static/ReadexPro-Bold.ttf');
        }
        @font-face {
            font-family: readexProLight;
            src: url('/fonts/Readex_Pro/static/ReadexPro-Light.ttf');
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" defer></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "b21a7d16-07d5-4fc2-b618-ecd11097a998",
            });
        });
    </script>
    @livewireStyles

</head>

<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    {{-- <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav> --}}

    @php
        use App\Models\TextWidget;
    @endphp
    <!-- Text Header -->
    <header class="w-full container mx-auto">
{{--        <div class="flex flex-col items-center py-12">--}}
{{--            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">--}}
{{--                Project Blog Make By Eyad Jafar--}}
{{--            </a>--}}
{{--            <p class="text-lg text-gray-600">--}}
{{--                {{ TextWidget::getTitle('header') }}--}}
{{--                This Website made with filament , tailwind , alpinejs , laravel , livewire--}}
{{--            </p>--}}
{{--        </div>--}}


    </header>

    <div style="font-family: 'readexProBold';">
        @include('layouts.navbar')
    </div>

    {{ $slot }}

    <x-sidebar></x-sidebar>

    <div class="container mx-auto flex flex-wrap py-6">

        </aside>

    </div>

    <footer class="w-full">
        {{-- <div class="relative w-full flex items-center invisible md:visible md:pb-12" x-data="getCarouselData()">
            <button
                class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button
                class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                x-on:click="increment()">
                &#8594;
            </button>
        </div> --}}
{{--        <div class="w-full container mx-auto flex flex-col items-center">--}}
{{--            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">--}}
{{--                --}}{{-- <a href="#" class="uppercase px-3">About Us</a>--}}
{{--                <a href="#" class="uppercase px-3">Privacy Policy</a>--}}
{{--                <a href="#" class="uppercase px-3">Terms & Conditions</a>--}}
{{--                <a href="#" class="uppercase px-3">Contact Us</a> --}}
{{--            </div>--}}
{{--            <div class="uppercase py-6">&copy; myblog.com</div>--}}
{{--        </div>--}}
    </footer>

    {{-- <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script> --}}

    @include('components.create-cv-section')
    @include('components.download-section')
    @include('components.footer')

@livewireScripts

</body>

</html>
