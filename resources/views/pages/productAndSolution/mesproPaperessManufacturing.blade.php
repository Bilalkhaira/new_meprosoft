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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/PaperLessManufacturing.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro Paperless Manufacturing</h1>
        <p>For years, the manufacturing sector has used paper to keep track records of everything from shipping labels to product schedules. Even if it is an engineering drawing or a blueprint of a big project, the paper-based operation has long been indispensable.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/40.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>For years, the manufacturing sector has used paper to keep track records of everything from shipping labels to product schedules. Even if it is an engineering drawing or a blueprint of a big project, the paper-based operation has long been indispensable. However, in many manufacturing sectors today, technology has progressed to the level where it can totally replace paper.</p>
      <p>If you also want your enterprise or manufacturing unit to be more advanced and adapt to the modern manufacturer's working standard, let Mesprosoft provide paperless manufacturing, and help you make all your valuable data digitally stored and be electronically transmitted in real-time. </p>
      <p>Floors within manufacturing units vary significantly; how information needs to be transmitted and kept on paper – the overall work culture is different in consumer goods, medical devices, automobiles, high-tech, or oil and gas sector. Therefore, paperless manufacturing solutions have been designed in a way that all of your demands are met with precision.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286804_Traffic_Lights_Circle_Critical_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Embrace the Digital Transformation</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286812_Pizza_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">From Paper to Digital Excellence</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286812_Pizza_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Transforming Manufacturing Processes with Modern Solutions</h3>
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