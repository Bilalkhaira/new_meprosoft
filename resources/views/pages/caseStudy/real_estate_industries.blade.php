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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/RealEstateIndustries.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Real Estate Industries</h1>
        <p>Our Customer is the Leading Real Estate Company In India with
          highest number of Commercial IT Park in Bangalore, Have
          their own construction</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/57.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">Real Estate Industries</h3>
      <p>Our Customer is the Leading Real Estate Company In India with
        highest number of Commercial IT Park in Bangalore, Have
        their own construction</p>
      <ul class="case_study_outer_list">
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
           Challenges faced:</p>
          <ul class="">
            <li>Project Control</li>
            <li>Budget control</li>
            <li>Billing and AR Compliance</li>
          </ul>
        </li>
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
           Modules </p>
          <ul class="case_study_inner_list">
            <li>FI/CO, REFX,MM,PS,QM,PP,HCM, Success Factors, FIORI,
              Interfaces</li>
          </ul>
        </li>
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
           Solution Highlights </p>
          <ul class="">
            <li>Project System with MRP procurements</li>
            <li>Project schedule controls</li>
            <li>Procurement with Budget control</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection