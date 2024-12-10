<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}}
         {{-- style="opacity: .8"> --}}
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
     <form class="form-inline">
  <div class="input-group">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-sidebar" type="submit">
        <ion-icon class="icon" name="search-outline"></ion-icon>
      </button>
    </div>
  </div>
</form>
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <ion-icon class="icon" name="speedometer-outline"></ion-icon>
            <p>
              Starter Pages
              <ion-icon class="icon" name="chevron-back-outline"></ion-icon>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <ion-icon class="icon" name="navigate-outline"></ion-icon>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <ion-icon class="icon" name="information-circle-outline"></ion-icon>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <ion-icon class="icon" name="documents-outline"></ion-icon>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
