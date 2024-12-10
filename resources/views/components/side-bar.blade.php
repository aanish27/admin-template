<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
  <a href="/" class="brand-link">
    <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('images/dp.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item menu-open">
          <a href="#" class=" nav-link active">
            <i class="nav-icon fa-solid fa-gauge"></i>
            <p>Dashboard  <i class="right fa-solid fa-caret-left "></i></p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa-solid fa-chart-line"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-circle-exclamation"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>

        </li>
      </ul>
    </nav>
  </div>
</aside>
