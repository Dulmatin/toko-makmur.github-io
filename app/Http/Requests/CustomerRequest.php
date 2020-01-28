<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'username' => 'required|max:255',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'password' =>'required'

            
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Harus Diisi bro',
            'phone_number.required' => 'Jangan Dikosongkan',
            'username.required' => 'Jangan Dikosongkan',
            'email.required' => 'Jangan Dikosongkan',
            'gender.required' => 'Jangan Dikosongkan',
            'address.required' => 'Jangan Dikosongkan',
            'password.required' =>'Jangan Dikosongkan'

        ];
    }
}
