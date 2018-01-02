@extends("frontend.layouts.master")

@section("inner")
    @include("frontend.layouts.header")
    <div class="container mt-2">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide col-md-8" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($rndPosts as $key => $rndPost)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}" class="active"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($rndPosts as $key => $rndPost)
                        <div class="carousel-item @if($key == 1) active @endif">
                            <img class="d-block w-100" data-src="" alt="First slide [800x400]" src="{{$rndPost->logo_pic}}" data-holder-rendered="true">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{$rndPost->title}}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active" style="background: #f78d29;border-color:#f78d29;">隨機精選</li>
                    @foreach($rndPosts as $rndPost)
                        <li class="list-group-item" onclick="location.href='{{route('post',$rndPost->id)}}'">{{$rndPost->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear-fix"></div>

        <div class="clear-fix"></div>
        <div class="card mt-4">
            <div class="card-header">
                最新食譜
            </div>
            <div class="row" style="padding-left: 15px;padding-right: 15px;">
                @foreach($lastPosts as $lastPost)
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;" onclick="location.href='{{route('post',$lastPost->id)}}'">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="{{$lastPost->logo_pic}}" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            {{$lastPost->title}}
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:{{$lastPost->User->name}}</div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
@endsection