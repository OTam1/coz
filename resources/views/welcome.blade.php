<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COZ | كوز</title>

    <meta name="keywords" content="COZ" />
    <meta name="description" content="COZ">
    <meta name="author" content="COZ">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CCormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/vendor/locomotive-scroll/locomotive-scroll.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/theme-elements.css">
    <link rel="stylesheet" href="assets/css/theme-blog.css">
    <link rel="stylesheet" href="assets/css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="assets/css/demos/demo-creative-agency-1.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="assets/css/skins/skin-creative-agency-1.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css?v=2">

</head>

<body>

    <div class="body">
        <div role="main" class="main">

            <div data-scroll-container class="smoothScroll">

                <div class="d-xl-flex flex-row p-relative w-100" id="home">

                    <header id="header" data-plugin-options="{'stickyEnabled': false}">
                        <div class="header-body">
                            <div class="header-container container-fluid px-4 py-2">
                                <div class="header-row">
                                    <div class="header-column">
                                        <div class="header-row">
                                            <div class="header-logo">
                                                <a href="#">
                                                    {{-- <img alt="Porto" width="120" height="auto"
                                                        src="assets/img/logo.png"> --}}
                                                        <img alt="Porto" width="120" height="auto"
                                                        src="assets/img/logo-black.png">

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-column justify-content-end">
                                        <div class="header-row p-relative left-10">
                                            <div
                                                class="header-nav header-nav-links header-nav-light-text order-2 order-lg-1">
                                                <div
                                                    class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                    <nav class="collapse">
                                                        <ul class="nav nav-pills" id="mainNav">
                                                            <li class="dropdown">
                                                                <a href="#home" 
                                                                
                                                                data-hash class="nav-link"
                                                                >
                                                                    @lang('home.home')
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#about" 
                                                                @if (App::getLocale() === 'ar')
                                                                @else
                                                                data-hash class="nav-link"
                                                                @endif
                                                                >
                                                                    @lang('home.about')
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#services" 
                                                                @if (App::getLocale() === 'ar')
                                                                @else
                                                                data-hash class="nav-link"
                                                                @endif
                                                                >
                                                                    @lang('home.services')
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#work"
                                                                @if (App::getLocale() === 'ar')
                                                                @else
                                                                data-hash class="nav-link"
                                                                @endif
                                                                 >
                                                                    @lang('home.work')
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#contact"
                                                                @if (App::getLocale() === 'ar')
                                                                @else
                                                                 data-hash class="nav-link"
                                                                 @endif
                                                                 >
                                                                    @lang('home.contact')
                                                                    {{-- <span
                                                                        class="btn btn-default text-color-light bg-primary btn-circle border-0 btn-md ms-2"><i
                                                                            class="fas fa-arrow-right"></i></span> --}}
                                                                </a>
                                                            </li>
                                                            @if (App::getLocale() === 'en')
                                                            <li>
                                                                <a href="{{ route('locale', 'ar') }}">
                                                                    العربية
                                                                </a>
                                                            </li>
                                                            @else
                                                            <li>
                                                                <a href="{{ route('locale', 'en') }}">
                                                                    English
                                                                </a>
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <section
                        class="d-flex flex-row p-relative vh-100 min-vh-100 justify-content-center align-items-center bg-color-secondary text-light"
                        id="home">

                        <div class="vw-100 custom-ws-initial min-vh-100 d-flex align-items-center">

                            {{-- <div class="custom-el-3 p-absolute d-none d-xl-block">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="500">
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.2"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.1"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.0"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.9"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.8"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.7"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.6"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.5"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.4"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.3"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.2"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.1"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.0"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.2"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.3"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.4"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.5"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.6"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.7"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.8"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-0.9"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.0"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.1"></span>
                                    <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                        data-scroll-speed="-1.2"></span>
                                </div>
                            </div> --}}

                            {{-- <div class="custom-el-2 p-absolute">
									<div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="0">
										<img width="100%" height="100%" src="assets/img/demos/creative-agency-1/svg/generic-1.svg" alt="" />
									</div>
								</div> --}}

                            <div class="text-center p-absolute transform3dx-n50 left-50pct">
                                <div class="appear-animation" data-appear-animation="expandIn"
                                    data-appear-animation-delay="300">
                                    <span class="d-block" data-scroll data-scroll-direction="horizontal"
                                        data-scroll-speed="3">
                                        <div class="custom-el-1 border-circle"></div>
                                    </span>
                                </div>
                            </div>

                            <div class="d-xl-flex flex-column w-100">
                                <div class="text-center w-100 p-relative z-index-1">
                                    <div class="d-xl-flex flex-row justify-content-center align-items-center">
                                        <div class="text-center text-xl-start">
                                            <div class="appear-animation" data-appear-animation="fadeIn"
                                                data-appear-animation-delay="0">
                                                <span class="d-block me-xl-5" data-scroll
                                                    data-scroll-direction="horizontal" data-scroll-speed="-0.5">
                                                    <strong
                                                        class="custom-hero-font-1 custom-stroke-text-effect-1">@lang('home.coz')</strong>
                                                </span>
                                            </div>
                                        </div>
                                        {{-- <div class="text-center text-xl-start ps-4">
                                            <div class="appear-animation"
                                                data-appear-animation="fadeInLeftShorterPlus"
                                                data-appear-animation-delay="300">
                                                <span class="d-block max-vw-xl-25" data-scroll
                                                    data-scroll-direction="horizontal" data-scroll-speed="-1.5">
                                                    <p class="mb-0 text-4 line-height-5 text-light pt-4 pe-5 pe-xl-0">
                                                        Saudi’s first carbon credits origination and offsetting
                                                        platform.
                                                    </p>
                                                </span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="text-center w-100 p-relative z-index-1 mt-4">
                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <div class="text-center text-xl-start">
                                            <div class="appear-animation" data-appear-animation="fadeIn"
                                                data-appear-animation-delay="500">
                                                <span class="d-block" data-scroll data-scroll-direction="horizontal"
                                                    data-scroll-speed="2">
                                                    <strong
                                                        class="custom-hero-font-2 text-color-light text-uppercase">@lang('home.intro_title')</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (App::getLocale() === 'ar')
                            <div class="p-absolute transform3dy-n50 top-50pct left-0 text-1 d-none d-xl-block">
                                <span class="rotate-l-90 d-block text-4 text-uppercase p-relative px-4">
                                    <i class="fa-solid fa-arrow-down p-absolute left-0 custom-arrow-anim" style="rotate: 181deg;"></i>
                                    @lang('home.scroll')
                                    <i class="fa-solid fa-arrow-down p-absolute right-0 custom-arrow-anim" style="rotate: 181deg;"></i>
                                </span>
                            </div>
                            @else
                            <div class="p-absolute transform3dy-n50 top-50pct right-0 text-1 d-none d-xl-block">
                                <span class="rotate-l-90 d-block text-4 text-uppercase p-relative px-4">
                                    <i class="fa-solid fa-arrow-down p-absolute left-0 custom-arrow-anim"></i>
                                    @lang('home.scroll')
                                    <i class="fa-solid fa-arrow-down p-absolute right-0 custom-arrow-anim"></i>
                                </span>
                            </div>
                            @endif
                            <div class="p-absolute w-100 bottom-20 px-4">
                                <div class="d-xl-flex justify-content-between">
                                    <div class="p-2 text-center text-xl-start">
                                        <p class="m-0 text-0-5">@lang('home.copyright')</p>
                                    </div>
                                    <div class="p-2 text-center text-xl-end">

                                        <ul class="list-inline mb-0">
                                            {{-- <li
                                                class="list-inline-item px-1 anim-hover-translate-top-5px transition-2ms">
                                                <a href="http://www.facebook.com/" target="_blank"
                                                    class="text-color-light text-color-hover-primary text-3"><i
                                                        class="fab fa-facebook-f text-3"></i></a>
                                            </li> --}}
                                            <li
                                            class="list-inline-item px-1 anim-hover-translate-top-5px transition-2ms">
                                            <a href="https://www.linkedin.com/company/coz-ksa/?viewAsMember=true/" target="_blank"
                                                class="text-color-light text-color-hover-primary text-3"><i
                                                    class="fab fa-linkedin text-3"></i></a>
                                        </li>
                                        <li
                                            class="list-inline-item px-1 anim-hover-translate-top-5px transition-2ms">
                                            <a href="http://www.x.com/Coz_ksa" target="_blank"
                                                class="text-color-light text-color-hover-primary text-3"><i
                                                    class="fab fa-x-twitter text-3"></i></a>
                                        </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>

                    <section
                        class="d-flex flex-row row p-relative vh-xl-100 min-vh-xl-100 min-vw-100 justify-content-center align-items-center"
                        id="about">

                        <div class="col-lg-6 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 w-100">
                                {{-- <h5 class="mt-4 mt-xl-0">Who We Are</h5> --}}
                                <h2> @lang('home.aboutus') </h2>

                                <p class="lead">@lang('home.about_title')</p>

                                <p>@lang('home.about_para')</p>

                                {{-- <p class="text-2">In return, we offer Organizations seeking to offset their carbon
                                    emissions the ability to purchase carbon credits to offset their emissions. Through
                                    our platform, these entities can access reliable and credible carbon credits, which
                                    helps them achieve their environmental goals and comply with regulatory standards.
                                    We believe that integration between these parties is the key to achieving carbon
                                    balance that contributes to building a more sustainable future for all.</p> --}}

                            </div>
                        </div>
                        <div
                            class="col-lg-6 custom-ws-initial min-vh-xl-100 d-flex align-items-center border-left-light text-center">
                            <div class="p-5 w-100 text-center bg-color-light">
                                <div class="p-relative">
                                    <span class="d-block" data-scroll data-scroll-direction="horizontal"
                                        data-scroll-speed="-1" data-scroll-offset="-100%">
                                        <img class="img-fluid custom-border-radius-1" src="assets/img/Coz.png"
                                            alt="">
                                    </span>
                                    <span class="d-block p-absolute bottom-10 text-uppercase custom-text-1" data-scroll
                                        data-scroll-direction="horizontal" data-scroll-speed="1">COZ</span>
                                </div>
                                {{-- <p class="mb-0 text-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> --}}
                            </div>
                        </div>

                    </section>
                    <section
                        class="d-xl-flex flex-row p-relative vh-xl-100 min-vh-xl-100 justify-content-center align-items-center bg-color-primary text-color-light"
                        id="services">

                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 text-color-light">
                                <h5 class="mt-4 mt-xl-0 text-color-light">@lang('home.what_we_do')</h5>
                                <h2 class="text-color-light">@lang('home.what_we_do_title')</h2>

                                <p class="lead text-color-light">@lang('home.what_we_do_para')</p>
                                <a href="#contact" data-hash
                                    class="custom-link-1 custom-link-1-light text-color-light">@lang('home.what_we_do_try')</a>
                            </div>
                        </div>
                        <div
                            class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-flex align-items-center custom-border-left-1">
                            <div class="p-5 text-color-light" >
                                <img width="100" src="assets/img/demos/creative-agency-1/icons/icon-1.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light'}" />
                                <h3 class="text-color-light mt-4">@lang('home.what_we_do_1_title')</h3>
                                <p class="text-color-light opacity-8 font-weight-normal pt-3">@lang('home.what_we_do_1_para')</p>
                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 text-color-light">
                                <img width="100" src="assets/img/demos/creative-agency-1/icons/icon-2.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light'}" />
                                <h3 class="text-color-light mt-4">@lang('home.what_we_do_2_title')</h3>
                                <p class="text-color-light opacity-8 font-weight-normal pt-3">@lang('home.what_we_do_2_para')</p>
                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 text-color-light" >
                                <img width="100" src="assets/img/demos/creative-agency-1/icons/icon-3.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light'}" />
                                <h3 class="text-color-light mt-4">@lang('home.what_we_do_3_title')</h3>
                                <p class="text-color-light opacity-8 font-weight-normal pt-3">@lang('home.what_we_do_3_para')</p>
                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 text-color-light" > 
                                {{-- data-scroll data-scroll-direction="vertical"
                                data-scroll-speed="0.3" data-scroll-offset="-100%" --}}




                                <img width="100" src="assets/img/demos/creative-agency-1/icons/icon-4.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light'}" />
                                <h3 class="text-color-light mt-4">@lang('home.what_we_do_4_title')</h3>
                                <p class="text-color-light opacity-8 font-weight-normal pt-3">@lang('home.what_we_do_4_para')</p>
                            </div>
                        </div>

                    </section>
                    <section
                        class="d-xl-flex flex-row pb-5 pb-xl-0 p-relative vh-xl-100 min-vh-xl-100 justify-content-center align-items-center bg-color-light pe-5"
                        id="work">

                        <div
                            class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-flex align-items-center custom-border-right-1">
                            <div class="p-5 w-100">
                                {{-- <h5 class="mt-4 mt-xl-0">Our Ecosystem</h5> --}}
                                <h2>@lang('home.ecosystem')</h2>

                                {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

									<a href="#contact" data-hash class="custom-link-1">Contact Us</a> --}}
                            </div>
                        </div>

                        <div class="vw-xl-80 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center" style="direction: ltr !important">
                            <div class="ps-5 w-100 mb-5 mb-xl-0">
                                <div class="carousel-wrapper">
                                <div class="owl-carousel partners owl-theme owl-custom">
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/AQWA_POWER.png' }}" alt="Partner 2">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/gitex_impact.png' }}" alt="Partner 3">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/GREEN_TECH.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/Revival_Lab.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/ROOTS.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/SAUDI_ARAMCO.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/tadweeer.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/UN_GLOBAL.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/uplink.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/waeed.png' }}" alt="Partner 4">
                                    </div>
                                    <div class="item carousel-item"><img src="{{ '/assets/img/our-eco/world_economic.png' }}" alt="Partner 4">
                                    </div>

                                </div>
                                </div>
                            </div>
                        </div>


                        {{-- OPTION 1 --}}

                        {{-- <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="ps-5 w-100 mb-5 mb-xl-0">

                                <div class="d-flex flex-column">
                                    <a href="portfolio-single-wide-slider.html" aria-label="">
                                        <div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg"
                                            data-title="Project Title">
                                            <div class="thumb-info-wrapper">
                                                <img src="assets/img/our-eco/MOE.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="ps-5 w-100 mb-5 mb-xl-0">

                                <div class="d-flex flex-column">
                                    <a href="portfolio-single-wide-slider.html" aria-label="">
                                        <div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg"
                                            data-title="Project Title">
                                            <div class="thumb-info-wrapper">
                                                <img src="assets/img/our-eco/GS.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="ps-5 w-100 mb-5 mb-xl-0">

                                <div class="d-flex flex-column">
                                    <a href="portfolio-single-wide-slider.html" aria-label="">
                                        <div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg"
                                            data-title="Project Title">
                                            <div class="thumb-info-wrapper">
                                                <img src="assets/img/our-eco/mycarbon.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="ps-5 w-100 mb-5 mb-xl-0">

                                <div class="d-flex flex-column">
                                    <a href="portfolio-single-wide-slider.html" aria-label="">
                                        <div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg"
                                            data-title="Project Title">
                                            <div class="thumb-info-wrapper">
                                                <img src="assets/img/our-eco/Verra.png" class="img-fluid"
                                                    style="background: black;" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div> --}}


                        {{-- OPTION 2 --}}

                        {{-- 
							<div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
								<div class="ps-5 w-100">

									<div class="d-flex flex-column">
										<a href="portfolio-single-wide-slider.html" class="mb-5" aria-label="">
											<div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg" data-title="Project Title">
												<div class="thumb-info-wrapper">
													<img src="assets/img/our-eco/MOE.jpg" class="img-fluid" alt="MOE">
												</div>
											</div>
										</a>
										<a href="portfolio-single-wide-slider.html" aria-label="">
											<div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg" data-title="Project Title">
												<div class="thumb-info-wrapper">
													<img src="assets/img/our-eco/GS.png" class="img-fluid" alt="GS">
												</div>
											</div>
										</a>
									</div>

								</div>
							</div>
							<div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
								<div class="ps-5 w-100">

									<div class="d-flex flex-column">
										<a href="portfolio-single-wide-slider.html" class="mb-5" aria-label="">
											<div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg" data-title="Project Title">
												<div class="thumb-info-wrapper">
													<img src="assets/img/our-eco/mycarbon.png" class="img-fluid" alt="mycarbon">
												</div>
											</div>
										</a>
										<a href="portfolio-single-wide-slider.html" aria-label="">
											<div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg" data-title="Project Title">
												<div class="thumb-info-wrapper">
													<img src="assets/img/our-eco/Verra.png" class="img-fluid" alt="Verra" style="background: black;">
												</div>
											</div>
										</a>
									</div>

								</div>
							</div> --}}

                    </section>
                    <section
                        class="vw-xl-75 d-xl-flex flex-row pb-5 pb-xl-0 p-relative vh-xl-100 min-vh-xl-100 justify-content-center align-items-center bg-color-secondary text-color-light">

                        <div
                            class="vw-xl-87 custom-ws-initial min-vh-xl-100 d-flex align-items-center text-center p-relative overflow-hidden">

                            <div class="custom-el-2 p-absolute ms-0" data-scroll data-scroll-direction="vertical"
                                data-scroll-speed="-1.5" data-scroll-offset="-100%">
                                <img width="100%" height="100%"
                                    src="assets/img/circle.svg" alt="" />
                            </div>

                            <div class="p-5 w-100 p-relative z-index-1">

                                <div class="container-fluid w-100 mt-5">
                                    {{-- <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-xl-8">
                                            <h3 class="text-color-light">Understanding Carbon Credits</h3>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-6 col-xl-4">
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="0">
                                                <p class="m-0 vsm-color">Carbon credits representing one metric ton of CO2 or
                                                    equivalent GHG prevented from entering the atmosphere, plays a vital
                                                    role in combating climate change.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row justify-content-center mt-5">
                                        <div class="col-xl-4 mb-2 mb-xl-0">
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="250">
                                                <h3 class="text-color-light">@lang('home.1_title')</h3>
                                                <p class="m-0 vsm-color">@lang('home.1_para')</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-5">
                                        <div class="col-xl-4 mb-2 mb-xl-0 mt-5">
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="250">
                                                <h3 class="text-color-light">@lang('home.2_title')</h3>
                                                <p class="m-0 vsm-color">@lang('home.2_para')</p>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 mb-2 mb-xl-0 mt-5">
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="500">
                                                <h3 class="text-color-light">@lang('home.3_title')</h3>
                                                <p class="m-0 vsm-color">@lang('home.3_para')</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row justify-content-center mt-5">
                                        <div class="vcm-structure">
                                            <div class="vcm-card">
                                                <h2 class="text-8">Standard</h2>
                                                <p class="vsm-color">Defines the criteria and methodologies for VCM projects.</p>
                                            </div>
                                            <div class="vcm-arrow">→</div>
                                            <div class="vcm-card">
                                                <h2 class="text-8">Projects (Developer)</h2>
                                                <p class="vsm-color">Entities implementing carbon reduction or removal projects.</p>
                                            </div>
                                            <div class="vcm-arrow">→</div>
                                            <div class="vcm-card">
                                                <h2 class="text-8">Verified Credits</h2>
                                                <p class="vsm-color">Carbon credits that have been verified and issued.</p>
                                            </div>
                                            <div class="vcm-arrow">→</div>
                                            <div class="vcm-card">
                                                <h2 class="text-8">Markets</h2>
                                                <p class="vsm-color">Platforms where carbon credits are traded.</p>
                                            </div>
                                            <div class="vcm-arrow">→</div>
                                            <div class="vcm-card">
                                                <h2 class="text-8">End Buyer</h2>
                                                <p class="vsm-color">Entities purchasing carbon credits to offset their emissions.</p>
                                            </div>
                                            <div class="vcm-arrow">→</div>
                                            <div class="vcm-card">
                                                <h2 class="text-8">Offsets</h2>
                                                <p class="vsm-color">The result of using carbon credits to compensate for emissions.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>

                    </section>

                    <section
                        class="d-xl-flex flex-row p-relative pb-5 pb-xl-0 vh-xl-100 min-vh-xl-100 justify-content-center align-items-center bg-color-light">

                        <div class="vw-xl-25 custom-ws-initial min-vh-xl-100 d-xl-flex align-items-center">
                            <div class="p-5 w-100">
                                {{-- <h5 class="mt-4 mt-xl-0">Lorem ipsum</h5> --}}
                                <h2>@lang('home.hdww_title')</h2>

                                {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}

                                {{-- <a href="blog-large-image-full-width.html" class="custom-link-1">View Our Blog</a> --}}
                            </div>
                        </div>

                        <div
                            class="min-vw-xl-50 custom-ws-initial min-vh-xl-100 d-flex align-items-center custom-border-left-1">
                            <div class="p-5 w-100">
                                <div class="container-fluid">
                                    <div class="row mb-4 pb-4 custom-border-bottom-2">
                                        <div class="col-xl-2 mb-2 mb-xl-0">
                                            <span
                                                class="badge badge-dark rounded-pill text-uppercase px-2 py-1 me-1">@lang('home.hdww_1_step')</span>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <a class="text-color-dark font-weight-semibold text-4 line-height-4">@lang('home.hdww_1_title')</a>
                                        </div>
                                        <div class="col-12 col-xl-7">@lang('home.hdww_1_para')
                                        </div>
                                    </div>
                                    <div class="row mb-4 pb-4 custom-border-bottom-2">
                                        <div class="col-xl-2 mb-2 mb-xl-0">
                                            <span
                                                class="badge badge-dark rounded-pill text-uppercase px-2 py-1 me-1">@lang('home.hdww_2_step')</span>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <a class="text-color-dark font-weight-semibold text-4 line-height-4">@lang('home.hdww_2_title')</a>
                                        </div>
                                        <div class="col-12 col-xl-7">@lang('home.hdww_2_para')
                                        </div>
                                    </div>
                                    <div class="row mb-4 pb-4 custom-border-bottom-2">
                                        <div class="col-xl-2 mb-2 mb-xl-0">
                                            <span
                                                class="badge badge-dark rounded-pill text-uppercase px-2 py-1 me-1">@lang('home.hdww_3_step')</span>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <a class="text-color-dark font-weight-semibold text-4 line-height-4">@lang('home.hdww_3_title')</a>
                                        </div>
                                        <div class="col-12 col-xl-7">@lang('home.hdww_3_para')
                                        </div>
                                    </div>
                                    <div class="row mb-4 pb-4 custom-border-bottom-2">
                                        <div class="col-xl-2 mb-2 mb-xl-0">
                                            <span
                                                class="badge badge-dark rounded-pill text-uppercase px-2 py-1 me-1">@lang('home.hdww_4_step')</span>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <a
                                                class="text-color-dark font-weight-semibold text-4 line-height-4">@lang('home.hdww_4_title')</a>
                                        </div>
                                        <div class="col-12 col-xl-7">@lang('home.hdww_4_para')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section
                        class="d-xl-flex flex-row p-relative vh-xl-100 min-vh-xl-100 justify-content-center align-items-center bg-color-secondary"
                        id="contact">

                        <div
                            class="min-vw-xl-75 custom-ws-initial min-vh-xl-100 d-flex align-items-center p-relative overflow-hidden">

                            {{-- <div class="p-absolute custom-el-5">
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-1.6"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-1.3"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-1.0"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.7"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.3"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.0"></span>
                            </div>

                            <div class="p-absolute custom-el-6 d-none d-xl-block">
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.0"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.2"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.4"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.6"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-0.8"></span>
                                <span class="custom-el-4" data-scroll data-scroll-direction="vertical"
                                    data-scroll-speed="-1.0"></span>
                            </div> --}}

                            <div class="p-5 text-color-light w-100 text-center p-relative z-index-1">

                                <div class="container-fluid w-100 mt-5 ms-xl-5">
                                    <div class="row mb-4 justify-content-center">
                                        <div class="col-12 col-xl-10 text-start">
                                            <h2 class="text-color-light">@lang('home.rtta')</h2>
                                        </div>
                                    </div>
                                    <div class="row mb-4 justify-content-center">
                                        <div class="col-xl-4 text-start">
                                            <h4 class="text-color-light opacity-6 font-weight-normal mb-4">@lang('home.lt')
                                            </h4>
                                            {{-- <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="0">
                                                <p class="text-3 text-xl-5 text-color-light"><a href="#"
                                                        class="text-color-light">800 123 4567</a></p>
                                            </div> --}}
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="100">
                                                <p class="text-3 text-xl-5 text-color-light"><a
                                                        href="mailto:Engage@coz.sa"
                                                        class="text-color-light"style="text-decoration: underline;">
                                                        Engage@coz.sa</a></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 text-start hide-footer">
                                            <h4
                                                class="text-color-light opacity-6 font-weight-normal mb-4 mt-4 mt-xl-0">
                                                Our Services</h4>
                                            {{-- <ul class="list-unstyled custom-list-1 text-1">
                                                <li>- Web Development</li>
                                                <li>- Marketing</li>
                                                <li>- Web Development</li>
                                                <li>- Marketing</li>
                                                <li>- Web Development</li>
                                                <li>- Marketing</li>
                                            </ul> --}}
                                        </div>
                                        <div class="col-xl-3 text-start">
                                            <h4
                                                class="text-color-light opacity-6 font-weight-normal mb-4 mt-4 mt-xl-0">
                                                @lang('home.ol')</h4>
                                            <ul class="list-unstyled custom-list-1 text-1">
                                                <li>@lang('home.sa')</li>
                                                <li>@lang('home.riyadh') </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mb-4 mt-4 justify-content-center">
                                        <div class="col-12 col-xl-5 text-center text-xl-start">
                                            <p class="m-0 text-0-5">@lang('home.copyright') </p>
                                        </div>
                                        <div class="col-12 col-xl-5 text-center text-xl-end pe-5">
                                            <ul class="list-inline mt-3 mt-xl-0 mb-0">
                                                <li
                                                    class="list-inline-item px-1 anim-hover-translate-top-5px transition-2ms">
                                                    <a href="https://www.linkedin.com/company/coz-ksa/?viewAsMember=true/" target="_blank"
                                                        class="text-color-light text-color-hover-primary text-3"><i
                                                            class="fab fa-linkedin text-3"></i></a>
                                                </li>
                                                <li
                                                    class="list-inline-item px-1 anim-hover-translate-top-5px transition-2ms">
                                                    <a href="http://www.x.com/Coz_ksa" target="_blank"
                                                        class="text-color-light text-color-hover-primary text-3"><i
                                                            class="fab fa-x-twitter text-3"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </section>
                </div>
            </div> 

        </div>

    </div>
    @if (App::getLocale() === 'ar')
    <div class="nav-arrows">
        <a href="#" class="arrows left-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path fill="#5c1f99" d="M7.285 12.707a.97.97 0 0 1-.281-.688.99.99 0 0 1 .281-.72l3.283-3.282H1.001c-.563 0-1.001-.47-1.001-1 0-.501.438-1.002 1-1.002h9.568L7.285 2.702a.964.964 0 0 1 0-1.407.964.964 0 0 1 1.407 0l5.003 5.003a.964.964 0 0 1 0 1.407l-5.003 5.003a.964.964 0 0 1-1.407 0Z"></path>
            </svg>
        </a>
        <a href="#" class="arrows right-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path fill="#5c1f99" d="M6.715 1.293a.97.97 0 0 1 .281.688.99.99 0 0 1-.281.72L3.432 5.982h9.567c.563 0 1.001.47 1.001 1 0 .501-.438 1.002-1 1.002H3.431l3.283 3.314a.964.964 0 0 1 0 1.407.964.964 0 0 1-1.407 0L.305 7.703a.964.964 0 0 1 0-1.407l5.003-5.003a.964.964 0 0 1 1.407 0Z"></path>
            </svg>
        </a>
    </div>
    @else
    <div class="nav-arrows">
        <a class="arrows left-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path fill="#5c1f99" d="M6.715 1.293a.97.97 0 0 1 .281.688.99.99 0 0 1-.281.72L3.432 5.982h9.567c.563 0 1.001.47 1.001 1 0 .501-.438 1.002-1 1.002H3.431l3.283 3.314a.964.964 0 0 1 0 1.407.964.964 0 0 1-1.407 0L.305 7.703a.964.964 0 0 1 0-1.407l5.003-5.003a.964.964 0 0 1 1.407 0Z"></path>
            </svg>
        </a>
        <a class="arrows right-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path fill="#5c1f99" d="M7.285 12.707a.97.97 0 0 1-.281-.688.99.99 0 0 1 .281-.72l3.283-3.282H1.001c-.563 0-1.001-.47-1.001-1 0-.501.438-1.002 1-1.002h9.568L7.285 2.702a.964.964 0 0 1 0-1.407.964.964 0 0 1 1.407 0l5.003 5.003a.964.964 0 0 1 0 1.407l-5.003 5.003a.964.964 0 0 1-1.407 0Z"></path>
            </svg>
        </a>
    </div>
    @endif
            
    {{-- <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="master/less/skin-creative-agency-1.less" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher" aria-label="Style Switcher"><i class="fas fa-cogs"></i><div class="style-switcher-tooltip"><strong>Style Switcher</strong><p>Check out different color options and styles.</p></div></a> --}}

    <!-- Vendor -->
    <script src="assets/vendor/plugins/js/plugins.min.js"></script>
    <script src="assets/vendor/gsap/gsap.min.js"></script>
    <script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script>

    <script src="assets/vendor/locomotive-scroll/locomotive-scroll.min.js"></script>

        <!-- Theme Custom -->
        <script src="assets/js/custom.js?v=5"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets/js/theme.js?v=2"></script>

    <!-- Demo -->
    <script src="assets/js/demos/demo-creative-agency-1.js"></script>


    <!-- Theme Initialization Files -->
    <script src="assets/js/theme.init.js"></script>

</body>

</html>
