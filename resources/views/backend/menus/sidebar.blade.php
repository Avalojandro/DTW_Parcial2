
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('images/ues_logo2.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight" style="color: white">PANEL DE CONTROL</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                
                <li class="nav-item">
                    <a href="{{ route('libros.vista_libros') }}" target="frameprincipal" class="nav-link">
                        <i class="fas fa-book nav-icon" style="color: #fff;"></i>
                        <p>Libros</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('number.vista_number') }}" target="frameprincipal" class="nav-link">
                        <i class="fas fa-money-bill nav-icon" style="color: #fff;"></i>
                        <p>Conversor</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('info.vista_info') }}" target="frameprincipal" class="nav-link">
                        <i class="fas fa-info nav-icon" style="color: #fff;"></i>
                        <p>Info</p>
                    </a>
                </li>

                <!-- ROLES Y PERMISO -->
                @can('sidebar.roles.y.permisos')
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-">
                            <i class="far fa-edit"></i>
                            <p>
                                Roles y Permisos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" target="frameprincipal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rol y Permisos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.permisos.index') }}" target="frameprincipal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Usuario</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

            </ul>
        </nav>
    </div>
</aside>






