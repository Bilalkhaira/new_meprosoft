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
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/service1.png' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Application Support</h1>
        <p>Mesprosoft provides comprehensive application support services to ensure the smooth functioning and uninterrupted operation of SAP applications utilized by our clients.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/53.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>Mesprosoft provides comprehensive application support services to ensure the smooth functioning and uninterrupted operation of SAP applications utilized by our clients. We understand the criticality of reliable application support in maximising business productivity and minimising downtime. Our team of skilled professionals is dedicated to resolving issues promptly, providing technical expertise, and offering continuous support to meet our client's needs.</p>
    <ul>
      <li><b>Help Desk Support:</b> Get in touch with us right now to find out more about how Mesprosoft's SAP application  support services can enhance the dependability and performance of your SAP system while delivering a superior user experience.
</li>
      <li><b>Bug Fixing and Issue Resolution: </b>Software applications may encounter bugs or issues that hinder their functionality. Our application support team diligently investigates reported problems, diagnoses root causes, and implements effective solutions. We systematically identify and resolve bugs, ensuring that the applications operate smoothly and deliver the intended functionalities.</li>
      <li><b>Application Maintenance and Upgrades:</b> Regular maintenance and upgrades are essential to ensure the long-term performance and reliability of software applications. Mesprosoft offers proactive application maintenance services, including performance monitoring, error tracking, and optimisation. We also assist clients in planning and implementing software upgrades, incorporating new features, enhancements, and security patches to keep applications up-to-date and secure.</li>
    </ul>

   
</div>
<div class="col-md-12">
<p>At Mesprosoft, we try to provide superior application support services that go beyond problem-solving. Through proactive support, ongoing development, and trustworthy help, we hope to forge long-term relationships with our clients. Our devoted support team is dedicated to providing our clients with timely and effective solutions so they can confidently concentrate on their main business operations.</p>
    <p>Get in touch with us right now to find out more about how Mesprosoft's application support services can enhance the dependability and performance of your software programmes while delivering a superior user experience.</p>
</div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/287426_Global learning_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Reliable Support, Uninterrupted Operations</h3>
        
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288003_iLM_v1_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Expert Application Support Services</h3>
          
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/288003_iLM_v1_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Efficient Support, Enhanced Productivity: Your Partner in Application Excellence</h3>
          
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