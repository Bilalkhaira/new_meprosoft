@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>News & Event Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">News & Event</li>
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
                                <img src="{{ asset('img/newsEvent/'.$pageData->topSection_img )}}" alt="">
                            </div>

                        </div>

                        <div style="float: right;">
                            <a href="{{ route('newsEvent.editToSection',$pageData->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        </div>
                        @else
                        <div style="float: right;">
                            <form action="{{ route('newsEvent.createToSection') }}" method="POST">
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
                        <form action="{{ route('newsEvent.storeCard') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="pt-3 setting_main">

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-2 label">Heading</label>
                                        <div class="col-md-8 col-lg-10">
                                            <input name="heading" class="form-control" type="text" required>
                                            <input type="hidden" value="{{ $pageData->id ?? ''}}" name="parent_id">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-2 label">Explanation</label>
                                        <div class="col-md-8 col-lg-10">
                                            <textarea name="exp" class="form-control" id="" cols="12" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-2 label">Image</label>
                                        <div class="col-md-8 col-lg-10">
                                            <input type="file" class="form-control" name="img">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-2 label">Detail Link</label>
                                        <div class="col-md-8 col-lg-10">
                                            <input name="link" class="form-control" required>
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
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">

                            <div class="pt-3 setting_main">

                                <div class="card_btn">
                                    <form action="{{ route('newsEvent.deleteCard', $val->id) }}" method="POST">
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
                                            @foreach(json_decode($val->explanation) as $key => $li)
                                            @if($key == 'exp')
                                            <li><span class="slider_label">Explanation: </span>{{ $li }}</li>
                                            @else
                                            <li><span class="slider_label">Link: </span>{{ $li }}</li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @if(!empty($val->img))
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-10">
                                        <span class="slider_label">Image: </span><br>
                                        <img src="{{ asset('img/newsEvent/'.$val->img )}}" alt="">
                                    </div>
                                </div>
                                @endif

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
                <form action="{{ route('newsEvent.updateCard') }}" method="POST" enctype="multipart/form-data">
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
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Explanation</label>
                                <div class="col-md-8 col-lg-10">
                                    <textarea name="exp" class="form-control" id="edit_exp" cols="12" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Detail Link</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="link" class="form-control" id="edit_link" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Image</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="file" class="form-control" name="img">
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
            url: "{{ route('newsEvent.editCard') }}",
            type: "POST",
            dataType: "json",
            success: function(responce) {
                $('.editCard_li').html('');
                console.log(responce.explanation.exp);

                $(document).find('#edit_exp').val(responce.explanation.exp);
                $(document).find('#edit_link').val(responce.explanation.link);
                $(document).find('#editCard_heading').val(responce.heading);
                $(document).find('#updated_cardId').val(card_id);

                window.$("#editCard").modal("show");
            }
        });
    });
</script>
@endsection