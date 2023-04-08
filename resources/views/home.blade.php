@extends('layouts.app')
@section('content')


<div class="row">
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
                                <!-- <i class="ti-user"></i> -->
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
</div>


@endsection