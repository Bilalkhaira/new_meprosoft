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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service2.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Specific Consulting</h1>
        <p>Mesprosoft, an IT firm, offers a wide range of specialized consulting services that correspond to the unique needs of businesses in the digital age.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-12">

      <p>Mesprosoft, an IT firm, offers a wide range of specialized consulting services that correspond to the unique needs of businesses in the digital age. Mesprosoft, with their significant industry knowledge and skills, assists organizations in utilizing technology to optimize operations, boost efficiency, and encourage growth. Mesprosoft provides the following specific consulting services.</p>

    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/60.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <ul>
        <li><b>IT Planning & Strategy:</b>Mesprosoft assists businesses in developing a complete IT strategy that is linked with their entire company objectives. They evaluate current IT infrastructure, identify weaknesses, and provide strategic solutions to maximize technology investments. This includes analyzing present systems, making recommendations for changes, and creating a roadmap for future technological implementations.</li>
        <li><b>Digital Transformation:</b>Mesprosoft aids businesses in adopting digital transformation in order to remain competitive in the continually expanding digital landscape. They advise on how organizations use emerging technologies like cloud computing, artificial intelligence (AI), the Internet of Things (IoT), and data analytics to streamline processes, improve customer experiences, and drive innovation.</li>
        <li><b>IT Project Management:</b>Mesprosoft provides project management services to support the smooth execution of IT initiatives. Their skilled project managers oversee the design, execution, and monitoring of IT projects, ensuring that they are completed on time, under budget, and to the highest quality standards. They use best practices and processes to reduce risks and ensure the seamless execution of projects.</li>
      </ul>


    </div>
    <div class="col-md-12">
      <p>Mesprosoft's consulting services assist businesses to efficiently leverage the power of technology. Their knowledge assists organizations in staying ahead of the curve, adapting to industry developments, and maximizing their IT investments for long-term growth and success.</p>
      <p> <a href="{{ route('contactUs') }}">Contact us today to find out more about how Mesprosoft's specific consulting services may help your company reach its full potential and promote long-term growth.</a></p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Mesprosoft Offer a plethora of SAP consulting services like specific module implementation below are a few of those projects delivered:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <!-- <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288136_SAP_HANA_Cloud_Adaptive_Server_Enterprise_Replication_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Customized SAP Implementation Strategies</h3>
        
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288003_iLM_v1_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Performance Optimization and Scalability</h3>
          
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288147_CSF_bundle_2_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Integration and Cloud Migration Expertise</h3>
          
        </div>
      </div> -->

      <div class="row news_row_margin">
        <div class="col-md-12">
          <ul>
            <li>Ecommerce Interface integration(Amazon, Flipkart)</li>
            <li>IFRS 16</li>
            <li>ALM Implementation</li>
            <li>Refx - Flexible Real estate Management</li>
            <li>Spice Extraction Manufacturing</li>
            <li>Project System for Construction specific</li>
            <li>RPA and other process Automation</li>
            <li>Fiori Implementation & development</li>
            <li>BTP Development</li>
            <li>Cloud Analytics</li>
          </ul>
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