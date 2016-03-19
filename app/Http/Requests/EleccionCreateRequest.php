<?php

namespace evs\Http\Requests;

use evs\Http\Requests\Request;

class EleccionCreateRequest extends Request
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
        /**
            TO DO:: REHACER ESOO>>>
        **/
        return [
            'tema'=>'required',
            'pregunta'=> 'required',
            'TipoRespuesta' => 'required',
        ];
    }
}
