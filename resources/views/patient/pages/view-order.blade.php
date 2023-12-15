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
                    <h1 class="m-0">View Your Order Status Here!</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('patient.patient.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="">Place Order</a></li>
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

    <h1 style="margin-left: 20px;">Your Orders</h1>

    @if($orders->isEmpty())
    <div style="text-align: center; margin-top: 50px;">
        <p style="font-size: 18px; color: #555;">You have not placed an order yet.</p>
    </div>
    @else
        <ul>
            @foreach($orders as $index => $order)
            <li style="margin-bottom: 20px; border: 1px solid #ddd; padding: 10px;">
                <strong>Order No: {{$index + 1}}</strong><br>
                Product: {{ $order->product ? $order->product->product_name : 'Unknown Product' }}<br>
                Quantity: {{ $order->quantity }}<br>
                Price: {{ $order->price }}<br>
                Status: {{ $order->status }}<br>
            </li>
            @endforeach
        </ul>
    @endif

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