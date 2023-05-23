@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
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
<p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning and some powerful execution tools that aid in superior inventory control at a reduced cost. With an optimized MRP, Mesprosoft ensures an even allocation of raw materials and resources. Simultaneously this results into the following benefits  </p>      
<ul>
  <li>Lower inventory costs for our clients by 2-4%.</li>
  <li>Dropped the accumulation of dead stock to zero percent.</li>
  <li>Real-time alignment of planned purchases with vendors' most recent delivery schedules.</li>
  <li>Full transparency, tracking against set dates, and much more with optimized MRP.</li>
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