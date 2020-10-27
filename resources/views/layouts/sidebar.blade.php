<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{asset('assets/images_login/astrapay_logo.png')}}" alt="" width="150px">
      </div>
      {{-- <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">User Pages</h6>
          <a class="collapse-item" href="{{route('karyawan.index')}}">Register User</a>
          <div class="collapse-divider"></div>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Kategori Akses Pages</h6>
          <a class="collapse-item" href="{{route('kategori.index')}}">Kategori Akses</a>
          <h6 class="collapse-header">Request Backup Pages</h6>
          <a class="collapse-item" href="{{route('form-backup.index')}}">Request FORM BACKUP</a>
          <h6 class="collapse-header">Pending Pages</h6>
          <a class="collapse-item" href="{{route('form-akses.index')}}">Request FORM AKSES</a>
          <a class="collapse-item" href="{{route('form-restore.index')}}">Request FORM RESTORE</a>
          {{-- <a class="collapse-item" href="{{route('internet.index')}}">Request INTERNET</a> --}}
          {{-- <a class="collapse-item" href="{{route('server.index')}}">Request SERVER</a> --}}
          {{-- <a class="collapse-item" href="{{route('sistem.index')}}">Request SISTEM</a> --}}
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Done Pages:</h6>
          <a class="collapse-item" href="{{route('formAkses.done')}}">Done FORM AKSES</a>
          <a class="collapse-item" href="{{route('formRestore.done')}}">Done FORM RESTORE</a>
          {{-- <a class="collapse-item" href="{{route('internet.done')}}">Done INTERNET</a> --}}
          {{-- <a class="collapse-item" href="{{route('server.done')}}">Done SERVER</a> --}}
          {{-- <a class="collapse-item" href="{{route('sistem.done')}}">Done SISTEM</a> --}}
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>