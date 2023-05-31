@extends('layouts.master')

@section('content')

<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/event13.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>Event</h1>
        <p>Transformation Express by SAP: Powering a Digital India.</p>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="row events">
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img src="{{ asset('img/new_design_img/event12.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event2.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event3.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event4.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event5.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event6.jpg') }}" width="100%" alt="">
    </div>

    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img src="{{ asset('img/new_design_img/event7.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event8.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event9.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event10.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event11.jpg') }}" width="100%" alt="">
    </div>
    <div class="col-md-3 img_btn" type="button" data-toggle="modal" data-target="#imgPreview">
      <img class="img" src="{{ asset('img/new_design_img/event12.jpg') }}" width="100%" alt="">
    </div>
    
  </div>
</div>


<div class="modal" id="imgPreview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
               <img id="imgModel" src="{{ asset('img/new_design_img/news1.png') }}" width="100%" alt="">
               <p class="img_preview_p">Transformation Express by SAP connected people, businesses and India’s soaring ambitions over a 45-day journey. It was a one-of-a-kind initiative to bring cutting edge technologies to empower Indian businesses.</p>
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