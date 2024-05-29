<!DOCTYPE html>
<html lang="en">

<head>
@if($link->isNotEmpty())
    @foreach($link as $item2)
    {!! $item2->scolink !!}
@endforeach
@endif
@if(isset($index) && $index->isNotEmpty())
    @foreach($index as $item)
        <meta charset="UTF-8">
        <title>{{ $item->metatitle }}</title>
        <meta name="description" content="{{ $item->metadescription }}">

        <meta property="og:title" content="{{ $item->ogtitle }}">
        <meta property="og:description" content="{{ $item->ogdescription }}">
        <meta property="og:image" content="{{ $item->ogimage }}">
        <meta property="og:url" content="{{ $item->ogurl }}">
        <meta property="og:type" content="{{ $item->ogtype }}">
    @endforeach
@elseif(isset($about) && $about->isNotEmpty())
    @foreach($about as $aboutItem)
        <meta charset="UTF-8">
        <title>{{ $aboutItem->metatitle }}</title>
        <meta name="description" content="{{ $aboutItem->metadescription }}">

        <meta property="og:title" content="{{ $aboutItem->ogtitle }}">
        <meta property="og:description" content="{{ $aboutItem->ogdescription }}">
        <meta property="og:image" content="{{ $aboutItem->ogimage }}">
        <meta property="og:url" content="{{ $aboutItem->ogurl }}">
        <meta property="og:type" content="{{ $aboutItem->ogtype }}">
    @endforeach
    @elseif(isset($serviceseo) && $serviceseo->isNotEmpty())
    @foreach($serviceseo as $serviceseo1)
        <meta charset="UTF-8">
        <title>{{ $serviceseo1->metatitle }}</title>
        <meta name="description" content="{{ $serviceseo1->metadescription }}">

        <meta property="og:title" content="{{ $serviceseo1->ogtitle }}">
        <meta property="og:description" content="{{ $serviceseo1->ogdescription }}">
        <meta property="og:image" content="{{ $serviceseo1->ogimage }}">
        <meta property="og:url" content="{{ $serviceseo1->ogurl }}">
        <meta property="og:type" content="{{ $serviceseo1->ogtype }}">
    @endforeach
    @elseif(isset($blogseo) && $blogseo->isNotEmpty())
    @foreach($blogseo as $blog1)
        <meta charset="UTF-8">
        <title>{{ $blog1->metatitle }}</title>
        <meta name="description" content="{{ $blog1->metadescription }}">

        <meta property="og:title" content="{{ $blog1->ogtitle }}">
        <meta property="og:description" content="{{ $blog1->ogdescription }}">
        <meta property="og:image" content="{{ $blog1->ogimage }}">
        <meta property="og:url" content="{{ $blog1->ogurl }}">
        <meta property="og:type" content="{{ $blog1->ogtype }}">
    @endforeach
    @elseif(isset($contact) && $contact->isNotEmpty())
    @foreach($contact as $contacts)
        <meta charset="UTF-8">
        <title>{{ $contacts->metatitle }}</title>
        <meta name="description" content="{{ $contacts->metadescription }}">

        <meta property="og:title" content="{{ $contacts->ogtitle }}">
        <meta property="og:description" content="{{ $contacts->ogdescription }}">
        <meta property="og:image" content="{{ $contacts->ogimage }}">
        <meta property="og:url" content="{{ $contacts->ogurl }}">
        <meta property="og:type" content="{{ $contacts->ogtype }}">
    @endforeach
    @elseif(isset($getRecord5))
    <meta charset="UTF-8">
    <title>{{ $getRecord5->metatitle }}</title>
    <meta name="description" content="{{ $getRecord5->metadescription }}">

    <meta property="og:title" content="{{ $getRecord5->ogtitle }}">
    <meta property="og:description" content="{{ $getRecord5->ogdescription }}">
    <meta property="og:image" content="{{ $getRecord5->ogimage }}">
    <meta property="og:url" content="{{ $getRecord5->ogurl }}">
    <meta property="og:type" content="{{ $getRecord5->ogtype }}">
@endif


    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/machine/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/machine/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/machine/images/favicon/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('public/machine/images/favicon/favicon-32x32.png') }}" sizes="32x32">

    <link rel="icon" type="image/png" href="{{ asset('public/machine/images/favicon/favicon-16x16.png') }}" sizes="16x16">


    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
