@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
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
      <img src="{{ asset('img/new_design_img/11.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
    <h3 class="display-7 mb-5">IPO Compliance</h3>
      <p>India is in growth path and so are all of our customers. Often companies face stiff challenges when transitioning from a Pvt Ltd company to LTD company and the compliance requirements for preparation for IPO could be very much challenging. The business change management and process controls Audit requirements and reporting requirements. Mesprosoft with our expertise can ensure that your SAP system is able to contain those requirement seamlessly.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">IPO Compliance</h3>
          <p>India is in growth path and so are all of our customers. Often companies face stiff challenges when transitioning from a Pvt Ltd company to LTD company and the compliance requirements for preparation for IPO could be very much challenging.</p>
          <a href="{{ route('services.IPOCompliance') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Digital transformation with S4 Hana cloud</h3>
          <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences. 
        That's why we recommend SAP S/4HANA Cloud as a powerful tool to enable this transformation.</p>
          <a href="{{ route('services.digitalTransformationWithCloud') }}"" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">S/4 HANA Conversion</h3>
          <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP systems to the powerful and innovative S/4HANA platform.</p>
          <a href="{{ route('services.hanaConversion') }}" class="btn btn-primary btn-sm">Read More</a>
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