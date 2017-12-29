@extends("admin.layouts.master")

@section("inner")
    @include("frontend.layouts.header")
    <div class="container mt-2">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide col-md-8" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609b3bfab9%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609b3bfab9%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>First slide label</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609b3bfaba%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609b3bfaba%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Second slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609b3bfabb%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609b3bfabb%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Third slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active">熱門精選</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="card mt-4">
            <div class="card-header">
                熱門食譜
            </div>
            <div class="row" style="padding-left: 15px;padding-right: 15px;">
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="card mt-4">
            <div class="card-header">
                最新食譜
            </div>
            <div class="row" style="padding-left: 15px;padding-right: 15px;">
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>
                <div class="card-body col-md-2" style="padding-right: 0;padding-left: 0;">
                    <div class="card-food col-md-12" style="padding-right: 1px;padding-left: 1px;">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/selection_story_item/image/9349/curation_9dd8467a01ea1a26.jpg" alt="..." class="col-md-12 rounded">
                        <div class="card-food-w ml-3 mt-1">
                            特濃草莓生乳酪蛋糕
                        </div>
                        <div class="author ml-3 mt-1" style="color:#a39b97;font-size: 6px;">作者:abs</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection