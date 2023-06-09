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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/FoodProcessingConsumerWare.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Food Processing & Consumer Ware</h1>
        <p>Our Customer is engaged in
          manufacturing and marketing
          natural colours, flavours and
          savoury blends to food and
          beverage industries worldwide.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/51.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">Food Processing & Consumer Ware</h3>
      <p>Our Customer is engaged in
        manufacturing and marketing
        natural colours, flavours and
        savoury blends to food and
        beverage industries worldwide.</p>
      <p>Mesprosoft Implemented SAP
        S/4HANA
        Solutions providing a complete
        supply chain automation and
        process manufacturing solution</p>
      <p>This helped the company to
        improve its supply chain
        planning and Process Automation
        and better visibility on
        profitably .</p>
      <p>Modules implemented
        FI/
        CO,SD,PP,QM,MM,SD,PS,BOBJ,oM
        RP*</p>

      <ul class="case_study_outer_list">
        <li>
          <p>
            <!-- <i class="fa fa-circle"></i> -->
           Delivered Features to Customers</p>
          <ul class="case_study_inner_list">
            <li>Barcode Automated Supply chain and Operations
              System driven Forecasting and planning
              Purchase Automation
              Profitabllity by division/products/profit centers</li>
          </ul>
        </li>
        <li>
      </ul>
    </div>
  </div>
</div>









@endsection