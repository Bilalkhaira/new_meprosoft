@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/AboutUs.jpg' )}}"></div>
</section>

<div class="container-fluid home_menu_hdng">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>About Mesprosoft</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <p>We aim to improve the Business processes of our<br> customers by building good metrics and processes <br> using the world’s best software.</p>
    </div>
  </div>
  <div class="row home_menu_border">
    <div class="col-md-12 text-center">
      <h1>“Mesprosoft” is derived from the words Metrics,<br> Processes and Software</h1>
      <img src="{{ asset('img/new_design_img/about2.png') }}" width="80%" alt="">
      <p>We aim to improve the Business processes of our customers by building good metrics and processes using the world’s best software. All our products & Services current and future are lined up for this goal. Mesprosoft wants to extend its image beyond its customers as “the most trusted IT services Company”, which can deliver what it promise and add value to the customer.</p>
    </div>
  </div>
</div>

@endsection