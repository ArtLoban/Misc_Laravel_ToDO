<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
//        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'title.required' => 'А ну-ка заполни тут title!',
            'description.required' => 'А ну-ка заполни message!',
        ];
    }

}
