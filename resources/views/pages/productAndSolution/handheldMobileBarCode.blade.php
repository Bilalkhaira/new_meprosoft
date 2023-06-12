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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/HandheldMobileBarCode.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Handheld Mobile Bar Code</h1>
        <p>Mobile productivity tools that fasten the buying journey for a customer are the need of modern businesses in today's fast-paced work. MesProSoft is enthusiastic about helping businesses with super-responsive and tech-enabled solutions.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/34.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Mobile productivity tools that fasten the buying journey for a customer are the need of modern businesses in today's fast-paced work. MesProSoft is enthusiastic about helping businesses with super-responsive and tech-enabled solutions. If you want your real-time business transaction to happen like a breeze, our services have come for your help. From QC inspection, and operation confirmation to component stagging, our handheld mobile barcode solutions make real-time business transaction quick, reliable and trackable. We build a field-ready scanning solution with expanded capabilities that get work done without interruptions.</p>
      <p><b>Features</b></p>
      <ul>
        <li>Business critical features with flexible scanning options to limit errors in workplaces.</li>
        <li>Receive instant alerts on any errors or issues if they still occurred in the payment schedules.</li>
        <li>Real-time confirmation and reporting through the BO dashboard with a detailed history of payments.</li>
      </ul>
      <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of Handheld Mobile Bar Code to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288003_iLM_v1_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Boost Your Productivity On-the-Go</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/289597_UAE_Pavilion_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Supercharge Your Buying Journey with Mesprosoft</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/291065_Global_Student_Network_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mobile Productivity Tools for Today's Fast-Paced Work</h3>
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