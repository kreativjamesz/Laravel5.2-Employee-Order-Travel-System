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
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="inputLname" class="x-req">Last name</label>
                                        <input type="text" class="form-control" id="inputLname" name="inputLname"placeholder="Input field">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="inputFname" class="x-req">First name</label>
                                        <input type="text" class="form-control" id="inputFname" name="inputFname" placeholder="Input field">
                                    </div>    
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="selectTitle" class="x-req">Title Name</label>
                                        <select name="" id="selectTitle" class="form-control" required="required" >
                                            <option value="">Mr.</option>
                                            <option value="">Ms.</option>
                                            <option value="">Mrs.</option>
                                            <option value="">Dr.</option>
                                            <option value="">Prof.</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="inputPosition" class="x-req">Title Position</label>
                                        <input type="text" class="form-control" id="inputPosition" class="x-req" placeholder="Example input">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="inputMobile" class="x-req">Contact Number</label>
                                        <input type="text" class="form-control" id="inputMobile" placeholder="Enter Mobile num.">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputEmail" class="x-req">Email Address</label>
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Enter Email...">
                                    </div>
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