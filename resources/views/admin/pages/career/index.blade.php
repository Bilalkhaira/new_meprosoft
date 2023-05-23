@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Careers Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Careers</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="pagetitle">
            <h1>Top Section Settings</h1>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        @if(!empty($pageData))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                {{$pageData->topSection_heading}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                {{$pageData->topSection_explanation}}
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/careers/'.$pageData->topSection_img )}}" alt="">
                            </div>

                        </div>

                        <div style="float: right;">
                            <a href="{{ route('career.editToSection',$pageData->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        </div>
                        @else
                        <div style="float: right;">
                            <form action="{{ route('career.createToSection') }}" method="POST">
                                @csrf
                                <input type="hidden" id="nvbr_id" value="{{ $navbar_id ?? ''}}" name="nvbar_id">
                                <button type="submit" class="btn btn-sm btn-primary">Add</button>
                            </form>
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
            <h1>Current Opening & Client Profile Section</h1>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">

                        @if(!empty($pageData))

                        @forelse($pageData['cards'] as $key => $val)

                        @if(empty($val->heading))

                        <div class="row mb-3">

                            <div class="col-md-12 col-lg-12">
                                {!! json_decode($val->explanation) !!}
                                <input type="hidden" value="{{ $val->id }}" id="update_currentOpening_id">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <a href="#" style="float: right;" id="update_currentOpening_btn" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editprofileSection">Edit</a>
                        </div>
                        @else
                        <!-- <div style="float: right;">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#profileSection"> Create</button>
                        </div> -->

                        @endif
                        @empty
                        <div style="float: right;">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#profileSection"> Create</button>
                        </div>
                        @endforelse


                        @else
                        <div style="float: right;">
                            <button class="btn btn-sm btn-primary" disabled>First Create The Top Section</button>
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
            <h1>Created Job Section</h1>
        </div>
        @if(!empty($pageData))
        <div>
            <button style="float: right;margin-bottom: 20px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createJobModel"> Add New Card</button>

        </div>
        @else
        <div>
            <button style="float: right;margin-bottom: 20px" class="btn btn-sm btn-primary" disabled>First Create The Top Section</button>
        </div>
        @endif
        <div class="col-xl-12">


            <div class="row">
                @if(!empty($pageData['cards']))
                @foreach($pageData['cards'] as $key => $val)
                @if(!empty($val->heading))
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">

                            <div class="pt-3 setting_main">

                                <div class="card_btn">
                                    <form action="{{ route('career.deleteJob', $val->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-primary" id="editJob_btn" data-bs-toggle="modal" data-bs-target="#editjobModel"> <i class="fa fa-edit"></i></button>
                                        <input type="hidden" value="{{ $val->id }}" id="card_id">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 col-lg-12">
                                        {!! json_decode($val->explanation) !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                @endif

            </div>

        </div>
    </div>

</section>


<div class="modal fade" id="editprofileSection" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit Current Opening & Client Profile Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('career.updateCurrentOpeningSection') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" id="currentOpeningTextarea" name="exp" cols="30" rows="4"></textarea>
                                <input type="hidden" name="currentOpeningTextarea_parent_id" id="currentOpeningTextarea_parent_id">
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

<div class="modal fade" id="profileSection" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Write About Current Opening & Client Profile Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('career.storeCurrentOpeningSection') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" name="exp" cols="30" rows="4"></textarea>
                                <input type="hidden" value="{{ $pageData->id ?? ''}}" name="parent_id">
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

<div class="modal fade" id="createJobModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('career.storeNewJob') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" name="exp" cols="30" rows="4"></textarea>
                                <input type="hidden" value="{{ $pageData->id ?? ''}}" name="parent_id">
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

<div class="modal fade" id="editjobModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('career.updateJob') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" id="job_textarea" name="job_exp" cols="30" rows="4"></textarea>
                                <input type="hidden" name="updated_cardId" id="job_parent_id">
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

    $(document).on('click', '#update_currentOpening_btn', function(e) {
        e.preventDefault();
        var card_id = $(document).find('#update_currentOpening_id').val();
        var data;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            data: {
                'card_id': card_id
            },
            url: "{{ route('career.editCurrentOpeningSection') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {

                $('#currentOpeningTextarea').html(responce.explanation);
                $('#currentOpeningTextarea').closest('.col-md-12').find('.note-editable').addClass('profileModel');
                $(document).find('.profileModel').html(responce.explanation);
                $(document).find('#currentOpeningTextarea_parent_id').val(card_id);

                window.$("#editCard").modal("show");
            }
        });
    });


    $(document).on('click', '#editJob_btn', function(e) {
        e.preventDefault();
        var card_id = $(this).closest('form').find('#card_id').val();;

        var data;
        $(document).find('.note-editable').html('');
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            data: {
                'card_id': card_id
            },
            url: "{{ route('career.editJob') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                $('#job_textarea').html(responce.explanation);
                $('#job_textarea').closest('.col-md-12').find('.note-editable').addClass('jobModel');
                $(document).find('.jobModel').html(responce.explanation);
                $(document).find('#job_parent_id').val(card_id);

                window.$("#editCard").modal("show");
            }
        });
    });
</script>
@endsection