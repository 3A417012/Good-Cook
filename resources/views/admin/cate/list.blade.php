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
                    @if(session("message"))
                        <div class="alert alert-warning" role="alert">
                            <strong>{{session("message")}}</strong>
                        </div>
                    @endif
                    <button class="btn btn-outline mb-1" style="background:#f1f1f1;" onclick="location.href='{{route('admin.cate.add')}}';return false;">新增分類</button>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>分類名稱</th>
                            <th>簡介</th>
                            <th>選項</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cates as $cate)
                            <tr>
                                <td scope="row">{{$cate->id}}</td>
                                <td>{{$cate->name}}</td>
                                <td>{{$cate->description}}</td>
                                <td>
                                    <span class="col-lg-6 icon-box"><img class="icon" onclick="location.href='{{route('admin.cate.edit',$cate->id)}}';return false;" src="{{asset("images/icon/edit-button.png")}}"></span>
                                    <span class="col-lg-6 icon-box"><img class="icon" onclick="location.href='{{route('admin.cate.delete',$cate->id)}}'" src="{{asset("images/icon/delete-button.png")}}"></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")

@endsection