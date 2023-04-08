@extends('layouts.app')
@section('content')


        <!-- <div class="row">
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-purpal">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-white">Power</h5>
                                <span class="text-white">2017.1.20</span>
                            </div>
                            <div class="col text-right">
                                <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                <span class="text-white">+12.5(2.8%)</span>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="chart_widget_1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col">
                                <h5>3650</h5>
                                <span>VIEWS OF YOUR PROJECT</span>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="chart_widget_2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-white">Power</h5>
                                <span class="text-white">2017.1.20</span>
                            </div>
                            <div class="col text-right">
                                <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                <span class="text-white">+12.5(2.8%)</span>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <div id="chart_widget_5"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Latency</h5>
                    </div>
                    <div class="chart-wrapper">
                        <div id="chart_widget_17"></div>
                    </div>
                </div>
            </div>


            <div class="col-xl-8 col-xxl-8 col-lg-8 col-md-12">
                <div id="user-activity" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Visitor Activity</h4>
                        <div class="card-action">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                                        Day
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#session" role="tab">
                                        Week
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                                        Month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                                        Year
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content mt-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="user" role="tabpanel">
                                <canvas id="activity" class="chartjs"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media ai-icon">
                                    <span class="mr-3">
                                        <i class="ti-user"></i>
                                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Customers</p>
                                        <h4 class="mb-0">328.50K</h4>
                                        <span class="badge badge-primary">+3.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media ai-icon">
                                    <span class="mr-3">
                                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Orders</p>
                                        <h4 class="mb-0">257.50K</h4>
                                        <span class="badge badge-warning">+3.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media ai-icon">
                                    <span class="mr-3">
                                        <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Revenue</p>
                                        <h4 class="mb-0">364.50K</h4>
                                        <span class="badge badge-danger">-3.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <!-- <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Visitors Country</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-8">
                                <div id="world-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card active_users">
                    <div class="card-header">
                        <h4 class="card-title">Active Users</h4>
                    </div>
                    <div class="card-body pt-0">
                        <span id="counter"></span>
                        <canvas id="activeUser"></canvas>
                        <div class="list-group-flush mt-4">
                            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
                                <p class="mb-0">Top Active Pages</p>
                                <p class="mb-0">Active Users</p>
                            </div>
                            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                <p class="mb-0">/bootstrap-themes/</p>
                                <p class="mb-0">3</p>
                            </div>
                            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                <p class="mb-0">/tags/html5/</p>
                                <p class="mb-0">3</p>
                            </div>
                            <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                                <p class="mb-0">/</p>
                                <p class="mb-0">2</p>
                            </div>
                            <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                                <p class="mb-0">/preview/falcon/dashboard/</p>
                                <p class="mb-0">2</p>
                            </div>
                            <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                <p class="mb-0">/100-best-themes...all-time/</p>
                                <p class="mb-0">1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Purchases</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox2">
                                                <label class="custom-control-label" for="checkbox2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            Gray Dashboard Template
                                        </td>
                                        <td>example@example.com</td>
                                        <td>
                                            <img width="22" src="./images/avatar/1.png" alt="">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-circle text-success"></i>
                                            <span class="ml-2">Successful</span>
                                        </td>
                                        <td>$59</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="./ecom-invoice.html">Order Details</a>
                                                    <a class="dropdown-item text-danger" href="#">Cancel
                                                        Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox3">
                                                <label class="custom-control-label" for="checkbox3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            MetroAdmin Pro Dashboard
                                        </td>
                                        <td>example@example.com</td>
                                        <td>
                                            <img width="22" src="./images/avatar/2.png" alt="">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-circle text-warning"></i>
                                            <span class="ml-2">Pending</span>
                                        </td>
                                        <td>$59</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="./ecom-invoice.html">Order Details</a>
                                                    <a class="dropdown-item text-danger" href="#">Cancel
                                                        Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox4">
                                                <label class="custom-control-label" for="checkbox4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            Landing Pro Template
                                        </td>
                                        <td>example@example.com</td>
                                        <td>
                                            <img width="22" src="./images/avatar/3.png" alt="">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-circle text-success"></i>
                                            <span class="ml-2">Successful</span>
                                        </td>
                                        <td>$59</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="./ecom-invoice.html">Order Details</a>
                                                    <a class="dropdown-item text-danger" href="#">Cancel
                                                        Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox5">
                                                <label class="custom-control-label" for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            Neuon Dashboard HTML
                                        </td>
                                        <td>example@example.com</td>
                                        <td>
                                            <img width="22" src="./images/avatar/4.png" alt="">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-circle text-warning"></i>
                                            <span class="ml-2">Pending</span>
                                        </td>
                                        <td>$59</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="./ecom-invoice.html">Order Details</a>
                                                    <a class="dropdown-item text-danger" href="#">Cancel
                                                        Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox6">
                                                <label class="custom-control-label" for="checkbox6"></label>
                                            </div>
                                        </td>
                                        <td>
                                            Gray Dashboard Template
                                        </td>
                                        <td>example@example.com</td>
                                        <td>
                                            <img width="22" src="./images/avatar/5.png" alt="">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                            <span class="ml-2">Canceled</span>
                                        </td>
                                        <td>$59</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="./ecom-invoice.html">Order Details</a>
                                                    <a class="dropdown-item text-danger" href="#">Cancel
                                                        Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Timeline</h4>
                    </div>
                    <div class="card-body">
                        <div class="widget-timeline" style="height:370px;">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge primary"></div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>10 minutes ago</span>
                                        <h6 class="m-t-5">Youtube, a video-sharing website, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge warning">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge danger">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>30 minutes ago</span>
                                        <h6 class="m-t-5">Google acquires Youtube.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge success">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>15 minutes ago</span>
                                        <h6 class="m-t-5">StumbleUpon is acquired by eBay. </h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge warning">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge dark">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>30 minutes ago</span>
                                        <h6 class="m-t-5">Google acquires Youtube.</h6>
                                    </a>
                                </li>
                                <li>
                                    <div class="timeline-badge danger">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>30 minutes ago</span>
                                        <h6 class="m-t-5">Google acquires Youtube.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge success">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>15 minutes ago</span>
                                        <h6 class="m-t-5">StumbleUpon is acquired by eBay. </h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge warning">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div> -->
        <div class="row">
            <!-- <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Todo</h4>
                    </div>
                    <div class="card-body px-0">
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content widget-todo">
                                    <ul id="todo_list">
                                        <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                    fight.</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Do something
                                                    else</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                    fight.</span><a href='#' class="ti-trash"></a></label></li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-12 col-md-6 col-xxl-6 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Sold</h4>
                        <div class="card-action">
                            <div class="dropdown custom-dropdown">
                                <div data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart py-4">
                            <canvas id="sold-product"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Sold</h4>
                        <div class="card-action">
                            <div class="dropdown custom-dropdown">
                                <div data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-uppercase font-weight-normal">Sales Analysis</h4>
                    </div>
                    <div class="chart-wrapper">
                        <div id="chart_widget_8"></div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-facebook">
                                <span class="s-icon"><i class="fa fa-facebook"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-linkedin">
                                <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-googleplus">
                                <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-twitter">
                                <span class="s-icon"><i class="fa fa-twitter"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

@endsection