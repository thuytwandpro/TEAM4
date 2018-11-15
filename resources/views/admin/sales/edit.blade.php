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
				           
                            {!! Form::model($sale, ['url' => '/shoes/admin/sales/edit/'. $sale->id, 'method' => 'PUT']) !!}
				            	<div class="form-group">
                                    {!! Form::label('sales', 'Sales') !!}
                                    <div class="form-controls">
                                        {!! Form::text('sales', isset($sale) ? $sale->percent : null, ['class' =>
                                        'form-control datepicker']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('start_date', 'Start_date') !!}
                                    <div class="form-controls">
                                        {!! Form::date('start_date', isset($sale) ? $sale->start_date : null, ['class' =>
                                        'form-control datepicker']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('end_date', 'End_date') !!}
                                    <div class="form-controls">
                                         {!! Form::date('end_date', isset($sale) ? $sale->end_date : null, ['class' =>
                                        'form-control datepicker']) !!}
                                    </div>
                                </div>
                                {!! Form::submit('Update sales', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
				           
			    		</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection