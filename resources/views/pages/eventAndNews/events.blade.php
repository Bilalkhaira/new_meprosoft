@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/event.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
      <h1>Events</h1>
        <p>Stay updated on the trade shows, conferences, and industry events where Mesprosoft will be present.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row news">
    
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <h3 class="display-7 mb-5">Mesprosoft Introduced</h3>
          <img class="mb-8" src="{{ asset('img/new_design_img/event8.jpg') }}" width="100%" alt="">
          <p>Mesprosoft Introduced A New Pay Per Ticket Model For Its Customers...</p>
          <a href="{{ route('eventAndNews.eventDetail') }}" target="_blank" class="btn btn-primary btn-sm">Read More</a>
        </div>

      </div>
    </div>
  </div>
</div>









@endsection