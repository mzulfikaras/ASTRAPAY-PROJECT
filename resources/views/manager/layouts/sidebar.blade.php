<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/images_login/astrapay_logo.png')}}" alt="" class="nav-icon" style="opacity: .8; margin-left:10px" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-4 mb4 d-flex">
        <div class="image">
          <img src="{{asset('assets/manager/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
             <a href="{{route('manager.dashboard')}}" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                Dashboard
               </p>
             </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('manager.akses')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Akses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manager.aksesKhusus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Akses Khusus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manager.backup')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Backup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manager.nda')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form NDA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manager.restore')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Restore</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Close
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('done.manager.akses')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Form Akses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('done.manager.aksesKhusus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Form Akses Khusus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('done.manager.backup')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Form Backup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('done.manager.nda')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Form NDA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('done.manager.restore')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Form Restore</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
       <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->