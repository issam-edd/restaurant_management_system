@extends('layouts.restaurant.app')
@section('header')
    <section class="banner-area padding-top-100 padding-bottom-150">
        <div class="banner-shapes">
            <span class="b-shape-1 item-animateOne"><img src={{asset('restaurant-assets/images/img/5.png')}} alt=""></span>
            <span class="b-shape-2 item-animateTwo"><img src={{asset('restaurant-assets/images/img/6.png')}} alt=""></span>
            <span class="b-shape-3 item-bounce"><img src={{asset('restaurant-assets/images/img/7.png')}} alt=""></span>
            <span class="b-shape-4"><img src={{asset('restaurant-assets/images/img/9.png')}} alt=""></span>
            <span class="b-shape-5"><img src={{asset('restaurant-assets/images/shapes/18.png')}} alt=""></span>
        </div>
        <div class="container padding-top-145">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="banner-content">
                        <h1>enjoy our delicious <span>food</span></h1>


                        <!-- order-box -->
                        <div class="order-box">
                            <span class="order-img"><img src={{asset('restaurant-assets/images/icons/1.png')}} alt=""></span>
                            <div class="order-content">
                                <span>Free<p>delivery</p></span>
                            </div>
                            <a href="#" class="btn">order now</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6 col-xl-6">
                    <div class="banner-img">
                        <div class="pizza-shapes">
                            <span class="p-shape-1"><img src={{asset('restaurant-assets/images/img/2.png')}} alt=""></span>
                            <span class="p-shape-2"><img src={{asset('restaurant-assets/images/img/3.png')}} alt=""></span>
                            <span class="p-shape-3"><img src={{asset('restaurant-assets/images/img/4.png')}} alt=""></span>
                            <span class="p-shape-4"><img src={{asset('restaurant-assets/images/img/8.png')}} alt=""></span>
                        </div>
                        <img src={{asset('restaurant-assets/images/img/1.png')}} alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <!-- form-area -->
    <section class="form-area">
        <div class="container">
            <div class="form-box padding-top-110 padding-bottom-80">
                <div class="form-shapes">
                    <span class="fs-1"><img src={{asset('restaurant-assets/images/shapes/f-shape-1.png')}} alt=""></span>
                    <span class="fs-2"><img src={{asset('restaurant-assets/images/shapes/f-shape-2.png')}} alt=""></span>
                    <span class="fs-3 item-animateOne"><img src={{asset('restaurant-assets/images/shapes/f-shape-7.png')}} alt=""></span>
                    <span class="fs-5"><img src={{asset('restaurant-assets/images/shapes/4.png')}} alt=""></span>
                    <span class="fs-6"><img src={{asset('restaurant-assets/images/shapes/5.png')}} alt=""></span>
                    <span class="fs-7 item-animateTwo"><img src={{asset('restaurant-assets/images/shapes/7.png')}} alt=""></span>
                    <span class="fs-8 item-animateOne"><img src={{asset('restaurant-assets/images/shapes/9.png')}} alt=""></span>
                </div>
                <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                    <h3>Online Booking</h3>
                    <h2>Table <span>Booking</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12">
                        <div class="form-wraper padding-bottom-40">
                            <form action="#">
                                <select class="form-item2">
                                    <option value="">4 people</option>
                                    <option value="">3 people</option>
                                    <option value="">2 people</option>
                                    <option value="">1 people</option>
                                </select>
                                <input class="form-item2" type="date">
                                <select class="form-item2">
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                </select>
                                <button type="submit">find table</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="about-area padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 wow fadeInLeft">
                    <div class="about-left">
                        <div class="about-l-shapes">
                            <span class="als-1"><img src={{asset('restaurant-assets/images/shapes/2.png')}} alt=""></span>
                        </div>
                        <div class="row">
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                                <div class="about-gallery-1">
                                    <img src={{asset('restaurant-assets/images/gallery/1.jpg')}} alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                                <div class="about-gallery-2">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=9xwazD5SyVg">
                                        <span class="play-btn item-ripple"><i class="fas fa-play"></i></span>
                                        <img src={{asset('restaurant-assets/images/gallery/2.jpg')}} alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="about-gallery-3">
                                    <img src={{asset('restaurant-assets/images/gallery/3.jpg')}} alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-start">
                                <div class="about-gallery-4 text-center">
                                    <img class="mp" src={{asset('restaurant-assets/images/icons/3.png')}} alt="">
                                    <div class="items counter">2000</div>
                                    <p>food item</p>
                                    <span class="g-s-4"><img src={{asset('restaurant-assets/images/shapes/10.png')}} alt=""></span>
                                    <span class="g-s-5"><img src={{asset('restaurant-assets/images/shapes/14.png')}} alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 offset-lg-1 wow fadeInRight">
                    <div class="about-right">
                        <div class="about-r-shapes">
                            <span class="as-1 item-bounce"><img src={{asset('restaurant-assets/images/shapes/1.png')}} alt=""></span>
                        </div>
                        <h2>Fresh taste at a
                            great price, only for
                            <span>hungry people.</span>
                        </h2>
                        <p>Food is a restaurant, bar and coffee roastery located on a busy corner site in
                            Farringdon's
                            Exmouth Market. With glazed.</p>
                        <div class="garlic-burger-card">
                            <div class="garlic-burger-img">
                                <img src={{asset('restaurant-assets/images/icons/2.png')}} alt="">
                            </div>
                            <div class="garlic-burger-content">
                                <h5>garlic burger parties</h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- popular-dishes -->
    <section class="popular-dishes-area padding-top-110">
        <div class="pshapes">
            <span class="ps-1 item-animateTwo"><img src={{asset('restaurant-assets/images/shapes/11.png')}} alt=""></span>
            <span class="ps-2 item-animateTwo"><img src={{asset('restaurant-assets/images/shapes/12.png')}} alt=""></span>
            <span class="ps-3 item-bounce"><img src={{asset('restaurant-assets/images/shapes/13.png')}} alt=""></span>
            <span class="ps-4 item-bounce"><img src={{asset('restaurant-assets/images/shapes/14.png')}} alt=""></span>
            <span class="ps-5"><img src={{asset('restaurant-assets/images/shapes/15.png')}} alt=""></span>
            <span class="ps-6"><img src={{asset('restaurant-assets/images/shapes/16.png')}} alt=""></span>
        </div>
        <div class="container">
            <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center">
                <div class="common-title-area  padding-bottom-30 wow fadeInLeft">
                    <h2>food <span>items</span> </h2>
                </div>
                <div class="nav padding-bottom-30 wow fadeInRight" id="nav-tab-1" role="tablist">
                    @php $i=0 @endphp
                    @foreach ($categories as $category)
                        <a class="nav-item nav-link {{$i===0?'active':''}}" id="nav-category-{{$category->id}}" data-toggle="tab"
                           href="#category-{{$category->id}}" role="tab"
                           aria-controls="#category-{{$category->id}}" aria-selected="true">{{$category->name}}</a>
                        @php $i++ @endphp
                    @endforeach
                </div>
            </nav>
            <!-- main-content -->
            <div class="tab-content" id="nav-tabContent-1">
            @php $i=0 @endphp
            @foreach ($categories as $category)
                <!-- items-->
                    <div class="tab-pane fade {{$i===0?'show active':''}}" id="category-{{$category->id}}" role="tabpanel" aria-labelledby="category-{{$category->id}}">
                        <div class="row">
                            @foreach ($category->meals as $meal)
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="single-dishes">
                                        <div class="dish-img">
                                            <img src="{{asset('restaurant-assets/images/menu-item/pd1.png')}}" style="width: inherit;" alt="">
                                        </div>
                                        <div class="dish-content">
                                            <h5>
                                                {{-- <a href="{{ route('dashboard.meals.store',$meal->id) }}">
                                                    {{ $meal->name,14 }}
                                                </a> --}}
                                            </h5>
                                            <form></form>
                                            <p>{{ Str::limit($meal->description,50) }}</p>
                                            <span class="price">price :{{$meal->price}} DH</span>
                                        </div>
                                        <span class="badge">hot</span>
                                        <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                            <span>
                                        <a href="{{route('restaurant.shopping-card')}}"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                @php $i++ @endphp
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- banner-gallery -->
    <section class="banner-gallery padding-top-100 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="gallery-img-1">
                                <h3>Buzzed Burger</h3>
                                <p>Sale off 50% only this week</p>
                                <a href="{{route('restaurant.shopping-card')}}" class="btn">order now</a>
                                <img src={{asset('restaurant-assets/images/gallery/24.png')}} alt="">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-2 d-flex align-items-end justify-content-end">
                                <img src={{asset(' restaurant-assets/images/gallery/26.png')}} alt="">
                                <img src={{asset('restaurant-assets/images/shapes/38.png')}} alt="" class="s11">
                                <span class="gprice-1">45 DH</span>
                                <div class="gimg-content">
                                    <h5>Super Delicious
                                        Pizza</h5>
                                    <a href="{{route('restaurant.shopping-card')}}">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-3">
                                <h5>Super Combo
                                    Burger</h5>
                                <a href="{{route('restaurant.shopping-card')}}">order now</a>
                                <img src={{asset('restaurant-assets/images/gallery/23.png')}} alt="">
                                <img src={{asset('restaurant-assets/images/shapes/layer2.png')}} alt="" class="s12">
                                <img src={{asset('restaurant-assets/images/shapes/113.png')}} alt="" class="s13">
                                <span class="gprice-2">45 DH</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-2 d-flex align-items-end justify-content-end">
                                <img src={{asset(' restaurant-assets/images/gallery/26.png')}} alt="">
                                <img src={{asset('restaurant-assets/images/shapes/38.png')}} alt="" class="s11">
                                <span class="gprice-1">45 DH</span>
                                <div class="gimg-content">
                                    <h5>Super Delicious
                                        Pizza</h5>
                                    <a href="{{route('restaurant.shopping-card')}}">order now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-3">
                                <h5>Super Combo
                                    Burger</h5>
                                <a href="{{route('restaurant.shopping-card')}}">order now</a>
                                <img src={{asset('restaurant-assets/images/gallery/23.png')}} alt="">
                                <img src={{asset('restaurant-assets/images/shapes/layer2.png')}} alt="" class="s12">
                                <img src={{asset('restaurant-assets/images/shapes/113.png')}} alt="" class="s13">
                                <span class="gprice-2">45 DH</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 ">
                    <div class="gallery-img-4">
                        <h5>Super Combo
                            Burger</h5>
                        <a href="{{route('restaurant.shopping-card')}}" class="btn">order now</a>
                        <img src={{asset('restaurant-assets/images/gallery/22.png')}} alt="">
                        <img src={{asset('restaurant-assets/images/shapes/leaves.png')}} alt="" class="s14">
                        <img src={{asset('restaurant-assets/images/shapes/transparent2.png')}} alt="" class="s15">
                        <span class="gprice-4"><img src={{asset('restaurant-assets/images/gallery/25.png')}} alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- countdown -->
    <section class="countdown-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="countdown-shapes">
                <span class="cs-1 item-bounce"><img src={{asset('restaurant-assets/images/shapes/24.png')}} alt=""></span>
                <span class="cs-3 item-bounce"><img src={{asset('restaurant-assets/images/shapes/26.png')}} alt=""></span>
                <span class="cs-4 item-animateOne"><img src={{asset('restaurant-assets/images/shapes/27.png')}} alt=""></span>
                <span class="cs-5"><img src={{asset('restaurant-assets/images/shapes/18.png')}} alt=""></span>
                <span class="cs-6"><img src={{asset('restaurant-assets/images/shapes/22.png')}} alt=""></span>
                <span class="cs-7"><img src={{asset('restaurant-assets/images/shapes/30.png')}} alt=""></span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 margin-bottom-20">
                    <div class="countdown-left">
                        <span class="cs-1"><img src={{asset('restaurant-assets/images/shapes/25.png')}} alt=""></span>
                        <span class="cs-2"><img src={{asset('restaurant-assets/images/shapes/Leaf.png')}} alt=""></span>
                        <span class="cs-3"><img src={{asset('restaurant-assets/images/shapes/Leaf4.png')}} alt=""></span>
                        <span class="cs-4"><img src={{asset('restaurant-assets/images/img/3.png')}} alt=""></span>
                        <span class="cs-5"><img src={{asset('restaurant-assets/images/shapes/tomato.png')}} alt=""></span>
                        <span class="cs-6"><img src={{asset('restaurant-assets/images/shapes/onions.png')}} alt=""></span>
                        <span class="cs-7"><img src={{asset('restaurant-assets/images/shapes/Leaf2.png')}} alt=""></span>
                        <span class="cs-8"><img src={{asset('restaurant-assets/images/shapes/Leaf3.png')}} alt=""></span>
                        <img src={{asset('restaurant-assets/images/img/21.png')}} alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="countdown-right">
                        <div class="common-title-area padding-bottom-20">
                            <h3>coming soon</h3>
                            <h2>Spicy Chicken
                                Pizza <span>Food </span> </h2>
                            <p>feel hunger! order your favourite food.</p>
                        </div>
                        <div class="count-box countdown">
                            <div>
                                <span class="days">00</span>
                                <p class="days_ref">days</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="hours">00</span>
                                <p class="hours_ref">hour</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="minutes">00</span>
                                <p class="minutes_ref">minutes</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="seconds">00</span>
                                <p class="seconds_ref">seconds</p>
                            </div>
                        </div>
                        <a href="{{route('restaurant.shopping-card')}}" class="btn">order now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-120 padding-top-110">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src={{asset('restaurant-assets/images/img/31.png')}} alt=""></span>
                <span class="ts-2"><img src={{asset('restaurant-assets/images/img/32.png')}} alt=""></span>
                <span class="ts-3 item-animateTwo"><img src={{asset('restaurant-assets/images/shapes/7.png')}} alt=""></span>
                <span class="ts-4"><img src={{asset('restaurant-assets/images/shapes/26.png')}} alt=""></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-1.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-2.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-1.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-2.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-1.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src={{asset('restaurant-assets/images/shapes/33.png')}} alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src={{asset('restaurant-assets/images/testimonial/testi-2.png')}} alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- slider-gallery-img -->
    <div class="slider-gallery-img">
        <div class="container-fluid">
            <div class="slider-gallery-active">
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm1.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm2.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm3.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm4.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm5.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img"><img src={{asset('restaurant-assets/images/gallery/gm6.jpg')}} alt="">
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- delivery-area -->
    <section class="delivery-area padding-top-115 padding-bottom-90">
        <div class="del-shapes">
            <span class="ds-1 item-bounce"><img src={{asset('restaurant-assets/images/shapes/35.png')}} alt=""></span>
            <span class="ds-2"><img src={{asset('restaurant-assets/images/shapes/34.png')}} alt=""></span>
            <span class="ds-3 item-bounce"><img src={{asset('restaurant-assets/images/shapes/17.png')}} alt=""></span>
            <span class="ds-4 item-animateOne"><img src={{asset('restaurant-assets/images/shapes/6.png')}} alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-lg-center col-md-12 margin-bottom-20 wow fadeInLeft">
                    <div class="delivery-left">
                        <img src={{asset('restaurant-assets/images/bg/delivery-img.png')}} alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight">
                    <div class="delivery-right">
                        <div class="common-title-area padding-bottom-40">
                            <h3>delivery</h3>
                            <h2>A Moments of
                                Delivered <span>
                                    On Right
                                    Time & Place
                                </span> </h2>
                            <p>Food Khan is a restaurant, bar and coffee roastery located on a busy corner site in
                                Farringdon's Exmouth Market. With glazed frontage on two sides of the building,
                                overlooking
                                the market and a bustling London inteon.</p>
                            <div class="order-box d-flex align-items-end">
                                <span class="order-img"><img src={{asset('restaurant-assets/images/icons/1.png')}} alt=""></span>
                                <div class="order-content">
                                    <span>Free <p>delivery</p></span>
                                </div>
                                <a href="{{route('restaurant.shopping-card')}}" class="btn">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection