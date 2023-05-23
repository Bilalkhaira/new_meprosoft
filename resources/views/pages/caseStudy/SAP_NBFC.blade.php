@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/case_study1.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>SAP NBFC</h1>
        <p>Customer is One of the
          leading NBFC’s specializing in
          financing the purchase of
          commercial vehicles and
          construction equipment.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/nbf.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">SAP NBFC</h3>
      <p>Customer is One of the
        leading NBFC’s specializing in
        financing the purchase of
        commercial vehicles and
        construction equipment.</p>
      <p>Mesprosoft Reengineered the
        implemented processes
        incorporating High level of
        Interfacing with their existing UI
        for Branches.</p>
      <p>Developments are almost Kin to
        a Customized BPM with
        Automated workflow and Loan
        process Management
        automations</p>
      <p>Modules implemented
        FI/CO, Treasury & Interfaces</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i>Delivered Features to Customers</p>
          <ul class="">
            <li>Fully Legal compliant Financial
              Management system in compliance with
              SEBI & RBI regulations</li>
            <li>System Driven Loan Processing and
              Loan management systems</li>
            <li>Complex interface with direct third party
              database connectivity</li>
            <li>Branch wise profitability</li>
            <li>Custom programs to build compliance
              and Adobe form</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection