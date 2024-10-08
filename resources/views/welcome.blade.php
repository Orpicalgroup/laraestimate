<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Attics and More Customer Quotes Portal') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700,600,500,400" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Montserrat', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .footer {
                display: block;
                width: 100%;
                position: fixed;
                bottom: 0;
                left: 0;
                text-align: center;
            }

            .heart {
                fill: #e74c3c;
                position: relative;
                top: 5px;
                width: 15px;
                animation: pulse 1s ease infinite;
            }

            @keyframes  pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.3); }
                100% { transform: scale(1); }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('estimates.index') }}">@lang('app.my_estimates')</a>
                    @else
                        <a href="{{ route('login') }}">@lang('app.login')</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="m-b-md">
                    <img src="{{ asset('/images/logo.png') }}" alt="LaraEstimate Logo Image" height="150px">
                </div>

                <div class="m-b-md">
                    <h2>Customer Quotes Portal</h2>
                </div>

                <div class="footer">
                    <p><strong>Disclaimer:</strong> This area is for customers only.</p>
                </div>
            </div>
        </div>
    </body>
</html>
