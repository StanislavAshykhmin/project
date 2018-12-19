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

    protected $errorBag = 'update';

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
            'name'=>'max:20|alpha',
            'email'=>'email',
            'last_name'=>'max:20|alpha',
            'phone'=>'min:10|max:10',
            'photo'=>'image',
            'address'=>'max:20',
            'birthday'=>'before:tomorrow',
            'sex'=>'required',
        ];
    }
}
