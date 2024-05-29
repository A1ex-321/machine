@extends('machine.layout.app')

@section('content')
<style>
    .thumbnail img {
        transition: transform 0.3s ease;
        /* Add transition for smooth effect */
    }

    .thumbnail img:hover {
        transform: scale(1.1);
        /* Enlarge the image on hover */
    }

    @media (max-width: 768px) {
        .topnav {
            display: flex;
            /* justify-content: center; */
        }

        #contact {
            order: 1;
            /* Move the contact link to the center */
        }
    }

    /* CSS for image */
    .topnav {
        overflow: hidden;
        background-color: #939085;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* .topnav a:hover {
  background-color: #ddd;
  color: black;
} */

    /* Create a right-aligned (split) link inside the navigation bar */
    .topnav a.split {
        float: right;
        background-color: #04AA6D;
        color: white;
    }



    #err {
        height: 230px;
        width: 100%;
        border: 2px solid #f0da37;
        border-radius: 5px;
        object-fit: cover;
        /* Adjusts the image to cover the entire container while maintaining aspect ratio */

    }

    /* Hover effect to enlarge image */
    .enlarge-img {
        transition: transform 0.3s ease;
        /* Add transition property */
    }

    .enlarge-img:hover {
        transform: scale(1.1);
        /* Scale up to 110% */
    }


    #late {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 8px;
        width: 200px;
    }

    #contact {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 0px;
    }

    #gather {
        background-color: rgb(177, 118, 31);
        margin-bottom: 100px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slotholder {
        height: 100% !important;
    }

    .tp-revslider-slidesli {
        height: 40% !important;

    }

    /* Apply styles for screens larger than 768px (excluding mobile view) */
    /* Apply styles for screens up to 768px (mobile view) */
    /* Apply styles for screens up to 768px (mobile view) */
    @media (max-width: 768px) {
        .about-us .sec-padd-top {
            /* Define styles for mobile view */
            margin-top: 0px !important;
        }
    }


    .about-us .sec-padd-top {
        /* Define styles for mobile view */
        margin-top: -204px;
    }

    .tp-mask-wrap {
        margin-top: -260px;
        font-size: 40px!important;
    }
    .rev_slider_wrapper
    {
        height:660px!important;
    }
</style>


<section class="rev_slider_wrapper" style="">

    <div id="slider1" class="rev_slider" data-version="5.0">
        @php
        $recordCount = count($getRecord);
        @endphp

        <ul>
            @for ($i = 0; $i < $recordCount; $i++) @php $record=$getRecord->get($i); @endphp
                <li data-transition="slidingoverlayleft">
                    <img src="{{ asset('public/images/' . $record->image) }}" alt="" width="1920" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="15" data-y="center" data-voffset="-50" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box" style="margin-top:30px;">
                            <h4 style="background-color:black;color:white;font-size:50px!important;">{!! nl2br(json_decode($record->title)->title) !!}</h4>
                            <!-- <p>{!! nl2br(json_decode($record->description)->description) !!}</p> -->
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="390" data-y="center" data-voffset="110" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <!-- <div class="slide-content-box">
                            <div class="button">
                                <a ii="a1" style="border-radius:8px;margin-bottom:8px;" class="thm-btn bg-clr1" href="{{ url('/about') }}">About Us</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="180" data-y="center" data-voffset="110" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <!-- <div class="slide-content-box">
                            <div class="button" style="height:-10px;">
                                <a id="a2" style="border-radius:8px;margin-bottom:8px;" class="thm-btn bg-clr2" href="{{ url('/contact') }}">Contact Us</a>
                            </div>
                        </div> -->
                    </div>
                </li>
                @endfor
        </ul>


    </div>
</section>
<!--End rev slider wrapper-->


<!-- <section class="about-us sec-padd-top">
    <div class="container">
        <div class="row">
            @foreach ($content as $machineService)
            @if ($machineService->image && $machineService->title && $machineService->spantitle)
            <div class="col-md-6 col-sm-12">
                <figure class="about-img">
                    <img src="{{ asset('public/images/' . $machineService->image) }}" alt="about titan builders photo">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-text">
                    <h2>
                        {{ $machineService->title }} <span class="thm-color">{{ $machineService->spantitle }}</span>
                    </h2>
                    <div class="text">
                        @if ($machineService->content)
                        <p>{{ $machineService->content }}</p>
                        @else
                        <p>No description available</p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</section> -->
