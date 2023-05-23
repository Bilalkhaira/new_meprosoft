@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
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
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Dispatch Automation</h3>
          <p>Businesses with disorganized dispatch systems will eventually struggle for their life. Already such companies that are manually planning their routes, monitoring their vehicles and handing over the assignment to their driver are risking their business growth profile.</p>
          <a href="{{ route('productAndSolution.dispatchAutomation') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Dynamic Machine Scheduling</h3>
          <p>Automation is the next new face of manufacturing sectors. The world realizes the need for a higher level of production and timely availability of products.</p>
          <a href="{{ route('productAndSolution.dynamicMachineScheduling') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Electronic Batch Manufacturing</h3>
          <p>Pharmaceuticals & chemicals companies have long been relying on batch manufacturing processes. A batch record verifies that a company correctly controls and records all crucial steps involved in creating a batch of a product.</p>
          <a href="{{ route('productAndSolution.electronicBatchManufacturing') }}" class="btn btn-primary btn-sm">Read More</a>
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