@extends('layouts.app') @section('content')
<style>
    .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .modal-content {
        height: auto;
        min-height: 100%;
        border-radius: 0;
    }
</style>
<div class="container">
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Slides</h4>
            </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets m-b-20">
                @foreach($slides as $slide)
                <div class="d-flex flex-row comment-row" style=" padding: 0px; ">
                    <div class="comment-text w-100">
                        <h5>{{ $slide->title }}</h5>
                        <a style=" display: block; font-weight: 600; color: #ffffff; background: #FF9800; width: 74px; padding: 3px 10px; border-radius: 3px; margin-bottom: 15px; box-shadow: 1px 2px 3px 1px #00000024; " href="/present/slide/delete/{{ $slide->id }}">DELETE</a>
                        <div class="comment-footer">
                            <a href="/present/slide/edit/{{ $slide->id }}"><img style=" width: 100%; border-radius: 4px; box-shadow: 0px 0px 9px 1px #0003; " src="/storage/{{ substr($slide->image,7) }}"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add a new slide</h4>
                <h6 class="card-subtitle">Fill the form to start a new slide.</h6>
                <form class="form-material m-t-40" method="post" action="/slides/add/new/slide" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Slide Title</label>
                        <input type="text" name="slidetitle" class="form-control"> </div>

                        <div class="form-group">
                            <label>Slide Image</label>
                            <input type="file" name="slideimage" class="form-control"> </div>

                    <div class="form-group">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Add Slide</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="slide" id="slide" style="display: none;">
    <div class="modal-dialog modal-lg" style=" max-width: 100%; ">
        <div class="modal-content" id="slide-content">
            <iframe src="/present?id=1" style="width:100%;height:100vh;border:none;"></iframe>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
