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
        <h2>Top Slider Setting</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Add New Slide</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-9">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-9">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Text</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Couting</label>
                            <div class="col-md-8 col-lg-9">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-9">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-9">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Text</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Couting</label>
                            <div class="col-md-8 col-lg-9">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Satisfied Customer Setting</h2>
        <!-- <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Add New Slide</a>
        </div> -->

        <div class="col-xl-12">


            <div class="card">

                <div class="card-body">

                    <div class="pt-3">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio.
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Photos</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editStisfiedCustomersSetting') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Building Efficiency Section Setting </h2>

        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Card Icon</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Card Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editBuildingEfficiencySection') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>


            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Our Services Settings</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewService') }}" class="btn btn-sm btn-primary">Add New Service</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Section Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Our Services
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Section Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editMainSection') }}" class="btn btn-sm btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn btn-sm btn-primary" >Disable</a> -->
                        </div>

                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Service 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Icon</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewService') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Service 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Icon</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewService') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Our Products and Solutions</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewProduct') }}" class="btn btn-sm btn-primary">Add New Product</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Section Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Main Section Image</label>
                            <div class="col-md-8 col-lg-9>
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editProductMainSection') }}" class="btn btn-sm btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn btn-sm btn-primary" >Disable</a> -->
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Product 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label"> Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label"> Icon </label>
                            <div class="col-md-8 col-lg-9>
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewProduct') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Product 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label"> Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label"> Icon </label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewProduct') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Slider Setting</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Add New Slide</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Rating</label>
                            <div class="col-md-8 col-lg-9">
                                5
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                This is Text
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Name</label>
                            <div class="col-md-8 col-lg-9">
                                Jon
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Profession</label>
                            <div class="col-md-8 col-lg-9">
                            FINANCIAL ANALYST
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Rating</label>
                            <div class="col-md-8 col-lg-9">
                                5
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                This is Text
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-3 label">Name</label>
                            <div class="col-md-8 col-lg-9">
                                Jon
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Profession</label>
                            <div class="col-md-8 col-lg-9">
                            FINANCIAL ANALYST
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>


                    </div>


                </div>
                

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Percentage Section Setting</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Video</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-4">
                                afja;f
                            </div>
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-3">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-4">
                                afja;f
                            </div>
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-3">
                                100%
                            </div>
                        </div>
                       

                        <div style="float: right;">
                            <a href="{{ route('home.editPercentageSection') }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- <section class="section">
    <div class="row">
        <h2>Questions Section Setting</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Question Heading
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Question Setting Text
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Question</label>
                            <div class="col-md-8 col-lg-9">
                                Qustion?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Answer</label>
                            <div class="col-md-8 col-lg-9">
                                100%
                            </div>
                        </div>
                       

                        <div style="float: right;">
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section> -->


@endsection