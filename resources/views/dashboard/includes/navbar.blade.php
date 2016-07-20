<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::asset('../assets/images/users')}}/{{ Auth::user()->pic }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{Auth::user()->title_name }} {{Auth::user()->first_name }} {{ Auth::user()->last_name}} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active"><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-person"></i> <span>Employee</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('dashboard/employee')}}"><i class="ion ion-clipboard"></i> List of employees</a></li>
                    <li><a href="{{url('dashboard/employee/create') }}"><i class="ion ion-android-create"></i> Add new employee</a></li>
                    <li><a href="{{url('dashboard/employee/edit')}}"><i class="ion ion-close-round"></i> Inactive Employee</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-calendar"></i> <span>Travel Order</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="schedule/list"><i class="ion ion-clipboard"></i> List of Travel Order</a></li>
                    <li><a href="schedule/add"><i class="ion ion-android-create"></i> Add new schedule</a></li>
                    <li><a href="schedule/inactive"><i class="ion ion-close-round"></i> Inactive Employee</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-document"></i> <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ion ion-clipboard"></i> Booked Travel Order</a></li>
                    <li><a href=""><i class="ion ion-android-create"></i> Changed Travel Order</a></li>
                    <li><a href=""><i class="fa fa-money"></i> Travel Order Expenses</a></li>
                </ul>
            </li>
            
            <!--
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="layout/top-nav"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="layout/boxed"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="layout/fixed"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="layout/collapsed-sidebar"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="widgets">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts/chartjs"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="charts/morris"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="charts/flot"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="charts/inline"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="UI/general"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="UI/icons"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="UI/buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="UI/sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="UI/timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="UI/modals"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="forms/general"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="forms/advanced"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="forms/editors"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tables/simple"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="tables/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="calendar">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>
            <li>
                <a href="mailbox/mailbox">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="examples/invoice"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="examples/profile"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="examples/login"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="examples/register"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="examples/lockscreen"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="examples/404"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="examples/500"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="examples/blank"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="examples/pace"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>