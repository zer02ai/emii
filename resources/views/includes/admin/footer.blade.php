        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2023 <a href="javascript:void(0)"> A </a> B </span> by <a href="javascript:void(0)">  </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <script>
        $(document).ready(function() {
          $('.select2').select2(); 
          var active_url = $(location).attr("href");
          $('.side-menu__item').each(function(key,value){
              if(value.href == active_url){
                  $(this).addClass('active');
              }
          });
    });
    </script>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- BOOTSTRAP JS -->
    <script src="{{  url('') }}/assets/admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="{{  url('') }}/assets/admin/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="{{  url('') }}/assets/admin/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{  url('') }}/assets/admin/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="{{  url('') }}/assets/admin/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="{{  url('') }}/assets/admin/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{  url('') }}/assets/admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/p-scroll/pscroll.js"></script>
    {{-- <script src="{{  url('') }}/assets/admin/plugins/p-scroll/pscroll-1.js"></script> --}}

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{  url('') }}/assets/admin/plugins/chart/Chart.bundle.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/chart/rounded-barchart.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{  url('') }}/assets/admin/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{  url('') }}/assets/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ url('') }}/assets/admin/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{ url('') }}/assets/admin/js/table-data.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{  url('') }}/assets/admin/js/apexcharts.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/apexchart/irregular-data-series.js"></script>

    <!-- C3 CHART JS -->
    <script src="{{  url('') }}/assets/admin/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/charts-c3/c3-chart.js"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{  url('') }}/assets/admin/js/charts.js"></script>

    <!-- INTERNAL Flot JS -->
    {{-- <script src="{{  url('') }}/assets/admin/plugins/flot/jquery.flot.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/flot/dashboard.sampledata.js"></script> --}}

    <!-- INTERNAL Vector js -->
    <script src="{{  url('') }}/assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{  url('') }}/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{  url('') }}/assets/admin/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    {{-- <script src="{{  url('') }}/assets/admin/js/index1.js"></script> --}}

    <!-- Color Theme js -->
    <script src="{{  url('') }}/assets/admin/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{  url('') }}/assets/admin/js/custom.js"></script>