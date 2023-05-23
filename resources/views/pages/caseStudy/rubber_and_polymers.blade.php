@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/case_study1.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Rubber And Polymers</h1>
        <p>Customer is the leading Rubber retreads , allied rubber
          products for the Automotive industry and rubber reclaiming
          equipment manufacturer.</p>
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
      <h3 class="display-4 mb-5">Rubber And Polymers</h3>
      <p>Customer is the leading Rubber retreads , allied rubber
        products for the Automotive industry and rubber reclaiming
        equipment manufacturer.</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>Existing ERP was not giving desired results</li>
            <li>Multi country multi state operations</li>
            <li>Highly automated plants </li>
            <li>High Out put weight variations need to be addressed</li>
            <li>High number of customers and Stockists</li>
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
            <li>Interfaced data out put from production lines for Reporting</li>
            <li>Commodity – Last price based costing for each lots.</li>
            <li>Consistent planning to delivery process</li>
            <li>Visibility across the value chain covering all locations</li>
            <li>Accounting & Taxation local statutes</li>
            <li>Real Time analytics</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection