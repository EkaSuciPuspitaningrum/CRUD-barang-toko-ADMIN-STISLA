<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin</a>
        
        </div>
      
        <ul class="sidebar-menu">
            
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('dashboard') }}"><i class="far fa-solid fa-house"></i><span>Dashboard</span></a>
            </li>

            {{-- <li class="{{ Request::is('akun-mahasiswa') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('akun-mahasiswa') }}"><i class="far fa-solid fa-user"></i><span>Akun Mahasiswa</span></a>
            </li> --}}

            <li class="{{ Request::is('upload-produk') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('upload-produk') }}"><i class="far fa-solid fa-upload"></i><span>Upload Produk</span></a>
            </li>
            
        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="{{ url('login.out') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-check-circle" ></i> SELESAI
            </a>
        </div>
    </aside>
</div>