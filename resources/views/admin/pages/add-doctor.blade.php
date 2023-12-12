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
              <h1 class="m-0">Add Doctor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.pages.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.pages.view.doctor')}}"> Doctors</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->@extends('admin.layout')

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
        
            <form action="{{ route('admin.pages.add.doctor') }}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Doctor Name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Doctor Name:" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_description">Doctor Email:</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="quality">Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="price">Role_id:</label>
                                    <input type="number" name="role_id" class="form-control" placeholder="Enter Role_id:" required>
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
        
      </div>
      <!-- /.content-header -->
                <!-- /.card-header -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body" style="display:flex; justify-content:center; align-items: center">
                        <div class="form-group" style="width:100%; ">
                            <label for="">Your Field Name:</label>
                            <input type="text" name="user_id" class="form-control" id="" placeholder="Enter Your Field Name:" required>
                          </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="card-body" style="display:flex; justify-content:center; align-items: center">
                            <div class="form-group" style="width:100%; ">
                                <label for="">Your Field Name:</label>
                                <input type="text" name="user_id" class="form-control" id="" placeholder="Enter Your Field Name:" required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body" style="display:flex; justify-content:center; align-items: center">
                          <div class="form-group" style="width:100%; ">
                              <label for="">Your Field Name:</label>
                              <input type="text" name="user_id" class="form-control" id="" placeholder="Enter Your Field Name:" required>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body" style="display:flex; justify-content:center; align-items: center">
                        <div class="form-group" style="width:100%; ">
                            <label for="">Your Field Name:</label>
                            <input type="text" name="user_id" class="form-control" id="" placeholder="Enter Your Field Name:" required>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body" style="display:flex; justify-content:center; align-items: center">
                      <div class="form-group" style="width:100%; ">
                          <label for="">Your Field Name:</label>
                          <input type="text" name="user_id" class="form-control" id="" placeholder="Enter Your Field Name:" required>
                        </div>
                  </div>
              </div>
              <div class="card-tools">
                <button type="submit" class="btn btn-primary">
                  submit
                </button>
              </div>
                </div>
                
            </form>
              </div>
        </div><!-- /.container-fluid -->
      </div>
      
     
  
      <!-- Main content -->
      
      <!-- /.content -->

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
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                    theme: 'bootstrap4'
                    })

                })
        </script>
@endsection