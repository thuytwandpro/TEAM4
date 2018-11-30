@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 100PX; font-size: 170%; color: #FF0000;"> DANH MỤC: </h3>
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
            <form role="form" class="col col-md-6" action="shoes/admin/categories/sua/{{$category->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Tên danh mục sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nhập tên danh mục" name="name" value="{{ old('name', isset($category) ? $category->name : '') }}">
                    </div>
                </div>
                <div class="box-footer" style="margin-left: 100px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection