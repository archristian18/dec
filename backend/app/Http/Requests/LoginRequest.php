<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\registration;
use Builder;

class LoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required'],
            'password' => ['required'],
        ];
    }
 
    public function getEmail()  
    {
        return $this->input('email', null);
    }

    public function getPass()
    {
        return $this->input('password', null);
    }
}
