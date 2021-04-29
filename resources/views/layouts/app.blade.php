<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
            .divBusca{
                justify-content: center;
                padding: 20px;
            }

            body{
                padding: 20px;
                background-image: url("\laragon\www\discografia\storage\app/publics/tiao.png");
            }
        </style>
    </head>
    <body>
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>