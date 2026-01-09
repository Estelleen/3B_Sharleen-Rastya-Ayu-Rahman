<ul class="navbar-nav sidebar sidebar-dark accordion" style="background: linear-gradient(45deg, #553862, #313b64, #8f85d8);" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hand-sparkles"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Asteria Star Talk</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-satellite-dish"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Menu</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/students') }}">
            <i class="fas fa-fw fa-user-astronaut"></i>
            <span>Stargazers</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/ranks') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Ranks</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/tutors') }}">
            <i class="fas fa-fw fa-moon"></i>
            <span>Tutors</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>