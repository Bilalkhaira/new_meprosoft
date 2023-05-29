@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/news.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>News</h1>
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
          <h3 class="display-7 mb-5">Mesprosoft is now ranked among the 20 most promising SAP implementation partners in India.</h3>
          <img class="mb-8" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
          <p>Mesprosoft is now ranked among the 20 most promising SAP implementation partners in India, by CIO review...</p>
          <a href="https://www.ciotechoutlook.com/magazine/Mesprosoft-Driving-High-Utilization-of-SAP-within-Organizations-JHNQ227078976.html" target="_blank" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-12">
          <!-- <img class="mb-5" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt=""> -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <h3 class="display-7 mb-5">Mesprosoft Introduced</h3>
          <img class="mb-8" src="{{ asset('img/new_design_img/news2.png') }}" width="100%" alt="">
          <p>Mesprosoft Introduced A New Pay Per Ticket Model For Its Customers...</p>
          <a href="https://www.mesprosoft.com/wp-content/uploads/2018/06/Mespro_Pay_Per_Ticket.pdf" target="_blank" class="btn btn-primary btn-sm">Read More</a>
        </div>

      </div>
      <div class="row news_row_margin">
        <div class="col-md-12">
          <!-- <img src="{{ asset('img/new_design_img/news2.png') }}" width="100%" alt=""> -->
        </div>
      </div>

    </div>
  </div>
</div>









@endsection