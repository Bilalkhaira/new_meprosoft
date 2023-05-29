@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/BTP.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>BTP</h1>
        <p>Mesprosoft understand that adding value to your business is crucial to its success. That's why we recommend leveraging SAP Business Technology Platform (BTP) cloud services, a powerful suite of tools designed to help businesses transform their operations and enhance customer experiences.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/paperLess1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">BTP</h3>
      <p>Mesprosoft understand that adding value to your business is crucial to its success. That's why we recommend leveraging SAP Business Technology Platform (BTP) cloud services, a powerful suite of tools designed to help businesses transform their operations and enhance customer experiences. SAP BTP provides a flexible, scalable, and secure cloud-based platform that enables businesses to leverage the power of emerging technologies such as IoT, AI, and ML to gain insights and optimize their operations. We can help you unlock the full potential of SAP BTP by providing tailored solutions that meet your business requirements. Our team of experts can help you implement SAP BTP cloud services and integrate them with your existing systems. This will enable you to improve the efficiency of your business processes, reduce costs, and enhance customer engagement. Additionally, SAP BTP provides a secure environment to protect your data and ensure compliance with industry regulations. Overall, by partnering with Mesprosoft to leverage SAP BTP cloud services, you can add value to your business by enhancing operational efficiency, improving customer engagement, and staying ahead of the competition in today's digital landscape.</p>
    <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of SAP BTP to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
  <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/285961_Circles_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Transform Your Business with Mesprosoft's Recommendation </h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286242_Canada-Globe_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Accelerate Your Business Success with  Mesprosoft's Recommendation Services</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/283753_HEM_R_purple.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Leverage SAP BTP Cloud Services with Mesprosoft</h3>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="paperLess_form_outer">
        <form action="/action_page.php">
          <h3 class="display-7 mb-5">Request A Demo!</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Phone">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Category Name">
          </div>

          <div class="form-group">
            <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>









@endsection