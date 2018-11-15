@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            PTY Shoes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales</a></li>
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
                        <h3 class="box-title" style="color: red; padding-left: 25px;" >Add Sales</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        <div class="col-md-6">
                        	@if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @elseif (Session()->has('flash_level'))
                                <div class="alert alert-success">
                                    <ul>
                                        {!! Session::get('flash_massage') !!}   
                                    </ul>
                                </div>
                            @endif
				            <form role="form" action="{{asset('/shoes/admin/sales/create')}}" method="post">
				            	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				              	<div class="box-body">
				                	<div class="form-group">
				                  		<label for="Sales">Sales</label>
				                  		<input type="text" class="form-control" name="sales" id="" value="" > 
				                	</div>
				              	</div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="Start_date">Start_date</label>
                                        <input type="date" class="form-control" name="start_date" id="" value="" > 
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="End_date">End_date</label>
                                        <input type="date" class="form-control" name="end_date" id="" value="" > 
                                    </div>
                                </div>
				              	<div class="box-footer">
				                	<button type="submit" class="btn btn-primary">Add sales</button>
				              	</div>
				            </form>
			    		</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection