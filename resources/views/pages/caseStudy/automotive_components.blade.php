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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Automotive_Components.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Automotive Components</h1>
        <p>OEM suppliers for all type of bearing with domestic and
          International customers as well as contract manufacturers for
          overseas brands</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/61.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">Automotive Components</h3>
      <p>OEM suppliers for all type of bearing with domestic and
        International customers as well as contract manufacturers for
        overseas brands</p>
      <ul class="case_study_outer_list">
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
             Challenges faced:</p>
          <ul class="">
            <li>High level of complex manufacturing</li>
            <li>High requirement of traceability due to international
              compliance requirements</li>
            <li>Lots of Subcontractors</li>
            <li>Export Documentation & Compliance Tracking</li>
          </ul>
        </li>
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
             Modules </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,MM,PP,QM,PP,PM,BOBJ,FIORI, EXIM</li>
          </ul>
        </li>
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
             Solution Highlights </p>
          <ul class="">
            <li>Streamline from process from Planning to Delivery with huge no
              of Subcontracted orders & Processes</li>
            <li>Visibility across the value chain including subcontract Stock</li>
            <li>Product Compliance Management to International Standards</li>
            <li>Export Management with EXIM</li>
            <li>Product Costing</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection