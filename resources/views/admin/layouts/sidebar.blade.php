<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('admin.dashboard') }}" class="text-nowrap">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 px-2 fw-bolder">MASA TERA</h4>
                </div>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar border-top overflow-hidden" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if ($active == 'dashboard') active @endif" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Master Data</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if ($active == 'category') active @endif" href="{{ route('admin.category') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-category-2"></i>
                        </span>
                        <span class="hide-menu">Merek</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if ($active == 'tipe') active @endif" href="{{ route('admin.tipe') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-brand-appgallery"></i>
                        </span>
                        <span class="hide-menu">Model/TIpe</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if ($active == 'alat') active @endif" href="{{ route('admin.alat') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Alat</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
