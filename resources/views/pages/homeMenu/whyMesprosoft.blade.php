@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/WhyMespro.png' )}}"></div>
</section>

<div class="container-fluid home_menu_hdng">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Why Mesprosoft</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <p>We differentiate ourselves by ensuring that we follow a strict regimen of not deviating from our core value of value addition to the customer.</p>
    </div>
  </div>
  <div class="row home_menu_border">
    <div class="col-md-12 text-center">
      <h1>Core Values</h1>
      <p>We differentiate ourselves by ensuring that we follow a strict regimen of not deviating from our core value of value addition to the customer. Had always been honest in our approach and delivered according to the expectations.</p>
      <img src="{{ asset('img/new_design_img/why1.png') }}" width="80%" alt="">
    </div>
    

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using Mesprosoft’s MRP optimization Tools</p>
      <ul>
        <li>Reduced Inventory cost by 2- 4 % for our clients</li>
        <li>Reduced further Dead stock Accumulation to 0%</li>
        <li>Optimized planned procurements with real-time alignment with vendors latest schedule of deliveries</li>
      </ul>
    </div>

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using Mespro Paperless Manufacturing</p>
      <ul>
        <li>Increased the Assembly efficiency by 10%</li>
        <li>Utilization of Machines by 7% and better Sequencing</li>
      </ul>
    </div>

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using RFID Based Material Staging</p>
      <ul>
        <li>Augmenting Just in Sequence Staging-reducing WIP holdings drastically.</li>
        <li>Reduced the inward holding of materials to Zero.</li>
      </ul>
    </div>

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using Mesprosoft’s Mobile Interfacing</p>
      <ul>
        <li>End to End connectivity right from shop floor to Service field staff connected real-time</li>
      </ul>
    </div>

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using Mespro GPS Analytics</p>
      <ul>
        <li>Mgmt. Review Meeting preparations time reduced to 0 day.</li>
        <li>Review Performance on Strategic KPI.</li>
      </ul>
    </div>

    <div class="col-md-12 why_mesproft_ul"> 
      <p>Using Mesprosoft’s EBMR</p>
      <ul>
        <li>Painless FDA Audits – without any special preparations</li>
        <li>No advance Batch Management Record preparations</li>
      </ul>
    </div>
  </div>
</div>

@endsection