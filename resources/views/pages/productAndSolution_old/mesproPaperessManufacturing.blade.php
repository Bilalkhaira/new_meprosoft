@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro Paper Less Manufacturing </h1>
        <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions,</p>
      </div>
    </div>
  </div>
</section>

<!-- <section class="wrapper image-wrapper bg-image bg-overlay text-white" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.png' )}}">
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro Paper Less Manufacturing </h1>
        <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions,</p>
      </div>
    </div>
  </div>
</section> -->

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/paperLess1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your.</p>
      <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions Mesprosoft has designed tailored solutions.</p>
      <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Business Consulting</h3>
          <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Digital transformation with S4 Hana cloud</h3>
          <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">S/4 HANA Conversion</h3>
          <p>Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
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