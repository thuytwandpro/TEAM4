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
            <li><a href="#">Users</a></li>
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
                        <h3 class="box-title">List of users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-size: medium; color: blue">
                                    <th>Mã Id</th>
                                    <th>Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>Số điện <thoại></thoại></th>
                                    <th>Dịa chỉ</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{!! $item["id"] !!}</td>
                                        <td>{!! $item["name"] !!}</td>
                                        <td>{!! $item["username"] !!}</td>
                                        <td>{!! $item["email"] !!}</td>
                                        <td>{!! $item["phone"] !!}</td>
                                        <td>{!! $item["address"] !!}</td>
                                        <td>{!! $item["avatar"] !!}</td>
                                        <td class="center">
                                        {{--<a href="admin/users/sua">Edit</a>--}}
                                        {{--<a href="admin/categories/xoa/{{$cate->id}}">Delete</a>--}}
                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> |
                                            <a href="#"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot>
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
	<script>
    	$(function () {
    	$('#example1').DataTable()
    	$('#example2').DataTable({
    	'paging'      : true,
    	'lengthChange': false,
    	'searching'   : false,
    	'ordering'    : true,
    	'info'        : true,
    	'autoWidth'   : false
    	})
    	})
    </script>
@endsection