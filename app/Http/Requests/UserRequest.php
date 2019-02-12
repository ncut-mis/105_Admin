<?php

namespace App\Http\Requests;

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
        return [
            'name'=>'required',
            'birthday'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'contact_person' =>'required',
            'cp_phone' =>'required',
            'email' =>'required',
            'password'=>'required | min: 6',
            'email_verified_at',

        ];
    }
}
