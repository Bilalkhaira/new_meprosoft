@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/PLCMESWeighBridgeIntegration.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>PLC/MES/Weigh Bridge Integration</h1>
        <p>India is in growth path and so are all of our customers. Often companies face stiff challenges when transitioning from a Pvt Ltd company to LTD company and the compliance requirements for preparation for IPO could be very much challenging.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/12.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>In a complete production environment it is seldom enough to have a standalone system, connected and Automated system brings high level of consistency in Quality and traceability of the products.</p>
    <p><b>Features</b></p>
    <ul>
      <li>Mesprosoft integration connectivity services enables your SAP to be connected to Weigh Bridge – ensuring Real-time inward, outward, net weight and tare weight calculation.</li>
      <li>Dispensing Connectivity – Connect your dispensing weigh bridge to ensure you are dispensing the correct amount for blending with indicators of Min and Max levels.</li>
      <li>MES Integration – With SAP OPC connectivity Mesprosoft can connect to PLC and fetch information on production and process parameters directly from PLC and sensors</li>
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
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Unlocking Growth Opportunities</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Unlock the Power of PLC/MES/Weigh Bridge Integration</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Enhance Accuracy, Streamline Processes</h3>
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