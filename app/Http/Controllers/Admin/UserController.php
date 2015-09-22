<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $fields = [
        'netid' => '',
        'email' => '',
        'first_name' => '',
        'last_name' => '',
        'display_name' => '',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')
            ->withUsers($users);
    }

    /**
     * Create new user.
     *
     * @param $user
     */
    public function create($user)
    {
        $firstname = ( is_array($user['firstname']) ? $user['firstname'][1] : $user['firstname'] );

        $newuser = new User;

        $newuser->netid = $user['uid'];
        $newuser->first_name = $firstname;
        $newuser->last_name = $user['lastname'];
        $newuser->email = $user['email'];
        $newuser->display_name = $firstname . ' ' . $user['lastname'];

        $newuser->save();
    }

    /**
     * Create user on first login
     *
     * @param $user
     */
    public function create_new_user($user)
    {
        $users = User::all();

        $existing_users = $users->lists('netid')->all();

        $net_id = $user['uid'];

        if (! in_array( $net_id, $existing_users)) {
            $this->create($user);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserUpdateRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
