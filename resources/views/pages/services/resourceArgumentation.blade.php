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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service7.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Resource Augmentation </h1>
        <p>Mesprosoft can make a significant and positive difference to your recruiting experience through honesty, good communication and expertise.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-12">
    <p>Mesprosoft can make a significant and positive difference to your recruiting experience through honesty, good communication and expertise. We provide good value to our customers with our well trained, quality resources and competitive rates. We have a strong team of functional and technical consultants to take up any IT challenges. Apart from Mesprosoft own projects, it provides competent consultants/ professionals and variety of clients on project basis. Mesprosoft has successfully completed resourcing assignments in India, USA and Middle East on various platforms. Our resourcing and placement teams are experts in identifying skilled IT & SAP resources for part-time contract work, project augmentation and permanent employment for our clients. Our Resource Management team is trained and has excellent knowledge in IT and SAP which helps us in achieving better solutions.</p>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/13.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
     
      <p><b>Resourcing Services Offerings</b></p>
      <ul>
        <li>Permanent Staffing</li>
        <li>Contract Staffing</li>
      </ul>

      <p><b>Value Proposition</b></p>
      <ul>
        <li>Reduced fixed costs – by retaining contractors only as long as required and reduced in-house administration and payroll costs</li>
        <li>Reduced recruitment cost – no advertising, contractor screening, contract negotiation, and the administration costs.</li>
        <li>No training cost – contractors generally require no formal training and once fully briefed on the job are able to get up to speed in short time.</li>
        <li>Set charge rates – chare rates, usually hourly or day rate calculation, can be fixed and provided total cost to the client with no hidden overheads or payroll contribution.</li>
        <li>Experienced & flexible contractors – contractors tend to have a broader base of experience are willing to work long hours, are available at short notice, will work in adverse locations and conditions and are adept at getting the job done.</li>
      </ul>
      <a href="{{ route('contactUs') }}">Contact us today to learn more about how we can help you leverage the power of Resource Augmentation to transform your business.</a>
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-7 point_col">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288136_SAP_HANA_Cloud_Adaptive_Server_Enterprise_Replication_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Unleash the Potential: Amplify Your Team's Capabilities with Resource Augmentation</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288147_CSF_bundle_2_R_neg_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Elevate Your Projects with Expert Resource Augmentation</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-2">
          <img src="{{ asset('img/new_design_img/icons/288147_CSF_bundle_2_R_orange.png') }}" width="60%" alt="">
        </div>
        <div class="col-md-10">
          <h3 class="display-7 mb-5">Bridging the Gap with Resource Augmentation Services</h3>
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