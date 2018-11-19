@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 100px; font-size: 170%; color: #FF0000;">User: <i style="color: blue">{{$users->username}}</i> </h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            <form role="form" class="col col-md-6" action="shoes/admin/users/sua/{{$users->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Tên <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên" name="name" value="{{ old('name', isset($users) ? $users->name : '') }}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputUsername">Tên đăng nhập <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputUsername" placeholder="Nhập tên đăng nhập" name="username" value="{{ old('username', isset($users) ? $users->username : '') }}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <input type="checkbox" name="changeEmail" id="changeEmail">
                        <label for="exampleInputEmail">Email </label>
                        <input type="email" class="form-control email" id="exampleInputEmail" placeholder="Nhập email" name="email" value="{{ old('email', isset($users) ? $users->email : '') }}" readonly="">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <input type="checkbox" name="changePassword" id="changePassword">
                        <label for="exampleInputPassword1">Đổi Mật Khẩu </label>
                        <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password" disabled="">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputPhone">Số điện thoại <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nhập số điện thoại" name="phone" value="{{ old('phone', isset($users) ? $users->phone : '') }}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputAddress">Địa chỉ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Nhập địa chỉ" name="address" value="{{ old('address', isset($users) ? $users->address : '') }}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div>
                            @if(!empty($users->avatar))
                                <img src="admin/avatar/{{$users->avatar}}" width="200" height="200" alt="Ảnh đại diện" id="avatar">
                            @else
                                <img src="" width="200" height="200" alt="Ảnh đại diện" id="avatar" style="display: none">
                            @endif
                            <input type="file" id="exampleInputFile" name="avatar" value="{{ old('avatar', isset($users) ? $users->avatar : '') }}">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Quyền người dùng <span class="text-danger">*</span></label>
                        <div class="checkbox">
                            @foreach($roles as $role)
                                <label style="text-transform: capitalize">
                                    <input type="checkbox" name="role" value="{{$role->id}}"
                                           @foreach($users->roles as $itemsub)
                                                @if($itemsub->id == $role->id)
                                                   checked
                                                @endif
                                           @endforeach
                                    >{{$role->name}}<br>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="margin-left: 100px">Submit</button>
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
@section('script')
    <script>
        $(document).ready(function () {
            $("#changePassword").change(function () {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
            $("#changeEmail").change(function () {
                if ($(this).is(":checked")) {
                    $(".email").removeAttr('readonly');
                }
                else
                {
                    $(".email").attr('readonly','');
                }
            });
        });
    </script>
@endsection