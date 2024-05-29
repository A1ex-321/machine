@extends('machine.layout.app')

@section('content')
<style>
    /* Apply styles for screens up to 768px (mobile view) */
@media (max-width: 768px) {
    .topnav {
        display: flex;
        /* justify-content: center; */
    }

    #contact {
        order: 1; /* Move the contact link to the center */
    }
}

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





#gather {
    background-color: rgb(177, 118, 31);
    margin-bottom: 100px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center; /* Center text horizontally */
}

#contact {
    background-color: #4CAF50;
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



.about-us  {
        /* Define styles for mobile view */
        margin-top: 75px;    }
</style>
<section class="about-us sec-padd-top">
    <div class="container">
    <div class="row">
    @foreach($service as $service)
    <div class="col-md-6 col-sm-12">
        <figure class="about-img">
            <img src="{{ asset('public/images/' . $service->image) }}" alt="about titan builders photo" width="100%" height="auto">
        </figure>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="about-text">
            <h2>
                {{ $service->title }} <span class="thm-color">{{ $service->spantitle }}</span>
            </h2>
            <div class="text">
                <p>{{ $service->content }}</p>
            </div>
            <!-- Additional HTML content can be added here if needed -->
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
                <a href="{{ url('/contact') }}" class="colorful-btn" style="background-color: #4CAF50; /* Green */ border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; border-radius: 8px;">Contact Us</a>
            </div>
        </div>
    </div>
</section> -->
<section id="" class="container" style="margin-bottom:10px;">

    <div class="topnav">
  <!-- <a class="active" href="#home">Home</a> -->
  <a id="des" class="active" ></a>

  <!-- <a href="#about" class="split">Help</a> -->
  <a href="{{ url('/contact') }}" id="contact" class="split"></a>

</div>
</section>
@endsection

@push('scripts')
<script>

</script>
@endpush
