<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|max:20|alpha',
            'email'=>'required|email|unique:contacts',
            'last_name'=>'required|max:20|alpha',
            'phone'=>'integer',
            'photo'=>'image|required',
            'address'=>'required|max:20',
            'birthday'=>'required',
            'sex'=>'required',
        ];
    }
}
