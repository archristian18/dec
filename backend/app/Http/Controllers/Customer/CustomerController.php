<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Resources\CustomerCreateResource;
use App\Services\API\CustomerService;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\addCustomer;
use Illuminate\Support\Facades\DB;
use Validate;
use Exception;

class CustomerController extends Controller
{
    /** @var App\Services\API\CustomerService */
    protected $customerService;

    /**
     * UserController constructor.
     *
     * @param App\Services\API\CustomerService $customerService
     */

    /**
     * UserController constructor.
     *
     * @param App\Services\API\CustomerService $customerService
     */
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.customer');
    }

    public function home()
    {
        
       return view('layout.home');
    }

    // list of customers
    public function view()
    {
        try {
            $customers = $this->customerService->getCustomer();
        } catch (Exception $e) {
            $this->response = [
                'error' => $e->getMessage(),
                'code' => 500,
            ];
        }// @codeCoverageIgnoreEnd

        return view('customer.viewCustomer')->with(compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * create customer account
     */
    public function store(CreateCustomerRequest $request)
    {
        $request->validated();
        try {   
            $formData = [
                'firstname' =>  $request->getFirstname(),
                'lastname' =>  $request->getLastname(),
                'details' =>  $request->getDetails(),
            ];

            $customer = $this->customerService->create($formData);
            
            $this->response['data'] = new CustomerCreateResource($customer);
        } catch (Exception $e) {
            $this->response = [
                'error' => $e->getMessage(),
                'code' => 500,
            ];
        }// @codeCoverageIgnoreEnd
        return redirect('/customer')->with('success', 'Customer Created');
    }

    /**
     * Delete user.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            // perform user delete
            $this->response['deleted'] = $this->customerService->delete((int) $id);
        } catch (Exception $e) {
            $this->response = [
                'error' => $e->getMessage(),
                'code' => 500,
            ];
        }

        return redirect('/view')->with('success', 'Deleted');
    }

    public function destroy($id)
    {
        customer::destroy($id);
        return redirect('/view')->with('success', 'Deleted');
    }
}
