<header>
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap justify-content-between">
                    <div class="contact-box">
                        <span> <a href="#"><i class="fas fa-phone-square-alt"></i> +212 6 00 00 09 00</a> </span>
                        <span> <a href="#"><i class="fas fa-envelope-open-text"></i> supportmat3ami@gmail.com</a></span>
                    </div>
                    <div class="social-box">
                        <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                        <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom margin-top-20">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-2 col-3">
                    <div class="logo">
                        <a href="index.html"> <img src={{asset('restaurant-assets/images/logo/logo.png')}} alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <nav id="mobile-menu">
                        <ul class="main-menu">
                            <li><a href="{{route('restaurant.home')}}" >home</a></li>
                            <li><a href="{{route('restaurant.about')}}">about us <span>&nbsp;</span></a></li>
                            <li><a href="{{route('restaurant.menu')}}">menu</a></li>
                            <li><a href="{{route('restaurant.shopping-card')}}">shop now <span>&nbsp;</span></a></li>
                            <li><a href="{{route('restaurant.contact')}}">contact us <span>&nbsp;</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-9 col-8">
                    <div class="customer-area">
                        <span>
                            <a href="{{route('restaurant.shopping-card.create')}}"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        @if(!auth()->user())
                            <a href="{{route('restaurant.login')}}" class="btn">login</a>
                        @else
                            <form
                                action="{{route('restaurant.logout')}}"
                                method="post"
                            >
                                @csrf
                                <button type="submit" class="btn" >log out</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <!-- mobile-menu -->
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>

@yield('header')

