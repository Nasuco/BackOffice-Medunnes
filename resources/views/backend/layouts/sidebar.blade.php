<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      {{-- <img src="{{asset('backend/dist/img/LogoUnnes.png')}}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light fw-bold">Admin Telemedicine</span>
    </a>

    <a href="{{ route('admin.profile.show', ['id' => Auth::user()->id]) }}" class="brand-link">
      <img src="{{asset('backend/dist/img/R.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light fw-bold">{{ Auth::user()->name }}</span>
    </a>
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{URL::to('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{URL::to('/list_pasien')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pasien
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/list_konsultasi')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Konsultasi Pasien
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/list_dokter')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dokter
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/list_spesialis')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Spesialisasi
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="{{URL::to('/list_dosen')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dosen
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li> --}}

          {{-- <li class="nav-item">
            <a href="{{URL::to('/list_akun')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Akun
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{URL::to('/activity')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log Activity
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          


        <li class="nav-item">
        <a class="dropdown-item nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-th"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
