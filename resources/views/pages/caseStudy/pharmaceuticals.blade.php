@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Pharmaceuticals1.jpeg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Pharmaceuticals</h1>
        <p>Our Client is a Blue chip Bio Pharma company in Brussels, The
          company have Operations across 45 Countries with Manufacturing
          processes in 10 Countries and rest as commercial affiliates.</p>
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
      <h3 class="display-4 mb-5">Pharmaceuticals</h3>
      <p>Our Client is a Blue chip Bio Pharma company in Brussels, The
        company have Operations across 45 Countries with Manufacturing
        processes in 10 Countries and rest as commercial affiliates.
        Customer had disparate systems and decided to discard and Go a
        Single Global System. SAP Belux was the lead Partners for the
        solution and Mesprosoft Team built and Manufacturing solution and
        subsequent rollout.</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i> Challenges faced:</p>
          <ul class="">
            <li>High level of complex manufacturing in Regulated
              environment</li>
            <li>Adherence to Global Standards in Multi cultural
              Environment</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Modules Implemented </p>
          <ul class="case_study_inner_list">
            <li>FI/CO,MM,PP-PI,QM,PP,PS BOBJ</li>
          </ul>
        </li>
        <li>
          <p><i class="fa fa-circle"></i> Solution Highlights </p>
          <ul class="">
            <li>Validated Environment</li>
            <li>Preapproves Recipes and Digital Signatures</li>
            <li>Audit Trails</li>
            <li>Interface with LIMS</li>
            <li>Batch Derivation and Batch records.</li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection