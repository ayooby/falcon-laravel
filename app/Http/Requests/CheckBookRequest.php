<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckBookRequest extends Request
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
          'title' => 'required|min:3',
          'price'	=> 'required|numeric',
          'release_date' => 'required|date',
          'author' => 'required',
          'genre_list'=> 'required'
        ];
    }
}
