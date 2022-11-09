<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountMoneyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gcash' => ['required'],
            'wallet' => ['required'],
        ];
    }

    public function getGcash()
    {
        return $this->input('gcash', null);
    }

    public function getWallet()
    {
        return $this->input('wallet', null);
    }
}
