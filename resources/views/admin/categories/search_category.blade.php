@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 400PX; font-size: 200%; color: #FF0000;">DANH SÁCH DANH MỤC</h3>
            </div>
            <form action="{{asset('categories/timkiem')}}" method="get" class="search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <div class="input-group" style="width: 260px; margin-left: 800px; background: silver">
                    <input type="text" name="key" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                     </span>
                </div>
            </form>
            <div class="panel-heading" style=" font-family: Helvetica, Arial, Tahoma, sans-serif; color: blue;"> Tìm thấy: {{count($category)}} Sản Phẩm</div>
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
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $i => $item )
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$item->name}}</td>
                                        <td class="center">
                                            <a href="shoes/admin/categories/sua/{{$item->id}}" class="btn btn-warning">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-danger" onclick="if(confirm('Bạn có chắc chắn muốn xóa')){location.href='shoes/admin/categories/xoa/{{$item->id}}'}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="float: right;padding-top: 20px; margin-right: 50px;"><a href="{{asset('categories/danhsach')}}" class="btn btn-primary">Black</a></div>
                            <div style="float: right; width: 60%">
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
@endsection