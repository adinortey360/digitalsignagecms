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
                <h4 class="card-title">Templates</h4>
            </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets m-b-20">
                @foreach($templates as $slide)
                <div class="d-flex flex-row comment-row" onclick="openslide('/present?id={{ $slide->id }}')">
                    <div class="p-2"><span class="round"><img src="{{ Avatar::create($slide->title)->toBase64() }}" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>{{ $slide->title }}</h5>
                        <div class="comment-footer">
                            <span class="date">April 14, 2016</span>
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
                <h4 class="card-title">Install a new template</h4>
                <h6 class="card-subtitle">Upload and install a new presentation template.</h6>
                <form class="form-material m-t-40" method="post" action="/present/templates/add" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" name="file" class="form-control"> </div>

                    <div class="form-group">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Install</button>
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
<script type="text/javascript">
    function openslide(url) {
        $('#slide').modal('show');
        document.getElementById('slide-content').innerHTML = '<iframe src="' + url + '" style="width:100%;height:100vh;border:none;"></iframe>';
    }

    function puttem(content) {
        document.getElementById("slidebody").value += content;
    }

    function addslide() {
      var title = $('#slidetitle').val();
      var body = $('#slidebody').val();

      $.ajax({
        method: "POST",
        url: "/slides/add/new/slide",
        data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          title: title,
          body: body,
        },
        success: function(data) {
          console.log(data);
        },
        error: function() {

        }
      });

    }
</script>

@endsection
