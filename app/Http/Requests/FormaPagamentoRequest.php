<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormaPagamentoRequest extends FormRequest
{
    public function authorize() {
        return true;
    }
    public function rules() {
        return [
            'nome' => 'required|string|max:255|unique:forma_pagamentos,nome',
        ];
    }
}
