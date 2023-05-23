@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Home Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Home Setting</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Slider Setting</h1>
        </div>
        <div>
            <button style="float: right;margin-bottom: 20px" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSlideModel"> Create New Slide</button>
        </div>

        <div class="col-xl-12">

            <div class="row">
                @if(!empty($slider1))
                @foreach($slider1 as $val)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="pt-3 setting_main">
                                <div class="col-md-12 col-lg-12">
                                    <p><span class="slider_label">Heading : </span></br> {!! $val->main_heading !!}</p>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <p><span class="slider_label">Button Link : </span></br> {{ $val->links }} </p>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <span class="slider_label">Image : </span> </br>
                                    <img src="{{ asset('img/homePage/'.$val->images )}}" alt="">
                                </div>

                                <div class="card_btn">
                                    <form action="{{ route('home.deleteSlide', $val->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-primary" id="slideEdit_btn" data-bs-toggle="modal" data-bs-target="#editSlideModel"> <i class="fa fa-edit"></i></button>
                                        <input type="hidden" value="{{ $val->id }}" id="slideEdit_id">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                @endif

            </div>


        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Satisfied Customer Setting</h1>
        </div>
        <div class="col-xl-12">


            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        @if($satisfied_customer)
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $satisfied_customer->main_heading }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $satisfied_customer->text }}
                            </div>
                        </div>

                        @if(!empty($satisfied_customer_images))

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Photos</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="row">
                                    @foreach($satisfied_customer_images as $image)
                                    <div class="col-md-2 card_border">
                                        <div class="satis_customer_imgs">
                                            <form action="{{ route('home.deleteSatisfiedCustomerImage', $image->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                            </form>
                                            <img src="{{ asset('img/homePage/'.$image->images )}}" alt="">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        @endif

                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editsatisfiedCustomersModel">Edit </button>
                        </div>
                        @else
                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#satisfiedCustomersModel"> Create</button>
                        </div>

                        @endif
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Building Efficiency Section Setting</h1>
        </div>
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">
                    <div class="pt-3 setting_main">
                        @if(!empty($building_efficiency))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $building_efficiency->main_heading ?? ''}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $building_efficiency->text ?? ''}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="{{ asset('img/homePage/'.$building_efficiency->images )}}" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editBuildingEfficiencyModel"> Edit</button>
                        </div>
                        @else
                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#buildingEfficiencyModel"> Create</button>
                        </div>
                        @endif

                    </div>


                </div>


            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Our Services Section Setting</h1>
        </div>
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">
                    <div class="pt-3 setting_main">
                        @if(!empty($our_services))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $our_services->main_heading ?? ''}}
                            </div>
                        </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Image</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('img/homePage/'.$our_services->images )}}" alt="">
                    </div>
                </div>

                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editOurServicesModel"> Edit</button>
                </div>
                @else
                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ourServicesModel"> Create</button>
                </div>
                @endif

            </div>


        </div>


    </div>

    </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Our Product & Solution Section Setting</h1>
        </div>
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">
                    <div class="pt-3 setting_main">
                        @if(!empty($our_product_and_solution))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $our_product_and_solution->main_heading ?? ''}}
                            </div>
                        </div>
                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Small Heading One</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $our_product_and_solution->others_heading ?? ''}}
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Small Heading Two</label>
                    <div class="col-md-8 col-lg-9">
                        {{ $our_product_and_solution->text ?? ''}}
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Small Heading Three</label>
                    <div class="col-md-8 col-lg-9">
                        `{{ $our_product_and_solution->text2 ?? ''}}`
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Small Heading Four</label>
                    <div class="col-md-8 col-lg-9">
                        {{ $our_product_and_solution->links ?? ''}}
                    </div>
                </div> -->
                --}}
                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Image</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('img/homePage/'.$our_product_and_solution->images )}}" alt="">
                    </div>
                </div>

                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editOurProductAndSolutionModel"> Edit</button>
                </div>
                @else
                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ourProductAndSolutionModel"> Create</button>
                </div>
                @endif

            </div>


        </div>


    </div>

    </div>
    </div>

