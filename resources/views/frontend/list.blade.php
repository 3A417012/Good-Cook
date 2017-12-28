@extends("frontend.layouts.master")

@section("inner")
    @include("frontend.layouts.header")
    <div class="container">
        <div class="card col-md-8 mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="pic col-md-3">
                        <img src="https://dbjdsnch130xu.cloudfront.net/uploads/recipe/cover/95985/small_b535b953ab665114.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="word col-md-9">
                        <h4 class="card-title">Card title</h4>

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="mb-2 text-muted">所需食材：小白菜、金勾蝦、香菇、蒜末、木耳、胡椒、醬油、醋</h6>

                    </div>
                </div>

            </div>
        </div>
        <div class="row align-items-center justify-content-center col-md-8">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection