@extends('admin.layouts.master')
@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="box-header" style="margin-top: 25px;">
            <h3 class="box-title" style="margin-left: 400PX; font-size: 200%; color: #FF0000;">DANH SÁCH SẢN PHẨM</h3>
        </div>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-size: medium; color: blue">
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Khuyến mãi</th>
                                    <th>Hình ảnh</th>
                                    <th>Size</th>
                                    <th>Giới tính</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $pro)
                                <tr>
                                    <td>{{$pro->id}}</td>
                                    <td>{{$pro->name}}</td>
                                    <td>
                                        <?php
                                            $category = DB::table('categories')->where('id',$pro["id_category"])->first(); ?>
                                            @if(!empty($category->name))
                                                {{ $category->name }}
                                            @endif
                                    </td>
                                    <td>{{$pro->quantity}}</td>
                                    <td>{{ number_format($pro["price"],0,",",".") }} VNĐ</td>
                                    <td>
                                        <?php
                                        $sales = DB::table('sales')->where('id',$pro["id_sale"])->first(); ?>
                                        @if(!empty($sales->percent))
                                            {{ $sales->percent }}
                                        @endif
                                        %
                                    </td>
                                    <td>
                                        @if(!empty($pro->img))
                                            <img width="100px" src="admin/images/sanpham/{{$pro->img}}">
                                        @endif
                                    </td>
                                    <td>{{$pro->size}}</td>
                                    <td>{{$pro->gender}}</td>
                                    <td class="center">
                                        <a href="" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-danger">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div style="float: right; width: 60%">
                            {!! $products->links() !!}
                        </div>
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
	{{--<script>--}}
    	{{--$(function () {--}}
    	{{--$('#example1').DataTable()--}}
    	{{--$('#example2').DataTable({--}}
    	{{--'paging'      : true,--}}
    	{{--'lengthChange': false,--}}
    	{{--'searching'   : false,--}}
    	{{--'ordering'    : true,--}}
    	{{--'info'        : true,--}}
    	{{--'autoWidth'   : false--}}
    	{{--})--}}
    	{{--})--}}
    {{--</script>--}}
@endsection