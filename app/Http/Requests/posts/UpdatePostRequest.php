<?php

namespace App\Http\Requests\posts;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
                'post_title'=>'required|min:3|unique:posts,id,'.$this->id,
                'post_text'=>'required|min:10'.$this
            ];

    }
    public function messages()
    {
        return[
            'post_title.required'=> 'Please enter a title',
            'post_title.min'=> 'Post title must be more than 3 characters',
            'post_title.unique'=> 'we have a post with the same name pick a new one',
            'post_text.required'=> 'Please enter a title',
            'post_text.min'=> 'Post description must be more than 10 characters',
        ];
    }
}
