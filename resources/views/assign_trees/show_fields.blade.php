<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $assignTrees->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Tree_category', 'Tree Category:') !!}</th>
    <td>{{$trees->tree_name}}{{ $assignTrees->Tree_category }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('schoo_to_be_assigned_to', 'Schoo To Be Assigned To:') !!}</th>
    <td>{{ $assignTrees->schoo_to_be_assigned_to }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('number_to_assign', 'Number To Assign:') !!}</th>
    <td>{{ $assignTrees->number_to_assign }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('comment', 'Comment:') !!}</th>
    <td>{{ $assignTrees->comment }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $assignTrees->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $assignTrees->updated_at }}</td>
</tr>


