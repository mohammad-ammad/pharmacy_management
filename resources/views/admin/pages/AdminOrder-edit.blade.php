@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Order</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Order</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.pages.update.AdminOrder', ['orderId' =>$order->id])}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="product_name">Product Name:</label>
                            <input type="text" name="product_name" class="form-control" value="{{ $order->product->product_name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="patient_name">Patient Name:</label>
                            <input type="text" name="patient_name" class="form-control" value="{{ $order->patient->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="price">Total Price:</label>
                            <input type="text" name="price" class="form-control" value="{{ $order->price }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select name="status" class="form-control">
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="accepted" {{ $order->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                                <option value="rejected" {{ $order->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                                <option value="fulfilled" {{ $order->status === 'fulfilled' ? 'selected' : '' }}>Fulfilled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Payment Method:</label>
                            <input type="text" name="payment_method" class="form-control" value="{{ $order->payment_method }}" readonly>
                        </div>

                        <div class="card-tools d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Update 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Include any scripts needed for the edit view -->
@endsection
