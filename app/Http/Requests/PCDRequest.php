<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PCDRequest extends Request
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
           /* 'avatar' => 'dimensions:min_width=100,min_height=200'
            'lista_espera' => 'required',
            'nome'           => 'required|min:3|alpha',
            'data_nascimento'         => 'required|date',
            'sexo'      => 'required',
            'rg'    => 'required|alpha_num|min:6',
            'cpf'        => 'required',
            'nis'        => 'alpha_num|min:11'*/


        ];
    }

    public function messages()
    {
    return [
      /*  'lista_espera.required' => 'Por favor, informe se há vagas.',
        'nome.required'      => 'Por favor, informe o nome.',
        'nome.min'            => 'Por favor, informe um nome válido.',*/

    ];

}

}
