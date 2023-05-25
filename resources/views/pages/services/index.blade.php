@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service.jpg' )}}"></div>
    <div class="img_dv">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>Services</h1>
                <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions,</p>
            </div>
        </div>

    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <div class="col-lg-12 text-center">
                <h3 class="display-4 mb-5">Mespro Services</h3>
                <p>Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical business requirements. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough to give you the thrust for sustained growth and become profitable, Mesprosoft offers SAP implementation services & solutions to your strategic and current needs.</p>
                <p>Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical business requirements. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough.</p>
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
                <p>Mesprosoft has superior features to build solutions that you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough to give you the thrust for sustained growth and become profitable, Mesprosoft offers SAP implementation services & solutions to your strategic and current needs.</p>
                <p>Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical business requirements. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough.</p>
                <!-- <a href="#" class="btn btn-primary btn-sm">Read More</a> -->
            </div>
        </div>
    </div>
</div>




@endsection