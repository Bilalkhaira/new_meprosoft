@extends('layouts.master')
@section('css')
<style>
  p {
    text-align: justify;
  }

  li {
    text-align: justify;
  }

  .img_btn {
    background-color: #dee3e6;
    padding: 10px;
    text-align: center;
    width: 99.5%;
    font-size: 20px;
  }

  .img_btn a {
    color: black;
  }
</style>
@endsection
@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service5.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>IPO Compliance</h1>
        <p>India is in growth path and so are all of our customers. Often companies face stiff challenges when transitioning from a Pvt Ltd company to LTD company and the compliance requirements for preparation for IPO could be very much challenging.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/new_ipo.png') }}" width="100%" alt="">
      <div class="img_btn">
        <a href="{{ route('contactUs') }}">Contact us for more….</a>
      </div>
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">IPO Compliance</h3>
      <p>India is in growth path and so are all of our customers. Often companies face stiff challenges when transitioning from a Pvt Ltd company to LTD company and the compliance requirements for preparation for IPO could be very much challenging. The business change management and process controls Audit requirements and reporting requirements. Mesprosoft with our expertise can ensure that your SAP system is able to contain those requirement seamlessly.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288005_iLM_v3_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Guiding Companies through Growth and Compliance</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288004_iLM_v2_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Smooth Transitions, Successful IPOs</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288004_iLM_v2_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Driving Success in the Growth Path</h3>
        </div>
      </div>

    </div>
    <div class="col-md-5">
      <div class="paperLess_form_outer">
      <iframe frameborder="0" style="height:500px;width:100%;border:none;" src='https://forms.zohopublic.in/mesprosoft/form/RequestADemo/formperma/sdZ_uTFMLGDUasTpWtNEac3QFJovqtFU95ZUJtUcY-4'></iframe>
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