@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/case_study1.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>UTILITIES Industries</h1>
        <p>Customer is the Leading Private player in Power Generation
          and provides to National Grid</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/case_study.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">UTILITIES Industries</h3>
      <p>Customer is the Leading Private player in Power Generation
        and provides to National Grid</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>Plant Maintenance</li>
            <li>Billing Generations</li>
            <li>Financial Compliance</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Modules </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,PM,MM,PS,SD</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Solution Highlights </p>
          <ul class="">
            <li>System Driven Maintenance plan, Preventive and Breakdown
              maintenance</li>
            <li>Effective Billing Management n Generations</li>
            <li>Financial Compliance</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection