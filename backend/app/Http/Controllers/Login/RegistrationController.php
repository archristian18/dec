<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Services\API\LoginService;
use Illuminate\Http\Request;
use App\Models\registration;
use Exception;
use Validate;

class RegistrationController extends Controller
{
    /** @var App\Services\API\LoginService */
    protected $loginService;

    /**
     * UserController constructor.
     *
     * @param App\Services\API\LoginService $loginService
     */

    /**
     * UserController constructor.
     *
     * @param App\Services\API\LoginService $loginService
     */
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function auth(LoginRequest $request)
    {
        $request->validated();
        try {   
           
            $formData = [
                'email' =>  $request->getEmail(),
                'password' =>  $request->getPass(),
            ];
            

           
            $login = $this->loginService->authLogin($formData);
       
            // $this->response['data'] = new CustomerCreateResource($customer);
        } catch (Exception $e) {

            return redirect('/login')->with('fail', 'Incorrect Email / Password');
        }// @codeCoverageIgnoreEnd

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
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
