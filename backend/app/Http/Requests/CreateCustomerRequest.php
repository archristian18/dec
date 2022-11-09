<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\customer;
use Builder;

class CreateCustomerRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => ['required', function ($attribute, $value, $fail) {
                $customer = Customer::where('firstname', $value)->exists();
                if ($customer != NULL) {
                    $fail('The firstname has already been taken.');
                }
            }],
            'lastname' => ['required'],
            'details' => ['required'],
        ];
    }
    

    public function getFirstname()
    {
        return $this->input('firstname', null);
    }

    public function getLastname()
    {
        return $this->input('lastname', null);
    }

    public function getDetails()
    {
        return $this->input('details', null);
    }
}
