@include('patient.partials.header')

<div class="wrapper">

    @include('patient.partials.topNavigation')

  <!-- Main Sidebar Container -->
  @include('patient.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('patient.partials.master_search')
  <!-- Control Sidebar -->
  @include('patient.partials.sidecontrol')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.partials.footer')
</div>


@include('admin.partials.scripts')


