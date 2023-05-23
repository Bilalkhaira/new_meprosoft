@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Home Menu Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Home Menu</li>
        </ol>
    </nav>
</div>


<section class="section">
    <div class="row">

        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <form action="{{ route('home/corporateOverview.getServicePage') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-4 label">Select Page And Submit For Edit Page</label>
                                <div class="col-md-8 col-lg-8">
                                    <select class="form-control" name="navbar_id" id="navbar">
                                        @if(!empty($services_lists))
                                        @foreach($services_lists as $services_list)
                                        <option value="{{ $services_list->id }}" @if(isset($navbar_id) && $navbar_id==$services_list->id) ? selected @endif>{{ $services_list->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div style="float: right;">
                                <button class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

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
                                <img src="{{ asset('img/homeMenu/'.$pageData->topSection_img )}}" alt="">
                            </div>

                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home/corporateOverview.editToSection',$pageData->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        </div>
                        @else
                        <div style="float: right;">
                            <form action="{{ route('home/corporateOverview.createToSection') }}" method="POST">
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
            <h1>Explanation Section</h1>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">

                        @if(!empty($pageData))
                        @if(!empty($pageData->explanationSection_heading))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                {{$pageData->explanationSection_heading}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                {!! $pageData->explanationSection_explanation !!}
                            </div>
                        </div>
                        @if($pageData->explanationSection_img != "")
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <form action="{{ route('home/corporateOverview.deleteExplanationImage', $pageData->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                </form>
                                <img src="{{ asset('img/homeMenu/'.$pageData->explanationSection_img )}}" alt="">

                            </div>

                        </div>
                        @endif
                        <div style="float: right;">
                            <a href="{{ route('home/corporateOverview.editExplanationSection', $pageData->id ?? '') }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        @else
                        <div style="float: right;">
                            <a href="{{ route('home/corporateOverview.createExplanationSection', $pageData->id ?? '') }}" class="btn btn-sm btn-primary">Create</a>
                        </div>
                        @endif
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
            <h1>Card Section</h1>
        </div>
        @if(!empty($pageData))
        <div>
            <button style="float: right;margin-bottom: 20px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> Add New Card</button>
            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Card</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('home/corporateOverview.storeCard') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="pt-3 setting_main">

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-2 label">Heading</label>
                                        <div class="col-md-8 col-lg-10">
                                            <input name="heading" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="append-elements">
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-2 label">List</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="lists[]" class="form-control" type="text" required>
                                                <input type="hidden" value="{{ $pageData->id ?? ''}}" name="parent_id">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-11">
                                            <button style="float: right;" class="btn btn-success btn-sm add_more">Add More</button>
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
                <div class="col-md-4 ">
                    <div class="card">

                        <div class="card-body">

                            <div class="pt-3 setting_main">

                                <div class="card_btn">
                                    <form action="{{ route('home/corporateOverview.deleteCard', $val->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-primary" id="cardEdit_btn" data-bs-toggle="modal" data-bs-target="#editCard"> <i class="fa fa-edit"></i></button>
                                        <input type="hidden" value="{{ $val->id }}" id="card_id">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-10">
                                        <b>{{ $val->heading ?? '' }}</b>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 col-lg-12">
                                        <ul>
                                            @foreach(json_decode($val->explanation) as $li)
                                            <li>{{ $li }}</li>
                                            @endforeach
                                        </ul>
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
    <div class="modal fade" id="editCard" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('home/corporateOverview.updateCard') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="pt-3 setting_main">

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input id="editCard_heading" name="heading" class="form-control" type="text" required>
                                    <input id="updated_cardId" name="updated_cardId" type="hidden">
                                </div>
                            </div>
                            <div class="editCard_li">

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">
                                    <button style="float: right;" class="btn btn-success btn-sm add_more1">Add More</button>
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



</section>

@endsection
@section('scripts')
<script>
    $(document).on('click', '.add_more', function(e) {
        e.preventDefault();
        var data;
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="lists[]" class="form-control" type="text" required></div>';
        data += '<div class="col-md-1"><a class="remove_more"> <i style="color:red" class="fa fa-trash"></i></a></div>';
        $('.append-elements').append(data);
    });
    $(document).on('click', '.remove_more', function() {
        $(this).closest('.row').remove();
    });

    $(document).on('click', '.add_more1', function(e) {
        e.preventDefault();
        var data;
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="lists[]" class="form-control" type="text" required></div>';
        data += '<div class="col-md-1"><a class="remove_more1"> <i style="color:red" class="fa fa-trash"></i></a></div>';
        $('.editCard_li').append(data);
    });
    $(document).on('click', '.remove_more1', function() {
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
            url: "{{ route('home/corporateOverview.editCard') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                $('.editCard_li').html('');
                $.each(responce.explanation, function(index, el) {
                    data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="lists[]" class="form-control" value="' + el + '" type="text" required></div>';
                    data += '<div class="col-md-1"><a class="remove_more1"> <i style="color:red" class="fa fa-trash"></i></a></div>';
                    $('.editCard_li').append(data);
                });

                $(document).find('#editCard_heading').val(responce.heading);
                $(document).find('#updated_cardId').val(card_id);

                // jQuery.noConflict();
                // $('#editCard').model('show');
                window.$("#editCard").modal("show");
            }
        });
    });
</script>
@endsection