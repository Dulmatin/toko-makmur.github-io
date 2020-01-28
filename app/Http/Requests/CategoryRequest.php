<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'parent_id' => 'required|integer',
            'name' => 'required|max:255',
        ];
    }

    public function messages(){
        return [
            'parent_id.required' => 'Tong dikosongken Coy',
            'name.required' => 'Nama Kuudu diisi bro meh kenal',
        ];
    }
}
