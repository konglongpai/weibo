<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','weibo app') --一站式购物</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/app/" class="navbar-brand">weibo app</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
                <li class="nav-item"><a href="/login" class="nav-link">登录</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>



</body>

</html>