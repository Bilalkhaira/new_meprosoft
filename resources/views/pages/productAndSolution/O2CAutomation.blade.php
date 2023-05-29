@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/O2CAutomation.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>O2C Automation</h1>
        <p>Harness the complete potential of our order-to-cash (O2C) automation software that fully replaces end-to-end sales order processing from manual interactions with future-centric automation.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/42.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">O2C Automation (ALL INDUSTRIES)</h3>
<p>Harness the complete potential of our order-to-cash (O2C) automation software that fully replaces end-to-end sales order processing from manual interactions with future-centric automation. Finally, order receives, order fulfilment, and payments are centralized in a true manner. With an integrated order management system, we bring businesses the capabilities to handle their day-to-day balance sheet without a single error. Interact on an interactive dashboard because O2C processes have been turned more intelligent and fastest.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
  <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286393_Grenade_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Unlock Efficiency with Our Comprehensive Automation Solution</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286393_Grenade_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Embrace Automation and Eliminate Manual Interactions</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286804_Traffic_Lights_Circle_Critical_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Leverage the Full Potential of Our Automation Solution</h3>
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