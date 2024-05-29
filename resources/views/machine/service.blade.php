@extends('machine.layout.app')

@section('content')
<style>
    /* Styling for the button */
    #gather {
        background-color: rgb(177, 118, 31);
        margin-bottom: 100px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
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
        border-radius: 8px;
    }
</style>
<style>
    /* CSS for image */
    .enlarge-img {
        width: 100%;
        /* Set initial width */
        height: 230px;
        /* Set initial height */
        object-fit: cover;
        /* Maintain aspect ratio */
        border: 2px solid #4CAF50;
        /* Border style */
        border-radius: 5px;
        /* Rounded corners */
    }

    .enlarge-img {
        transition: transform 0.3s ease;
        /* Add transition property */
    }

    /* Hover effect to enlarge image */
    .enlarge-img:hover {
        transform: scale(1.1);
        /* Scale up to 110% */
    }
</style>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-color:rgb(233 182 116 / 62%);height:140px!important;">
    <div class="container text-center">
        <h1>Our service</h1>
    </div>
</section>
<!--End breadcrumb area-->


<section class="our-services">
    <div class="container">
        @foreach($content as $service1)

        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="section-title">
                    <h2>{{$service1->servicetitle}}</h2>
                </div>
            </div>
            <div class="col-md-8 col-sm-7 col-xs-12 font-20">
                <p>{{$service1->servicedescription}}</p><br>
            </div>
        </div>
        @endforeach

        <div class="row">
            @foreach($service as $service)
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a><img src="{{ asset('public/images/'.$service->machineimage) }}" style="width:100%; height:230px; object-fit:cover; border: 2px solid #b5a424; border-radius:5px;" class="enlarge-img" alt="Awesome Image">
                        </a>
                    </figure>
                    <a>
                        <h4 style="font-weight: bold;">{{ $service->machinetitle }}</h4>
                    </a>
                    <p>
                        {{ substr($service->description, 0, 90) }}{{ strlen($service->description) > 200 ? '...' : '' }}
                    </p>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>

<!-- <section class="container" style="background-color: rgb(177, 118, 31); margin-bottom: 100px; height: 200px; display: flex; justify-content: center; align-items: center;">
    <div>
        <h3 style="color: aliceblue; margin-bottom: 30px;">For general inquiries, partnership opportunities, or any other questions </h3>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="contact.html" class="colorful-btn" style="background-color: #4CAF50; /* Green */ border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; border-radius: 8px;">Contact Us</a>
            </div>
        </div>
    </div>
</section> -->
<section id="gather" class="container" style="">
    <div>
        <h3 id="des" style="color: aliceblue; margin-bottom: 30px;"></h3>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{{ url('/contact') }}" id="contact" class="colorful-btn" style=""></a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Display the service content
        document.getElementById("gather").style.display = "block";
    });
</script>
@endpush