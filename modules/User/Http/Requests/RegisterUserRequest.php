<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //* store the rules at begining of the methods for conditions later
        $rules = [
            'firstName' => 'required|min:3,max:50',
            'lastName' => 'required|min:3,max:50',
            'userName' => 'required|min:3,max:10',
            'email' => 'required|email|max:150',
            'password' => 'required|min:6,max:20',
            'retype_password' => 'required|min:6,max:20',
            'agree_term' => 'required|accepted'
        ];
        $retRules = array();
        //* find out the keys for validate and return the respective array for validation
        //* this will help in centralise validation logic without need to code for JavaScript
        $validations = (array_keys(\Illuminate\Support\Facades\Request::all()));
 
        //* Once we have the validation keys, we will return array with the respective keys.
        foreach ($validations as $value)
        {
            $retRules[$value] = $rules[$value];
        }
        
        return $retRules;
    }

}
