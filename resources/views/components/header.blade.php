<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            
        </ul>
        <a href="#"
                data-toggle="dropdown"
                class="nav-link nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->username}}. Semoga hari mu menyenangkan :)</div>
        </a>
</nav>
