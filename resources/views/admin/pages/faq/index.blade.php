@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Frequently Asked Questions</h1>
    <nav>
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
    </nav>
</div>



<section class="section">
    <div class="row">

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">


                    <div class="pt-3 setting_main">
                        @if(!empty($sectionData))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $sectionData->heading ?? ''}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $sectionData->exp ?? ''}}
                            </div>
                        </div>
                        <hr>
                        @if(!empty($quesAns))
                        @foreach($quesAns as $val)
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Question</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $val->questions ?? ''}} ..?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Answer</label>
                            <div class="col-md-8 col-lg-9">
                                {{ $val->ans ?? ''}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label"></label>
                            <div class="col-md-8 col-lg-9">
                                <form action="{{ route('faq.deleteFaqQues', $val->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="float: right;" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>

                        <hr>
                        @endforeach
                        @endif

                    </div>
                    <div style="float: right;">
                        <a href="{{ route('faq.edit',$sectionData->id ?? '') }}" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                    @else
                    <div style="float: right;">
                        <a href="{{ route('faq.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                    @endif



                </div>

            </div>

        </div>

    </div>
    </div>

</section>


@endsection