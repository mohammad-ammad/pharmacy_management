@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product Record</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.view-product') }}">Manage Product</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.pages.update.product', ['id' => $product->id]) }}" method="post">
      @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control"
                            id="product_name" placeholder="Enter Product Name" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_description">Product Description:</label>
                        <input type="text" value="{{$product->product_description}}" name="product_description"
                            class="form-control" id="product_description" placeholder="Enter Product Description" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="quality">Quantity:</label>
                        <input type="text" value="{{ $product->quantity }}" name="quantity" class="form-control" id="quantity"
                            placeholder="Enter Quality" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" value="{{ $product->price }}" name="price" class="form-control" id="price"
                            placeholder="Enter Price" required>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{ $product->user_id }}" name="user_id" >
        </div>
            <div class="card-tools d-flex justify-content-center align-items-center">
              <button type="submit" class="btn btn-primary">
                  Submit
              </button>
           </div>
         </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            // Initialize Select2 Elements
            $('.select2').select2()

            // Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })

    </script>
@endsection
