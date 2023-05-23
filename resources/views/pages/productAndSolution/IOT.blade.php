@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>IOT</h1>
        <p>Mesprosoft is at the forefront of Industry 4.0 capabilities and IoT solutions that drive automation in manufacturing industries. With our advanced IoT and Industry 4.0 capabilities.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/paperLess1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">IOT</h3>
      <p>Mesprosoft is at the forefront of Industry 4.0 capabilities and IoT solutions that drive automation in manufacturing industries. With our advanced IoT and Industry 4.0 capabilities, we help manufacturers harness the power of data to optimize their operations, reduce costs, and enhance their overall productivity. Our IT solutions provide real-time visibility into the manufacturing process, enabling companies to identify and address issues as they occur. This helps to minimize downtime, reduce waste, and improve overall equipment effectiveness. Our solutions also enable predictive maintenance, allowing manufacturers to schedule maintenance activities before issues occur, avoiding costly breakdowns. Furthermore, our Industry 4.0 capabilities help manufacturers to implement end-to-end automation in their operations, from procurement and production to quality control and distribution. By automating key processes, manufacturers can reduce manual intervention, improve accuracy, and increase production speed. Overall, Mesprosoft's capabilities in IoT and Industry 4.0 are revolutionizing the manufacturing industry, driving automation and enabling companies to achieve unprecedented levels of operational excellence. Contact us today to learn more about how our solutions can help you optimize your manufacturing operations and achieve your business goals.</p>
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