@extends('layouts.default')

{{-- Page title --}}
@section('title')
Tree @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Tree</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($tree, ['route' => ['trees.update', $tree->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('trees.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
