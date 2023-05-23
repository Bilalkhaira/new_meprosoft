@extends('layouts.master')

@section('content')

<section class="hdr_bg">
    <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/product.jpg' )}}"></div>
    <div class="img_dv">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>Our Product & Solution</h1>
                <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions,</p>
            </div>
        </div>

    </div>
</section>

<div class="container product_vedio_sec">
    <div class="row">
        <div class="col-md-6 hdg_dv">
            <h3 class="display-4 mb-5">Our Products & Solutions</h3>
            <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
        <div class="col-md-6">
            <video width="100%" height="400px" poster="{{ asset('img/new_design_img/img_thum.png')}}" controls="">
                <source src="http://staging.msoft.tadbeer.ga/img/homePage/1678795235.mp4" type="video/mp4">
                <object data="http://staging.msoft.tadbeer.ga/img/homePage/1678795235.mp4" width="100%" height="400px">
                    <embed src="http://staging.msoft.tadbeer.ga/img/homePage/1678795235.mp4" width="100%" height="400px">
                </object>
            </video>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row envolvement">
        <div class="col-md-6 envolvement_img" style="background-image: url({{ asset('img/new_design_img/optimize.png' )}});"></div>

        <div class="col-md-6 optimize_envolvement">
            <div>
                <img src="{{ asset('img/new_design_img/optimize1.png') }}" width="100px" height="100px" alt="">
                <h3 class="display-7 mb-5">Our Optimum Evolvement </h3>
                <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions,</p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
        </div>


    </div>

</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/optimize_link.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Dispatch Automation </h3>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/optimize_link1.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Dynamic Machine Scheduling </h3>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/optimize_link.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Electronic Batch Manufacturing </h3>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/optimize_link1.png') }}" width="100px" height="100px" alt="">
            <h4 class="display-7 mb-5">Mespro GSP Preconfigured Analytics</h4>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/optimize_link.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Mespro Life Science CFR Part 11</h3>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/optimize_link1.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Mespro Paperess Manufacturing </h3>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>

</div>




@endsection