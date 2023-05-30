@extends('layouts.master')
@section('css')
<style>
  p{
    text-align: justify;
  }
  li{
    text-align: justify;
  }
</style>
@endsection
@section('content')

<section class="hdr_bg">
    <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/product.jpg' )}}"></div>
    <div class="img_dv">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>Our Product & Solution</h1>
                <p>To satisfy our customers' unique demands, Mesprosoft provides a wide range of cutting-edge software solutions.</p>
            </div>
        </div>

    </div>
</section>

<div class="container product_vedio_sec">
    <div class="row">
        <div class="col-md-6 hdg_dv">
            <h3 class="display-4 mb-5">Our Products & Solutions</h3>
            <p>To satisfy our customers' unique demands, Mesprosoft provides a wide range of cutting-edge software solutions. Our purpose is to empower organisations with cutting-edge technology that enables them to accomplish their goals successfully and efficiently.</p>
            <!-- <a href="#" class="btn btn-primary btn-sm">Read More</a> -->
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
                <p>We recognise that diverse sectors have unique requirements and challenges. We offer industry-specific software solutions tailored to verticals such as manufacturing, healthcare, retail, logistics, and more to address this. These solutions incorporate industry best practices, compliance standards, and advanced functionalities that cater to the specific needs of each sector.</p>
                <!-- <a href="#" class="btn btn-primary btn-sm">Read More</a> -->
            </div>
        </div>


    </div>

</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/icons/286242_Canada-Globe_R_orange.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Dispatch Automation </h3>
            <a href="{{ route('productAndSolution.dispatchAutomation') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/icons/291100_78320_Automated_Revenue_Management_R_orange.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Dynamic Machine Scheduling </h3>
            <a href="{{ route('productAndSolution.dynamicMachineScheduling') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/icons/289596_Energy_Trees_R_orange.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Electronic Batch Manufacturing </h3>
            <a href="{{ route('productAndSolution.electronicBatchManufacturing') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/icons/287426_Global learning_R_orange.png') }}" width="100px" height="100px" alt="">
            <h4 class="display-7 mb-5">Mespro GSP Preconfigured Analytics</h4>
            <a href="{{ route('productAndSolution.mesproGPSPreconfiguredAnalytics') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link text-center">
            <img src="{{ asset('img/new_design_img/icons/292349_Brake_Disk_R_orange.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Mespro Life Science CFR Part 11</h3>
            <a href="{{ route('productAndSolution.mesproLifeScienceCFRPart11') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>

        <div class="col-md-4 service_link service_link_bg text-center">
            <img src="{{ asset('img/new_design_img/icons/291099_78320_Automated_Revenue_Management_Var_R_orange.png') }}" width="100px" height="100px" alt="">
            <h3 class="display-7 mb-5">Mespro Paperess Manufacturing </h3>
            <a href="{{ route('productAndSolution.mesproPaperessManufacturing') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>

</div>




@endsection