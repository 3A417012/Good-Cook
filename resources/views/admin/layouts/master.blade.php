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
        <div class="collapse navbar-collapse col-md-2" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("home")}}" style="color:#f1f1f1;"><h5>Good Cook</h5></a>
                </li>
            </ul>
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-2">
            {{--<button class="btn btn-outline my-2 my-sm-0 ml-1" style="background:#f1f1f1;" onclick="">收藏</button>--}}

            <button class="btn btn-outline my-2 my-sm-0 ml-1" style="background:#f1f1f1;" onclick="document.getElementById('logout-form').submit();">登出</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</nav>
<div class="clear-fix"></div>
<div class="inner">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    @foreach($list as $name => $url)
                        <li class="list-group-item list-group-item-action" onclick="location.href='{{route($url)}}';return false;">{{$name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                @yield("inner")
            </div>
        </div>
    </div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="{{asset("js/layer/layer.js")}}"></script>

@yield("import-javascript")
<script>
    @if ($errors->has('email') || $errors->has('password'))
        $('#login').popover('show');
    @endif
    @yield("javascript")
</script>
</html>
