@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Home Menu</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Home Menu</li>
            <li class="breadcrumb-item active">Create Explanation Section</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <form action="{{ route('home/corporateOverview.storeExplanationSection') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label"> Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="heading" class="form-control" type="text" required>
                                    <input type="hidden" value="{{ $updated_id ?? '' }}" name="updated_id">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label"> Text</label>
                                <div class="col-md-8 col-lg-10">
                                    <!-- <textarea name="exp" class="form-control" id="" cols="30" rows="4" required></textarea> -->
                                    <textarea class="summernote" name="exp" ols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Background Image</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="img" class="form-control" type="file">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
@endsection