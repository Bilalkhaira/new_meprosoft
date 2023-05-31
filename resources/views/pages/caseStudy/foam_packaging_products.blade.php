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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/FoamPackagingProducts.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Foam Packaging Products</h1>
        <p>Our Customer is a leading international supplier of specialist
          plastic, EVA foam and packaging products</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/58.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">Foam Packaging Products</h3>
      <p>Our Customer is a leading international supplier of specialist
        plastic, EVA foam and packaging products</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>Planning & Execution not well aligned</li>
            <li>Multiple plants & Process posed challenges</li>
            <li>High requirement of traceability due to international
              compliance requirements</li>
            <li>Being OEM suppliers for Global Giants high level of
              interface requirements</li>
            <li>Multi plants and multiple processes and controls</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Modules </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,MM,PP,QM,PP,BOBJ,FIORI, CONTAINER PLANNING</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Solution Highlights </p>
          <ul class="">
            <li>Integrated Planning & Execution across plants</li>
            <li>Delivery management with container planning & tracking</li>
            <li>Product Costing</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection