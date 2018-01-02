<div class="header">
    <div class="container">
        <div class="row">
            <div class="logo col-md-3">
                <img src="{{asset("images/logo8.png")}}">
            </div>
            <div class="search-food col-md-6">
                <form class="form-inline my-3 my-lg-0" action="/search/" method="get">
                    <input class="form-control mr-sm-1 col-sm-10" type="text" placeholder="搜尋食譜" aria-label="搜尋食譜" name="key">
                    <button class="btn btn-outline my-2 my-sm-3" style="background:#f1f1f1;" type="button" onclick="location.href='/search/'+$('input[name=key]').val()">搜尋</button>
                </form>
            </div>
            <div class="add-food col-md-1">
                <button type="button" class="btn btn-secondary my-sm-3" onclick="location.href='{{route('admin.post.add')}}';return false;">新增食譜</button>
            </div>
        </div>
    </div>
</div>
<div class="clear-fix"></div>