<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.pages.dashboard')}}" class="brand-link">
      <img src="{{asset("assets/dist/img/logo.png")}}" alt="pharmacy.pk" class="brand-image" style="width: 60px; height:60px; object-fit: contain">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{route('patient.patient.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        <li class="nav-item">
          <a href="{{ route('patient.pages.product') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i> 
              <p>
                Place Order Of Product
              </p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{route('patient.view.order')}}" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                  View Order
              </p>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('patient.view.appointment')}}" >
            <i class="nav-icon fa fa-file"></i>
            <p>
                Add & View Appointment
            </p>
        </a>
        {{-- <div class="dropdown-menu" aria-labelledby="manageAppointmentDropdown">
            <a class="dropdown-item" href="{{route('patient.view.appointment')}}">
                <i class="nav-icon far fa-file"></i>
                Add Appointment
            </a>
        </div> --}}
    </li>

          <li class="nav-item">
            <a href="{{route('admin.login')}}" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>