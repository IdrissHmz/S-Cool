<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SCOOL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .light-blue-bg {
                background: lightblue;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .header {
                position: relative;
                top: 0;
                width: 100vw;
                height: 100px;
                align-items: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 29px;
                top: 38px;
            }

            .content {
                height: 400px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .presentation {
                display:grid;
                grid-template-columns: 40% auto ;
                grid-template-areas: "text-card image";

            }
            .text-card {
                border-radius: 50px;
                padding: 50px;
                margin: 50px;
                width: 80%;
                height: 80%;
                background: rgb(87,196,218);
                background: linear-gradient(354deg, rgba(87,196,218,1) 8%, rgba(255,255,255,1) 100%);
                box-shadow: 5px 10px rgba(15, 10, 10, 0.48);
            }
            .text-card  button {
                border-radius: 10%;
                background: #000;
                padding: 8px 15px;
                margin-top: 70px;
                position: relative ;
                left: 150px;

            }
            button a{
                color: white;
                text-decoration: none;
                font-size: 18px;
            }
            .img-container{
                position: relative;
                padding: 25px;
                margin: 20px;
            }
        </style>
    </head>
    <body>
    <div id="app">
        <div class="position-ref full-height">
            <div class="light-blue-bg header">
                <img class="logo" src="#" alt="logo" style="width: 60px; border-radius: 50%;position: relative; top: 34px; left:100px;">
                <span style="position: relative; top: 34px; left:150px; font-size: 23px"> Scool</span>
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
            </div>
            <div class="content ">
                <div class="presentation">
                    <div class="text-card">
                        <h1 style="margin: 20px; text-align:center;font-size: 40px "> S'Cool</h1>
                        <p style="font-size:20px">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque, dolores dolorum earum eius, est illo illum ipsum laudantium nesciunt pariatur provident quae quisquam reiciendis rem reprehenderit saepe suscipit ut.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque, dolores dolorum earum eius, est illo illum ipsum laudantium nesciunt pariatur provident quae quisquam reiciendis rem reprehenderit saepe suscipit ut.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque, dolores dolorum earum eius, est illo illum ipsum laudantium nesciunt pariatur provident quae quisquam reiciendis rem reprehenderit saepe suscipit ut.
                        </p>
                        <button><a href="{{ route('login') }}">CAMMENCER</a></button>
                    </div>
                    <div class="img-container">
                        <img src="images/moren-hsu-VLaKsTkmVhk-unsplash.jpg" alt="image" class="image" style="max-width: 100%;max-height: 90%">
                    </div>

                </div>
                <div class="About">

                </div>

            </div>
            <div class="footer"></div>
        </div>

    </div>

    <script src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
