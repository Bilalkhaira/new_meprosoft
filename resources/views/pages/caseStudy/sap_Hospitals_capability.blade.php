@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/SAPHospitalsCapability.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>SAP Hospitals Capability</h1>
        <p>Customer is a multi-specialty
          tertiary care hospital providing
          high-quality medical aid.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row case_study_sec">
    <div class="col-md-4">
      <img src="{{ asset('img/new_design_img/hospital.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="display-4 mb-5">SAP Hospitals Capability</h3>
      <p>Customer is a multi-specialty
        tertiary care hospital providing
        high-quality medical aid.</p>
      <p>Mesprosoft Reengineered the
        implemented processes
        incorporating High level of
        Interfacing with their existing
        Hospital Management system.</p>
      <p>Armed with success story
        Mesprosoft is tasked with Rolling
        out the solutions across the
        globe for KIMS</p>
      <p>Modules implemented
        FI/CO, MM,PM,& Interfaces</p>
      <ul class="case_study_outer_list">
        <li>
          <p><i class="fa fa-circle"></i>Delivered Features to Customers</p>
          <ul class="">
            <li>Financial Accounting with Full integrations
              to the front end systems, Electronic Bank
              reconciliations and full visibility for the
              Receivables and Ageing</li>
            <li>Co with Assessment cycle to the cost
              centers providing profitability by Business
              Area and Profit centers</li>
            <li>MM Providing a full visibility of stocks and
              procurements and controlled dispensing
              full visibility of AP and system driven
              procurements while consistency
              monitoring Quality consistency</li>
            <li>Plant Maintenance ensuring all the devises
              are under the preventive care and validity
              for calibrations and certification with also
              providing view of Asset Management.</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>









@endsection