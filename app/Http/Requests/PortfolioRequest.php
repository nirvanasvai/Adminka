<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'main_description'  => 'nullable',
            'title'             => 'nullable',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'       => 'nullable',
            'slug'              => 'nullable',
            'name_project'      => 'nullable',
            'development_time'  => 'nullable',
            'languages'         => 'nullable',
            'description_job'   => 'nullable',
            'description_about' => 'nullable',

        ];
    }
}

