<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCategoryRequest extends FormRequest
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
        return ([
            'name'=>'required|max:50',
            'desc'=>'required|max:200',
            'input_image'=>'required',


        ]);
    }


    public function messages()
    {
        return [
            'name.required' => 'bạn chưa nhập gì mà nhớ nhập đúng 50 ký tự thôi tên đừng dài quá dev mệt.',
            'desc.required'=> 'bạn chưa nhập gì mà nhớ nhập đúng 200 ký tự thôi tên đừng dài quá dev mệt.',
            'input_image.required'=>'bỏ hình vào cho nó đẹp nha',
        ];
    }

}


