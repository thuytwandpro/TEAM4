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
                        <div class="box-header" style="margin-top: 25px;">
                            <h3 class="box-title" style="margin-left: 400PX; font-size: 200%; color: #FF0000;">DANH SÁCH NHÂN VIÊN</h3>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: medium; color: blue">
                                    <th>No</th>
                                    <th>Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Quyền người dùng</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item => $user)
                                    <tr>
                                        <td>{{ $item}}</td>
                                        <td>{{$user["name"] }} </td>
                                        <td>{{ $user["username"] }}</td>
                                        <td>{{ $user["email"] }}</td>
                                        <td>{{ $user["phone"] }}</td>
                                        <td>{{ $user["address"] }}</td>
                                        <td>
                                            @if(!empty($user->avatar))
                                                <img width="100px" src="admin/avatar/{{$user->avatar}}">
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($user->roles as $itemsub)
                                                {{$itemsub->name}}
                                            @endforeach
                                        </td>

                                        <td class="center">
                                            <a href="shoes/admin/users/sua/{{$user->id}}" class="btn btn-warning">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-danger" onclick="if(confirm('Bạn có chắc chắn muốn xóa')){location.href='shoes/admin/users/xoa/{{$user->id}}'}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="float: right;padding-top: 20px; margin-right: 50px;"><a href="{{asset('/shoes/admin/users/danhsach')}}" class="btn btn-primary">Black</a></div>
                            <div style="float: right; width: 60%">
                                {!! $users->links() !!}
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