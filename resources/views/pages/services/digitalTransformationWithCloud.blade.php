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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service3.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Digital Transformation With Cloud</h1>
        <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences.
          That's why we recommend SAP S/4HANA Cloud as a powerful tool to enable this transformation.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/51.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences.
        That's why we recommend SAP S/4HANA Cloud as a powerful tool to enable this transformation. S/4HANA Cloud is a cloud-based platform that
        provides real-time data analytics and insights to help businesses make informed decisions quickly. By leveraging this platform, companies can
        streamline processes, improve efficiency, and respond quickly to changing market conditions. As SAP partner Mesprosoft can help businesses
        implement S/4HANA Cloud, leveraging our expertise to ensure a smooth transition. Our team of experts will work with your company to understand
        your specific needs and provide tailored solutions that meet your business requirements. Through this partnership, we can help you simplify
        complex business processes, reduce errors, and increase productivity. Additionally, S/4HANA Cloud enables companies to enhance their customer
        engagement by providing personalized experiences based on real-time data and analytics. Overall, partnering with Mesprosoft to implement SAP
        S/4HANA Cloud can help your business achieve digital transformation, improve operations, and deliver better customer experiences.</p>
      <a href="{{ route('contactUs') }}">Contact us today to learn more about how we can help you leverage the power of Digital Transformation With Cloud to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/283753_HEM_R_purple.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Run with industry best practices</h3>

        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285462_Inspire-lightbulb_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Build your own breakthroughs</h3>

        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/285462_Inspire-lightbulb_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Go live with confidence </h3>

        </div>
      </div>

      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288005_iLM_v3_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Grow without limits </h3>

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