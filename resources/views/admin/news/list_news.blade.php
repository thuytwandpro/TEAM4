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
                <li><a href="#">News</a></li>
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
                            <h3 class="box-title" style="margin-left: 400PX; font-size: 200%; color: #FF0000;">DANH SÁCH TIN TỨC</h3>
                        </div>
                        <form action="timkiem" method="get" class="search">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <div class="input-group" style="width: 260px; margin-left: 800px; background: silver">
                                <input type="text" name="key" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </form>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: medium; color: blue">
                                    <th>#</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Hình ảnh</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $item => $i)
                                    <tr>
                                        <td>{{$item}}</td>
                                        <td>{{$i["title"]}}</td>
                                        <td>{!! str_limit(strip_tags($i["description"]), 100) !!}</td>
                                        <td>
                                            @if(!empty($i->img))
                                                <img width="100px" src="admin/images/tintuc/{{$i->img}}">
                                            @endif
                                        </td>
                                        <td class="center">
                                            <a href="shoes/admin/news/sua/{{$i->id}}" class="btn btn-warning">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-danger" onclick="if(confirm('Bạn có chắc chắn muốn xóa')){location.href='shoes/admin/news/xoa/{{$i->id}}'}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="float: right; width: 60%">
                                {!! $news->links() !!}
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