@include('doctor.partials.header')

<div class="wrapper">

    @include('doctor.partials.topNavigation')

  <!-- Main Sidebar Container -->
  @include('doctor.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('doctor.partials.master_search')
  <!-- Control Sidebar -->
  @include('doctor.partials.sidecontrol')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.partials.footer')
</div>


@include('admin.partials.scripts')


