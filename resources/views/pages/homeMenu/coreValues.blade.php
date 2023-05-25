@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/coreValues.png' )}}"></div>
</section>

<div class="container-fluid home_menu_hdng">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Core Values</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <p>We value the individual, uphold the right to express <br> disagreement, and respect the time and efforts <br> of others. Nurture fairness, trust and respect.</p>
    </div>
  </div>
  <div class="row home_menu_border">
    <div class="col-md-12 text-center">
      <h1>Core Values</h1>
      <img src="{{ asset('img/new_design_img/coreValues1.png') }}" width="80%" alt="">
    </div>
    <div class="col-md-12"> 
      <p>Customer First: We respond to customers speedily, courteously and effectively.</p>
      <ul>
        <li>Individual Dignity: We value the individual, uphold the right to express disagreement, and respect the time and efforts of others. Nurture fairness, trust and respect.</li>
        <li>Professionalism: We impart freedom and the opportunity to excel and to grow; support innovation and well-reasoned risk taking, demanding performance.</li>
        <li>Quality focus: We make quality a value driver in our work, our products and our interactions. Do it First Time Right.</li>
      </ul>
    </div>
  </div>
</div>

@endsection