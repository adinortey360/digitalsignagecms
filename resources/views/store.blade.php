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
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Inventory Manager</h4>
                <h6 class="card-subtitle">All products lists</h6>
                <button type="button"  data-toggle="modal" data-target="#responsive-modal"  class="btn waves-effect waves-light btn-primary">Add a new product</button>

                <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $i = 1; ?>
                                          @foreach($products as $product)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td><img style=" width: 80px; border-radius: 3px; " src="storage/{{ substr($product->image,7) }}" /></td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td><a href="#"><span class="label label-info">edit</span></a> <a href="/store/remove/{{ $product->id }}"><span class="label label-danger">remove</span></a> </td>
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
                                                <h4 class="modal-title">Add a new product to store</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/store/add" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Product Name/Title:</label>
                                                        <input type="text" class="form-control" name="title" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Price:</label>
                                                        <input type="text" class="form-control" name="price" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Discount:</label>
                                                        <input type="text" class="form-control" name="discount" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Short Description:</label>
                                                        <textarea class="form-control" name="short_desc" id=""></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Long Description:</label>
                                                        <textarea class="form-control" name="long_desc" id=""></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Product Image:</label>
                                                        <input type="file" class="form-control" name="image" id="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Add Product</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

@endsection
