@extends('dashboard.layouts.master')
@section('content')
    <section class="content">
        <section class="content-header">
            <h1>
                Add Employee
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="/dashboard/employee"><i class="fa fa-user"></i>Employee</a></li>
                <li class="active">Create Employee</li>
            </ol>
        </section>
        <section class="content-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div><!-- /.box-tools -->
                        </div>
                        <div class="box-body">
                            {!! Form::open(array('route' => 'dashboard.employee.store')) !!}
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('inputLname', 'Last Name', array('class'=>'x-req')) }}    
                                            <small><em></em></small>
                                            {{ Form::text('inputLname',null,array('class'=>'form-control','placeholder'=>'Enter you Lastname...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('inputFname', 'First Name', array('class'=>'x-req')) }}
                                            {{ Form::text('inputFname',null,array('class'=>'form-control','placeholder'=>'Enter you Firstname...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="selectTitle" class="x-req">Title Name</label>
                                            <select name="selectTitle" id="selectTitle" class="form-control" required="required" >
                                                <option value="0">Mr.</option>
                                                <option value="1">Ms.</option>
                                                <option value="2">Mrs.</option>
                                                <option value="3">Dr.</option>
                                                <option value="4">Prof.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('inputPosition', 'Position', array('class'=>'x-req')) }}
                                            {{ Form::text('inputPosition',null,array('class'=>'form-control','placeholder'=>'Enter your position...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('inputContactNum', 'Contact Number', array('class'=>'x-req')) }}
                                            {{ Form::text('inputContactNum',null,array('class'=>'form-control','placeholder'=>'Enter your contact number...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('inputEmail', 'Email', array('class'=>'x-req')) }}
                                            {{ Form::text('inputEmail',null,array('class'=>'form-control','placeholder'=>'Enter your email...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('inputAddress', 'Address', array('class'=>'x-req')) }}
                                            {{ Form::textarea('inputAddress',null,array('class'=>'form-control','placeholder'=>'Enter complete address...')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            {{ Form::label('filePic', 'Profile Picture') }}
                                            {{ Form::file('image'),null,array('class'=>'form-control') }}
                                            <br>
                                            <img src="{{URL::asset('assets/images/avatar5.png')}}" alt="" style="width: 150px; height:150px; ">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            {{ Form::submit('Save Employee!',array('class'=>'btn btn-purple pull-right noradius')) }}
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
@endsection