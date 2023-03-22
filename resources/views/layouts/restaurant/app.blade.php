<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title -->
    <title>Khadyo - Restaurant</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">
    @include('layouts.restaurant._styles')
</head>

<body>
<!-- Preloader Starts -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

@include('layouts.restaurant._header')
<!-- header -->

<!-- banner-area -->
@yield('content')
@include('layouts.restaurant._footer')

<!-- ToTop Button -->
<button class="scrollup"><i class="fas fa-angle-up"></i></button>

@include('layouts.restaurant._scripts')


</body>

</html>
