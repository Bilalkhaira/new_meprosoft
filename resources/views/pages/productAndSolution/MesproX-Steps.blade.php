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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/PROCESSMANUFACTURINGCOCKPIT.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro X-steps</h1>
        <p>Compared to a traditionally used methodology for production reporting, process manufacturing by Mespro cockpit live data of the production process, which collects test results and takes needed parameters into account.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/41.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">X-STEPS PROCESS MANUFACTURING COCKPIT</h3>

      <p>Compared to a traditionally used methodology for production reporting, process manufacturing by Mespro cockpit live data of the production process, which collects test results and takes needed parameters into account. The information (e.g., route card or history card) is even obtainable post- manufacturing process as the entire history is preserved within the system itself.</p>
      <p><b>Features</b></p>
      <ul>
        <li>Alternative ingredients proposals.</li>
        <li>Real-time consumptions that are not in accordance with the Standard BOM.</li>
        <li>Authorizations and Digital Signatures.</li>
      </ul>
      <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of Mespro X-steps to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/286390_Ammo_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Embrace the Power of Live Data</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/286243_US-Globe_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mespro Cockpit Enhances Process Manufacturing Reporting</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/286390_Ammo_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Data-Driven Production Excellence: Maximize Efficiency, Minimize Errors</h3>
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