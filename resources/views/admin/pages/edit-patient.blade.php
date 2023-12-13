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
                    <h1 class="m-0">Edit Patient Record</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.pages.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.pages.view.patient')}}"> Patient</a></li>
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

    <form action="{{ route('admin.pages.update.patient', ['id' => $patient->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_name">Patient Name:</label>
                            <input type="text" value="{{ $patient->name }}" name="name" class="form-control" placeholder="Enter Patient Name:" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_description">Patient Email:</label>
                            <input type="text" value="{{ $patient->email }}" name="email" class="form-control" placeholder="Enter Patient Email" required>
                        </div>
                    </div>
                </div>
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
