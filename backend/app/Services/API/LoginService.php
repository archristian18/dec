<?php

namespace App\Services\API;

use App\Exceptions\LoginNotFoundException;
use Illuminate\Support\Facades\Auth;
use App\Models\registration;
use Exception;
use DB;

class LoginService
{

    /**
     * @var App\Models\customer
     */
    protected $registration;

    
    /**
     * AccountService constructor.
     *
     * @param App\Models\customer $customer
     */
    public function __construct(registration $registration)
    {
        $this->registration = $registration;
    }

    public function authLogin(array $params)
    {
        try {
                               
            if(Auth::attempt(['email' => $params['email'], 'password' =>  $params['password']])) {
                $registration = Auth::registration();
                $token = $registration->createToken('Token Name')->accessToken;
            } 
            
            // Check registration exist
            $login = registration::where('email', $params['email'])
            ->where('password', $params['password'])
            ->first();

            if ($login == NULL) {
                throw new LoginNotFoundException;
            }
     
            DB::commit();   
        } catch (Exception $e) {
            DB::rollback();

            throw $e;
        }
        return $login;

    }

}