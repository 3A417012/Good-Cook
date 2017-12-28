<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title") - GoodCook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    @yield("import-style")
    <style>
        *{font-family: Microsoft JhengHei;}

        .clear-fix{
            clear: both;
        }
        .inner{
            margin-top: 50px;
            padding-top: 20px;
            background: #eceaeb;
            height: 1280px;
        }
        @yield("style")
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: #f78d29;">
    <div class="container">
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:#f1f1f1;"><h5>Good Cook</h5></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:#f1f1f1;">清粥小菜</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:#f1f1f1;">台灣料理</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:#f1f1f1;">美式料理</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#f1f1f1;">食材</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">高麗菜</a>
                        <a class="dropdown-item" href="#">青江菜</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-1 col-sm-4" type="text" placeholder="帳號" aria-label="帳號">
                <input class="form-control mr-sm-1 col-sm-4" type="password" placeholder="密碼" aria-label="密碼">
                <button class="btn btn-outline my-2 my-sm-0" style="background:#f1f1f1;" type="submit">登入</button>
            </form>
        </div>
    </div>
</nav>
<div class="clear-fix"></div>
<div class="inner">
    @yield("inner")
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@yield("import-javascript")
<script>
    @yield("javascript")
</script>
</html>
