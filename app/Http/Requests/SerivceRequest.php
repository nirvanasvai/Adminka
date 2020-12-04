<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerivceRequest extends FormRequest
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
            'job_title'  => 'nullable|required',
            'description'=> 'nullable|required',
            'title'      => 'nullable|required',
            'image'      => 'nullable|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}


