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
                    <form action="{{route("admin.ingredient.store")}}" method="post" >
                        {{csrf_field()}}
                        <div class="row">
                            <div class="upload-logo col-md-6">
                                <img data-src="holder.js/300x300" class="rounded mx-auto d-block" alt="300x300" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1609bc2ab9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1609bc2ab9b%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E300x300%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 300px; height: 300px;">
                            </div>
                            <div class="form-g col-md-6">
                                <div class="form-group">
                                    <label for="disabledSelect">食材名稱</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="食材">
                                </div>
                                <div class="form-group">
                                    <label for="disabledSelect">食材單位</label>
                                    <input type="text" name="unit" class="form-control" id="formGroupExampleInput" placeholder="EX:顆,個,公克...">
                                </div>
                                <div class="form-group">
                                    <label for="disabledSelect">每單位/熱量</label>
                                    <input type="text" name="heat" class="form-control" id="formGroupExampleInput" placeholder="EX:500卡">
                                </div>

                            </div>
                        </div>
                        <hr>

                        <button class="btn btn-secondary btn-lg btn-block mt-3" type="submit">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")

@endsection