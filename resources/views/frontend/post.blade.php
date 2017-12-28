@extends("frontend.layouts.master")
@section("style")
    .ingredient{
        font-size:6px;
        border-bottom: 1px dotted gray;
        margin:0 4px 0 4px;
    }
@endsection
@section("inner")
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo col-md-3">
                    <img src="{{asset("images/logo8.png")}}">
                </div>
                <div class="search-food col-md-6">
                    <form class="form-inline my-3 my-lg-0">
                        <input class="form-control mr-sm-1 col-sm-10" type="text" placeholder="搜尋食譜" aria-label="搜尋食譜">
                        <button class="btn btn-outline my-2 my-sm-3" style="background:#f1f1f1;" type="submit">搜尋</button>
                    </form>
                </div>
                <div class="add-food col-md-1">
                    <button type="button" class="btn btn-secondary my-sm-3">新增食譜</button>
                </div>
            </div>
        </div>
    </div>

    <div class="clear-fix"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center col-md-12">
            <div class="card col-md-8 mt-3">
                <div class="card-body">
                    <div class="title">
                        <div class="post-header float-left">
                            <span><h3> 韓式泡菜 </h3></span>
                            <span>
                                <h6 class="mb-2 text-muted">
                                    <svg id="i-heart" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 C1 12 2 6 7 4 12 2 15 6 16 8 17 6 21 2 26 4 31 6 31 12 28 16 25 20 16 28 16 28 16 28 7 20 4 16 Z" />

</svg>收藏人數 : 87 <svg id="i-user" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
</svg> 瀏覽人數 : 887 </h6>
                            </span>
                        </div>

                        <span class="float-right"><button type="button" class="btn btn-outline-success">加入收藏</button></span></div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="introduction">
                        <div class="row">
                            <div class="pic col-md-8">
                                <img src="https://dbjdsnch130xu.cloudfront.net/uploads/recipe/cover/232878/large_5e4e9fbd31a33ee9.jpg" class="img-fluid col-md-12" alt="Responsive image">
                            </div>
                            <div class="ingredients col-md-4">
                                <h6 style=" border-bottom: 1px solid rgba(0,0,0,.1);">所需食材</h6>
                                <div class="ingredient col-md-12">
                                    <span class="float-left ingredient-name">蒜頭</span>
                                    <span class="float-right ingredient-name">5顆</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ingredient col-md-12">
                                    <span class="float-left ingredient-name">蒜頭</span>
                                    <span class="float-right ingredient-name">5顆</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ingredient col-md-12">
                                    <span class="float-left ingredient-name">蒜頭</span>
                                    <span class="float-right ingredient-name">5顆</span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="carouselExampleCaptions" class="carousel slide col-md-12" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" data-src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133878/medium_9b80f17526aa6b04.jpg" alt="First slide [800x400]" src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133878/medium_9b80f17526aa6b04.jpg" data-holder-rendered="true">
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5);">
                                    <h3>第一步</h3>
                                    <p>把山東大白菜切成一半，在切成寬1/4的大小再切段，用清水洗乾淨，放入1-2匙鹽脫水2小時。
                                        記得每半小時翻面一次。</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" data-src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133888/medium_d7da64a4a9837115.jpg" alt="Second slide [800x400]" src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133888/medium_d7da64a4a9837115.jpg" data-holder-rendered="true">
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5);">
                                    <h3>第二步</h3>
                                    <p>先煮糯米糊，材料D組。

                                        糯米糊：水/
                                        1:6的比例
                                        小火加熱，待產生泡泡的時候關火。

                                        圖片的糯米糊較濃稠，我之後加水稀釋過了，所以比較稀釋的較正確。</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" data-src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133889/medium_94ed74753c32d8f7.jpg" alt="Third slide [800x400]" src="https://dbjdsnch130xu.cloudfront.net/uploads/step/cover/1133889/medium_94ed74753c32d8f7.jpg" data-holder-rendered="true">
                                <div class="carousel-caption d-none d-md-block"  style="background: rgba(0,0,0,0.5);">
                                    <h3>第三步</h3>
                                    <p>把B組的材料，先切成小塊，可以拿入果汁機的大小。</p>
                                </div>
                            </div>
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
    });
@endsection