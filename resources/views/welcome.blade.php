<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BK-EComerce</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"
        integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        /* General Style */
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);

        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body,
        html {
            font-size: 100%;
            padding: 0;
            margin: 0;
            height: 100%;
        }

        /* clearfix */
        .clearfix:before,
        .clearfix:after {
            content: " ";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        body {
            font-family: 'Roboto', Calibri, Arial, sans-serif;
            color: #89867e;
            background: #fff;
        }

        a {
            color: #888;
            text-decoration: none;
        }

        a:hover,
        a:active {
            color: #333;
        }

        /* Header Style */
        .main,
        .container>header {
            margin: 0 auto;
            padding: 2em;
        }

        .container>header {
            text-align: center;
        }

        .container>header h1 {
            font-size: 2.625em;
            line-height: 1.3;
            margin: 0;
            font-weight: 300;
        }

        .container>header span {
            display: block;
            font-size: 60%;
            opacity: 0.5;
            padding: 0 0 0.6em 0.1em;
        }

        .container {
            height: 100%;
            position: relative;
        }

        .container>section {
            margin: 0 auto;
            padding: 5em 0.5em;
            text-align: center;
            color: #fff;
        }

        .container>section div {
            position: relative;
            margin: 0;
            z-index: 1;
        }

        .container>section div.text {
            font-size: 1.4em;
        }

        .no-touch .note-touch {
            display: none;
        }

        .color-pattern-1 {
            background: #0e83cd;
        }

        .color-pattern-2 {
            background: #f06060;
        }

        .color-pattern-3 {
            background: #fcd04b;
        }

        .color-pattern-4 {
            background: #CC2E8C;
        }

        .color-pattern-5 {
            background: #0e83cd;
        }

        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .button {
            border: none;
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            padding: 25px 80px;
            display: inline-block;
            margin: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            outline: none;
            position: relative;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        /* Button 5 */
        .button-5 {
            background: #165F8E;
            color: #fff;
            min-height: 70px;
            min-width: 260px;
            line-height: 24px;
            font-size: 16px;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .button-5:active {
            background: #1871A9;
            top: 2px;
        }

        .button-5 span {
            display: inline-block;
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.3s;
            -webkit-backface-visibility: hidden;
            -moz-transition: all 0.3s;
            -moz-backface-visibility: hidden;
            transition: all 0.3s;
            backface-visibility: hidden;
        }

        .button-5>.fa {
            position: absolute;
            height: 100%;
            width: 100%;
            line-height: 2.5;
            font-size: 180%;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        .button-5:active>.fa {
            color: #53AFE8;
        }

        /* Button 5a */
        .button-5a:hover span {
            -webkit-transform: translateY(300%);
            -moz-transform: translateY(300%);
            -ms-transform: translateY(300%);
            transform: translateY(300%);
        }

        .button-5a>.fa {
            left: 0;
            top: -100%;
        }

        .button-5a:hover>.fa {
            top: 0;
        }

        /* Special trash effect */
        .trash-effect {
            position: relative;
            max-width: 320px;
            margin: 60px auto 0;
        }

        .trash-effect .icon-file {
            font-size: 30px;
            position: absolute;
            width: 50px;
            height: 50px;
            left: 50%;
            top: 50%;
            margin: -45px 0 0 -25px;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            -webkit-transform: translateX(90px) translateY(20px) scale(1);
            -moz-transform: translateX(90px) translateY(20px) scale(1);
            -ms-transform: translateX(90px) translateY(20px) scale(1);
            transform: translateX(90px) translateY(20px) scale(1);
        }

        .trash-effect .icon-file:nth-child(2) {
            -webkit-transform: translateX(140px) translateY(-10px) scale(1);
            -moz-transform: translateX(140px) translateY(-10px) scale(1);
            -ms-transform: translateX(140px) translateY(-10px) scale(1);
            transform: translateX(140px) translateY(-10px) scale(1);
            -webkit-transition-delay: 0.1s;
            -moz-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        .trash-effect .icon-file:nth-child(3) {
            -webkit-transform: translateX(140px) translateY(50px) scale(1);
            -moz-transform: translateX(140px) translateY(50px) scale(1);
            -ms-transform: translateX(140px) translateY(50px) scale(1);
            transform: translateX(140px) translateY(50px) scale(1);
            -webkit-transition-delay: 0.2s;
            -moz-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        .trash-effect.trash-effect-active .icon-file {
            -webkit-transform: translateX(-100px) translateY(-10px) scale(0);
            -moz-transform: translateX(-100px) translateY(-10px) scale(0);
            -ms-transform: translateX(-100px) translateY(-10px) scale(0);
            transform: translateX(-100px) translateY(-10px) scale(0);
        }

        @-webkit-keyframes openTrash {
            50% {
                -webkit-transform: rotate(-35deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
            }
        }

        @-moz-keyframes openTrash {
            50% {
                -moz-transform: rotate(-35deg);
            }

            100% {
                -moz-transform: rotate(0deg);
            }
        }

        @keyframes openTrash {
            50% {
                transform: rotate(-35deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

    </style>
</head>

<body class="antialiased">
    <header>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
    
            <ol class="carousel-indicators">
                <div class="col-md-12 hover-slide text-center">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/products') }}"> <button class="button  button-5 button-5a icon-cart"><i
                        class="fa fa-shopping-cart"></i> <span>Home</span></button>
            </a>
                    @else
                    <a href="{{ route('login') }}"> <button class="button  button-5 button-5a icon-cart"><i
                                class="fa fa-sign-in"></i> <span>Login</span></button>
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"> <button class="button  button-5 button-5a icon-cart"><i
                        class="fa fa-user-plus"></i> <span>Register</span></button>
            </a>
            @endif
            @endauth
            @endif
                </div>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('https://www.callofduty.com/content/dam/atvi/activision/atvi-touchui/blog/activision/body/COD-HOLIDAYGIFTGUIDE-003A.jpg')">

                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://cdn.shopify.com/s/files/1/2798/7708/files/MALLU_VIBE.jpg?v=1601551787')">

                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://media-wbp.wgcdn.co/media/filer_public/images/Wild_Leo.jpg')">

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <!-- Page Content -->

</body>

</html>
