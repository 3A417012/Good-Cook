@extends("frontend.layouts.master")
@section("style")
    .ingredient{
        font-size:15px;
        border-bottom: 1px dotted gray;
        margin:0 1px 0 1px;
    }
@endsection
@section("inner")
    @include("frontend.layouts.header")
    <div class="container">
        <div class="row align-items-center justify-content-center col-md-12">
            <div class="card col-md-8 mt-3">
                <div class="card-body">
                    @if(session("message"))
                        <div class="alert alert-warning" role="alert">
                            <strong>{{session("message")}}</strong>
                        </div>
                    @endif
                    <div class="title">
                        <div class="post-header float-left">
                            <span><h3> {{$post->title}} </h3></span>
                            <span>
                                <h6 class="mb-2 text-muted">
                                    <svg id="i-heart" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 C1 12 2 6 7 4 12 2 15 6 16 8 17 6 21 2 26 4 31 6 31 12 28 16 25 20 16 28 16 28 16 28 7 20 4 16 Z" />

</svg>收藏人數 : {{$post->collections()->count()}}
                                    <span>分享者：{{$post->User->name}}</span>
                        </div>

                        <span class="float-right"><button type="button" class="btn like" onclick="location.href='{{route('like',$post->id)}}'">加入收藏</button></span></div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="introduction">
                        <div class="row">
                            <div class="pic col-md-7">
                                <img src="{{$post->logo_pic}}" class="img-fluid col-md-12" alt="Responsive image">
                            </div>
                            <div class="ingredients col-md-5">
                                <h6 style=" border-bottom: 1px solid rgba(0,0,0,.1);">所需食材</h6>
                                @foreach($post->ingredients as $ingredient)
                                <div class="ingredient col-md-12">
                                    <span class="float-left ingredient-name">{{$ingredient->name}}</span>
                                    <span class="float-right ingredient-name">{{$ingredient->amount}} {{$ingredient->unit}} </span>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                                <div class="ingredient col-md-12">
                                    <span class="float-left ingredient-name">熱量共</span>
                                    <span class="float-right ingredient-name">{{$sum}}卡</span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{$post->description}}
                    <hr>
                    <div id="carouselExampleCaptions" class="carousel slide col-md-12" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach( $steps as $key => $step)
                            <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach( $steps as $key => $step)
                            <div class="carousel-item @if($key==0) active @endif">
                                <img class="d-block w-100"  alt="First slide [800x400]" src="{{$step->pic}}" data-holder-rendered="true">
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5);">
                                    <h3>第{{$key+1}}步</h3>
                                    <p>{{$step->description}}</p>
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
                    <hr>

                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")
    $(document).ready(function() {
        $('.carousel').carousel('pause')
        @if(!$like)
            $('.like').addClass("btn-outline-success");
            @else
            $('.like').addClass("btn-success");
        @endif
    });
@endsection