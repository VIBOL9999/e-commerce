@include('layout.header')
<body>
    <div class="container-fluid">
        @include('menu.topmenu')
        {{-- @yield('topmenu') --}}
        {{-- @include('menu.right_navbar')
        @include('menu.left_menu') --}}

        <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
            @yield('content')

        </div><!-- end Content Wrapper. Contains page content -->
        <footer class="main-footer">
            <strong>Copyright &copy;2020-<?php echo date("Y"); ?> <a href="https://turbotech.com">TURBOTECH CO., LTD</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
            </div>
        </footer>
                <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    </div>
@include('layout.footer')

</body>

</html>

