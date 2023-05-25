@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/Application Support.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Events</h1>
        <p>Stay updated on the trade shows, conferences, and industry events where Mesprosoft will be present.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row events">
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>

    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
    </div>
    
  </div>
</div>


<div class="modal" id="imgPreview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
               <img id="imgModel" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
               <p class="img_preview_p">Mesprosoft has designed tailored solutions. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $('.img_btn').on('click', function(ev) {
      var imgSrc = $(this).find('.img')[0].src;
      // console.log(imgSrc);
      $("#imgModel").attr("src", imgSrc);
    });
</script>
@endsection