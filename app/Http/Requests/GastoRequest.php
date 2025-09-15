<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GastoRequest extends FormRequest
{
    public function authorize() {
        return true;
    }
    public function rules() {
        return [
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'data' => 'required|date',
            'categoria_id' => 'required|exists:categorias,id',
            'forma_pagamento_id' => 'required|exists:forma_pagamentos,id',
        ];
    }
}
