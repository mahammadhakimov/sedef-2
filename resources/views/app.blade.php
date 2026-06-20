<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Sədəf Klinikası — Bakıda müasir tibb mərkəzi. Kardiologiya, nevrologiya, stomatologiya, ginekologiya, qan analizləri, müayinə və təcili yardım. Peşəkar həkimlər, online qəbul."/>
    <meta name="keywords"
          content="klinika, tibb mərkəzi, xəstəxana, həkim, həkim qəbulu, online qeydiyyat, kardiologiya, nevrologiya, stomatologiya, ginekologiya, dermatologiya, qan analizi, müayinə, laboratoriya, USM, təcili yardım, sağlamlıq, Bakı klinika, tibbi xidmət, Sədəf Klinikası"/>
    <meta name="author" content="Sədəf Klinikası"/>
    <meta name="robots" content="index, follow"/>

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Sədəf Klinikası"/>
    <meta property="og:title" content="Sədəf Klinikası — Müasir Tibbi Xidmətlər"/>
    <meta property="og:description"
          content="Bakıda müasir tibb mərkəzi: kardiologiya, nevrologiya, stomatologiya, analizlər və peşəkar həkimlər. Online qəbula yazılın."/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:locale" content="az_AZ"/>
    {{-- Paylaşılanda görünəcək şəkil. 1200x630 px tövsiyə olunur. Dəyişmək üçün public/site/images/og-image.jpg faylını öz şəklinizlə əvəz edin. --}}
    <meta property="og:image" content="{{ asset('site/images/og-image.jpg') }}"/>
    <meta property="og:image:secure_url" content="{{ asset('site/images/og-image.jpg') }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:image:alt" content="Sədəf Klinikası"/>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Sədəf Klinikası — Müasir Tibbi Xidmətlər"/>
    <meta name="twitter:description"
          content="Bakıda müasir tibb mərkəzi: kardiologiya, nevrologiya, stomatologiya, analizlər və peşəkar həkimlər."/>
    <meta name="twitter:image" content="{{ asset('site/images/og-image.jpg') }}"/>

    <!-- Page Title -->
    <title>Sədəf Klinikası </title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('site/images/depertments/logo.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('site/images/depertments/icon.png')}}" rel="icon">
    <link href="{{asset('site/images/depertments/icon72x72.png')}}" rel="icon" sizes="72x72">
    <link href="{{asset('site/images/depertments/icon114x114.png')}}" rel="icon" sizes="114x114">
    <link href="{{asset('site/images/depertments/icon144x144.png')}}" rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('site/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('site/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('site/css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('site/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('site/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('site/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('site/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{asset('site/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('site/css/colors/theme-skin-blue.css')}}" rel="stylesheet" type="text/css">

    <!-- Google Font | Inter (full Azerbaijani alphabet support: ə ı ü ö ç ş ğ) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS | Site font override (must load after theme styles) -->
    <link href="{{asset('site/css/custom-fonts.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Site custom overrides (must load last) -->
    <link href="{{asset('site/css/custom.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->

    <script src="{{asset('site/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('site/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('site/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('site/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('site/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div class="body-overlay"></div>
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img src="{{asset('site/images/preloaders/1.gif')}}" alt="">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    @include('header')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>
                            @foreach ($sliders as $slider)
                                <!-- SLIDE -->
                                <li data-index="rs-{{ $loop->iteration }}" data-transition="random" data-slotamount="7"
                                    data-easein="default" data-easeout="default" data-masterspeed="1000"
                                    data-thumb="{{ asset($slider->image) }}" data-rotate="0" data-fstransition="fade"
                                    data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                    data-title="Intro" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}"
                                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                                         class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-30 pr-30"
                                        id="rs-{{ $loop->iteration }}-layer-1"

                                        data-x="['center']"
                                        data-hoffset="['0']"
                                        data-y="['middle']"
                                        data-voffset="['-90']"
                                        data-fontsize="['28']"
                                        data-lineheight="['54']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-40 pr-40"
                                        id="rs-{{ $loop->iteration }}-layer-2"

                                        data-x="['center']"
                                        data-hoffset="['0']"
                                        data-y="['middle']"
                                        data-voffset="['-20']"
                                        data-fontsize="['48']"
                                        data-lineheight="['70']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-center text-black"
                                         id="rs-{{ $loop->iteration }}-layer-3"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['50','60','70']"
                                         data-fontsize="['16','18','24']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-{{ $loop->iteration }}-layer-4"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['135','145','155']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;">

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function (e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [680, 500, 400, 400],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </div>
        </section>

        <!-- Section: home-boxes -->
        <section id="about">
            <div class="container pb-0">
                <div class="section-content">
                    <div class="row equal-height-inner">
                        <div class="col-sm-12 col-md-6 pr-0 pr-sm-15 sm-height-auto mt-sm-0" data-margin-top="-150px">
                            <div class="sm-height-auto bg-theme-colored-darker2">
                                <div class="p-30">
                                    <h3 class="text-uppercase text-white mt-0"> Sədəf Klinika </h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas
                                        odit unde dolor inventore autem quod vero incidunt labore sunt reprehenderit
                                        consectetur inventore autem quod vero incidunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0"
                             data-margin-top="-150px">
                            <div class="sm-height-auto bg-theme-colored">
                                <div class="p-30">
                                    <h3 class="text-white text-uppercase mt-0">İş Saatları</h3>
                                    <div class="opening-hours">
                                        <ul class="list-unstyled text-white">
                                            @foreach ($openingHours as $openingHour)
                                                <li class="clearfix"><span> {{ $openingHour->day }} </span>
                                                    <div class="value">
                                                        @if ($openingHour->is_closed)
                                                            Closed
                                                        @else
                                                            {{ \Illuminate\Support\Carbon::parse($openingHour->opens_at)->format('H:i') }}
                                                            - {{ \Illuminate\Support\Carbon::parse($openingHour->closes_at)->format('H:i') }}
                                                        @endif
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Services -->
        <section id="services" class=" bg-lighter">
            <div class="container pb-20">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Xidmətlər</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('site/images/title-icon.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="icon-box left media p-0"><a href="#" class="media-left pull-left"><i
                                            class="{{"storage/" . $service->icon }} text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="media-heading heading">{{ $service->title }}</h5>
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctors -->
        <section id="doctors">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Bizim Həkimlərimiz </h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('site/images/title-icon.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach ($doctors as $doctor)
                            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
                                <div class="team maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth"
                                                            src="{{ asset("storage/" . $doctor->image) }}"
                                                            alt="{{ $doctor->name }}"></div>
                                    <div class="content border-1px p-15 bg-light clearfix">
                                        <h4 class="name text-theme-color-2 mt-0">{{ $doctor->name }}</h4>
                                        <p class="mb-20">{{ $doctor->description }}</p>
                                        <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                                            <li><a href="{{ $doctor->facebook_url ?? '#' }}"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $doctor->twitter_url ?? '#' }}"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{ $doctor->google_plus_url ?? '#' }}"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <a class="btn btn-theme-colored btn-sm pull-right flip" href="#">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Funfact -->
        <section class="divider parallax layer-overlay overlay-theme-colored-9"
                 data-bg-img="{{asset('site/images/bg/bg2.jpg')}}" data-parallax-ratio="0.7">
            <div class="container pt-60 pb-60">
                <div class="row">
                    @foreach ($funfacts as $funfact)
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="{{ $funfact->icon }} mt-5 text-white"></i>
                                <h2 data-animation-duration="2000" data-value="{{ $funfact->value }}"
                                    class="animate-number text-white font-42 font-weight-500">0</h2>
                                <h5 class="text-white text-uppercase font-weight-600">{{ $funfact->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section: Departments -->
        <section id="departments">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Bizim şöbələrimiz</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('site/images/title-icon.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($departments as $department)
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                                <img class="img-fullwidth" alt="{{ $department->title }}"
                                     src="{{ asset('storage/'. $department->image) }}">
                                <h4>{{ $department->title }}</h4>
                                <p>{{ $department->description }}</p>
{{--                                <a href="#" class="btn-read-more text-theme-colored">Read more</a>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: blog -->
        <section id="blog">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Yeniliklər</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('site/images/title-icon.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col">
                                @foreach ($posts as $post)
                                    <div class="item">
                                        <article class="post clearfix bg-lighter">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="{{ asset('storage/' . $post->image) }}"
                                                         alt="{{ $post->title }}" class="img-responsive img-fullwidth">
                                                </div>
                                                <div
                                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600">{{ $post->published_at?->format('d') }}</li>
                                                        <li class="font-12 text-white text-uppercase">{{ $post->published_at?->format('M') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="entry-content p-15 pt-10 pb-10">
                                                <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                    <div class="media-body pl-0">
                                                        <div class="event-content pull-left flip">
                                                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                                <a href="#">{{ $post->title }}</a></h4>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                                    class="fa fa-commenting-o mr-5 text-theme-colored"></i> {{ $post->comments_count }} Comments</span>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                                    class="fa fa-heart-o mr-5 text-theme-colored"></i> {{ $post->likes_count }} Likes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-5">{{ $post->excerpt }}<a
                                                        class="text-theme-color-2 font-12 ml-5" href="#"> View
                                                        Details</a></p>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Contact -->
        <section id="contact" class="bg-lighter">
            <div class="container pb-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4" data-wow-duration="1.4s">
                            <img src="{{asset('site/images/about/dc2.png')}}" alt="">
                        </div>
                        <div class="col-md-8 wow fadeInRight mt-10" data-wow-duration="1.4s">
                            <h3 class="title line-bottom line-height-1 mt-0 mb-30">Növbə <span
                                    class="text-theme-colored">Al!</span></h3>
                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class=""
                                  action="https://html.kodesolution.com/2016/medikal-html/demo/includes/sendmail.php"
                                  method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input name="form_name" class="form-control" type="text"
                                                   placeholder="adınız" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input name="form_email" class="form-control required email" type="email"
                                                   placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <div class="styled-select">
                                                <select id="car_select" name="car_select" class="form-control"
                                                        required="">
                                                    <option value="">- Xidmət seç -</option>
                                                    @foreach($departments as $department)
                                                        <option
                                                            value="{{$department->title}}">{{$department->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="reservation_date" class="form-control required date-picker"
                                                   type="text" placeholder="tarix" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <textarea name="form_message" class="form-control required" rows="5"
                                              placeholder="ismarıc"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                                    <button type="submit"
                                            class="btn btn-flat btn-theme-colored text-uppercase mt-0 mb-sm-30"
                                            data-loading-text="Please wait...">Növbə al
                                    </button>
                                    <button type="reset"
                                            class="btn btn-flat btn-theme-colored text-uppercase mt-0 mb-sm-30">Yenilə
                                    </button>
                                </div>
                            </form>
                            <!-- Contact Form Validation-->
                            <script type="text/javascript">
                                $("#contact_form").validate({
                                    submitHandler: function (form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType: 'json',
                                            success: function (data) {
                                                if (data.status == 'true') {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function () {
                                                    $(form_result_div).fadeOut('slow')
                                                }, 6000);
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    @include('footer')
</div>
<!-- end wrapper -->


<script data-cfasync="false"
        src="https://html.kodesolution.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('site/js/custom.js')}}"></script>


<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('site/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447"
        integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"88f4fa328f314d4c95a104b4a60b2313","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