<!-- Loader.css CDN -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/loaders.css/0.1.2/loaders.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<style>
    /* Define CSS for fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0; /* Start with 0 opacity */
        }
        to {
            opacity: 1; /* Gradually increase opacity to 1 */
        }
    }

    /* Apply fade-in animation to the image */
    #al1 {
        animation: fadeIn 2s ease-in; /* Adjust duration and timing function as needed */
    }
    @media only screen and (max-width: 767px) {
    /* Add your mobile styles here */
    #al {
align-items: center;    }
}

</style>
<style>
    /* Remove underline from <li> tag when hovering */
    li:hover {
        text-decoration: none;
    }
</style>

<style>
        /* Center loader */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7); /* semi-transparent white background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensure loader is on top of other content */
        }
    </style>

<style></style>
<div id="loader" class="loader-container">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<body>

        <!--====== Start Preloader ======-->
    <!--====== End Preloader ======-->
    <div class="boxed_wrapper">
        <!--Start Preloader -->

        <!--End Preloader -->

        <!--Start Top bar area -->
        <section class="top-bar-area" style="background-color:#a38c6be0;">
            <div class="container">
                <div class="clearfix"style="height:35px;">
                    <div class="pull-left">
                        <p id="head"></p>
                    </div>
                    <div class="pull-right">
                        <!-- <p><i class="fa fa-clock-o"></i>Monday - friday : 8:00 AM to 7:00 Pm</p> -->
                    </div>
                </div>

            </div>
        </section>
        <!--End Top bar area -->

        <!--Start header area-->
        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="{{ url('/') }}" aria-label="Back to home">
                                <img id="al1" src="" loading="lazy" aria-label="Back to home"  style="width: 210px; height: 60px;">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="text-holder">

                                <h6>321,North Street,</h6>
                                <p>Chennai</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>+91 96854742545</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <a href="#"><p>demo@gmail.com</p></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->


                </div>
            </div>
        </header>
        <!--End header area-->

        <!--Start mainmenu area-->
        <section class="mainmenu-area stricky">
            <div class="container">
                <div class="mainmenu-bg" style="background-color:#ff8100;">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <!--Start mainmenu-->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" aria-label="Toggle navigation" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">

                                        <li class="dropdown"> <a href="{{ url('/') }}">
                                                home</a>

                                        </li>
                                        <li class="dropdown">                        <a href="{{ url('/about') }}">
About us</a>

                                        </li>
                                        <li class="dropdown">                        <a href="{{ url('service') }}">
Services</a>
                                            <!-- <ul>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="single-service.html">single service</a></li>
                                    </ul> -->
                                        </li>
                                        <li class="dropdown">                        <a href="{{ url('gallery') }}">
Gallery</a>
                                            <!-- <ul>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="single-service.html">single service</a></li>
                                    </ul> -->
                                        </li>
                                        <li class="dropdown">                        <a href="{{ url('/blog') }}">
Blogs</a>
                                            <!-- <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul> -->
                                        </li>
                                        <!-- <li class="dropdown"><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop Products</a></li>
                                        <li><a href="shop-single.html">Single Product</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                    </ul>
                                </li> -->
                                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                    </ul>
                                    <ul class="mobile-menu clearfix">

                                        <li class="dropdown"><a href="{{ url('/') }}">home</a>

                                        </li>
                                        <li class="dropdown"><a href="{{ url('/about') }}">About us</a>

                                        </li>
                                        <li class="dropdown"><a href="{{ url('/service') }}">Services</a>
                                        <li class="dropdown"><a href="{{ url('/gallery') }}">Gallery</a>
                                        </li>

                                        <li class="dropdown"><a href="{{ url('/blog') }}">Blogs</a>
                                            <!-- <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul> -->
                                        </li>

                                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!--End mainmenu-->

                        </div>

                    </div>
                    <div class="right-column">
                        <div class="right-area">
                            <div class="nav_side_content">
                                <!-- <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                       </div> -->

                            </div>
                            <div class="link_btn float_right">
                                <a style="background-color:rgb(255 81 14);
"href="" class="thm-btn bg-clr1" id="up">Call Us</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>