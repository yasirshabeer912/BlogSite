<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormReqest extends FormRequest
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
        $rules = [
                'category_id'=>[
                    'required',
                    'integer'
                ],
                'name'=>[
                    'required',
                    'string',
                    'max:200'
                ],
                'slug'=>[
                    'required',
                    'string',
                    'max:200'
                ],
                'description'=>[
                    'required'
                ],
                'yt_frame'=>[
                    'nullable',
                    'string',
                    
                ],
                'meta_title'=>[
                    'required',
                    'string',
                    'max:200'
                ],
                'meta_description'=>[
                    'nullable',
                    'string'
                ],
                'meta_keyword'=>[
                    'nullable',
                    'string'
                ],
                'navbar_status'=>[
                    'nullable'
                    
                ],
                'status'=>[
                    'nullable'
                    
                ],
        ];
        return $rules;
    }
}
