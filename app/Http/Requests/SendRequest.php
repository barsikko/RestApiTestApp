<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
            'lang' => 'required|max:2|string',
            'radius' => 'required|numeric',
            'lon' => 'required|numeric',
            'lat' => 'required|numeric',
            'src_geom' => 'nullable|numeric',
            'src_attr' => 'nullable|numeric',
            'kinds' => 'nullable|numeric',
            'name' => 'nullable|numeric',
            'rate' => 'nullable|numeric',
            'format' => 'nullable|numeric',
            'limit' => 'nullable|numeric'
        ];
    }
}
