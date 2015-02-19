<?php namespace GameJam\Http\Controllers\Admin;

use GameJam\Http\Controllers\Controller;
use GameJam\User;

class UsersController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Users Controller
    |--------------------------------------------------------------------------
    |
    | This controller gives admins an overview of current users.
    | It has the ability to delete users
    |
    */

    public function index()
    {
        $users = User::all();

        return view('admin.users.index')
            ->with('users', $users);
    }

}
