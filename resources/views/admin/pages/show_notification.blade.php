@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Notification</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Notification Details</li>
        </ol>
    </nav>
</div>

<section class="section profile">
    <div class="row">

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">

                        <div class="profile-edit pt-3">

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Name</label>
                                <div class="col-md-8 col-lg-9">
                                    {{ $notifi_detail[0]->data['first_name'] ?? ''}}  {{ $notifi_detail[0]->data['last_name'] ?? ''}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                {{ $notifi_detail[0]->data['email'] ?? ''}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Department</label>
                                <div class="col-md-8 col-lg-9">
                                {{ $notifi_detail[0]->data['department'] ?? ''}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Company</label>
                                <div class="col-md-8 col-lg-9">
                                {{ $notifi_detail[0]->data['company'] ?? ''}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">City</label>
                                <div class="col-md-8 col-lg-9">
                                {{ $notifi_detail[0]->data['city'] ?? ''}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Message</label>
                                <div class="col-md-8 col-lg-9">
                                {{ $notifi_detail[0]->data['message'] ?? ''}}
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection