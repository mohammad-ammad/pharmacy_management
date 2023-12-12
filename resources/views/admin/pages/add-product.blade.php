@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Product</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.pages.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.pages.view-product')}}"> Product</a></li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.pages.add.product') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_name">Product Name:</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name:" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_description">Product Description:</label>
                            <input type="text" name="product_description" class="form-control" placeholder="Enter Product Description:" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="quality">Quantity:</label>
                            <input type="quantity" name="quantity" class="form-control" placeholder="Enter Product Quantity:" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" step="0.01" class="form-control" placeholder="Enter Price:" required>
                        </div>
                    </div>
                </div>
                            <input type="hidden" value="{{ auth()->id() }}" name="user_id">
            </div>
            <div class="card-tools d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>

    @if(session('error'))
        <input type="hidden" id="error-message" value="{{ session('error') }}">
    @endif

    @if(session('success'))
        <input type="hidden" id="success-message" value="{{ session('success') }}">
    @endif
@endsection

@section('scripts')
    <script src="{{asset('/assets/plugins/select2/js/select2.full.min.js')}}"></script>
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
