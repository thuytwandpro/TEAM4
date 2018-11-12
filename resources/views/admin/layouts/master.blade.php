<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <base href="{{asset('')}}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="admin_asset/dist/css/skins/_all-skins.min.css">
        {{--<link rel="stylesheet"--}}
            {{--href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .thongbao{
                position: absolute;
                top: 15px;
                right: 5px;
                z-index: 3000;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        @if(session('thongbao'))
            <div class="thongbao">
                <div class="alert alert-success">
                    <strong>{{session('thongbao')}}</strong>
                </div>
            </div>
        @endif
        <div class="wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.menu')
            @yield('content')
            @include('admin.layouts.footer')
        </div>
        <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
        <script src="admin_asset/dist/js/adminlte.min.js"></script>
        <script src="admin_asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <script src="admin_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="admin_asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="admin_asset/bower_components/chart.js/Chart.js"></script>
        <script src="admin_asset/dist/js/pages/dashboard2.js"></script>
        <script src="admin_asset/dist/js/demo.js"></script>
        <script>
            $("div.alert-success").delay(4000).slideUp();
        </script>
        @yield('script')
    </body>
    </html>