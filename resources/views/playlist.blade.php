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
  <div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <video style="width:100%" controls>
              @if(isset($playing->video))
                <source src="/storage/{{ substr($playing->video,7) }}" type="video/mp4">
              @endif
            </video>
            <br />
            @if(isset($playing->title))
            <h4 style=" margin-bottom: 0px; margin-top: 8px; " class="card-title">Now Playing: {{ $playing->title }}</h4>
            @else
            <h4 style=" margin-bottom: 0px; margin-top: 8px; " class="card-title">Now Playing: No video</h4>
            @endif

        </div>
    </div>
  </div>
    <div class="col-md-6">



        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Playlist Manager</h4>
                <h6 class="card-subtitle">All video lists</h6>
                <button type="button"  data-toggle="modal" data-target="#responsive-modal"  class="btn waves-effect waves-light btn-primary">Add a new video</button>

                <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $i = 1; ?>
                                          @foreach($videos as $video)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $video->title }}</td>
                                                <td><a href="/playlist/play/{{ $video->id }}"><span class="label label-info">play</span></a> <a href="/playlist/remove/{{ $video->id }}"><span class="label label-danger">remove</span></a> </td>
                                            </tr>
                                            <?php $i++; ?>
                                          @endforeach
                                        </tbody>
                                    </table>
            </div>
        </div>
    </div>
</div>
</div>


<div id="responsive-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Add a new video to store</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/playlist/add" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Video Name/Title:</label>
                                                        <input type="text" class="form-control" name="title" id="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="control-label">Video Image:</label>
                                                        <input type="file" class="form-control" name="video" id="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Add Video</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

@endsection
