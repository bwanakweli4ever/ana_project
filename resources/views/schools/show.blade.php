@extends('layouts.default')

{{-- Page title --}}
@section('title')
Schools @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>School</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card">
        <div class="table-responsive">
        <table class="table table-default">
            @include('schools.show_fields')

            </table>
        </div>
    </div>
    <a href="{{ route('schools.index') }}"
                class="btn btn-primary">Back</a>
</div>
@endsection
