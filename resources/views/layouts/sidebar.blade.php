<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>

        <li class="{{ (request()->is('superadmin/beranda')) ? 'active' : '' }}"><a href="/superadmin/beranda"><i
                    class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
        <li class="{{ (request()->is('superadmin/user*')) ? 'active' : '' }}"><a href="/superadmin/user"><i
                    class="fa fa-users"></i> <span>Admin</span></a></li>
        <li class="{{ request()->is('superadmin/profil/*') ? 'active' : '' }} treeview">
            <a href="#">
                <i class="fa fa-building"></i> <span>Profil</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ request()->is('superadmin/profil/tentang-kami') ? 'active' : '' }}"><a
                        href="/superadmin/profil/tentang-kami"><i
                            class="fa fa-circle-o {{ request()->is('superadmin/profil/tentang-kami') ? 'text-yellow' : '' }}"></i>
                        Tentang Kami</a></li>

            </ul>
        </li>

        <li class="{{ (request()->is('superadmin/wisata*')) ? 'active' : '' }}"><a href="/superadmin/wisata"><i
                    class="fa fa-newspaper-o"></i> <span>wisata</span></a></li>

        <li class="{{ (request()->is('superadmin/budaya*')) ? 'active' : '' }}"><a href="/superadmin/budaya"><i
                    class="fa fa-newspaper-o"></i> <span>budaya</span></a></li>

        <li class="{{ (request()->is('superadmin/kuliner*')) ? 'active' : '' }}"><a href="/superadmin/kuliner"><i
                    class="fa fa-newspaper-o"></i> <span>kuliner</span></a></li>

        <li class="header">SETTING</li>

        <li><a href="/superadmin/laporan"><i class="fa fa-file"></i> <span><i>Laporan</i></span></a></li>
        <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>


    </ul>
    <!-- /.sidebar-menu -->
</section>