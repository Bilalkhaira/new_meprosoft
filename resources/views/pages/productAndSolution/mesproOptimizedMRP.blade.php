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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/OptimizedMRP.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro Optimized MRP</h1>
        <p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning and some powerful execution tools that aid in superior inventory control at a reduced cost. With an optimized MRP, Mesprosoft ensures an even allocation of raw materials and resources.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/39.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">HOW EFFICIENT IS YOUR MRP RUN?</h3>
      <p><b>Are your operations not running smoothly? Is your Material Requirement Planning (MRP) lacking accuracy? Or have you been going through certain limitations in the current MRP solutions? Well, you have found the right place. </b></p>
      <p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning and some powerful execution tools that aid in superior inventory control at a reduced cost. With an optimized MRP, Mesprosoft ensures an even allocation of raw materials and resources. Simultaneously this results into the following benefits </p>
      <ul>
        <li>Lower inventory costs for our clients by 2-4%.</li>
        <li>Dropped the accumulation of dead stock to zero percent.</li>
        <li>Real-time alignment of planned purchases with vendors' most recent delivery schedules.</li>
        <li>Full transparency, tracking against set dates, and much more with optimized MRP.</li>
      </ul>
      <a href="{{ route('contactUs') }}"> Contact us today to learn more about how we can help you leverage the power of Mespro Optimized MRP to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/293468_ireland.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Revolutionize Your Inventory Control</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/293468_ireland_bread_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's Optimized MRP Solutions for Superior Results</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285462_Inspire-lightbulb_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's Integrated Planning and Execution Tools for Superior Inventory Control</h3>
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