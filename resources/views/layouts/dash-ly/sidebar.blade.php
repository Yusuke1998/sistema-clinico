<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a href="{{ url('/dashboard') }}">
            <span class="smini-show">
                <i class="fa fa-star text-primary"></i>
            </span>
            <span class="smini-hide">
                <img src="{{ asset('img/new-logo.png') }}" style="width:75%;" alt="LOGO-UNERG">
            </span>
        </a>
        <div>
            <div class="dropdown d-inline-block ml-3">
                <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="si si-drop"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                        <span>Panel Blanco</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                        <span>Panel Oscuro</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                        <span>Cabezera Blanca</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                        <span>Cabezera Oscura</span>
                    </a>
                </div>
            </div>
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link active" href="#">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">ADMINISTRACION</span>
                </a>
            </li>
            <li class="nav-main-item {{ Sidebar::here(['profesores','profesores/ordinarios','profesores/contratados']) }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-energy"></i>
                    <span class="nav-main-link-name">PERSONAL DOCENTE</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('profesores/ordinarios')?'active':'' }}" href="#">
                            <span class="nav-main-link-name">Ordinario</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>