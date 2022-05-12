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
    <div class="col-md-9" style="margin:auto;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add an RSS feed</h4>
                <h6 class="card-subtitle">Enter an RSS feed url where you want to retrieve news,</h6>
                <form class="form-material m-t-40" method="post" action="/news/add" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" name="url" class="form-control" value="{{ $news_url }}"/>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Set News Url</button>
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
