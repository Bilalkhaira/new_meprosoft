@extends('layouts.master')

@section('content')
@if(!empty($data))
<section class="hdr_bg">
  <div class="container-fluid wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/contactUs.png' )}}"></div>
    <div class="img_dv1">
        <div class="row">
        <div class="col-md-12 text-left">
                <p><b>Have any question ? <br>Reach out to us from our contact form <br> and we will get back to you shortly.</b></p>
            </div>
           
        </div>

    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">

        <div class="row pt-15">
            <div class="col-xl-10 mx-auto">
                <div class="row gy-10 gx-lg-8 gx-xl-12">
                    <div class="col-lg-12">
                        <form class="contact-form needs-validation" method="POST" action="{{ route('saveMsg') }}" novalidate>
                            @csrf
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Jane" required>
                                        <label for="form_name">First Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Doe" required>
                                        <label for="form_lastname">Last Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Select a department</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Customer Support">Customer Support</option>
                                        </select>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please select a department. </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="company" class="form-control" placeholder="Doe" required>
                                        <label for="form_lastname">Company Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="city" class="form-control" placeholder="Doe" required>
                                        <label for="form_lastname">City Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                        <label for="form_message">Message *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck"> I agree to <a href="#" class="hover">terms and policy</a>. </label>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h1 style="margin-top: 100px;">Corporate Offices</h1>
                <div class="row gy-10 gx-lg-8 gx-xl-12">

                    @if(!empty($data->cards[0]))
                    @foreach($data->cards as $key => $val)
                    <div class="col-lg-4">
                        <div>
                            <h3>{{ $val->heading ?? '' }}</h3>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>{{ (json_decode($val->explanation))->address ?? ''}}</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                @foreach((json_decode($val->explanation))->phone as $phone)
                                <p>{{ $phone }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                @foreach((json_decode($val->explanation))->email as $email)
                                <p>{{ $email }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>
</section>

<section class="wrapper bg-light">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str" style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
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