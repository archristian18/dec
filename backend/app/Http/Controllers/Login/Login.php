<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class RegistrationController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();
        try {   
            $formData = [
                'email' =>  $request->getEmail(),
                'password' =>  $request->getPassword(),
            ];

            // $customer = $this->customerService->create($formData);
            
            // $this->response['data'] = new CustomerCreateResource($customer);
        } catch (Exception $e) {
            $this->response = [
                'error' => $e->getMessage(),
                'code' => 500,
            ];
        }// @codeCoverageIgnoreEnd
        return redirect('/');
    }
    public function register()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registrations',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect("registration")->withSuccess('You have signed-in');

    }

    public function create(array $data)
    {
      registration::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
        // 'password' => Hash::make($data['password'])
      ]);
    
    }    
    
    public function data()
    {
        // if(Auth::check()){
        //     return redirect('/');
        // }
  
        return redirect("/login")->withSuccess('You are not allowed to access');
    }



}
