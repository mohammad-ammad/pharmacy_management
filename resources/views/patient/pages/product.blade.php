@extends('patient.layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">View All Products & Place Order From Here</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('patient.patient.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('patient.pages.product')}}"> Products</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View All Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SN.</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($products as $index => $product)
                 <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price * $product->quantity}}</td>
                    <td class="d-flex">
                      <a href="{{ route('patient.orders.place', ['productId' => $product->id]) }}" class="btn btn-primary btn-sm mr-1">
                          Place order
                      </a>
                  </td>
                  </tr>
                  @endforeach    
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>

      @if(session('error'))
          <input type="hidden" id="error-message" value="{{ session('error') }}">
      @endif

      @if(session('success'))
          <input type="hidden" id="success-message" value="{{ session('success') }}">
      @endif
  
     
@endsection

@section('scripts')
      <script src="{{asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
      <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endsection