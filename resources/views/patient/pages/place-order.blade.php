@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Order</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.pages.view.order') }}">Order</a></li>
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

    <form action="" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_id">Select Product:</label>
                            <select name="product_id" class="form-control select2" style="width: 100%;" required>
                                <!-- Populate this dropdown with your products -->
                                <!-- Example: <option value="1">Product 1</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Order Status:</label>
                            <select name="status" class="form-control select2" style="width: 100%;" required>
                                <option value="pending">Pending</option>
                                <option value="accepted">Accepted</option>
                                <option value="rejected">Rejected</option>
                                <option value="fulfilled">Fulfilled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Payment Method:</label>
                            <select name="payment_method" class="form-control select2" style="width: 100%;" required>
                                <option value="online">Online</option>
                                <option value="cash on delivery">Cash on Delivery</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Add other fields for additional sections as needed -->
            </div>
            <div class="card-tools d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
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
