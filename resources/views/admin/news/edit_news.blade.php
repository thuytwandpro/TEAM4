@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="box box-primary row" style="font-size:15px; " >
            <div class="box-header" style="margin-top: 25px;">
                <h3 class="box-title" style="margin-left: 100px; font-size: 170%; color: #FF0000;">Sửa tin tức: <i style="color: blue">{{$news->id}}</i> </h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            <form role="form" class="col col-md-6" action="shoes/admin/news/sua/{{$news->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputTitle">Tiêu đề <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Nhập tiêu đề" name="title" value="{{ old('title', isset($news) ? $news->title : '') }}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputDescription">Mô tả <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control ckeditor" rows="3" id="demo">{{ old('description', isset($news) ? $news->description : '') }}</textarea>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputContent">Nội dung <span class="text-danger">*</span></label>
                        <textarea name="contents" class="form-control ckeditor" rows="3" id="demo">{{ old('contents', isset($news) ? $news->contents : '') }}</textarea>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div>
                            @if(!empty($news->img))
                                <img src="admin/images/tintuc/{{$news->img}}" width="200" height="200" alt="Ảnh đại diện" id="img">
                            @else
                                <img src="" width="200" height="200" alt="Ảnh đại diện" id="img" style="display: none">
                            @endif

                            <input type="file" id="exampleInputFile" name="img" value="{{ old('img', isset($news) ? $news->img : '') }}">
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