<?php

namespace App\Http\Controllers;

use App\DataTables\TreeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTreeRequest;
use App\Http\Requests\UpdateTreeRequest;
use App\Models\Tree;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TreeController extends AppBaseController
{
    /**
     * Display a listing of the Tree.
     *
     * @param TreeDataTable $treeDataTable
     * @return Response
     */
    public function index(TreeDataTable $treeDataTable)
    {
        return $treeDataTable->render('trees.index');
    }

    /**
     * Show the form for creating a new Tree.
     *
     * @return Response
     */
    public function create()
    {
        return view('trees.create');
    }

    /**
     * Store a newly created Tree in storage.
     *
     * @param CreateTreeRequest $request
     *
     * @return Response
     */
    public function store(CreateTreeRequest $request)
    {
        $input = $request->all();

        /** @var Tree $tree */
        $tree = Tree::create($input);

        Flash::success('Tree saved successfully.');

        return redirect(route('trees.index'));
    }

    /**
     * Display the specified Tree.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            Flash::error('Tree not found');

            return redirect(route('trees.index'));
        }

        return view('trees.show')->with('tree', $tree);
    }

    /**
     * Show the form for editing the specified Tree.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            Flash::error('Tree not found');

            return redirect(route('trees.index'));
        }

        return view('trees.edit')->with('tree', $tree);
    }

    /**
     * Update the specified Tree in storage.
     *
     * @param  int              $id
     * @param UpdateTreeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTreeRequest $request)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            Flash::error('Tree not found');

            return redirect(route('trees.index'));
        }

        $tree->fill($request->all());
        $tree->save();

        Flash::success('Tree updated successfully.');

        return redirect(route('trees.index'));
    }

    /**
     * Remove the specified Tree from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            Flash::error('Tree not found');

            return redirect(route('trees.index'));
        }

        $tree->delete();

        Flash::success('Tree deleted successfully.');

        return redirect(route('trees.index'));
    }
}
