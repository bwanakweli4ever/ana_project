<!-- Tree Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('tree_name', 'Tree Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('tree_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Description Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', ['New' => 'New', 'Planted' => 'Planted', 'Damaged' => 'Damaged', 'Lost' => 'Lost', 'Under Treatment' => 'Under Treatment'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Available Number Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('available_number', 'Available Number:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('available_number', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trees.index') }}" class="btn btn-default">Cancel</a>
</div>