</section>


<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Testimonial Slider</h1>
        </div>
        <div>
            <button style="float: right;margin-bottom: 20px" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addSlider2NewSlideModel"> Create New Slide</button>
        </div>

        <div class="col-xl-12">

            <div class="row">
                @if(!empty($slider2))
                @foreach($slider2 as $val)
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <div class="pt-3 setting_main">
                        <div class="col-md-12 col-lg-12">
                            <p><span class="slider_label">Rating : </span> {{ $val->rating_or_percentage }}</p>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <p><span class="slider_label">Auther Name : </span> {{ $val->main_heading }} </p>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <p><span class="slider_label">Auther Profession : </span> {{ $val->others_heading }} </p>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <p><span class="slider_label">Explanation : </span></br> {!! $val->text !!} </p>
                        </div>
                     

                    <div class="card_btn">
                        <form action="{{ route('home.deleteSlider2Slide', $val->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-primary" id="slider2SlideEdit_btn" data-bs-toggle="modal" data-bs-target="#editSlider2SlideModel"> <i class="fa fa-edit"></i></button>
                            <input type="hidden" value="{{ $val->id }}" id="slideEdit_id">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
    @endforeach
    @endif



    </div>

    </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <div class="pagetitle">
            <h1>Percentage Section Setting</h1>
        </div>
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        @if(!empty($percentage_section))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $percentage_section->main_heading ?? '' }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $percentage_section->text ?? '' }}
                            </div>
                        </div>
                        {{--
                        <!-- @foreach(json_decode($percentage_section->rating_or_percentage) as $val)
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-4">
                                {{ $val[0] ?? ''}}
                    </div>
                    <label class="col-md-4 col-lg-2 label">Percentage</label>
                    <div class="col-md-8 col-lg-3">
                        {{ $val[1] ?? ''}}
                    </div>
                </div>
                @endforeach -->
                --}}

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 label">Video</label>
                    <div class="col-md-8 col-lg-9">
                        <video width="200" height="200" controls>
                            <source src="{{ asset('img/homePage/'.$percentage_section->images )}}" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPercentageSectionModel"> Edit</button>
                </div>
                @else
                <div style="float: right;">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#percentageSectionModel"> Create</button>
                </div>
                @endif

            </div>

        </div>

    </div>

    </div>
    </div>

</section>

<div class="modal fade" id="percentageSectionModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Percentage Section Setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storePercentageSection') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">



                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Explanation</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" class="form-control" id="" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="percentage[]" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="number" name="percentage[]" max="100" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="percentage1[]" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="number" name="percentage1[]" max="100" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="percentage2[]" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="number" name="percentage2[]" max="100" class="form-control" required>
                            </div>
                        </div> -->
                            --}}
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Upload Video</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="img" class="form-control" type="file" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editPercentageSectionModel" tabindex="-1" aria-hidden="true" style="">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Percentage Section Setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updatePercentageSection') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" value="{{ $percentage_section->main_heading ?? '' }}" required>
                                <input type="hidden" name="updated_id" value="{{ $percentage_section->id ?? '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Explanation</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" class="form-control" id="" cols="30" rows="4">{{ $percentage_section->text ?? '' }}</textarea>
                            </div>
                        </div>
                        {{--
                        <!-- @if(!empty(json_decode($percentage_section->rating_or_percentage ?? '')))
                        @foreach(json_decode($percentage_section->rating_or_percentage) as $key => $val)
                        @if($key === 'percentage')
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="percentage[]" value="{{ $val[0] }}" class="form-control" required>
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Percentage</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="number" name="percentage[]" value="{{ $val[1] }}" class="form-control" max="100" required>
                    </div>
                </div>
                @endif
                @if($key === 'percentage1')
                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="percentage1[]" value="{{ $val[0] }}" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Percentage</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="number" name="percentage1[]" value="{{ $val[1] }}" max="100" class="form-control" required>
                    </div>
                </div>
                @endif
                @if($key === 'percentage2')
                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Percentage Heading</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="percentage2[]" value="{{ $val[0] }}" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Percentage</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="number" name="percentage2[]" value="{{ $val[1] }}" max="100" class="form-control" required>
                    </div>
                </div>
                @endif


                @endforeach
                @endif -->
                --}}
                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Upload Video</label>
                    <div class="col-md-8 col-lg-10">
                        <input name="img" class="form-control" type="file">
                    </div>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</div>
