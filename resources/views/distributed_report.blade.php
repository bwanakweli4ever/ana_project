@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Table @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link rel="stylesheet" href="{{ asset('vendors/wenk/wenk.min.css')}}">
    <!--end of page vendors -->
@stop
{{-- Page content --}}
@section('content')
 <?php 
          $trees=App\Models\Tree::class;
          $schools=\App\Models\School::class;
          $assigned=App\Models\AssignTrees::class;
            
          
       ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Tables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Table</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <!-- Main content -->
    <section class="content tablepage">
        <div class="row">
            <div class="col-md-12 col-12">
                
                <div class="card">
                    <div class="table-responsive" data-print-sort-column>
                    <table class="table ">
                        <thead>
                       
                      <!--   <tr>
                            <th class="border-top-0" scope="col"></th>
                            <th class="border-top-0" scope="col">Name</th>
                            <th class="border-top-0" scope="col">Email Address</th>
                            <th class="border-top-0" scope="col">Status</th>


                        </tr> -->
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>Total to be Distributed :</strong></td>
                        
                            <td><span class="badge badge-success float-left">{{$trees::sum('available_number')}}</span></td>


                        </tr>
                        <tr>
                            <td><strong>Total School in Program:</strong></td>
                           
                            <td><span class="badge badge-success float-left">{{$schools::count()}}</span></td>
                        </tr>
                         <tr>
                            <td><strong>Available Tree Species </strong></td>
                            
                            <td><span class="badge badge-success float-left">{{$trees::count()}}</span></td>
                        </tr>
                        <tr>
                            <td><strong>Remaining Trees in Nursery </strong></td>
                            <td><span class="badge badge-success float-left">{{$trees::sum('available_number')-$assigned::sum('number_to_assign')}}</span></td>
                        </tr>
                        <tr>
                            <td><strong>Total Distributed Trees </strong></td>
                              <td><span class="badge badge-success float-left">{{$assigned::sum('number_to_assign')}}</span></
                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
            

        </div>
    </section>
    @stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('js/pages/table.js')}}"></script>


@stop


