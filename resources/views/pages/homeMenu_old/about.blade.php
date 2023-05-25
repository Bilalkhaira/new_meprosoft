@extends('layouts.master')

@section('content')
@if(!empty($data))

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/homeMenu/'.$data->topSection_img ?? '' )}}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">{{ $data->topSection_heading ?? ''}}</h1>
        <span class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">{{ $data->topSection_explanation ?? ''}}</span>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">


      <div class="col-lg-12">
        <h3 class="display-4 mb-5">{{ $data->explanationSection_heading ?? ''}}</h3>
        <p>{!! $data->explanationSection_explanation ?? '' !!}</p>
      </div>

      @if(!empty($data->explanationSection_img))
      
      <div class="col-lg-12">
        <img src="{{ asset('img/homeMenu/'.$data->explanationSection_img ?? '' )}}" alt="">
      </div>

      @endif


      @if(!empty($data->cards[0]))
      @foreach($data->cards as $val)
      <div class="col-lg-12">
        <h4>{{ $val->heading ?? ''}}</h4>
        <ul>
          @foreach(json_decode($val->explanation) as $li)
          <li>{{ $li }}</li>
          @endforeach
        </ul>
      </div>
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