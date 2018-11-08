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
            <li><a href="#">Products</a></li>
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
                        <h3 class="box-title">List of ptroducts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>ID_Sale</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Origin</th>
                                    <th>Size</th>
                                    <th>Gender</th>
                                    <th>Slug</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $pro)
                                <tr>
                                    <td>{{$pro->id}}</td>
                                    <td>{{$pro->category->name}}</td>
                                    <td>{{$pro->id_sale}}</td>
                                    <td>{{$pro->name}}</td>
                                    <td>{{$pro->quantity}}</td>
                                    <td>{{$pro->price}}</td>
                                    <td>{{$pro->img}}</td>
                                    <td>{{$pro->content}}</td>
                                    <td>{{$pro->origin}}</td>
                                    <td>{{$pro->size}}</td>
                                    <td>{{$pro->gender}}</td>
                                    <td>{{$pro->slug}}</td>
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