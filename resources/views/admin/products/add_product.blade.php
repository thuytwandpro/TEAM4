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
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên sản phẩm" name="name" value="{{old('name')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputTitle">Loại sản phẩm <span class="text-danger">*</span></label>
                        <select class="form-control" name="id_category" >
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
                        <label for="exampleInputTitle">Khuyến mãi</label>
                        <select class="form-control" name="id_sale">
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
                        <input type="number" class="form-control" id="exampleInputQuantity" placeholder="Nhập số lượng sản phẩm" name="quantity" value="{{old('quantity')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputPrice">Giá<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="Nhập tên" name="price" value="{{old('price')}}">
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputContent">Nội dung</label>
                        <textarea name="contents" class="form-control ckeditor" rows="3" id="demo">{{old('contents')}}</textarea>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputOrigin">Nơi sản xuất</label>
                        <input type="text" class="form-control" id="exampleInputOrigin" placeholder="Nhập nơi sản xuất" name="origin" value="{{old('origin')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputSize">Size</label>
                        <input type="number" class="form-control" id="exampleInputSize" placeholder="Nhập size" name="size" value="{{old('size')}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group" >
                        <label for="exampleInputTitle">Giới tính</label>
                        <br>
                        <input type="radio" value="0" name="gender" checked><label style="margin-right: 15px;">Nữ</label>
                        <input type="radio" value="1" name="gender">Nam
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Hình sản phẩm</label>
                        <div>
                            <img src="" width="200" height="200" alt="hình sản phẩm" id="img" style="display: none">
                            <input type="file" id="exampleInputFile" name="img">
                        </div>
                    </div>
                </div>
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