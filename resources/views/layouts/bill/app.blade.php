<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Invoice </title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">

    @include('layouts.bill._style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="invoice-print p-3">
                <div class="d-flex justify-content-between flex-md-row flex-column pb-2">
                    <div>
                        <div class="d-flex mb-1">
                            <h3 class="text-primary font-weight-bold ml-1">
                                <img src={{asset('restaurant-assets/images/logo/logo2.png')}} alt="logo">
                            </h3>
                        </div>
                        <p class="mb-25">320 8th Boulevard Allal El Fassi</p>
                        <p class="mb-25">Marrakech, 4000, MOROCCO</p>
                        <p class="mb-0"> + 212 6 00 00 09 008</p>
                    </div>

                    @yield('content')

                <hr class="my-2" />

                <div class="row">
                    <div class="col-12">
                        <span class="font-weight-bold">Note:</span>
                        <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                                projects. Thank You!</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@include('layouts.bill._script')

</body>
<!-- END: Body-->

</html>
