@extends('layouts.default')

{{-- Page title --}}
@section('title')
Assign Trees @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Assign Trees</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($assignTrees, ['route' => ['assignTrees.update', $assignTrees->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('assign_trees.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
