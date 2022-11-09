<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddLoadRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' =>   ['required'],
            'amount' => ['required', 'numeric'],
            'option' => ['required'],
            'methods' => ['required'],
        ];
    }

    public function getId()
    {
        return $this->input('id', null);
    }

    public function getAmount()
    {
        return $this->input('amount', null);
    }

    public function getOption()
    {
        return $this->input('option', '');
    }
    
    public function getMethods()
    {
        return $this->input('methods', null);
    }

}
