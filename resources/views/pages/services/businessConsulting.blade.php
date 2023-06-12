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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service2.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Business Consulting</h1>
        <p>Mesprosoft provides thorough business consulting services to assist organisations in overcoming obstacles, streamlining procedures, and achieving their strategic goals.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-12">
    <p>Mesprosoft provides thorough business consulting services to assist organisations in overcoming obstacles, streamlining procedures, and achieving their strategic goals. Our team of skilled consultants combines domain knowledge, in-depth business understanding, and technical know-how to offer insightful recommendations and solutions that promote sustainable success.</p>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/50.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
     
      <ul>
        <li><b>Strategic Planning:</b> We work closely with them to create strategic plans that support our client's long-term objectives. Our consultants conduct an in-depth analysis of the company environment, industry trends, and competitive landscape to find opportunities and establish strategic priorities. </li>
        <li><b>Process Optimisation:</b> Efficient and streamlined processes are critical for organisational success. Our consultants assess existing processes, identify bottlenecks, and design optimised workflows. We help our clients implement industry best practices and cutting-edge technologies to enhance productivity, reduce costs, and improve overall operational efficiency.</li>
        <li><b>Change Management: </b>Change is inevitable in today's dynamic business landscape. Mesprosoft consultants provide guidance and support during organisational transformations, such as implementing new technologies, restructuring operations, or adapting to market shifts.</li>
        <li><b>Risk Management: </b>Mitigating risks and ensuring compliance is paramount in today's complex business environment. Our consultants assist organisations in identifying potential risks, assessing their impact, and implementing risk management frameworks. Our approach includes conducting risk assessments, implementing risk mitigation strategies, and providing training and awareness programs to promote a risk-aware culture.</li>
      </ul>
     
    </div>
    <div class="col-md-12">
    <p>At Mesprosoft, our business consulting services are tailored to each client's unique needs and challenges. We take a collaborative approach, working closely with stakeholders to understand their vision, analyse their current situation, and develop practical and customised solutions. Our goal is to empower organisations with the knowledge, strategies, and tools they need to thrive in an ever-evolving business landscape.</p>
      <p> <a href="{{ route('contactUs') }}"> Contact us today to learn more about how Mesprosoft's business consulting services can help your organisation achieve its full potential and drive sustainable growth.</a></p>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Key KPI definition and Process improvements:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <!-- <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/285961_Circles_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Transform Your Business, Delight Your Customers</h3>

        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/285961_Circles_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Maximize Business Performance</h3>

        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/286242_Canada-Globe_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Mesprosoft Recommends SAP S/4HANA Cloud</h3>

        </div>
      </div> -->
      <div class="row news_row_margin">
        <!-- <div class="col-md-3"></div> -->
        <div class="col-md-12">
          <ul>
            <li>Working Capital Reduction</li>
            <li>Local GAAP Compliance</li>
            <li>Regulatory Compliance (Pharma, Food)</li>
            <li>IS Standard</li>
            <li>Audit Compliance</li>
            <li>IPO Compliance</li>
            <li>SoA</li>
            <li>Services Offered  for SAP Customers</li>
            <li>Reengineering</li>
            <li>IOT Integration</li>
            <li>Industry 4.0 </li>
          </ul>
        </div>
       
      </div>

    </div>
    <div class="col-md-5">
      <div class="paperLess_form_outer">
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
        <iframe frameborder="0" style="height:650px;width:100%;border:none;" src='https://forms.zohopublic.in/mesprosoft/form/RequestADemo/formperma/sdZ_uTFMLGDUasTpWtNEac3QFJovqtFU95ZUJtUcY-4'></iframe>
      </div>
    </div>
  </div>
</div>









@endsection