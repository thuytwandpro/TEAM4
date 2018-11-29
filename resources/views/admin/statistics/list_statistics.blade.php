@extends('admin.layouts.master')
@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            PTY Shoes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Statistics</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-header">

                        <div class="col-sm-3">
                            <h3 class="box-title">Danh sách các đơn đặt hàng</h3>
                        </div>
                        <div class="col-sm-3">
                            <form class="form-horizontal" role="form" method="POST" action="">
                                {{ csrf_field() }}
                                <input type="hidden" value="" name="from" />
                                <input type="hidden" value="" name="to" />
                                <button type="submit" class="btn btn-primary">
                                    Export to Excel
                                </button>
                            </form>
                        </div>
                        <div class="col-sm-3">
                            <form class="form-horizontal" role="form" method="POST" action="">
                                {{ csrf_field() }}
                                <input type="hidden" value="" name="from" />
                                <input type="hidden" value="" name="to" />
                                <button type="submit" class="btn btn-info">
                                    Export to PDF
                                </button>
                            </form>
                        </div>
                    </div>
                    <form action="{{asset('/shoes/admin/statistics/thongke') }}" method="get" class="search">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title col-md-6">Thống kê</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus" style="font-size: 20px"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">From</label>
                                            <div class="col-md-7">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" value="1/11/2018" name="from" class="form-control pull-right" placeholder="From" id="from"  required=""z>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">To</label>
                                            <div class="col-md-7">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" value="2018/12/22" name="to" class="form-control pull-right" id="to" placeholder="To" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-hospital-o" aria-hidden="true"></i> Thống kê
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tên Khách hàng</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Tổng tiền</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td> -->
                                </tr>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
	<script src="admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="admin_asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

@endsection