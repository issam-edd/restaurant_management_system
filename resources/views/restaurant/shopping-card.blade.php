@extends('layouts.restaurant.app')

@section('header')
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('restaurant-assets/images/img/5.png') }}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('restaurant-assets/images/img/6.png') }}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('restaurant-assets/images/img/7.png') }}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('restaurant-assets/images/img/9.png') }}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('restaurant-assets/images/shapes/18.png') }}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('restaurant-assets/images/img/7.png') }}" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb text-center">
                    <h2 class="page-title">Shopping Cart</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{route('restaurant.home')}}">Home </a>/<a href="index.html"> shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('restaurant-assets/css/magnific-popup.css') }}">
@endsection

@section('content')
    <!-- shopping-cart -->
    <div class="portfolio-info shopping-cart padding-top-120 padding-bottom-90">
        <div class="shopping-shapes">
            <span class="ps1"><img src="{{ asset('restaurant-assets/images/shapes/12.png') }}" alt=""></span>
            <span class="pss2 item-bounce"><img src="{{ asset('restaurant-assets/images/shapes/26.png') }}" alt=""></span>
            <span class="ps3 item-bounce"><img src="{{ asset('restaurant-assets/images/shapes/7.png') }}" alt=""></span>
            <span class="ps4"><img src="{{ asset('restaurant-assets/images/img/32.png') }}" alt=""></span>
            <span class="pss5"><img src="{{ asset('restaurant-assets/images/shapes/16.png') }}" alt=""></span>
            <span class="ps6"><img src="{{ asset('restaurant-assets/images/shapes/13.png') }}" alt=""></span>
        </div>
        <div class="container order-list">
            <form
                        class="form"
                        action="{{ route('restaurant.shopping-card.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                <div style="overflow-x:auto;">
                    
                    <table class="table-one">
                        <thead class="table-one-head">
                        <tr class="table-one-tr">
                            <th class="table-one-th" style="width:50%">Product name</th>
                            <th class="table-one-th" style="width:10%">Price</th>
                            <th class="table-one-th" style="width:8%">Quantity</th>
                            <th class="table-one-th text-center" style="width:22%">Subtotal</th>
                            <th class="table-one-th" style="width:10%"></th>
                        </tr>
                        </thead>
                        <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity'] ?>
                        <tbody class="order-list">
                        <!-- row 1 -->
                        <tr>
                            <td>
                                <!--data-th="Product"-->
                                <div class="d-flex align-items-center">
                                    <!--class="row"-->
                                    <div class=" d-none d-md-block col-md-4">
                                        <div class="table-img"><img src="{{ asset('restaurant-assets/images/menu-item/c1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8">
                                        <h5 >{{ $details['name'] }}</h5>
                                        <input type="hidden" value="{{$id}}" name="meals[]">
                                    </div>
                                </div>
                            </td>
                            <td >{{ $details['price'] }}DH
                                <input type="hidden" value="{{ $details['price'] }}" name="prices[]">
                            </td>
                            {{-- <!--data-th="Price"--> --}}
                            <td>
                                {{-- <!-- data-th="Quantity"--> --}}
                                <input  type="number"  data-price="{{ $details['price'] }}"name="quantities[]" class="form-control text-center meal-quantity" value="{{$details['quantity']}}" min="1" max="15">
                            </td>
                            <td class="text-center meal-price">{{ $details['price']*$details['quantity'] }} DH</td>
                            
                            <!--data-th="Subtotal"  -->
                            <td>
                                <!--class="actions" data-th=""-->
                                <button   class="remove remove-from-cart"  data-id="" ><i class="fas fa-plus"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                        @endif
                    </table>
                    
                </div>

                <!-- lower table -->

                <div class="row margin-top-60">
                    <div class="col-lg-5">
                        <div class="lower-table">
                            <h6>Proceed to Checkout</h6>
                            <div class="lower-table-info">
                                <ul class="d-flex justify-content-between">
                                    <li class="sub">TOTAL</li>
                                    <li class="total-price">{{ $total }} DH</li>
                                </ul>
                                <button class="btn" type="submit">Proceed to checkout</button>
                            </div>
                        </div>

                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection
@section('page-scripts')
   <script src="{{ asset('restaurant-assets/js/total.js') }}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection