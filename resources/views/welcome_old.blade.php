@extends('layouts.master')

@section('content')

<section class="wrapper bg-light">

    <div class="container-fluid" style="padding-left:0px;padding-right:0px">

        <div class="card bg-soft-primary rounded-4 mt-2">

            @if(!empty($slider1))
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    @foreach($slider1 as $key => $val)
                    @if($key == 0)
                    <div class="item active">
                        @else
                        <div class="item">
                            @endif
                            <img src="{{ asset('img/homePage/'.$val->images ?? '' )}}" alt="Los Angeles" style="width:100%;height: auto !important">
                            <div class="carousel-caption box animate fadeInRight four" style="top: 22%; left: 8%">
                                <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true" style="width: 80%">
                                    <h1 id="heading" class="display-2 mb-5" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown;animation-duration: 700ms;animation-timing-function: ease;animation-delay: 600ms;animation-direction: normal;animation-fill-mode: both;font-size: 35px;margin-top:100px;text-shadow:none;">{!! $val->main_heading ?? '' !!}</h1>
                                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a href="{{ $val->links ?? ''}}" class="btn btn-lg btn-primary rounded-pill me-2 slider_btn" style="background-color: #57a8c7; border: none">Read More</a></span>
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="{{ route('contactUs') }}" class="btn btn-lg btn-outline-primary rounded-pill slider_btn" style="border: 1px solid #57a8c7;">Contact Us</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-image: inherit;">
                        <span class="glyphicon glyphicon-chevron-left" style="margin-left: -40px;"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-image: inherit;">
                        <span class="glyphicon glyphicon-chevron-right" style="margin-right: -40px;"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endif
            @if(!empty($percentage_section))
            <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18 video_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center hdng">
                            <h3 id="heading1" class="display-4 mb-3">{{ $percentage_section->main_heading ?? ''}}</h3>
                        </div>
                        <div class="col-md-8 col-lg-6">

                            <!-- <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div> -->
                            <figure class="rounded">
                                <video width="100%" height="500px" controls>
                                    <source src="{{ asset('img/homePage/'.$percentage_section->images )}}" type="video/mp4">
                                </video>
                            </figure>
                        </div>

                        <div class="col-lg-5 col-xl-4 offset-lg-1">

                            <p class="lead fs-lg mb-6">{{ $percentage_section->text ?? ''}}</p>
                            <div class="row gx-xl-10 gy-6 box animate fadeIn five">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('caseStudy.foodIndustry') }}">
                                                <h4 id="heading1" class="mb-1">Food Industry</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('caseStudy.digitalManufacturing') }}">
                                                <h4 id="heading1" class="mb-1">Digital Manufacturing</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('caseStudy.mesproPaperlessManufacturing') }}">
                                                <h4 id="heading1" class="mb-1">Mespro Paperless Manufacturing</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(!empty($our_services))
            <div class="row  align-items-center srvc_sec" style="background-image: url({{ asset('img/homePage/'.$our_services->images ?? '' ) }});">>
                <!-- <div class="col-md-8 col-lg-6 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20 cell circle pulse" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded"><img src="{{ asset('img/homePage/'.$our_services->images ?? '' )}}" alt=""></figure>
                </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 id="heading1" class="display-4 mb-3 box animate fadeInLeft three">{{ $our_services->main_heading ?? ''}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('services.businessConsulting') }}">
                                    <h4 id="heading1" class="mb-1">Business Consulting</h4>
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('services.digitalTransformationWithCloud') }}">
                                    <h4 id="heading1" class="mb-1">Digital Transformation With Cloud</h4>
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{route('services.hanaConversion')}}">
                                    <h4 id="heading1" class="mb-1">S/4 Hana Conversion</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row rw">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('services.applicationSupport') }}">
                                    <h4 id="heading1" class="mb-1">Application Support</h4>
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('services.specificConsulting') }}">
                                    <h4 id="heading1" class="mb-1">Specific Consulting</h4>
                                </a>
                            </div>

                        </div>
                        <!-- <div class="col-lg-12">

                            <div class="row gx-xl-10 gy-6 box animate fadeIn five">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('services.businessConsulting') }}">
                                                <h4 id="heading1" class="mb-1">Business Consulting</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('services.digitalTransformationWithCloud') }}">
                                                <h4 id="heading1" class="mb-1">Digital Transformation With Cloud</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{route('services.hanaConversion')}}">
                                                <h4 id="heading1" class="mb-1">S/4 Hana Conversion</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('services.applicationSupport') }}">
                                                <h4 id="heading1" class="mb-1">Application Support</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('services.specificConsulting') }}">
                                                <h4 id="heading1" class="mb-1">Specific Consulting</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div> -->
                    </div>
                </div>
            </div>
            @endif


            @if(!empty($our_product_and_solution))
            <div class="row gx-lg-8 gx-xl-12 align-items-center srvc_sec" style="background-image: url({{ asset('img/homePage/'.$our_product_and_solution->images ?? '' ) }});">

                <!-- <div class="col-md-8 col-lg-6 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20 cell circle pulse" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                    <figure class="rounded"><img src="{{ asset('img/homePage/'.$our_product_and_solution->images ?? '' )}}" alt=""></figure>
                </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 id="heading1" class="display-4 mb-3 box animate fadeInRight four">{{ $our_product_and_solution->main_heading ?? ''}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('productAndSolution.BTP') }}">
                                    <h4 id="heading1" class="mb-1">BTP</h4>
                                </a>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}">
                                    <h4 id="heading1" class="mb-1">Mespro Optimized MRP</h4>
                                </a>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('productAndSolution.electronicBatchManufacturing') }}">
                                    <h4 id="heading1" class="mb-1">Electronic Batch Manufacturing</h4>
                                </a>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                <a href="{{ route('productAndSolution.IOT') }}">
                                    <h4 id="heading1" class="mb-1">IOT</h4>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <h2 id="heading" class="display-4 mb-3 box animate fadeInRight four">{{ $our_product_and_solution->main_heading ?? ''}}</h2>
                            <div class="row gx-xl-10 gy-6 box animate fadeIn five">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('productAndSolution.BTP') }}">
                                                <h4 id="heading" class="mb-1">BTP</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}">
                                                <h4 id="heading" class="mb-1">Mespro Optimized MRP</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('productAndSolution.electronicBatchManufacturing') }}">
                                                <h4 id="heading" class="mb-1">Electronic Batch Manufacturing</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                                        </div>
                                        <div>
                                            <a href="{{ route('productAndSolution.IOT') }}">
                                                <h4 id="heading" class="mb-1">IOT</h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div> -->
                    </div>
                </div>


            </div>

            @if(!empty($building_efficiency))
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center srvc_sec" style="background-image: url({{ asset('img/homePage/'.$building_efficiency->images ?? '' ) }});">

                <!-- <div class="col-md-8 col-lg-6 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20 cell circle pulse" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded"><img src="{{ asset('img/homePage/'.$building_efficiency->images ?? '' )}}" alt=""></figure>
                </div> -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2 id="heading1" class="display-4 mb-3 box animate fadeInRight four">{{ $building_efficiency->main_heading ?? ''}}</h2>
                            <p class="lead fs-lg box animate fadeIn five" id="heading1">{{ $building_efficiency->text ?? ''}}</p>

                            <!-- <div class="row gx-xl-10 gy-6">

                                <div class="col-md-12">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('img/icons/lineal/award-2.svg') }}" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                                        </div>
                                        <div>
                                            <h4 id="heading" class="mb-1">{{ $building_efficiency->others_heading ?? ''}}</h4>
                                            <p class="mb-0">{{ $building_efficiency->text2 ?? ''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @if(!empty($satisfied_customer))
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-13" style="margin-bottom: 0px !important;">
                <div class="col-lg-12" style="text-align: center;">
                    <h2 id="heading" class="display-4 mb-3 box animate fadeInLeft three" style="display:inline-block">100%</h2>
                    <h2 id="heading" class="display-4 mb-3 pe-xxl-5 box animate fadeInRight four" style="display: inline-block;">{{ $satisfied_customer->main_heading ?? ''}}</h2>
                    <span style="display: block;" class="lead fs-lg mb-0 pe-xxl-5">{{ $satisfied_customer->text ?? ''}}</span>
                </div>
                <div class="col-lg-12 logo_main">
                    <marquee width="100%" direction="left" height="300px" style="padding-top: 80px;">
                        @if(!empty($satisfied_customer_images))
                        @foreach($satisfied_customer_images as $val)
                        <img src="{{ asset('img/homePage/'.$val->images ?? '' )}}" alt="" />
                        @endforeach
                        @endif
                    </marquee>
                </div>
            </div>
            @endif





            <div class="container">

            <div class="card bg-soft-primary rounded-4 mt-2 mb-13">
                
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            @if(!empty($slider2))
                            @foreach($slider2 as $key => $val)
                            @if($key == 0)
                            <div class="item active">
                                @else
                                <div class="item">
                                    @endif
                                    @if($val->rating_or_percentage == 1)
                                    @php $rating = 'one'; @endphp
                                    @endif
                                    @if($val->rating_or_percentage == 2)
                                    @php $rating = 'two'; @endphp
                                    @endif
                                    @if($val->rating_or_percentage == 3)
                                    @php $rating = 'three'; @endphp
                                    @endif
                                    @if($val->rating_or_percentage == 4)
                                    @php $rating = 'four'; @endphp
                                    @endif
                                    @if($val->rating_or_percentage == 5)
                                    @php $rating = 'five'; @endphp
                                    @endif
                                    <img src="{{ asset('img/homePage/slider2.png' )}}" alt="Los Angeles" style="width:100%;">
                                    <div class="carousel-caption" style="top: 22%; left: 17%">
                                        <div class="col-lg-12 col-xl-12 box animate fadeIn five" style="text-shadow: none;">
                                            <span class="ratings {{ $rating ?? ''}} mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0" style="padding: 0;">
                                                <p>{!! $val->text ?? '' !!}</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info p-0">
                                                        <h5 class="mb-1" id="heading">{{ $val->main_heading ?? ''}}</h5>
                                                        <div class="meta mb-0">{{ $val->others_heading ?? ''}}</div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                @endif

                            </div>

                            <a class="left carousel-control" href="#myCarousel1" data-slide="prev" style="background-image: inherit;">
                                <span class="glyphicon glyphicon-chevron-left" style="margin-left: -40px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" data-slide="next" style="background-image: inherit;">
                                <span class="glyphicon glyphicon-chevron-right" style="margin-right: -40px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    @if(!empty($faqSec))
                    <div class="card bg-soft-primary rounded-4">
                        <div class="card-body p-md-10 p-xl-11">
                            <div class="row gx-lg-8 gx-xl-12 gy-10">
                                <div class="col-lg-6">
                                    <h3 id="heading" class="display-4 mb-4">{{ $faqSec->heading ?? ''}}</h3>
                                    <p class="lead fs-lg mb-0">{{ $faqSec->exp ?? ''}}.</p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        @foreach($faqQuesAns as $val)
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingOne">
                                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ $val->questions ?? ''}} .?</button>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>{{ $val->ans ?? ''}}.</p>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    @endif

                </div>
            </div>
</section>

@endsection