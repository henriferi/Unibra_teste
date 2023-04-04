<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validacoes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */


    // Validações dos formulários e adaptação dos textos para português

    public function rules(): array
    {
        return [
            'nome_completo' => 'required|string|min:3',
            'cpf' => 'required|string|max:15|min:11|unique:unibra_usuarios',
            'email' => 'required|email|',
            'senha' => 'required|min:8',
        ];
    }



    public function messages(){
        return [
            'nome_completo.min' => '*O campo :attribute requer um mínimo de :min caracteres.',
            'required' => '*O campo :attribute é obrigatório.',
            'cpf.unique' => '*O cpf informado já está cadastrado',
            'max:15' => '*O campo :attribute não pode exceder 15 caracteres.',
            'cpf.max' => '*O campo :attribute não pode exceder :max caracteres.',
            'cpf.min' => '*O campo :attribute não pode ser menor do que :min caracteres.',
            'senha.max' => '*O campo :attribute não pode exceder :max caracteres.',
            'senha.min' => '*O campo :attribute não pode conter menos do que :min caracteres.'
        ];
    }

}


