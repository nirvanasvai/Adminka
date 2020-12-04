<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'right_description'         => 'nullable',
            'left_description'          => 'nullable',
            'image'                     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description_title_up'      => 'nullable',
            'description_title_down'    => 'nullable',

        ];
    }
}
?>

