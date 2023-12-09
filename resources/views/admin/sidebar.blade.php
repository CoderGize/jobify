<div class="min-height-300 position-absolute w-100" style="background-color: black;"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header mb-3">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="" href="{{ url('/') }}">
            <img src="/images/fulllogo.svg" width="200px" class="d-block mx-auto p-3" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_user' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_user') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_promo' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_promo') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill text-sm opacity-10" style="color:rgb(83, 16, 240)"></i>
                    </div>
                    <span class="nav-link-text ms-1">Promo Codes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_mission' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_mission') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-sliders text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mission</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_second' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_second') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-chevron-down text-black text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Second Section</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_service' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_service') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-hdd text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Services
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_show' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_show') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-pc text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Show
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_pricing' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_pricing') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-question-lg text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Pricing
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_counter' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_counter') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill text-sm opacity-10" style="color:rgb(239, 178, 81)"></i>
                    </div>
                    <span class="nav-link-text ms-1">Counter</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_testimonial' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_testimonial') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-rss text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Testimonials
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_social' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_social') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-share fs-6 text-sm opacity-10" style="color:rgb(47, 194, 182)"></i>
                    </div>
                    <span class="nav-link-text ms-1">Social Media</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <p class="text-xs font-weight-bold mt-2 mb-5">
                        <i class="bi bi-arrow-down"></i>
                        Scroll down for more
                        <i class="bi bi-arrow-down"></i>
                    </p>
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Don't hesitate to contact us</p>
                </div>
            </div>
        </div>
        <a href="" target="_blank" class="btn btn-sm w-100 mb-3 text-white" style="background-color: black;">
            <i class="bi bi-telephone text-white fs-6 me-1"></i>
            Call
        </a>
    </div>
</aside>
