@extends('layouts.restaurant.app')

@section('header')
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('restaurant-assets/images/img/5.png')}}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('restaurant-assets/images/img/6.png')}}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('restaurant-assets/images/img/7.png')}}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('restaurant-assets/images/img/9.png')}}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('restaurant-assets/images/shapes/18.png')}}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('restaurant-assets/images/img/7.png')}}" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">{{ $meal->name }}</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{ route('restaurant.home') }}">Home </a>/ <a href="index.html">food shop</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $meal->name }}</li>
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
    <!-- chicken-recipe-area -->
    <section class="chicken-recipe-area padding-top-115 padding-bottom-80">
        <div class="recipe-shapes">
            <span class="rs1"><img src="{{ asset('restaurant-assets/images/shapes/12.png')}}" alt=""></span>
            <span class="rs2"><img src="{{ asset('restaurant-assets/images/shapes/13.png')}}" alt=""></span>
            <span class="rs3"><img src="{{ asset('restaurant-assets/images/shapes/26.png')}}" alt=""></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 margin-bottom-30 wow fadeInLeft">
                    <div class="recipe-left">
                        <div class="slider-for">
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('restaurant-assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('restaurant-assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('restaurant-assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('restaurant-assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('restaurant-assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('restaurant-assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav margin-top-30">
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('restaurant-assets/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('restaurant-assets/images/img/br2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('restaurant-assets/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        <h2>{{ $meal->name }}</h2>
                        <form action="#">
                            <div class="chickens-inforbar d-flex justify-content-around align-items-center">
                                <span class="cp">{{$meal->price." ".'HD' }}{{--<del>100.00 DH</del>--}}</span>
                                <span> <span class="colored"><i class="fas fa-comments"></i></span> comment</span>
                                <span> <span class="colored"><i class="fas fa-heart"></i></span> 200+ like</span>
                            </div>
                            <p>
                                {{ $meal->description}}
                            </p>
                            <div class="chickens-details d-flex justify-content-between">
                                <span><strong>QTY : </strong><input type="number" placeholder="01"></span>
                            </div>
                            <div class="chickens-meta">

                            </div>
                            <button type="submit" class="btn">add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