</div>


<div class="modal fade" id="addSlider2NewSlideModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Testimonial Slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storeSlider2NewSlide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">
                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="img" class="form-control" type="file" required>
                            </div>
                        </div> -->
                        --}}

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Rating</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="number" max="5" name="rating" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Explanation</label>
                            <div class="col-md-8 col-lg-10">
                                <!-- <textarea name="exp" id="" cols="30" class="form-control" rows="3"></textarea> -->
                                <textarea class="summernote" name="exp" cols="30" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Auther Name</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="auther_name" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Auther Profession</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="auther_profression" class="form-control" type="text" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editSlider2SlideModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Testimonial Slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updateSlider2Slide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">
                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="img" class="form-control" type="file">
                            </div>
                        </div> -->
                        --}}

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Rating</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="number" max="5" id="slider2_rating" name="rating" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Explanation</label>
                            <div class="col-md-8 col-lg-10">
                                <!-- <textarea name="exp" id="slider2_exp" cols="30" class="form-control" rows="3" required></textarea> -->
                                <textarea class="summernote" name="exp" id="slider2_exp" ols="30" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Auther Name</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="auther_name" id="slider2_auther_name" class="form-control" type="text" required>
                                <input name="updated_id" id="slider2_update_id" type="hidden">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Auther Profession</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="auther_profression" id="slider2_auther_profession" class="form-control" type="text" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editOurProductAndSolutionModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updateOurProductAndSolution') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" value="{{ $our_product_and_solution->main_heading ?? ''}}" required>
                                <input type="hidden" name="updated_id" value="{{ $our_product_and_solution->id ?? ''}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" />
                            </div>
                        </div>

                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading One</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_one" class="form-control" value="{{ $our_product_and_solution->others_heading ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Two</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_two" class="form-control" value="{{ $our_product_and_solution->text ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Three</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_three" class="form-control" value="{{ $our_product_and_solution->text2 ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Four</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_four" value="{{ $our_product_and_solution->links ?? ''}}" class="form-control" required>
                    </div>
                </div> -->
                --}}



        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</div>
</div>

<div class="modal fade" id="ourProductAndSolutionModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storeOurProductAndSolution') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" required />
                            </div>
                        </div>

                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading One</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_one" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Two</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_two" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Three</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_three" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Four</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_four" class="form-control" required>
                            </div>
                        </div> -->
                        --}}



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editOurServicesModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updateOurServices') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" value="{{ $our_services->main_heading ?? ''}}" required>
                                <input type="hidden" name="updated_id" value="{{ $our_services->id ?? ''}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" />
                            </div>
                        </div>

                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading One</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_one" class="form-control" value="{{ $our_services->others_heading ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Two</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_two" class="form-control" value="{{ $our_services->text ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Three</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_three" class="form-control" value="{{ $our_services->text2 ?? ''}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-lg-2 label">Small Heading Four</label>
                    <div class="col-md-8 col-lg-10">
                        <input type="text" name="small_heading_four" value="{{ $our_services->links ?? ''}}" class="form-control" required>
                    </div>
                </div> -->
                --}}



        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</div>
</div>

<div class="modal fade" id="ourServicesModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storeOurServices') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" required />
                            </div>
                        </div>

                        {{--
                        <!-- <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading One</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_one" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Two</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_two" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Three</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_three" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading Four</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="small_heading_four" class="form-control" required>
                            </div>
                        </div> -->
                        --}}



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editBuildingEfficiencyModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updatebuildingEfficiency') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" value=" {{ $building_efficiency->main_heading ?? ''}}" required>
                                <input type="hidden" name="updated_id" class="form-control" value="{{ $building_efficiency->id ?? ''}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" id="" class="form-control" cols="30" rows="4"> {{ $building_efficiency->text ?? ''}} </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="buildingEfficiencyModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Building Efficiency Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storebuildingEfficiency') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" id="" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="" name="img" class="form-control" required />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editsatisfiedCustomersModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Satisfied Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updateSatisfiedCustomer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" value="{{ $satisfied_customer->main_heading ?? '' }}" required>
                                <input type="hidden" name="updated_id" value="{{ $satisfied_customer->id ?? '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" id="" class="form-control" cols="30" rows="4">{{ $satisfied_customer->text ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Logo Images</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="files" name="files[]" multiple class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="satisfiedCustomersModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Satisfied Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storeSatisfiedCustomer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="text" name="heading" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                <textarea name="text" id="" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Logo Images</label>
                            <div class="col-md-8 col-lg-10">
                                <input type="file" id="files" name="files[]" multiple class="form-control" required />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addNewSlideModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.storeNewSlide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="img" class="form-control" type="file" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <!-- <input type="text" name="heading" class="form-control" required> -->
                                <textarea class="summernote" name="heading" ols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">ReadMore Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="link" class="form-control" type="text" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editSlideModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.updateSlide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="img" class="form-control" type="file">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                <!-- <input type="text" name="heading" id="editSlide_hdng" class="form-control" required> -->
                                <textarea class="summernote" name="heading" id="editSlide_hdng" ols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">ReadMore Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="link" class="form-control" id="editSlide_link" type="text" required>
                                <input name="updated_id" id="editSlide_id" type="hidden">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });


    $(document).on('click', '#slider2SlideEdit_btn', function(e) {
        e.preventDefault();
        var slide_id = $(this).closest('form').find('#slideEdit_id').val();
        var data;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            data: {
                'slide_id': slide_id
            },
            url: "{{ route('home.editSlider2Slide') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                console.log(responce);
                $('#editSlider2SlideModel').find('.note-editable').addClass('sliderModel2');
                $(document).find('.sliderModel2').html(responce.text);

                $(document).find('#slider2_rating').val(responce.rating_or_percentage);
                $(document).find('#slider2_auther_name').val(responce.main_heading);
                $(document).find('#slider2_auther_profession').val(responce.others_heading);
                $(document).find('#slider2_exp').val(responce.text);

                $(document).find('#slider2_update_id').val(slide_id);

                window.$("#editSlider2SlideModel").modal("show");
            }
        });
    });

    $(document).on('click', '#slideEdit_btn', function(e) {
        e.preventDefault();
        var slide_id = $(this).closest('form').find('#slideEdit_id').val();
        var data;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            data: {
                'slide_id': slide_id
            },
            url: "{{ route('home.editSlide') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                $('#editSlideModel').find('.note-editable').addClass('sliderModel1');
                $(document).find('.sliderModel1').html(responce.main_heading);

                $(document).find('#editSlide_hdng').val(responce.main_heading);
                $(document).find('#editSlide_link').val(responce.links);
                $(document).find('#editSlide_id').val(slide_id);

                window.$("#editSlideModel").modal("show");
            }
        });
    });


    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<div class=\"img-thumb-wrapper card shadow\">" +
                            "<img class=\"img-thumb\" src=\"" + e.target.result +
                            "\" title=\"" + file.name + "\"/>" +
                            // "<br/><span class=\"remove\">Remove</span>" +
                            "</div>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".img-thumb-wrapper").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>
@endsection