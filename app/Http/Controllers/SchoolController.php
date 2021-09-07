<?php

namespace App\Http\Controllers;

use App\DataTables\SchoolDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SchoolController extends AppBaseController
{
    /**
     * Display a listing of the School.
     *
     * @param SchoolDataTable $schoolDataTable
     * @return Response
     */
    public function index(SchoolDataTable $schoolDataTable)
    {
        return $schoolDataTable->render('schools.index');
    }

    /**
     * Show the form for creating a new School.
     *
     * @return Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created School in storage.
     *
     * @param CreateSchoolRequest $request
     *
     * @return Response
     */
    public function store(CreateSchoolRequest $request)
    {
        $input = $request->all();

        /** @var School $school */
        $school = School::create($input);

        Flash::success('School saved successfully.');

        return redirect(route('schools.index'));
    }

    /**
     * Display the specified School.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var School $school */
        $school = School::find($id);

        if (empty($school)) {
            Flash::error('School not found');

            return redirect(route('schools.index'));
        }

        return view('schools.show')->with('school', $school);
    }

    /**
     * Show the form for editing the specified School.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var School $school */
        $school = School::find($id);

        if (empty($school)) {
            Flash::error('School not found');

            return redirect(route('schools.index'));
        }

        return view('schools.edit')->with('school', $school);
    }

    /**
     * Update the specified School in storage.
     *
     * @param  int              $id
     * @param UpdateSchoolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchoolRequest $request)
    {
        /** @var School $school */
        $school = School::find($id);

        if (empty($school)) {
            Flash::error('School not found');

            return redirect(route('schools.index'));
        }

        $school->fill($request->all());
        $school->save();

        Flash::success('School updated successfully.');

        return redirect(route('schools.index'));
    }

    /**
     * Remove the specified School from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var School $school */
        $school = School::find($id);

        if (empty($school)) {
            Flash::error('School not found');

            return redirect(route('schools.index'));
        }

        $school->delete();

        Flash::success('School deleted successfully.');

        return redirect(route('schools.index'));
    }
}
