<!-- School Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('school_name', 'School Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- School Adress Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('school_adress', 'School Adress:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('school_adress', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- School Contacts Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('school_contacts', 'School Contacts:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('school_contacts', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Contact Person Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('contact_person', 'Contact Person:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('contact_person', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('schools.index') }}" class="btn btn-default">Cancel</a>
</div>
