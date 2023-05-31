@extends('layouts.master')
@section('css')
<style>
  p{
    text-align: justify;
  }
  li{
    text-align: justify;
  }
</style>
@endsection
@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Dispatch_Automation.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Dispatch Automation </h1>
        <p>Businesses with disorganized dispatch systems will eventually struggle for their life. Already such companies that are manually planning their routes, monitoring their vehicles and handing over the assignment to their driver are risking their business growth profile.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/31.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
     <p>Businesses with disorganized dispatch systems will eventually struggle for their life. Already such companies that are manually planning their routes, monitoring their vehicles and handing over the assignment to their driver are risking their business growth profile. But those that are capitalizing on automation are effectively handling the movement of their inventory by prioritizing all those things which might have been overlooked earlier. So come along! With exceptional expertise in creating automation for businesses, MesProSoft is optimizing the goods dispatch processes for companies. Our services help you eliminate labour-intensive, time-consuming and costly activities – worth recommending for consumer-based products.</p>
    <p><b>Features</b></p>
    <ul>
      <li>Semi-Automatic/ Fully System for professional-like inventory control.</li>
      <li>Improving the cash flow by bringing transparency in the confirmed orders & remaining stocks.</li>
      <li>Weighing up dispatchable capacity to stay prepared earlier.</li>
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
          <img src="{{ asset('img/new_design_img/icons/288316_WIPS_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Expert Dispatch Automation Services for Smooth Operations</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288316_WIPS_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Transforming Dispatch Processes: Your Partner in Efficient Automation Solutions</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288194_Digital.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Seamless Dispatch, Exceptional Results</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288193_Digital.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Empowering Businesses through Automation</h3>
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