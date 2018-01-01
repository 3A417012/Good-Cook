@extends("admin.layouts.master")
@section("style")
    .ingredient{
    font-size:6px;
    border-bottom: 1px dotted gray;
    margin:0 4px 0 4px;
    }
@endsection
@section("inner")
    <div class="container">
        <div class="row align-items-center justify-content-center col-md-12">
            <div class="card col-md-12">
                <div class="card-body">
                    <form action="{{route("admin.post.store")}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="標題"><hr>
                        </div>
                        <div class="row">
                            <div class="upload-logo col-md-6">
                                <img data-src="holder.js/300x300" class="rounded mx-auto d-block" alt="300x300" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609bc2ab9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609bc2ab9b%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E300x300%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 300px; height: 300px;">
                                <div class="form-group">
                                    <label for="exampleTextarea"><h5>簡介</h5></label>
                                    <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-g col-md-6">
                                <div class="form-group">
                                    <label for="disabledSelect">食譜類別</label>
                                    <select id="Select" class="form-control">
                                        @foreach($cates as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label >食材</label>
                                <div class="col-md-12 row ingredients">
                                    <div class="ingredientbox row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="食材">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="份量">
                                        </div>
                                        <div class="col-2">
                                            <svg id="i-plus" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" onclick="adding()">
                                                <path d="M16 2 L16 30 M2 16 L30 16" />
                                            </svg>
                                            <svg id="i-minus" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" onclick="deling(this)">
                                                <path d="M2 16 L30 16" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card col-md-12 mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="pic col-md-3">
                                        <img data-src="holder.js/100x100" class="rounded mx-auto d-block" alt="100x100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609bc2ab9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609bc2ab9b%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E100x100%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 100px; height:100px;">
                                    </div>
                                    <div class="word col-md-9">
                                        <div class="card-title">
                                            <span class="float-left"><h3>1</h3></span>
                                            <span class="float-right">
                                                <div class="col-2">
                                                    <svg id="i-plus" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    >
                                                        <path d="M16 2 L16 30 M2 16 L30 16" />
                                                    </svg>
                                                    <svg id="i-minus" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                        <path d="M2 16 L30 16" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </div>

                                        <p class="card-text"><textarea class="form-control" id="exampleTextarea" rows="2"></textarea></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary btn-lg btn-block mt-3">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")
    function adding(){
        $(".ingredients").append($(".ingredientbox").parent().html());
        console.log($(".ingredientbox").parent().first().html());
    }
@endsection