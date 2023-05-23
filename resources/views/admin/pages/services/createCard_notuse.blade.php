@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Services</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Services</li>
            <li class="breadcrumb-item active">Create Card</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <form action="{{ route('service.storeCard') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label"> Card Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="heading" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="append-elements">
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 label">Card List</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="lists[]" class="form-control" type="text" required>
                                        <input type="hidden" value="{{ $parent_id ?? ''}}" name="parent_id">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">
                                    <button style="float: right;" class="btn btn-success btn-sm add_more">Add More</button>
                                </div>
                            </div>

                            <div style="float: right;">
                                <button class="btn btn-primary btn-sm">Save</button>
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
        data = '<div class="row mb-3"><label class="col-md-4 col-lg-2 label"></label><div class="col-md-8 col-lg-9"><input name="lists[]" class="form-control" type="text" required></div>';
        data += '<div class="col-md-1"><button class="btn btn-success remove_more">remove</button></div>';
        $('.append-elements').append(data);
    });
    $(document).on('click', '.remove_more', function() {
        $(this).closest('.row').remove();
    });
</script>
@endsection