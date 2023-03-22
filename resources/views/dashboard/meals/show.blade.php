@extends("layouts.dashboard.app")


@section("breadcrumbs")
    <h2 class="content-header-title float-left mb-0">Meal Detail</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.meals.index') }}">Meals list</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section("content")
        <!-- app e-commerce details start -->
            <div class="card">
                <!-- Product Details starts -->
                <div class="card-body">
                    <div class="row my-2">
                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{asset("uploads/table_pictures/table1.jpg")}}" class="img-fluid product-img" alt="product image" />
                            </div>
                        </div>
                        <div class="col-12 col-md-7 mb-2">
                            <h4>{{ $meal->name }}</h4>
                            <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                <h4 class="item-price mr-1 mb-3" style="color: blue">{{ $meal->price." ".'HD' }}</h4>
                            </div>
                            <p class="card-text">
                                {{ $meal->description }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>


                <!-- Product Details ends -->

@endsection

@section('page-scripts')
 <script>
        document.querySelector('#users-item').classList.add('active');
</script>
@endsection