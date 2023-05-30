@extends('layouts.master')
@section('css')
<style>
  p{
    text-align: justify !important;
  }
  li{
    text-align: justify;
  }
</style>
@endsection
@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/MachineToolIndustry.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Machine Tool Industry</h1>
        <p>Customer is a pioneer in Machine
          Tool industry, produces about
          400 CNC Machines, Each
          machine is unique in product
          specification.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/machine_tool.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">Machine Tool Industry</h3>
      <p>Customer is a pioneer in Machine
        Tool industry, produces about
        400 CNC Machines, Each
        machine is unique in product
        specification.</p>
      <p>Mesprosoft Implemented SAP
        with Variant configuration which
        eliminated the need of Extremely
        Complex Manual Design by
        system driven BOM and process
        generated in the back ground.
        This helped the company to
        scale its operations from a mere
        30 Machines a month to the
        current capacity, there are over
        200000 material with kit based
        procurement and complex
        operations and control</p>
      <p>Modules implemented
        PP,MM,SD,FI/CO,PM,PS,BOBJ</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i>Delivered Features to Customers</p>
          <ul class="case_study_inner_list">
            <li>Multilevel Product Feature selections, Simulation in designs (with Optional and
              Mandatory specs)</li>
            <li>Creation of Sales order BOMs, Routing and Pricing,</li>
            <ul>
              <li>Automatic product proposal in Sales order if Product specifications match to a
                typical combinations.</li>
              <li>Planning of Yearly budget based on a combination of characteristics.</li>
              <li>Use Cases: Machine Tool Industry, Cable industry, Packaging industry,</li>
            </ul>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection