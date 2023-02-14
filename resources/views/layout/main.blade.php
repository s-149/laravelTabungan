<?php ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TABUNGANKU | {{ $title }}</title>
    <!-- Icon -->
    <link rel="icon" href="gambar/logo/logo.jpg">
    <link rel="shortcut icon" href="" type="image/x-icon">

  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>
    @if ($title == 'Cetak Data')

    @else
    <div id="wrapper">
        
    	@include('partial.navbar')

        <div id="page-wrapper" >
            <div id="page-inner">
                @endif

                <div class="row">
                    <div class="col-md-12">
                        @if ($title == 'Home' or $title == 'Cetak Data')
                        @yield('container')

                        @else 
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 {{ 'Data ' . $title }} 
                            </div>
                            <div class="panel-body">
                                @yield('container')
                            </div>
                        </div>
                        <!-- end Advanced Tables -->
                        @endif
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->

    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    


    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

    <script src="assets/chartjs/Chart.bundle.min.js"></script>

    @if ($title == 'Cetak Data')
    <script type="text/javascript">window.print();</script>
    @else
    @endif
    

   
</body>
</html>
