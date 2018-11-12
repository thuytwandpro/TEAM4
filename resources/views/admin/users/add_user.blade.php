@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header with-border">
                <h1 class="box-title" style="font-size:22px; margin-left: 12px">Thêm thành viên</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
            </div>
            @endif
            <form role="form" class="col col-md-6" action="{{action('UserController@postThem')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Tên</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="exampleInputUsername" placeholder="Nhập tên đăng nhập" name="username" value="{{old('username')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Nhập email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật Khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Số điện thoại</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nhập số điện thoại" name="phone" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress">Địa chỉ</label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Nhập địa chỉ" name="address" value="{{old('address')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div>
                            <img src="" width="200" height="200" alt="Ảnh đại diện" id="avatar">
                            <input type="file" id="exampleInputFile" name="avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Quyền người dùng</label>
                        <div class="checkbox">
                            @foreach($roles as $role)
                            <label style="text-transform: capitalize">
                                <input type="radio" name="role" value="{{$role->id}}" >{{$role->name}}<br>
                            </label>
                                @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#exampleInputFile").change(function() {
            readURL(this);
        });
    </script>
@endsection