<?php

namespace evs\Http\Requests;

use evs\Http\Requests\Request;

class VotanCreateRequest extends Request
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
            'name'=>'',
            'cedula'=> '',
            'email' => '',
       
        ];
    }
}
