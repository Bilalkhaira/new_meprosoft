@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Frequently Asked Questions</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Edit Frequently Asked Questions</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <form action="{{ route('faq.storeFaq') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="heading" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Text</label>
                                <div class="col-md-8 col-lg-10">
                                    <textarea name="exp" class="form-control" cols="30" rows="3" required></textarea>
                                </div>
                            </div>
                           
                            <div class="append-elements">
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 label">Question</label>
                                    <div class="col-md-8 col-lg-4">
                                        <textarea name="question[]" id="" class="form-control" cols="30" rows="3" required></textarea>
                                    </div>

                                    <label class="col-md-4 col-lg-1 label">Answer</label>
                                    <div class="col-md-8 col-lg-4">
                                    <textarea name="ans[]" id="" class="form-control" cols="30" rows="3" required></textarea>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">
                                    <button style="float: right;" class="btn btn-success btn-sm add_more">Add More</button>
                                </div>
                            </div>


                            <div style="float: right;">
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>

                        </form>
                    </div>


                </div>
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
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label">Question</label><div class="col-md-8 col-lg-4"><textarea name="question[]" id="" class="form-control" cols="30" rows="3" required></textarea></div><label class="col-md-4 col-lg-1 label">Answer</label>';
        data += '<div class="col-md-8 col-lg-4"><textarea name="ans[]" id="" class="form-control" cols="30" rows="3" required></textarea></div><div class="col-md-1"><button class="btn btn-success remove_more">remove</button></div>';
        $('.append-elements').append(data);
    });
    $(document).on('click', '.remove_more', function() {
        $(this).closest('.row').remove();
    });
</script>
@endsection