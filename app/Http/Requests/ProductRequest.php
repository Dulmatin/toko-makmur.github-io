<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Storage;


class ProductRequest extends FormRequest
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
            'name' => 'required',
            'unit_id'=>'required',
            'category_id'=>'required',
            'stock'=>'required',
            'purchase_price'=>'required',
            'sell_price'=>'required',
            'image'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ];
        
    }

    public function messages()
    {
        return[
            'name.required' => 'Tidak boleh Kosong Harus Diisi',
            'unit_id.required'=>'Tidak boleh Kosong Harus Diisi',
            'category_id.required'=>'Tidak boleh Kosong Harus Diisi',
            'stock.required'=>'Tidak boleh Kosong Harus Diisi',
            'purchase_price.required'=>'Tidak boleh Kosong Harus Diisi',
            'sell_price.required'=>'Tidak boleh Kosong Harus Diisi',
            'image.required'=>'Tidak boleh Kosong Harus Diisi',
        ];
    }

    
}
