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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service4.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>S/4 HANA Conversion</h1>
        <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP ECC or S/4 Hana O/P systems to the powerful and innovative RISE with SAP.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
 
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/52.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP ECC or S/4 Hana O/P systems to the powerful and innovative RISE with SAP. Our approach to S/4HANA conversion is customized to meet the unique needs of each customer, ensuring a seamless transition with minimal disruption to operations. Our S/4HANA conversion services include a comprehensive analysis of existing SAP systems, identifying areas that can be optimized and streamlined for better efficiency. We also offer detailed project planning, testing, and training to ensure that the transition is successful and that all stakeholders are fully prepared to leverage the new system. One of our recent successful customer stories is the case of a global manufacturing company that was struggling with outdated legacy systems that were impeding their growth and limiting their ability to innovate. Mesprosoft worked closely with the company to develop a customized plan for a smooth transition to S/4HANA. The project involved a thorough analysis of the company's existing SAP systems, followed by a phased migration to S/4HANA, with detailed testing and training throughout the process. With Mesprosoft's guidance and support, the company was able to successfully complete the transition and leverage the full capabilities of the S/4HANA platform. As a result, the company saw significant improvements in efficiency, with streamlined processes and better data insights that enabled them to make informed decisions and innovate more effectively. Overall, the successful S/4HANA conversion helped the company to achieve its growth and innovation goals, positioning them for continued success in the future.</p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
  <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/287137_Product Update_1_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Mesprosoft's Expertise Delivers Business Transformation</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/287130_71132_RequirementModel_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Empower Your Business with S/4HANA</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/287137_Product Update_1_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Transform Your SAP Landscape</h3>
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