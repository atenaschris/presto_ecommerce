<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $user = Auth::user();
       
        
        return [

            'email' => Rule::unique('users')->ignore($user->id),
            'name' => 'required',
            'password'=>'required'
        ];
    }

    
}
