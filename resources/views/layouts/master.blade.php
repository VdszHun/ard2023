<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 bg-dark text-white">
                <ul>
                    <li>
                        <a href="{{route('fooldal')}}">Főoldal</a>
                    </li>
                    <li>
                        <a href="{{route('homerseklet')}}">Hőmérséklet&Páratartalom</a>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>