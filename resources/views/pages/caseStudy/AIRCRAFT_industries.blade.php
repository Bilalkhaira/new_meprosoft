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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/AIRCRAFT_Industries.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>AIRCRAFT Industries</h1>
        <p>Our Customer is the Leading Aircraft Component Manufacturer for
          World leader like Boeing, Airbus and Bombardier</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/60.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">AIRCRAFT Industries</h3>
      <p>Our Customer is the Leading Aircraft Component Manufacturer for
        World leader like Boeing, Airbus and Bombardier</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>Configurations control</li>
            <li>Project Control with design and development</li>
            <li>Fully Engineered to Order</li>
            <li>Document Management</li>
            <li>Computer Aided Time sheets</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Modules </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,MM,PP,QM,PP,BOBJ,FIORI, Interfaces</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Solution Highlights </p>
          <ul class="">
            <li>Project System with interface uploads</li>
            <li>Budget controls</li>
            <li>CATS</li>
            <li>Mobile Warehouse Management
              <ul>
                <li>Goods Reciept, Issues, Tracking – Via Barcode and
                  Mobile</li>
              </ul>
            </li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection