@php
  function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIGOPPER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('Data_Admin')}}" class="nav-link {{checkRouteActive('Data_Admin')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('Data_Kategori')}}" class="nav-link {{checkRouteActive('Data_Kategori')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('Data_Toko')}}" class="nav-link {{checkRouteActive('Data_Toko')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Toko
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('Data_Foto')}}" class="nav-link {{checkRouteActive('Data_Foto')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Foto
              </p>
            </a>
          </li>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
