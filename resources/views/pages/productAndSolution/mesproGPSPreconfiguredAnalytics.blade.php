@extends('layouts.master')
@section('css')
<style>
  p {
    text-align: justify;
  }

  li {
    text-align: justify;
  }
</style>
@endsection
@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/GPSPreconfiguredAnalytics.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro GPS Preconfigured Analytics</h1>
        <p>The irony of the current times is that the Organizations have tons of data about themselves but unable to use them intelligently for their best results.</p>
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
      <p>The irony of the current times is that the Organizations have tons of data about themselves but unable to use them intelligently for their best results. Mesprosoft prebuilt templates reports and dashboards (Mespro BOBJ –GPS) allow you to quickly see thru this data by building strategic, tactical and operational data and provides valuable insights and your performance against industry best practice KPI’s which can be used for your management review inputs – Real-time, anywhere .</p>
      <p><b>KPI BASED ON</b></p>
      <ul>
        <li>Revenue</li>
        <li>Working Capitals</li>
        <li>Marketing</li>
        <li>Sales</li>
        <li>Human Capital Managements</li>
      </ul>
      <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of Mespro GPS Preconfigured Analytics to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2 text-right">
          <img src="{{ asset('img/new_design_img/icons/291099_78320_Automated_Revenue_Management_Var_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft BOBJ-GPS for Seamless Vehicle Tracking</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2 text-right">
          <img src="{{ asset('img/new_design_img/icons/291099_78320_Automated_Revenue_Management_Var_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's Smart Solutions for On-Demand Vehicle Tracking</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2 text-right">
          <img src="{{ asset('img/new_design_img/icons/291100_78320_Automated_Revenue_Management_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's GPS-powered Solutions for Effortless Vehicle Tracking</h3>
        </div>
      </div>

    </div>
    <div class="col-md-5">
      <div class="paperLess_form_outer">
      <iframe frameborder="0" style="height:650px;width:100%;border:none;" src='https://forms.zohopublic.in/mesprosoft/form/RequestADemo/formperma/sdZ_uTFMLGDUasTpWtNEac3QFJovqtFU95ZUJtUcY-4'></iframe>
        <!-- <form action="/action_page.php">
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
        </form> -->
      </div>
    </div>
  </div>
</div>









@endsection