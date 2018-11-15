@extends('admin.layouts.master')
@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            PTY shoes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bills</a></li>
            <li class="active">Detail Bills</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST" role="form" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">              
                    <div class="panel panel-default">
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
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Ngày đặt</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $bill->id }}</td>
                                            <td>{{ $bill->customer_name }}</td>
                                            <td>{{ $bill->address }}</td>
                                            <td>{{ $bill->phone }}</td>
                                            <td>{{ $bill->created_at }}</td>
                                            <td>{{ number_format($bill->total) }} Vnđ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <div class="panel-heading" style="font-size: 150%; font-family: Helvetica, Arial, Tahoma, sans-serif; color: red;"> Chi tiết sản phẩm</div>
                        <div class="panel-body" style="font-size: 12px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>                                        
                                            <th>ID</th>                                     
                                            <th>Images</th>
                                            <th>Product Name</th>
                                            <th>Origin</th>
                                            <th> Quantity </th>
                                            <th>Price</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                            <tr style="height: 90px;">
                                                <td>{{$row->id}}</td>
                                                <td> <img style="width: 125px; height: 115px;" src="{!!url('image/'.$row->img)!!}" alt="iphone" width="50" height="40"></td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->origin }}</td>
                                                <td>{{ $row->quantity }} </td>
                                                <td>{{ number_format($row->price) }} Vnđ</td>
                                                <td>
                                                    @if($row->status ==1)
                                                        <span style="color:blue;">Còn hàng</span>
                                                    @else
                                                        <span style="color:#27ae60;"> Tạm hết</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-info" style="height: 35px;" href="{!!url('/shoes/admin/bills/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Remove</span> </a>
                                                </td>
                                            </tr>
                                        @endforeach                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button type="submit" onclick="return xacnhan('Xác nhận đơn hàng này ?')"  class="btn btn-danger"> Xác nhận đơn hàng </button>
                    <div style="float: right; padding-right: 40px; text-decoration: none; "><a class="btn btn-primary" href="{{asset('/shoes/admin/bills')}}">Black</a></div> 
                </form>
            </div>
        </div><!--/.row--> 

        
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