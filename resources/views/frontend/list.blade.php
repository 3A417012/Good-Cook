@extends("frontend.layouts.master")

@section("inner")
    @include("frontend.layouts.header")
    <div class="container">
        @foreach($posts as $post)
        <div class="card col-md-8 mt-3" onclick="location.href='{{route('post',$post->id)}}'">
            <div class="card-body">
                <div class="row">
                    <div class="pic col-md-3">
                        <img src="{{$post->logo_pic}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="word col-md-9">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">{{mb_substr($post->description,0,150,'utf8')}}</p>
                        <h6 class="mb-2 text-muted">所需食材：@foreach($post->ing as $ing) {{$ing->name}}，@endforeach</h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{--<div class="row align-items-center justify-content-center col-md-8">--}}
            {{--<nav aria-label="Page navigation example">--}}
                {{--<ul class="pagination">--}}
                    {{--<li class="page-item">--}}
                        {{--<a class="page-link" href="#" aria-label="Previous">--}}
                            {{--<span aria-hidden="true">&laquo;</span>--}}
                            {{--<span class="sr-only">Previous</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                    {{--<li class="page-item">--}}
                        {{--<a class="page-link" href="#" aria-label="Next">--}}
                            {{--<span aria-hidden="true">&raquo;</span>--}}
                            {{--<span class="sr-only">Next</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        {{--</div>--}}
    </div>

@endsection