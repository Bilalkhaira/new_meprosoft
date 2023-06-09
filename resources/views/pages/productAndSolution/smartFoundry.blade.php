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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/SmartFoundry.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Smart Foundry</h1>
        <p>Stop getting baffled by repetitive errors. Let Mesprosoft facilitate a smooth transition of material and resources with its integrated products & services that streamline your foundry business's working ecosystem from the bottom to the top.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/44.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="display-7 mb-5">Smart Foundry</h3>
      <p>Stop getting baffled by repetitive errors. Let Mesprosoft facilitate a smooth transition of material and resources with its integrated products & services that streamline your foundry business's working ecosystem from the bottom to the top. <a href="{{ route('contactUs') }}"> We help you grow with SAP's best practices, so connect today!. </a></p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/291076_Deliver_value_frequently_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's Integrated Solutions for Smooth Foundry Operations</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288316_WIPS_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Unlock Foundry Excellence</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285961_Circles_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Seamless Transition of Materials and Resources</h3>
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