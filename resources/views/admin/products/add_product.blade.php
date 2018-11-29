@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 100PX; font-size: 170%; color: #FF0000;">THÊM SẢN PHẨM</h3>
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
            <form role="form" class="col col-md-6" action="{{action('ProductController@postThem')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Tên Sản Phẩm<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên sản phẩm" name="title" value="{{old('name')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputTitle">Loại sản phẩm <span class="text-danger">*</span></label>
                        {{--<input type="text" class="form-control" id="exampleInputTitle" placeholder="Nhập tiêu đề" name="title" value="{{old('title')}}">--}}
                        <select class="form-control" name="">
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}">
                                {{$cate->name}}
                            </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputTitle">Khuyến mãi<span class="text-danger">*</span></label>
                        {{--<input type="text" class="form-control" id="exampleInputTitle" placeholder="Nhập tiêu đề" name="title" value="{{old('title')}}">--}}
                        <select class="form-control" name="">
                            @foreach($sale as $sa)
                                <option value="{{$sa->id}}" selected>
                                    {{$sa->percent}}%
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputQuantity">Số lượng<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="exampleInputQuantity" placeholder="Nhập số lượng sản phẩm" name="title" value="{{old('quantity')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputPrice">Giá<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Nhập tên" name="name" value="">
                    </div>
                </div>
                <div class=" has-feedback box-body">
                    <label>Mật khẩu:<span class="text-danger">*</span> </label>
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
                    <span class="glyphicon  form-control-feedback" style="margin: 10px 20px 0 0 ; font-weight: bold">VND</span>

                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputDescription">Mô tả <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control ckeditor" rows="3" id="demo">{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputContent">Nội dung <span class="text-danger">*</span></label>
                        <textarea name="contents" class="form-control ckeditor" rows="3" id="demo">{{old('contents')}}</textarea>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div>
                            <img src="" width="200" height="200" alt="Ảnh đại diện" id="img" style="display: none">
                            <input type="file" id="exampleInputFile" name="img">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer" style="margin-left: 100px">
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
                    $('#img').attr('src', e.target.result).show();
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#exampleInputFile").change(function() {
            readURL(this);
        });
    </script>
@endsection