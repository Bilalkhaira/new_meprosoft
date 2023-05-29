@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/LifeScienceCFRPar11.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Mespro Life Science CFR Part 11</h1>
        <p>With more-n-more business operations being handled digitally, it is vital for your company also move forward with digital processes but with precautions.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/36.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
      <p>With more-n-more business operations being handled digitally, it is vital for your company also move forward with digital processes but with precautions. Especially if you operate in the Life Science industry, there are risks to the errors, security and over-documentations of electronic records. The Life Sciences sector has adopted computerized technology into every phase of the product lifecycle. But as regulatory agencies strictly monitor life sciences companies' operations, proving how your company upholds reliability and trustworthiness is the next big challenge. Not having a clear understanding of 21 CFR 11 may create an obstacle for companies to remain compliant. So connect for MESPRO Life Science CFR Part solutions and benefit from EBMR (electronic batch management Record), audit traceability, Active content management, Material and Match reconciliation, Label reconciliation, Packing records, Logs for shift & equipment etc. We make CFR part11 compliance of electronic systems easier.</p>
      
    </div>
  </div>
  <div class="row paperLess_form_sec">
  <div class="col-md-12 text-center mb-6">
      <h1><b>Unlocking Insight Features:</b></h1>
    </div>
    <div class="col-md-8 point_col">
      <div class="row">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/291139_U_turn_arrow_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">GAMP5 Implementation for Complete CFR Part 11 Compliance</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/291139_U_turn_arrow_R_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">GAMP5 Methodology and Mesprosoft have You Covered</h3>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3 text-right">
          <img src="{{ asset('img/new_design_img/icons/292349_Brake_Disk_R_neg_orange.png') }}" width="40%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Streamline Electronic Record Compliance</h3>
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