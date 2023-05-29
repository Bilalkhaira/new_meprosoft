@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Services.jpg' )}}"></div>
    <div class="img_dv">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>Services</h1>
                <p>At Mesprosoft, we are committed to assisting our clients in successfully enhancing their business operations through the application of cutting-edge software solutions.</p>
            </div>
        </div>

    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <div class="col-lg-12 text-center">
                <h3 class="display-4 mb-5">Mespro Services</h3>
                <p>At Mesprosoft, we are committed to assisting our clients in successfully enhancing their business operations through the application of cutting-edge software solutions. Our main goal is to increase an organisation's productivity, efficiency, and profitability by utilising the best software tools and technology available today.</p>
                <p>We provide a broad range of goods and services, all of which are focused on enhancing business metrics and procedures. We have solutions that are specifically designed to suit your unique demands and issues, whether you are a big corporation or a tiny startup.</p>
            <p>We provide services that cover every phase of the software development lifecycle, from gathering and analysing requirements through designing, creating, testing, deploying, and providing continuous support. Our staff is made up of highly qualified experts with years of expertise who are knowledgeable about current technology and best practices in the field. They collaborate closely with our clients to comprehend their needs and create tailored solutions supporting their corporate goals.</p>
            </div>

        </div>
    </div>
</section>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/service_link2.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Business Consulting </h3>
            <a href="{{ route('services.businessConsulting') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Digital Transformation With S4 Hana Cloud</h3>
            <a href="{{ route('services.digitalTransformationWithCloud') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/service_link2.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">S/4 Hana Conversion </h3>
            <a href="{{ route('services.hanaConversion') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/service_link2.png') }}" width="100px" height="100px" alt="">
            <h4 class="display-7 mb-5"> Application Support</h4>
            <a href="{{ route('services.applicationSupport') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">PLC MES Weigh Bridge Integration</h3>
            <a href="{{ route('services.PLCMESWeighBridgeIntegration') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/service_link2.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Resource Argumentation</h3>
            <a href="{{ route('services.resourceArgumentation') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center service_link_below_sec">
                <p>As the most dependable provider of IT services, Mesprosoft aspires to become that. We are dedicated to keeping our word and enhancing our clients' operations. We want to be your dependable partner in advancing digital transformation and attaining sustainable growth with our knowledge, commitment, and customer-centric outlook.</p>
                <p>Get in touch with us right now to learn more about how Mesprosoft's superior software solutions and services can strengthen your company.</p>
                <!-- <a href="#" class="btn btn-primary btn-sm">Read More</a> -->
            </div>
        </div>
    </div>
</div>




@endsection