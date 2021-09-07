
          <?php 
          $trees=\App\Models\Tree::get();
          $schools=\App\Models\School::get();
            
          
       ?>
      
       
            


       
     


<!-- Number To Assign Field -->
<div class="form-group">
    <div class="row">
            {!! Form::label('Tree_category', 'Tree Category:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
      <select name="Tree_category_id" class='form-control' onchange="handleChangeTreeID(this)">
  @foreach ($trees as $tree)
  <option value="{{$tree->id}}">{{$tree->tree_name}}</option>
 @endforeach
</select> 
 <input type="hidden" name="Tree_category" value="" id="TreeID" required="">
        </div>
    </div>
</div>


<!-- Number To Assign Field -->
<div class="form-group">
    <div class="row">
            {!! Form::label('school to be assigned', 'Shool to be assigned:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12" id="SchoolInput">
             <select name="schoo_to_be_assigned_to_id" class='form-control' onchange="handleChangeSchoolID(this)">
  @foreach ($schools as $school)
  <option value="{{$school->id}}">{{$school->school_name}}</option>
 @endforeach
</select> 

    <input type="hidden" name="schoo_to_be_assigned_to" id="SchoolID" value="" required="">

        </div>
    </div>
</div>



<!-- Number To Assign Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('number_to_assign', 'Number To Assign:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('number_to_assign', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Comment Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('comment', 'Comment:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('assignTrees.index') }}" class="btn btn-default">Cancel</a>
</div>

@content('footer_scripts')
<script type="text/javascript">
    function handleChangeSchoolID(sel) {
        document.getElementById('SchoolID').value = sel.options[sel.selectedIndex].text;
    }
</script>
<script type="text/javascript">
    function handleChangeTreeID(sel) {
        document.getElementById('TreeID').value = sel.options[sel.selectedIndex].text;
        
    }
</script>
@endcontent