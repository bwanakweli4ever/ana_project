@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">


<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Dashboard</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <div class="col-md-6 col-xl-3 col-12 mb-20">
            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Add-Cart im-icon-set float-right bg-primary"></i>
                <h3>35K</h3>
                <p>Beneficiary Schools</p>
                <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Gained: 655</span> <span class="float-right pr-15">Lost: 56</span></p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3>10K</h3>
                <p>Page Views</p>
                <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Unique Pageviews: </span> <span class="float-right pr-15">4.7K</span>
                </p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                <h3>23K</h3>
                <p>Number of Fans</p>
                <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Gained: 655</span> <span class="float-right pr-15">Lost: 56</span></p>
            </div>
        </div>


        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                <h3>400</h3>
                <p>Total Actions</p>
                <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>To Prev. Period: 655</span> <span class="float-right pr-15">+72%</span>
                </p>
            </div>
        </div>
    </div>


    {{--<div class="col-12">--}}
    <div class="row">
        <div class="col-md-12 col-lg-7 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Sales Analysis</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <canvas id="myChart" width="400" height="200"></canvas>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-5 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Beneficiary Schools</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Names</th>
                                    <th>Daily Sales</th>
                                    <th>Monthly Sales</th>
                                    <th>Yearly Sales</th>
                                </tr>
                                <tr>
                                    <td>Jan</td>
                                    <td>6</td>
                                    <td>180</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>Feb</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                  <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                               <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
    
    {{--</div>--}}
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

<!-- end of page level js -->
@stop
