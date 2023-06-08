<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes/admin/header')

</head>


<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{  url('') }}/assets/admin/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('includes/admin/topbar')
            {{-- <div class="jumps-prevent" style="padding-top: 74px;"></div> --}}
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('includes/admin/sidebar')
            {{-- <div class="jumps-prevent" style="padding-top: 74px;"></div> --}}

            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid mt-5">

                        {{-- <div class="page-header"> --}}
                            {{-- <h1 class="page-title">{{$page_title}}</h1> --}}
                            {{-- <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol>
                            </div> --}}
                        {{-- </div> --}}
                        <!-- PAGE-HEADER END -->
      
                        @yield('content')

                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
        </div>

        <!-- Sidebar-right -->
        {{-- @include('includes/admin/sidebar_right') --}}
        <!-- Sidebar-right -->

        <!-- Modal -->

        {{-- @include('includes/admin/modal') --}}
        <!-- Modal End -->
        @include('includes/admin/footer')
        @include('includes/flash-message')
</body>

</html>