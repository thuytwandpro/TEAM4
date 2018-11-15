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
            <li><a href="#">Sales</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-header" style="margin-top: 25px;">
                        <h3 class="box-title" style="margin-left: 400PX; font-size: 200%; color: #FF0000;">DANH SÁCH KHUYẾN MÃI</h3>
                    </div>
                    <div class="panel-heading" style=" font-family: Helvetica, Arial, Tahoma, sans-serif; color: blue;"> Tìm thấy: {{count($sales)}} sản phẩm khuyến mãi</div>
                     @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @elseif (Session()->has('flash_level'))
                                <div class="alert alert-success">
                                    <ul>
                                        {!! Session::get('flash_massage') !!}   
                                    </ul>
                                </div>
                            @endif
                    <div class="clearfix"></div>                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sales</th>
                                    <th>Start_date</th>
                                    <th>End_date</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($sales as $sale)
                                <tr>
                                    <td>{{$sale->id}}</td>
                                    <td>{{$sale->percent}}%</td>
                                    <td>{{$sale->start_date}}</td>
                                    <td>{{$sale->end_date}}</td>
                                    <td><a href="{{asset('/shoes/admin/sales/edit/'.$sale->id)}}" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="{{asset('/shoes/admin/sales/destroy/'.$sale->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float: right;padding-top: 20px; margin-right: 50px;"><a href="{{asset('/shoes/admin/sales')}}" class="btn btn-primary">Black</a></div>
                    </div>
                     <div style="padding-left: 925px;">{!! $sales->render() !!}</div>
                </div>
            </div>
        </div>
    </section>
</div>
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