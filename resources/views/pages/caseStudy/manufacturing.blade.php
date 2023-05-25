@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Manufacturing.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Manufacturing</h1>
        <p>Customer is a pioneer In manufacturing of Relays and Switches
          since 1960’s.</p>
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
      <h3 class="display-4 mb-5">Manufacturing</h3>
      <p>Customer is a pioneer In manufacturing of Relays and Switches
        since 1960’s.</p>
      <p>Follows Discrete Manufacturing with Make to Order and Make to
        Stock products</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>High level of complex manufacturing</li>
            <li>Poor visibility of inventory and controls there off.</li>
            <li>Requirement of high degree of order adherence for
              the Automotive section</li>
            <li>History of multiple ERP failure prior to Mesprosoft.</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Modules Implemented </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,MM,PP,QM,PP,PS BOBJ,FIORI.</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Solution Highlights </p>
          <ul class="">
            <li>Electronic KANBAN</li>
            <li>Streamline from process from Planning to Delivery</li>
            <li>Visibility across the value chain</li>
            <li>Optimized MRP enabling tight planning</li>
            <li>Order Execution in line with planning</li>
            <li>System driven Procurement matching the planning</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection