<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\User;
use Modules\User\Http\Requests\RegisterUserRequest;
use Pingpong\Modules\Routing\Controller;
use \StdClass;

class UserController extends Controller
{

    /**
     * This method will return the main profile view
     * TODO:: Profile view
     * @return type
     */
    public function index()
    {
        return view('user::profile');
    }

    /**
     * This method use to return the registeration views only
     * @return type
     */
    public function register()
    {
        return view('user::register');
    }

    /**
     * 
     * @param RegisterUserRequest $request
     * @return User
     */
    public function registerUser(RegisterUserRequest $request)
    {
        $user = new User($request->all());
        $user->save();
        return array('caller'=>'registerUser','payload'=>$user);
    }

    /**
     * This method used to validate the user inputs during registration and avoid duplicated validation logics
     * It will be used in all places.
     * @param RegisterUserRequest $request
     * @return boolean
     */
    public function validateUserRegisteration(RegisterUserRequest $request)
    {
        //* get all the input fields submitted for validation
    
        $requestKeys = array_keys($request->all());
        $ret = array();
        foreach ($requestKeys as $value)
        {
            $ret[$value] = true;
        }

        return $ret;
    }

    /**
     * Return forgot password view
     * TODO :: forgotpassword feature
     * @return type
     */
    public function forgot()
    {
        return view('user::recover.forgetpassword');
    }

    /**
     * 
     * @return type
     */
    public function login()
    {
        return view('user::login');
    }

    public function test()
    {
        return 'test123';
    }

}
