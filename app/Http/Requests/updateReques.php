<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateReques extends FormRequest
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
             // for post
            'title' => 'required',
             //'mp3_file' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
            //'image' => 'required|mimes:jpeg,png,gif,jpg,svg|max:2048',
            'script' => "required|array",
            "script.*"  => "required|string",
            'level_id' =>  'required|integer',
            'talker' => "required|array",
            "talker.*"  => "required|string",

            //for question
            'question' => 'required',
            'correct_answerId' => 'required',
            'answer1' => "required",
            'answer2' => "required",
            'answer3' => "required",
           //for vocabulary
           'dictionary_id' => 'required|integer'
        ];
    }
}
