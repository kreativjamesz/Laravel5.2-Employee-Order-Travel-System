@extends('layouts.dashboard')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: url('./assets/images/logo-bg.png') no-repeat 20% 30% fixed; -webkit-background-size: ;-moz-background-size: cover;-o-background-size: cover;background-size:cover;">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content" >
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion ion-calendar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">List schedules</span>
                        <span class="info-box-number">100</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                            40% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-person"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Count of employees</span>
                        <span class="info-box-number">114,381</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-android-create"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Reschedules</span>
                        <span class="info-box-number">92,050</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                            20% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            50% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <!--div class="col-md-3">
                
                <div class="box box-purple">
                    <div class="box-header with-border">
                        <h3 class="box-title">List of Schedules</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body" style="display: block;">
                      <ul class="list-group">
                          <li class="list-group-item">Item 1</li>
                          <li class="list-group-item">Item 2</li>
                          <li class="list-group-item">Item 3</li>
                      </ul>
                    </div>
              </div>
            </div-->
            <div class="col-md-9">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="pull-right form-inline">
                                <div class="btn-group">
                                    <button class="btn btn-primary" data-calendar-nav="prev">&lt;&lt; Prev</button>
                                    <button class="btn" data-calendar-nav="today">Today</button>
                                    <button class="btn btn-primary" data-calendar-nav="next">Next &gt;&gt;</button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-warning" data-calendar-view="year">Year</button>
                                    <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                                    <button class="btn btn-warning" data-calendar-view="week">Week</button>
                                    <button class="btn btn-warning" data-calendar-view="day">Day</button>
                                </div>
                            </div>
                            <!-- <h3 style="font-size:1.2em;"><b></b></h3>
                            <small><i class="fa fa-circle" style="color:green"></i> Pending Travel | <i class="fa fa-circle" style="color:purple"></i> On-going Travel | <i class="fa fa-circle" style="color:gray"></i> Done! </small> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header" style="margin-bottom:5px;">
                            <small class="pull-right form-inline"><i class="fa fa-circle" style="color:green"></i> Pending Travel / <i class="fa fa-circle" style="color:purple"></i> On-going Travel / <i class="fa fa-circle" style="color:gray"></i> Done! </small>
                            <h3></h3>
                            
                        </div>
                        <div id="calendar" style="background: white;box-shadow: 1px 1px 1px #ddd"></div>        
                    </div>
                    
                </div>     
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  @include('dashboard.includes.aside')
@endsection

@section('scripts')
 
    <script type="text/javascript">
        (function($) {

            "use strict";

            var options = {
                events_source: '/assets/plugins/bootstrap-calendar/events.json.php',
                view: 'month',
                tmpl_path: "/assets/plugins/bootstrap-calendar/tmpls/",
                tmpl_cache: true,
                //day: '2016-03-12',
                onAfterEventsLoad: function(events) {
                    if(!events) {
                        return;
                    }
                    var list = $('#eventlist');
                    list.html('');

                    $.each(events, function(key, val) {
                        $(document.createElement('li'))
                            .html('<a href="' + val.url + '">' + val.title + '</a>')
                            .appendTo(list);
                    });
                },
                onAfterViewLoad: function(view) {
                    $('.page-header h3').text(this.getTitle());
                    $('.btn-group button').removeClass('active');
                    $('button[data-calendar-view="' + view + '"]').addClass('active');
                },
                classes: {
                    months: {
                        general: 'label'
                    }
                }
            };

            var calendar = $('#calendar').calendar(options);

            $('.btn-group button[data-calendar-nav]').each(function() {
                var $this = $(this);
                $this.click(function() {
                    calendar.navigate($this.data('calendar-nav'));
                });
            });

            $('.btn-group button[data-calendar-view]').each(function() {
                var $this = $(this);
                $this.click(function() {
                    calendar.view($this.data('calendar-view'));
                });
            });

            $('#first_day').change(function(){
                var value = $(this).val();
                value = value.length ? parseInt(value) : null;
                calendar.setOptions({first_day: value});
                calendar.view();
            });

            $('#language').change(function(){
                calendar.setLanguage($(this).val());
                calendar.view();
            });

            $('#events-in-modal').change(function(){
                var val = $(this).is(':checked') ? $(this).val() : null;
                calendar.setOptions({modal: val});
            });
            $('#format-12-hours').change(function(){
                var val = $(this).is(':checked') ? true : false;
                calendar.setOptions({format12: val});
                calendar.view();
            });
            $('#show_wbn').change(function(){
                var val = $(this).is(':checked') ? true : false;
                calendar.setOptions({display_week_numbers: val});
                calendar.view();
            });
            $('#show_wb').change(function(){
                var val = $(this).is(':checked') ? true : false;
                calendar.setOptions({weekbox: val});
                calendar.view();
            });
            $('#events-modal .modal-header, #events-modal .modal-footer').click(function(e){
                //e.preventDefault();
                //e.stopPropagation();
            });
        }(jQuery));
    </script>
@endsection