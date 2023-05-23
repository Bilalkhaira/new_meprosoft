@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Contact Us Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Contact Us</li>
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
                                <img src="{{ asset('img/contactUs/'.$pageData->topSection_img )}}" alt="">
                            </div>

                        </div>

                        <div style="float: right;">
                            <a href="{{ route('contactUs.editToSection',$pageData->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        </div>
                        @else
                        <div style="float: right;">
                            <form action="{{ route('contactUs.createToSection') }}" method="POST">
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
            <h1>Corporate Offices Section</h1>
        </div>
        @if(!empty($pageData))
        <div>
            <button style="float: right;margin-bottom: 20px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Create New Office</button>

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
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">

                            <div class="pt-3 setting_main">

                                <div class="card_btn">
                                    <form action="{{ route('contactUs.deleteCard', $val->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-primary" id="cardEdit_btn" data-bs-toggle="modal" data-bs-target="#editCard"> <i class="fa fa-edit"></i></button>
                                        <input type="hidden" value="{{ $val->id }}" id="card_id">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-10">
                                        <span class="slider_label">Country: </span><br>{{ $val->heading ?? '' }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-10">
                                        <p><span class="slider_label">Adress: </span><br>{{ (json_decode($val->explanation))->address ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 col-lg-12">
                                        <span class="slider_label">Phone: </span><br>
                                        @foreach((json_decode($val->explanation))->phone as $key => $li)
                                        {{ $li }}<br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 col-lg-12">
                                        <span class="slider_label">Email: </span><br>
                                        @foreach((json_decode($val->explanation))->email as $key => $li)
                                        {{ $li }}<br>
                                        @endforeach
                                    </div>
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
<div class="modal fade" id="editCard" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Office Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('contactUs.updateCard') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Country</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="country" id="country" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Address</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="address" id="adress" class="form-control" type="text" required>
                                <input type="hidden" id="updated_cardId" name="parent_id">
                            </div>
                        </div>

                        <div class="addMore_phone addMore_phoneEdit">
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Phone</label>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-11">
                                <button style="float: right;" class="btn btn-success btn-sm add_more_phone">Add More Phone</button>
                            </div>
                        </div>

                        <div class="addMore_email addMore_emailEdit">
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Email:</label>


                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-11">
                                <button style="float: right;" class="btn btn-success btn-sm add_more_email">Add More Email</button>
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




<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Office</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('contactUs.storeCard') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Country</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="country" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Address</label>
                            <div class="col-md-8 col-lg-10">
                                <input name="address" class="form-control" type="text" required>
                                <input type="hidden" value="{{ $pageData->id ?? ''}}" name="parent_id">
                            </div>
                        </div>

                        <div class="addMore_phone">
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Phone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone[]" class="form-control" type="text">
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-11">
                                <button style="float: right;" class="btn btn-success btn-sm add_more_phone">Add More Phone</button>
                            </div>
                        </div>

                        <div class="addMore_email">
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Email:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email[]" class="form-control" type="email">
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-11">
                                <button style="float: right;" class="btn btn-success btn-sm add_more_email">Add More Email</button>
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
    $(document).on('click', '.add_more_phone', function(e) {
        e.preventDefault();
        var data;
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="phone[]" class="form-control" type="number" required></div>';
        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
        $('.addMore_phone').append(data);
    });
    $(document).on('click', '.remove_more', function() {
        $(this).closest('.row').remove();
    });

    $(document).on('click', '.add_more_email', function(e) {
        e.preventDefault();
        var data;
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="email[]" class="form-control" type="email" required></div>';
        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
        $('.addMore_email').append(data);
    });
    $(document).on('click', '.remove_more', function() {
        $(this).closest('.row').remove();
    });

    $(document).on('click', '#cardEdit_btn', function(e) {
        e.preventDefault();
        var card_id = $(this).closest('form').find('#card_id').val();
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
            url: "{{ route('contactUs.editCard') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                $('.editCard_li').html('');

                $(document).find('#country').val(responce.heading);
                $(document).find('#adress').val(responce.explanation.address);
                $(document).find('#updated_cardId').val(card_id);

                $.each(responce.explanation.phone, function(index, el) {
                    if (el == null) {
                        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="phone[]" class="form-control" value="" type="text"></div>';
                        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
                    } else {
                        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="phone[]" class="form-control" value="' + el + '" type="text"></div>';
                        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
                    }

                    $('.addMore_phoneEdit').append(data);
                });

                $.each(responce.explanation.email, function(index, el) {
                    if (el == null) {
                        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="email[]" class="form-control" value="" type="text"></div>';
                        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
                    } else {
                        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="email[]" class="form-control" value="' + el + '" type="text"></div>';
                        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
                    }

                    $('.addMore_emailEdit').append(data);
                });

                window.$("#editCard").modal("show");
            }
        });
    });
</script>
@endsection