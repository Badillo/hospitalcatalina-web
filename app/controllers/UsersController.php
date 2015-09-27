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
        $users = User::all();

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
        $user = User::find($id);

        return Response::json(array('status' => true, 'data' => $user));
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
    public function update($id)
    {

        $user = User::findOrFail($id);

        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user->update($data);

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        User::destroy($id);

        return Redirect::route('users.index');
    }

}
