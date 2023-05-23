@extends('layouts.master')

@section('content')
@if(!empty($data))

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/newsEvent/'.$data->topSection_img ?? '' )}}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">{{ $data->topSection_heading ?? ''}}</h1>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">


      @if(!empty($data->cards[0]))
      @foreach($data->cards as $val)
      <div class="col-lg-12">
        <h4>{{ $val->heading ?? ''}}</h4>
       <p>{{ (json_decode($val->explanation))->exp ?? '' }} <a href="{{ (json_decode($val->explanation))->link ?? '' }}"  style="color: #ffd000;">read more</a></p>
      </div>
      @if(!empty($val->img))
      <div class="col-lg-12">
        <img src="{{ asset('img/newsEvent/'.$val->img ?? '' )}}" alt="">
      </div>
      @endif
      @endforeach
      @endif

    </div>
  </div>
</section>

@else
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">No Data Found Of This Page</h3>
      </div>

    </div>
  </div>
</section>
@endif

@endsection