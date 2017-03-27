<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #101010;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow:hidden;
                text-decoration: none;
            }
            ::selection {
                background: dodgerblue; /* WebKit/Blink Browsers */
            }
            p {
                background-color: #fff;
                color: #101010;
                font-weight: 200;
                margin: 0;
            }
            a {
                color: deepskyblue;
                text-decoration: none;
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
                z-index: 10;
            }

            .content {
                text-align: justify;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
        <div id="app">
            <div class="position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif

                <div class = "full-height" style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: flex-start; align-items: stretch; align-content: stretch">
                    <div id="sidebar" style="background-color:#1e1e1e; flex-grow: 1; min-width: 18%; max-width: 18%;">
                        <div style="height: 25vh; color: deepskyblue;">
                            <a href="{{ url('/') }}"><h1 style="padding: 20%; text-align: center">@{{ titleUppercase }}</h1></a>
                        </div>
                        <div id="particles" style="height: 75vh;"></div>
                    </div>
                    <div style="flex-grow: 6; margin-top: 7vh; height: 93vh; overflow:auto; padding-bottom: 3vh; padding-left: 5%; padding-right: 5%;">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
