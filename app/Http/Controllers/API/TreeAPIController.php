<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTreeAPIRequest;
use App\Http\Requests\API\UpdateTreeAPIRequest;
use App\Models\Tree;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\TreeResource;
use Response;

/**
 * Class TreeController
 * @package App\Http\Controllers\API
 */

class TreeAPIController extends AppBaseController
{
    /**
     * Display a listing of the Tree.
     * GET|HEAD /trees
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Tree::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $trees = $query->get();

        return $this->sendResponse(TreeResource::collection($trees), 'Trees retrieved successfully');
    }

    /**
     * Store a newly created Tree in storage.
     * POST /trees
     *
     * @param CreateTreeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTreeAPIRequest $request)
    {
        $input = $request->all();

        /** @var Tree $tree */
        $tree = Tree::create($input);

        return $this->sendResponse(new TreeResource($tree), 'Tree saved successfully');
    }

    /**
     * Display the specified Tree.
     * GET|HEAD /trees/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            return $this->sendError('Tree not found');
        }

        return $this->sendResponse(new TreeResource($tree), 'Tree retrieved successfully');
    }

    /**
     * Update the specified Tree in storage.
     * PUT/PATCH /trees/{id}
     *
     * @param int $id
     * @param UpdateTreeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTreeAPIRequest $request)
    {
        /** @var Tree $tree */
        $tree = Tree::find($id);

        if (empty($tree)) {
            return $this->sendError('Tree not found');
        }

        $tree->fill($request->all());
        $tree->save();

        return $this->sendResponse(new TreeResource($tree), 'Tree updated successfully');
    }

    /**
     * Remove the specified Tree from storage.
     * DELETE /trees/{id}
     *
     * @param int $id
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
            return $this->sendError('Tree not found');
        }

        $tree->delete();

        return $this->sendSuccess('Tree deleted successfully');
    }
}
