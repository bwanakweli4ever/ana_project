@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">
  <?php 
          $trees=App\Models\Tree::class;
          $schools=\App\Models\School::class;
          $assigned=App\Models\AssignTrees::class;
            
          
       ?>
      
       

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
                <h3>{{$trees::count()}}</h3>
                <p>Tree Species</p>
                <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Fresh: {{$trees::where('status','New')->count()}}</span> <span class="float-right pr-15">Damaged: {{$trees::where('status','Damaged')->count()}}</span></p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3>{{$schools::count()}}</h3>
                <p>Registred Beneficiary Schools</p>
                <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>School Served </span> <span class="float-right pr-15">{{$assigned::count()}}</span>
                </p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                <h3>{{$assigned::count()}}</h3>
                <p>Distributed Tree Transactions</p>
                <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Total number distributed : </span> <span class="float-right pr-15">{{$assigned::sum('number_to_assign')}}</span>
            </div>
        </div>


        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                <h3>{{$assigned::sum('number_to_assign')}}</h3>
                <p>Total Distribution Across Schools</p>
                <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Distribution Progress : </span> <span class="float-right pr-15">{{$assigned::sum('number_to_assign')*100/25000}}%</span>
                </p>
            </div>
        </div>
    </div>


    {{--<div class="col-12">--}}
    <div class="row">
        <div class="col-md-12 col-lg-7 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Distribution Analysis</h5>
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
                                    <th>School Location</th>
                                    <th>Contact</th>
                                    <th>Attn</th>
                                </tr>

                                @foreach($schools::get() as $school)
                                <tr>
                                    <td>{{$school->school_name}}</td>
                                    <td>{{$school->school_adress}}</td>
                                    <td>{{$school->school_contacts}}</td>
                                    <td>{{$school->contact_person}}</td>
                                </tr>
                               @endforeach
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
<!-- <script src="{{ asset('js/pages/dashboard.js') }}"></script> -->

<script>
    $(document).ready(function () {
        $("#progress-primary").animate({ width: '45%' }, 'slow', 'linear');
        $("#progress-info").animate({ width: '45%' }, 'slow', 'linear');
        $("#progress-success").animate({ width: '45%' }, 'slow', 'linear');
        $("#progress-danger").animate({ width: '45%' }, 'slow', 'linear');
    });

    var ctx = document.getElementById('myChart').getContext('2d');

    $.ajax({
        url: "{{ route('dash.stats') }}",
        method: 'GET',
        contentType: "application/json",
        dataType: 'json',
        success: function ({ labels, data }) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels,
                    datasets: [{
                        data,
                        backgroundColor: [
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)',
                            'rgba(166, 172, 244, 0.2)'
                        ],
                        borderColor: [
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)',
                            'rgba(97, 110, 244, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        },
    })
</script>

<!-- end of page level js -->
@stop
