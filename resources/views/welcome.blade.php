@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection
@section('content')

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/new_design_img/Banner-1.png') }}" alt="Los Angeles" style="width:100%" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1>Unleash Your Business Potential with S/4HANA RISE for Cloud</h1>
                <p>Mesprosoft S/4HANA Cloud services empowers customers with a cutting-edge, adaptable, and intelligent ERP solution that boosts efficiency, fosters innovation, and propels business expansion within a cloud-centric ecosystem. </p>
                <a href="{{ route('services.digitalTransformationWithCloud') }}" class="btn btn-primary read_btn"> Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/new_design_img/1.png') }}" alt="Chicago" style="width:100%" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1>Bringing Results, Developing Relationships</h1>
                <p>We bank on our lean organization structure and efficient team to offer the best value addition, besides our longstanding customer relations are a solid proof of our strength to deliver results and retain customers. </p>
                <a href="{{ route('services.businessConsulting') }}" class="btn btn-primary read_btn"> Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/new_design_img/3.png') }}" alt="New York" style="width:100%" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1>Mesprosoft: Leading the Way in SAP Services</h1>
                <p>Mespro Grandize, S/4HANA Cloud 4 SME, a highly customized solution offered by Mesprosoft, a dominant player in the SAP and Supplementary application services with exceptional credentials to its name in the manufacturing segment.</p>
                <a href="{{ route('services.specificConsulting') }}" class="btn btn-primary read_btn"> Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/new_design_img/8.png') }}" alt="New York" style="width:100%" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1>Unlock Efficiency, Eliminate Bottlenecks</h1>
                <p>With the traditional MRP, the planners were not able to execute the MRP at regular intervals and hence, creating a bottleneck. Mespro Optimized MRP helps our customers to reduce Inventory cost by 2- 4 % and to reduce dead stock accumulation to 0%</p>
                <a href="{{ route('productAndSolution.mesproPaperessManufacturing') }}" class="btn btn-primary read_btn"> Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/new_design_img/11.png') }}" alt="New York" style="width:100%" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1>Revolutionizing Batch Manufacturing</h1>
                <p>Mesprosoft with its strong competency in using SAP @ Manufacturing is offering a solution to Process Industries with eBMR, where in without any additional License cost the solution can be integrated for Batch Manufacturing record on real time in electronic mode. </p>
                <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}" class="btn btn-primary read_btn"> Read More</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container-fluid sec_padding">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>OUR SERVICES</h1>
        </div>
    </div>

    <div class="row srvc_brder_rw">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                <img src="{{ asset('img/new_design_img/icons/288005_iLM_v3_R_orange.png') }}" width="100%" alt="">
                </div>
                <div class="col-md-9">
                    <h5>Business Consulting</h5>
                    <p>Mesprosoft provides thorough business consulting services to assist organisations in overcoming obstacles, streamlining procedures, and achieving their strategic goals.</p>
                    <a href="{{ route('services.businessConsulting') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                <img src="{{ asset('img/new_design_img/icons/291075_Continuous_attention_to_excellence_R_orange.png') }}" width="100%" alt="">
                </div>
                <div class="col-md-9">
                    <h5>Digital Transformation With Cloud</h5>
                    <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences.</p>
                    <a href="{{ route('services.digitalTransformationWithCloud') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                <img src="{{ asset('img/new_design_img/icons/291076_Deliver_value_frequently_R_orange.png') }}" width="100%" alt="">
                </div>
                <div class="col-md-9">
                    <h5>S/4 Hana Conversion</h5>
                    <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP systems to the powerful</p>
                    <a href="{{ route('services.hanaConversion') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                <img src="{{ asset('img/new_design_img/icons/288316_WIPS_R_orange.png') }}" width="100%" alt="">
                </div>
                <div class="col-md-9">
                    <h5>Application Support</h5>
                    <p>Mesprosoft provides comprehensive application support services to ensure the smooth functioning and uninterrupted operation of software applications utilised by our clients.</p>
                    <a href="{{ route('services.applicationSupport') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
      
    </div>

</div>

<div class="container-fluid about_sec">
    <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('img/new_design_img/about.jpg') }}" alt="">
            <div class="about_gray_dv">

            </div>
            <div class="about_yellow_dv">
                <h2>ABOUT MESPROSOFT</h2>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">
            <p>We aim to improve the Business processes of our customers by building good metrics and processes using the world’s best software. All our products & Services current and future are lined up for this goal. Mesprosoft wants to extend its image beyond its customers as “the most trusted IT services Company”, which can deliver what it promise and add value to the customer.</p>
            <a href="{{ route('home.about') }}" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-1"></div>
    </div>

</div>

<img src="{{ asset('img/newHome/img.png') }}" width="100%" alt="">

<div class="container">

    <div class="row">
        <h1 class="product_heading">PRODUCTS & SOLUTIONS</h1>
        <div class="col-md-4">
            <div class="ftr_above_sec">
                <h5>BTP</h5>
                <p>Mesprosoft understand that adding value to your business is crucial to its success...</p>
                <a href="{{ route('productAndSolution.BTP') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ftr_above_sec">
                <h5>Mespro Optimized MRP</h5>
                <p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning...</p>
                <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ftr_above_sec">
                <h5>IOT</h5>
                <p>Mesprosoft is at the forefront of Industry 4.0 capabilities and IoT solutions that drive ....</p>
                <a href="{{ route('productAndSolution.IOT') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
            </div>
        </div>
    </div>

</div>
<div class="ftr_abv_dv"></div>


@endsection