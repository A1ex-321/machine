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
    .thumbnail img {
    transition: transform 0.3s ease; /* Add transition for smooth effect */
}

.thumbnail img:hover {
    transform: scale(1.1); /* Enlarge the image on hover */
}

</style>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url('{{ asset('public/machine/images/b1.jpeg') }}');">
    <div class="container text-center">
        <h1>Our Gallery</h1>
    </div>
</section>
<!--End breadcrumb area-->


<section class="our-services">
<div class="container">
  <!-- <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p> -->
  <div class="row">
    @foreach($gallery as $image)
    <div class="col-md-4">
        <div class="thumbnail">
            <a target="_blank">
                <img style="width:338px;height:210px;" src="{{ asset('public/images/'.$image->machineimage) }}" alt="Image" >
                <!-- <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                </div> -->
            </a>
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
<!-- <section id="gather" class="container" style="">
    <div>
        <h3 id="des" style="color: aliceblue; margin-bottom: 30px;"></h3>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{{ url('/contact') }}" id="contact" class="colorful-btn" style=""></a>
            </div>
        </div>
    </div>
</section> -->

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