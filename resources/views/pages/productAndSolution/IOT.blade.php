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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/IOT.png' )}}"></div>
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
      <img src="{{ asset('img/new_design_img/56.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <!-- <h3 class="display-7 mb-5">IOT</h3> -->
      <p>Mesprosoft is at the forefront of Industry 4.0 capabilities and IoT solutions that drive automation in manufacturing industries. With our advanced IoT and Industry 4.0 capabilities, we help manufacturers harness the power of data to optimize their operations, reduce costs, and enhance their overall productivity. Our IT solutions provide real-time visibility into the manufacturing process, enabling companies to identify and address issues as they occur. This helps to minimize downtime, reduce waste, and improve overall equipment effectiveness. Our solutions also enable predictive maintenance, allowing manufacturers to schedule maintenance activities before issues occur, avoiding costly breakdowns. Furthermore, our Industry 4.0 capabilities help manufacturers to implement end-to-end automation in their operations, from procurement and production to quality control and distribution. By automating key processes, manufacturers can reduce manual intervention, improve accuracy, and increase production speed. Overall, Mesprosoft's capabilities in IoT and Industry 4.0 are revolutionizing the manufacturing industry, driving automation and enabling companies to achieve unprecedented levels of operational excellence.<a href="{{ route('contactUs') }}"> Contact us today to learn more about how our solutions can help you optimize your manufacturing operations and achieve your business goals.</a></p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285462_Inspire-lightbulb_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's IoT Solutions Drive Manufacturing Automation</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285462_Inspire-lightbulb_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's Advanced IoT Solutions for Smart Manufacturing</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288316_WIPS_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Mesprosoft's IoT Solutions for Smart Manufacturing</h3>
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