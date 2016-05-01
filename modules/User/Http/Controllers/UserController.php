<?php

namespace Modules\User\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class UserController extends Controller
{

    public function index()
    {
        return view('user::login');
    }

    public function register()
    {
        return view('user::register');
    }

    public function forgot()
    {
        return view('user::recover.forgetpassword');
    }

    public function profile()
    {
        return view('user::profile');
    }

    public function test()
    {
        return 'test123';
    }

}
