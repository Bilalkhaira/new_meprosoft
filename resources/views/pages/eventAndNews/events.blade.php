@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/event.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Events</h1>
        <p>Transformation Express by SAP: Powering a Digital India.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row news">

    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('eventAndNews.eventDetail') }}" target="_blank">
            <h3 class="display-7 mb-5">Transformation Express by SAP: Powering a Digital India.</h3>
            <img class="mb-8" src="{{ asset('img/new_design_img/event8.jpg') }}" width="100%" alt="">
          </a>
          <!-- <p>Mesprosoft Introduced A New Pay Per Ticket Model For Its Customers...</p> -->
          <a href="{{ route('eventAndNews.eventDetail') }}" target="_blank" class="btn btn-primary btn-sm">Explore More</a>
        </div>

      </div>
    </div>
  </div>
</div>









@endsection