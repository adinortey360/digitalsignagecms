@extends('layouts.app')

@section('content')
<br />
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Queue Manager</h4>
                <h6 class="card-subtitle">All queue lists</h6>
                <button type="button"  data-toggle="modal" data-target="#responsive-modal"  class="btn waves-effect waves-light btn-primary">Add a new Item</button>

           
            </div>
        </div>
    </div>
</div>
</div>

<div class="row owl-carousel">
<div class="col-md-12">
  <div class="container">
    @if($next)
    <div class="card" style="border-top: 3px solid #1976d2;width: 100%;background: #fff;box-shadow: 1px 1px 27px 4px rgba(0, 0, 0, 0.11);">
      <img class="card-img-top" src="{{ Avatar::create($next->name)->toBase64() }}" style="width:100%;" alt="Card image cap">
      <div class="card-body" style=" padding: 20px; ">
        <h4 style=" font-weight: bold; text-transform: uppercase; color: #000; " class="card-title">#{{ $next->code }}</h4>
        <h4 style=" font-weight: bold; text-transform: uppercase; color: #000; " class="card-title">{{ $next->name }}</h4>
        <p class="card-text">56 years old - Diabetes Patient - Last Visit: 18<sup>th</sup> Sep, 2017</p>
        @if($next->accepted == 0)
        <a href="/queue/accept/{{ $next->code }}" class="btn btn-primary" style=" background: #3498db; border: none; padding: 12px 40px; font-weight: bold; ">ACCEPT</a>
        @elseif($next->accepted == 1)
        <a href="/queue/attended_to/{{ $next->code }}" class="btn btn-primary" style=" background: #3498db; border: none; padding: 12px 40px; font-weight: bold; ">ATTENDED TO</a>
        @endif
      </div>
    </div>
    @endif
  </div>
</div>





<!--Everybody in queue-->
@foreach($people as $person)
<div class="col-md-12" style=" padding-top: 30px; ">
  <div class="container">
    <div class="card" style="border-top: 3px solid #000;width: 100%;background: #fff;box-shadow: 1px 1px 27px 4px rgba(0, 0, 0, 0.11);">
      <img class="card-img-top" src="{{ Avatar::create($person->name)->toBase64() }}" style="width:100%;" alt="Card image cap">
      <div class="card-body" style=" padding: 20px; ">
        <h4 style=" font-weight: bold; text-transform: uppercase; color: #000; " class="card-title">#{{ $person->code }}</h4>
        <h4 style=" font-weight: bold; text-transform: uppercase; color: #000; " class="card-title">{{ $person->name }}</h4>
        <p class="card-text">56 years old - Diabetes Patient - Last Visit: 18<sup>th</sup> Sep, 2017</p>

      </div>
    </div>
  </div>
</div>
@endforeach
</div>
</div>
@endsection


<div id="responsive-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Add a new queue</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/queue/add" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Item Title:</label>
                                                        <input type="text" class="form-control" name="title" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Code:</label>
                                                        <input type="text" class="form-control" name="description" id="">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Add Item</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>