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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/TS16949CompliaKAPA.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>TS 16949 Compliant KAPA</h1>
        <p>The ISO standard Technical Specification (TS) 16949 outlines specific requirements for manufacturers of automotive production and service parts.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/37.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">TS 16949 Compliant KAPA</h3>
      <p>The ISO standard Technical Specification (TS) 16949 outlines specific requirements for manufacturers of automotive production and service parts. The standard is addressed predominantly for quality management system (QMS) development. If your company also wants to be TS 16949 compliant, Mesprosoft will leave no stone unturned in making it happen. We are gearing up companies to adapt fastest to the modern business dynamics by making them compliant with the respective ISO standards.</p>
      <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of TS 16949 Compliant KAPA to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/292349_Brake_Disk_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Achieving Automotive Excellence</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/283753_HEM_R_purple.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Navigating Automotive Standards</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288005_iLM_v3_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Uncompromising Standards, Superior Performance</h3>
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