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
            <a href="{{route('admin.pages.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="manageUsersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Manage Users
                </p>
            </a>
            <div class="dropdown-menu" aria-labelledby="manageUsersDropdown">
                <a class="dropdown-item" href="{{route('admin.pages.view.doctor')}}">
                    <i class="nav-icon fas fa-user-md"></i>
                    Doctors
                </a>
                <a class="dropdown-item" href="{{route('admin.pages.view.patient')}}">
                    <i class="nav-icon fas fa-user"></i>
                    Patients
                </a>
            </div>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.pages.view-product') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i> 
              <p>
                  Manage Products
              </p>
          </a>
      </li>

          <li class="nav-item">
            <a href="{{ route('admin.pages.AdminOrder.view') }}" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Manage Orders
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.pages.view.appointment')}}" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Manage Appointment
              </p>
            </a>
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