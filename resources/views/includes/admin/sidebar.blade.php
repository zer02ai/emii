{{-- <style>
    .main-sidemenu, .slide-menu{
        overflow: auto;
        max-height: 95%;
    }
    .side-menu__item{
        padding: 5px 20px;
    }
</style> --}}
<div class="sticky" style="margin-bottom: -74px;">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar ps">
        <div class="side-header">
            <a class="header-brand1" href="{{route('admin.dashboard')}}">
                <img src="{{url('')}}/assets/admin/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{url('')}}/assets/admin/images/brand/logo-1.png" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{url('')}}/assets/admin/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{url('')}}/assets/admin/images/brand/logo-3.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="side-menu" id="sidebarmenu" style="margin-right: 0px; margin-left: 0px;">
                <li class="slide">
                    <a class="side-menu__item" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{route('admin.gallery')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Galleries</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{route('admin.course')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Courses</span></a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
