<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Makeup&Perfuems</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f1f1f1;
                background-image : linear-gradient(120deg,#3498db,#8e44ad);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                color : #fff;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color : #fff;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Makeup & Perfuems (POS)
                </div>

                <div class="links">
                    <a href="https://www.google.com/search?sxsrf=ACYBGNTDvVABnBuKk70wflFZQPJeHTEG0g:1578526424963&q=makeup+products&tbm=isch&source=univ&sa=X&ved=2ahUKEwi6hNCWlfXmAhXyz4UKHUWQA0AQsAR6BAgKEAE&biw=1920&bih=969">Display Products</a>
                    <a href="https://laracasts.com">Add Product</a>
                    <a href="https://laravel-news.com">Edit a Product</a>
                    <a href="https://blog.laravel.com">Delete Product</a>
                    <a href="https://nova.laravel.com">Search for a Product</a>
                </div>
            </div>
        </div>
    </body>
</html>
