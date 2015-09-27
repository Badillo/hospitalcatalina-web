<?php

class SpecialitiesController extends \BaseController
{

    /**
     * Display a listing of speciality
     *
     * @return Response
     */
    public function index()
    {

        $speciality = Speciality::all();

        return View::make('speciality.index', compact('speciality'));
    }

    /**
     * Show the form for creating a new Speciality
     *
     * @return Response
     */
    public function create()
    {
        $speciality = Speciality::all();

        return View::make('admin.speciality', array('specialities' => $speciality));

    }

    /**
     * Store a newly created Speciality in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $Speciality = new Speciality();

        if (!$Speciality->isValid($data)) {
            return Response::json(array('status' => false, 'dataError' => $Speciality->getListErrors()), 500);
        }

        $Speciality->name = $data['speciality'];

        $Speciality->save();

        return Response::json(array('status' => true));
    }

    /**
     * Display the specified Speciality.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified Speciality.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $Speciality = Speciality::find($id);

        return View::make('speciality.edit', compact('Speciality'));
    }

    /**
     * Update the specified Speciality in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified Speciality from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $id         = Input::all()['id'];
        $Speciality = Speciality::findOrFail($id);

        $Speciality->delete();

        return Response::json(array('status' => true, 'id_speciality' => $id ));
    }

}
