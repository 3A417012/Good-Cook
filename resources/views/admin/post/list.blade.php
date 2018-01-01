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
                    <button class="btn btn-outline mb-1" style="background:#f1f1f1;" onclick="location.href='{{route('admin.member.add')}}';return false;">新增會員</button>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>文章名稱</th>
                            <th>文章分類</th>
                            <th>內容</th>
                            <th>選項</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->title}}</th>
                                    <td>{{$post->cate->name}}</td>
                                    <td>{{$post->description}}
                                    </td>
                                    <td><span class="col-lg-6 icon-box"><img class="icon" src="{{asset("images/icon/edit-button.png")}}"> </span> <span class="col-lg-6 icon-box"><img class="icon" src="{{asset("images/icon/delete-button.png")}}"></span></td>
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