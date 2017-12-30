@extends("admin.layouts.master")
@section("style")
    .icon-box{
        padding-right: 0px;
        padding-left: 0px;
    }

    .icon{
         height: 22px;
    }

@endsection
@section("inner")
    <div class="container">
        <div class="row align-items-center justify-content-center col-md-12">
            <div class="card col-md-12">
                <div class="card-body">
                    <button class="btn btn-outline mb-1" style="background:#f1f1f1;" onclick="location.href='{{route('admin.ingredient.add')}}';return false;">新增食材</button>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>食材名稱</th>
                            <th>食材單位</th>
                            <th>每單位/卡</th>
                            <th>選項</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">高麗菜</th>
                            <td>顆</td>
                            <td>1200</td>
                            <td><span class="col-lg-6 icon-box"><img class="icon" src="{{asset("images/icon/edit-button.png")}}"> </span> <span class="col-lg-6 icon-box"><img class="icon" src="{{asset("images/icon/delete-button.png")}}"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")

@endsection