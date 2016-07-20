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
                <li><a href="/home"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active">Employee</li>
            </ol>
        </section>
        <section class="content-container">
            <div class="row">
                <div class="box">
                    <div class="box-body">
                        <div class="col-md-6 col-md-offset-3">
                        <form action="" method="POST" role="form">
                            <legend>Add new employee form</legend>
                            <div class="row no-gutters">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="">Last name</label>
                                        <input type="text" class="form-control" id="" placeholder="Input field">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="">First name</label>
                                        <input type="text" class="form-control" id="" placeholder="Input field">
                                    </div>    
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Title Name</label>
                                        <select name="" id="input" class="form-control" required="required" >
                                            <option value="">Mr.</option>
                                            <option value="">Ms.</option>
                                            <option value="">Mrs.</option>
                                            <option value="">Dr.</option>
                                            <option value="">Prof.</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-9">
                                </div>
                            </div>
                        
                            
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
@endsection