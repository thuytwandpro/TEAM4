@extends('layouts.master-login')
@section('content')
	<div class="register-box">
            <div class="register-logo">
                <a href="#"><b>PTY</b> SHOES</a>
            </div>
            <div class="register-box-body">
                <p class="login-box-msg" style="color: red;font-size: 35px;">Đăng ký tài khoản</p>
                <form action="{{action('HomeController@postRegister')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group has-feedback">
                        <label>Tên:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên" name="name" value="{{old('name')}}">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <label>Tên đăng nhập:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="username" value="{{old('username')}}">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <label>Email: </label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <label>Mật khẩu: </label>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="passwordAgain">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        @if ($errors->has('passwordAgain'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('passwordAgain') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <label>Số điện thoại: </label>
                        <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone" value="{{old('phone')}}">
                        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <label>Địa chỉ: </label>
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" value="{{old('address')}}">
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                                <strong>{{ $errors->first('address') }}</strong>
                             </span>
                        @endif
                    </div>
                    {{--<div class="form-group has-feedback">--}}
                        {{--<div class="checkbox">--}}
                                {{--<label style="text-transform: capitalize">--}}
                                    {{--<input type="radio" name="role" value="{{$roles->id=3}}" checked disabled> Khách Hàng<br>--}}
                                {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                        </div>
                    </div>
                </form>

            </div>
    </div>
@endsection