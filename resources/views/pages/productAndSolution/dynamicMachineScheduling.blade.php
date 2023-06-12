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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/DynamicMachineScheduling.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Dynamic Machine Scheduling</h1>
        <p>Automation is the next new face of manufacturing sectors. The world realizes the need for a higher level of production and timely availability of products.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/32.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Automation is the next new face of manufacturing sectors. The world realizes the need for a higher level of production and timely availability of products. Meanwhile, your machine will be experiencing an aggressive demand for resources, materials and inventories which tends to change dynamically. This is where you need to shift towards dynamic machine scheduling, or you need Mesprosoft. With fully digital workflows, Mesprosoft empowers flexibility and transparency across manufacturing processes. This results in improved output, fewer quality losses and almost zero machine downtimes. As the automotive sector is on the verge of revolution, Microsoft will deploy a series of analytical and automation-enabled capabilities into your business so that the fastest adoption is ensured.</p>
      <p><b>Features</b></p>
      <ul>
        <li>Intelligent scheduling for machines and resources.</li>
        <li>Automatic selection of operation and system.</li>
        <li>Better capacity utilization.</li>
        <li>MRP / Schedule integration with SAP till final products.</li>
      </ul>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/289593_Dubai.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Professional Dynamic Machine Scheduling Services</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/289594_Dubai_Expo_Mobility_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Trusted dynamic machine scheduling solutions for Driving Production Excellence</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/289595_Dubai_Expo_Sustainability_Pavillion_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Streamlined Dynamic Machine Scheduling for Operational Success</h3>
        </div>
      </div>

    </div>
    <div class="col-md-5">
      <div class="paperLess_form_outer">
      <iframe frameborder="0" style="height:500px;width:100%;border:none;" src='https://forms.zohopublic.in/mesprosoft/form/RequestADemo/formperma/sdZ_uTFMLGDUasTpWtNEac3QFJovqtFU95ZUJtUcY-4'></iframe>
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