<section class="about-us sec-padd-top" style="">
    <div class="container">
        <div class="row">
            @foreach ($content as $machineService)
            @if ($machineService->image && $machineService->title && $machineService->spantitle)
            <div class="col-md-6 col-sm-12 sec-padd-top"> <!-- Added sec-padd-top class here -->
                <figure class="about-img">
                    <img src="{{ asset('public/images/' . $machineService->image) }}" alt="about titan builders photo" width="100%" height="auto">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12 sec-padd-top"> <!-- Added sec-padd-top class here -->
                <div class="about-text">
                    <h2>
                        {{ $machineService->title }} <span class="thm-color">{{ $machineService->spantitle }}</span>
                    </h2>
                    <div class="text">
                        @if ($machineService->content)
                        <p>{{ $machineService->content }}</p>
                        @else
                        <p>No description available</p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>





<section class="our-services">
    <div class="container">
        @if ($content->isNotEmpty())
        @foreach ($content as $machineService1)
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="section-title">
                    <h2 style="align-items: center;">{{ $machineService1->servicetitle }}</h2>
                </div>
            </div>
            <div class="col-md-8 col-sm-7 col-xs-12 font-20">
                <p>{{ $machineService1->servicedescription }}</p><br>
            </div>
        </div>
        @endforeach
        @endif


        <div id="serviceContainer`" class="row">
            <!-- Service data will be dynamically added here -->
            @php $count = 0; @endphp <!-- Initialize a counter variable -->
            @foreach($service as $item)
            @if($count < 6) <!-- Check if the counter is less than 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-our-service">
                        <figure class="img-box">
                            <!-- Assuming 'machineimage' contains the path of the image relative to your public directory -->
                            <img src="{{ asset('public/images/'.$item->machineimage) }}" class="enlarge-img" alt="Awesome Image" id="err">
                        </figure>
                        <h3 style="font-weight: bold;text-align:center;">{{ $item->machinetitle }}</h3>
                        <p>{{ substr($item->description, 0, 100) }}{{ strlen($item->description) > 100 ? '...' : '' }}</p> <!-- Limiting description to 100 characters -->
                    </div>
                </div>
                @php $count++; @endphp <!-- Increment the counter after each iteration -->
                @else
                @break <!-- Exit the loop after the 6th iteration -->
                @endif
                @endforeach


        </div>
    </div>
    </div>
    <section id="" class="container" style=" margin-bottom: 100px; height: 5px; display: flex; justify-content: center; align-items: center;">
        <div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <a href="{{ url('/service') }}" id="late" class="colorful-btn" style="">Read more_</a>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="our-services">
    <div class="container">
        <div class="row">
            @php $count = 0; @endphp <!-- Initialize a counter variable -->
            @foreach($gallery as $item1)
            @if($count < 6) <div class="col-md-4">
                <div class="thumbnail">
                    <a target="_blank">
                        <img style="width:338px;height:210px;" src="{{ asset('public/images/'.$item1->machineimage) }}" alt="Image">
                    </a>
                </div>
        </div>
        @php $count++; @endphp <!-- Increment the counter after each iteration -->
        @if($count % 3 == 0) <!-- Start a new row after every 3rd image -->
    </div>
    <div class="row">
        @endif
        @endif
        @endforeach
    </div>
    </div>
    <section id="" class="container" style=" margin-top:20px;margin-bottom: 50px; height: 5px; display: flex; justify-content: center; align-items: center;">
        <div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <a href="{{ url('/gallery') }}" id="late" class="colorful-btn" style="">Read more_</a>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="" class="container" style="margin-bottom:10px;">

    <div class="topnav">
        <!-- <a class="active" href="#home">Home</a> -->
        <a id="des" class="active"></a>

        <!-- <a href="#about" class="split">Help</a> -->
        <a href="{{ url('/contact') }}" id="contact" class="split"></a>

    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Display the service content
        document.getElementById("our-services").style.display = "block";
    });
</script>
<script>
    document.getElementById('yourNextPageButtonId').addEventListener('click', function() {
        var api = revapi.revnext(); // Assume revapi is your Revolution Slider API variable
        // Optionally, directly jump to a specific slide if needed
        // api.revshowslide(index);
    });
</script>

@endpush