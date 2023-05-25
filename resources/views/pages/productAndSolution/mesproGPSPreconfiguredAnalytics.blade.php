@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/GPSPreconfiguredAnalytics.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro GPS Preconfigured Analytics</h1>
        <p>Location tracking is an on-demand facility in the transport and logistics industry. As the world is rushing towards smart solutions, so do Mesprosoft prebuilt templates, reports and dashboards (Mespro BOBJ – GPS), making vehicle tracking a matter of seconds.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/35.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Location tracking is an on-demand facility in the transport and logistics industry. As the world is rushing towards smart solutions, so do Mesprosoft prebuilt templates, reports and dashboards (Mespro BOBJ – GPS), making vehicle tracking a matter of seconds. "Data is the money", but it is even more valuable in the logistics industry. If you are also looking for a smart remote monitoring solution that keeps a track record of fleet services, Mespro GPS preconfigured analytics has come for your support. Using tech-enabled Key Performance Indicators (KPI), we make all good/bad metrics readily accessible to logistic firms.</p>
      <p><b>KPI BASED ON</b></p>
      <ul>
        <li>Human Capital Management.</li>
        <li>Working Capitals.</li>
        <li>Revenue</li>
        <li>Marketing</li>
        <li>Sales</li>
      </ul>
    </div>
  </div>
  <div class="row paperLess_form_sec">
  <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Mesprosoft BOBJ-GPS for Seamless Vehicle Tracking</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Mesprosoft's Smart Solutions for On-Demand Vehicle Tracking</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Mesprosoft's GPS-powered Solutions for Effortless Vehicle Tracking</h3>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="paperLess_form_outer">
        <form action="/action_page.php">
          <h3 class="display-7 mb-5">Request A Demo!</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Phone">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Category Name">
          </div>

          <div class="form-group">
            <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>









@endsection