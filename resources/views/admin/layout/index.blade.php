<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - SHOP</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="public/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="public/admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="public/admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        @include('admin.layout.header')

        @yield('content')
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="public/admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    
    <script type="text/javascript" language="javascript" src="public/admin_asset/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" language="javascript" src="public/js/function.js" ></script>
    <script src="public/admin_asset/bower_components/table2excel/jquery.table2excel.js"></script>
    <script src="public/admin_asset/bower_components/table2excel/jquery.table2excel.min.js"></script>

    @yield('script')
</body>

</html>
