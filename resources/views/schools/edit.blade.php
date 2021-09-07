@extends('layouts.default')

{{-- Page title --}}
@section('title')
School @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} School</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($school, ['route' => ['schools.update', $school->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('schools.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
