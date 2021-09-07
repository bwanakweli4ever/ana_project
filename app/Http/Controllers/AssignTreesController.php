<?php

namespace App\Http\Controllers;

use App\DataTables\AssignTreesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAssignTreesRequest;
use App\Http\Requests\UpdateAssignTreesRequest;
use App\Models\AssignTrees;
use App\Models\Tree;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AssignTreesController extends AppBaseController
{
    /**
     * Display a listing of the AssignTrees.
     *
     * @param AssignTreesDataTable $assignTreesDataTable
     * @return Response
     */
    public function index(AssignTreesDataTable $assignTreesDataTable)
    {

        return $assignTreesDataTable->render('assign_trees.index');
    }

    /**
     * Show the form for creating a new AssignTrees.
     *
     * @return Response
     */
    public function create()
    {
        return view('assign_trees.create');
    }

    public function report(){

        return view('distributed_report');

    }

    /**
     * Store a newly created AssignTrees in storage.
     *
     * @param CreateAssignTreesRequest $request
     *
     * @return Response
     */
    public function store(CreateAssignTreesRequest $request)
    {
        $input = $request->all();
       
        $available_tree=Tree::where('id',$input['Tree_category_id'])->first()['available_number'];
        
        $update_stock=$available_tree-$input['number_to_assign'];
       
       if($input['number_to_assign']>$available_tree){

         Flash::WARNING('You can not assign trees  more than what available in Nursery');
         return redirect(route('assignTrees.index'));
       }
        /** @var AssignTrees $assignTrees */
        $assignTrees = AssignTrees::create($input);
        $deduct_trees=Tree::where('id',$input['Tree_category_id'])->update(['available_number' => $update_stock]);

      

        return redirect(route('assignTrees.index'));
    }

    /**
     * Display the specified AssignTrees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AssignTrees $assignTrees */
        $assignTrees = AssignTrees::find($id);

        if (empty($assignTrees)) {
            Flash::error('Assign Trees not found');

            return redirect(route('assignTrees.index'));
        }

        return view('assign_trees.show')->with('assignTrees', $assignTrees);
    }

    /**
     * Show the form for editing the specified AssignTrees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var AssignTrees $assignTrees */
        $assignTrees = AssignTrees::find($id);

        if (empty($assignTrees)) {
            Flash::error('Assign Trees not found');

            return redirect(route('assignTrees.index'));
        }

        return view('assign_trees.edit')->with('assignTrees', $assignTrees);
    }

    /**
     * Update the specified AssignTrees in storage.
     *
     * @param  int              $id
     * @param UpdateAssignTreesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssignTreesRequest $request)
    {
        /** @var AssignTrees $assignTrees */
        $assignTrees = AssignTrees::find($id);

        if (empty($assignTrees)) {
            Flash::error('Assign Trees not found');

            return redirect(route('assignTrees.index'));
        }

        $assignTrees->fill($request->all());
        $assignTrees->save();

        Flash::success('Assign Trees updated successfully.');

        return redirect(route('assignTrees.index'));
    }

    /**
     * Remove the specified AssignTrees from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var AssignTrees $assignTrees */
        // $assignTrees = AssignTrees::find($id);

        // if (empty($assignTrees)) {
        //     Flash::error('Assign Trees not found');

        //     return redirect(route('assignTrees.index'));
        // }

        // $assignTrees->delete();

         Flash::WARNING('Deleting Tree assignment is not allowed please contact system admin.');

        return redirect(route('assignTrees.index'));
    }
}
