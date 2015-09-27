<?php

class UsersController extends \BaseController
{

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function create()
    {
        $users = User::withTrashed()->get();

        return View::make('admin.user', array('users' => $users));

    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $user = new User();

        if (!$user->isValid($data)) {
            return Response::json(array('status' => false, 'dataError' => $user->getListErrors()), 500);
        }

        $user->name     = $data['name'];
        $user->username = $data['username'];
        $user->password = Hash::make($data['password']);

        $user->save();

        return Response::json(array('status' => true));
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $id   = Input::all()['id'];
        $user = User::withTrashed()->find($id);
        $status = "";
        if($user->trashed())
        {
            $status = "Desactivado";
        }
        else
        {
            $status = "Activado";
        }
        

        return Response::json(array('status' => true, 'data' => $user, 'user_status' => $status));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $user = User::find($id);

        return View::make('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        $id   = Input::all()['id'];
        $data = Input::all();

        $user = User::findOrFail($id);

        if (!$user->isValid($data)) {
            return Response::json(array('status' => false, 'dataError' => $user->getListErrors()), 500);
        }

        $user->name     = $data['name'];
        $user->username = $data['username'];
        $user->password = Hash::make($data['password']);

        $user->save();

        return Response::json(array('status' => true));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function activate()
    {
        $id   = Input::all()['id'];
        $user = User::withTrashed()->findOrFail($id);
        
        if($user->trashed())
        {
            $user->restore();
            $status = "Activado";    
        }
        else
        {
            $user->delete();
            $status = "Desactivado";    
        }

        return Response::json(array('status' => true, 'user_status' => $status));
    }

}
