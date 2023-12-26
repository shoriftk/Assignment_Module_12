@include('layout.header')

<!-- body start -->

<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed"
    data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('layout.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout.leftsidebar')
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                @yield('content')


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    </div>
    @include('layout.scriptfooter')

</body>

</html>
