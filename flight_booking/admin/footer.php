

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                             <?php     
                             include_once('E:\PROWAYS IT SOLUTIONS\proways_software\Proways Project\sachin_lib\sachin_lib.php');
                             ?>
                            <div class="col-sm-6">
                                Copyright <?php echo Date('Y')?>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
        </div>
        </div>
        <!-- END layout-wrapper -->
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <!-- <script src="assets/libs/jquery/jquery.min.js"></script> -->
         <script src="styles_multiselect/bootstrap-multiselect.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
          <!-- Summernote js -->
        <!-- <script src="assets/libs/summernote/summernote-bs4.min.js"></script> -->
        <!-- init js -->
        <!-- <script src="assets/js/pages/summernote.init.js"></script> -->
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/slick-slider/slick/slick.min.js"></script>
        <!-- Jq vector map -->
        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="assets/js/pages/dashboard.init.js"></script>
        <script src="assets/js/app.js"></script>
          <!-- footer link    -->
   <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="assets/js/pages/datatables.init.js"></script>
         
        <!-- last in footer -->
        <script src="alertitfy/alertify.min.js"></script>
        <?php
        if($_SESSION["alert"]=="success"){
            ?>
            <script type="text/javascript">
            alertify.set("notifier","position", "top-right");
         alertify.success("<?php echo $_SESSION["msg"]?>");
         </script>
            <?php
        }
        if($_SESSION["alert"]=="danger") {
            ?>
            <script type="text/javascript">
            alertify.set("notifier","position", "top-right");
         alertify.error("<?php echo $_SESSION["msg"]?>");
         </script>
         <?php
    }
         unset($_SESSION["msg"],$_SESSION["alert"]);
         ?>

         <script type="text/javascript">
            function success(msg){
            alertify.set("notifier","position", "top-right");
         alertify.success(msg);
     }
         </script>
      
</html>
