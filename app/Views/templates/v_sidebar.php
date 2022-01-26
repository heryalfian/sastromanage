<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SUMG <sup>V2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Data
    </div>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user-plus"></i>
            <span> Tambah Pegawai</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Customer Service</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Task:</h6>
                <a class="collapse-item" href="buttons.html">Inquiry</a>
                <a class="collapse-item" href="cards.html">Rate Closing</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Creative</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Task</h6>
                <a class="collapse-item" href="utilities-color.html">Nak Konten</a>
                <a class="collapse-item" href="utilities-border.html">Nak Copywriting</a>
            </div>
        </div>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-ad"></i>
            <span>Advertiser</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Task</h6>
                <a class="collapse-item" href="utilities-color.html">Request Konten</a>
                <a class="collapse-item" href="utilities-border.html">Ulasan</a>
            </div>
        </div>
    </li>

    <?php if (in_groups('admin')) : ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - User List Data -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>User List</span></a>
    </li>

    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Profile
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>