@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 100px; font-size: 170%; color: #FF0000;">THÊM NHÂN VIÊN</h3>
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
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputName">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên" name="name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tên đăng nhập <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Nhập tên đăng nhập" name="username" value="{{old('username')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Nhập email" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật Khẩu <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPhone">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nhập số điện thoại" name="phone" value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputAddress">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Nhập địa chỉ" name="address" value="{{old('address')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh đại diện</label>
                            <div>
                                <img src="" width="200" height="200" alt="Ảnh đại diện" id="avatar" style="display: none">
                                <input type="file" id="exampleInputFile" name="avatar" value="{{old('avatar')}}">
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Quyền người dùng<span class="text-danger">*</span></label>
                            <div class="checkbox">
                                @foreach($roles as $role)
                                <label style="text-transform: capitalize">
                                    <input type="radio" name="role" value="{{$role->id}}" checked>{{$role->name}}<br>
                                </label>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#avatar').attr('src', e.target.result).show();

                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#exampleInputFile").change(function() {
            readURL(this);
        });
    </script>
@endsection