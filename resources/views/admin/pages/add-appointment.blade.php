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
              <h1 class="m-0">Add New @extends('admin.layout')

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
              <h1 class="m-0">Add New Appointment</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.view.appointment')}}"> Appointments</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.view.product')}}"> Product</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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