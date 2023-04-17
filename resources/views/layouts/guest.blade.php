<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
            
            overflow-x: hidden;
            }
        
            label {
            font-weight: 600;
            color: #666;
        }
        
        .box8{
          box-shadow: 0px 0px 5px 1px #999;
        }
        .mx-t3{
          margin-top: -3rem;
        }
        .buttonyellow{
            background: url(photos/button_yellow.png) no-repeat left center transparent;
            background-size: 100% 80%;
            color: #fff !important;
            text-decoration: none;
            padding: 1em 3em 1em;
            display: inline-block;
        }

        .register{
            margin-top:-4%;
        }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 register">
            <div>
                <a href="/">
                    <img src="/photos/logo-removebg-preview.png" alt="Bootstrap" width="140" height="90" id="logo">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <div> 
            <img src="photos/kc_footer-illustration.png" class="img-fluid " alt="registration" style="margin-bottom: -10%;">
          </div>
    </body>
</html>
