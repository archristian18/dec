<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAddLoadRequest;
use App\Models\account;
use App\Models\customer;
use App\Models\addCustomer;
use App\Services\API\AddLoadService;
use App\Services\API\CustomerService;
use Illuminate\Support\Facades\DB;

class AddCustomerController extends Controller
{
    /** @var App\Services\API\CustomerService */
    protected $customerService;

    /** @var App\Services\API\CustomerService */
    protected $addLoadService;

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
    public function __construct(CustomerService $customerService, AddLoadService $addLoadService)
    {
        $this->customerService = $customerService;
        $this->addLoadService = $addLoadService;
    }  
    
    public function index() 
    {
        return view('customer.addCustomer');
    }

    public function add(CreateAddLoadRequest $request)
    {
      $request->validated();
      try {
            $formData = [
              'id' =>  $request->getId(),
              'amount' =>  $request->getAmount(),
              'option' =>  $request->getOption(),
              'methods' => $request->getMethods(),
            ];

            $customers = $this->addLoadService->createLoad($formData);  

      } catch (Exception $e) {
        return redirect('/customer/load')->with('fail', 'Not enough amount / You did not select option');
      }// @codeCoverageIgnoreEnd
     
      return redirect('/customer/load')->with('success', 'Added amount '); 
    }
    
    public function load()
    {
      try {
          $name = $this->customerService->getCustomer();
      } catch (Exception $e) {
          $this->response = [
              'error' => $e->getMessage(),
              'code' => 500,
          ];
      }// @codeCoverageIgnoreEnd

      return view('customer.addCustomer')->with(compact('name'));

    }

    public function getId ($id)
    {
      $customers = customer::all();   
      return view('customer.addCustomer')->with('name', $customers);
    }

}
