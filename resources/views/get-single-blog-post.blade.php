<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: readexProBold;
            src: url('/fonts/Readex_Pro/static/ReadexPro-Bold.ttf');
        }
        @font-face {
            font-family: readexProLight;
            src: url('/fonts/Readex_Pro/static/ReadexPro-Light.ttf');
        }

        body {
            font-family: readexPro !important;
            font-family: 'readexProLight';
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 12px 0 !important;
            font-family: 'readexProBold';
        }
        p{
            margin-bottom: 9px;
            font-family: 'readexProLight';
        }
        h1{
            font-size: 22px;
        }
        h2{
            font-size: 24px;
        }
        h3{
            font-size: 18.72px;
        }
        h4{
            font-size: 16px;
        }
        h5{
            font-size: 13.28px;
        }
        h5{
            font-size: 10.72px;
        }

        a {
            color: blue;
        }

        ol {
            list-style-type: decimal;
        }

        ul {
            list-style-type: disc;
        }

        p, h1 {
            margin-bottom: 10px;
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
        OneSignal.push(function () {
            OneSignal.init({
                appId: "b21a7d16-07d5-4fc2-b618-ecd11097a998",
            });
        });
    </script>

</head>

<body class="bg-white font-family-karla">
<!-- Text Header -->
<header class="w-full container mx-auto">

    @livewireStyles
</header>
<div dir="ltr" style="font-family: 'readexProBold';">
    @include('layouts.navbar')
</div>


<div class="container mx-auto p-9">
    <div class="flex">
        <div class="hidden lg:block w-1/6"></div>
        <div class="w-full">
            <span class="font-bold float-left" style="font-family: 'readexProBold';">تم النشر في   {{$posts->created_at->toDateString()}} </span><br>
            <span class="font-bold float-left" style="font-family: 'readexProBold';">  الكاتب: {{ $posts->user->name ?? '' }}  </span>
            <div class="font-bold text-right mb-4 text-2xl lg:text-3xl" style="font-family: 'readexProBold';">
                {{ $posts->title }}
            </div>
            <div class="h-auto lg-h-full">
                <img src="{{url($posts->thumbnail)}}" alt="img-blog" class="w-full">
            </div>
            <div class="container mx-auto">
                <div class="flex">
                    <div class="hidden lg:block w-1/6"></div>
                    <div class="w-full ">
                        <div class="bg-white flexx flex-col justify-start p-6">
                            @foreach($categories as $category)
                                <span class="text-2xl font-bold ml-9">{{$category->title}}</span>
                            @endforeach
                            <div class="h-9"></div>
                            {!! $posts->body !!}
{{--                            {!!tiptap_converter()->asHTML($posts->body) !!}--}}
                        </div>
                    </div>
                    <div class="hidden lg:block  w-1/6"></div>
                </div>
            </div>

        </div>
        <div class="w-1/6 hidden lg:block"></div>
    </div>
</div>


<div dir="ltr">
    @include('components.create-cv-section')
    @include('components.download-section')
    @include('components.footer')
</div>

@livewireScripts

</body>

</html>
