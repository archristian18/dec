<?php

namespace App\Services\API;

use DB;
use Exception;
use App\Models\addCustomer;
use App\Models\account;
use App\Exceptions\AccountNotCreatedFoundException;

class AddLoadService
{

    /**
     * @var App\Models\addCustomer
     */
    protected $addCustomer;

    
    /**
     * AddCustomerService constructor.
     *
     * @param App\Models\addCustomer $addCustomer
     */

    public function __construct(addCustomer $addCustomer)
    {
        $this->addCustomer = $addCustomer;
    }

    // Added load
    public function createLoad(array $params)
    {
        DB::beginTransaction();

        try {
            
            $account = $this->accountCheck(); 
        
            if ($params['methods'] == 'gcash' && $account->gcash >= $params['amount']) {
                $account = $account->gcash - $params['amount'];
                $params['totals'] = $this->options($params);
                if ($params['totals'] !== NULL) {
                    $this->addCustomer($params);
                    $this->gcash($params['amount']);
                } else {
                    throw new AccountNotCreatedFoundException;
                }

            } else if ($params['methods'] == 'wallet' && $account->loads >= $params['amount']) {
                $account = $account->loads - $params['amount'];
                $params['totals'] = $this->options($params);
                if ($params['totals'] !== NULL) {
                    $this->addCustomer($params);
                    $this->wallet($params['amount']);
                 } else {
                    throw new AccountNotCreatedFoundException;
                }
            } else {
                throw new AccountNotCreatedFoundException;
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            
           throw $e;
        }
   
    }

    // Check Account amount
    public function accountCheck()
    {
      $account = account::orderBy('id', 'DESC')->first();

      return $account;

    }

    // Create new addCustomer
    public function addCustomer(array $params)
    {
        addCustomer::create([
            'loads' => $params['amount'],
            'options' => $params['option'],
            'method' => $params['methods'],
            'totals' => $params['totals'],
            'customer_id' => $params['id']
        ]);
    }
    
    // Check options paid, debt & balance
    public function options(array $params)
    {
        $customers = addCustomer::where('customer_id', $params['id'])
        ->orderBy('id', 'DESC')
        ->first();

        if ($customers !== NULL) {
            $total = $customers->totals;
            switch ($params['option']) {
                case "debt":    
                    $update = $total + $params['amount'];
                break;
                case "paid":
                    $update = $total; 
                break;
                default:
                    $update = NULL;
            }
            return $update;
        } else {
            $total = 0;
            switch ($params['option']) {
                case "debt":
                    $update = $total + $params['amount'];
                    break;
                case "paid":
                    $update = $total; 
                    break;
                default:
                    $update = NULL;     
            }
            return $update;
        }
    }

    // Amount gcash deduction
    public function gcash(int $params)
    {
        $account = $this->accountCheck();
        $params = $account->gcash - $params;
        
        account::create([
            'gcash' => $params,
            'loads' => $account->loads,
        ]);

        return $params;

    }

    // Amount wallet deduction
    public function wallet(int $params)
    {
        $account = $this->accountCheck();
        $params = $account->loads - $params;

        account::create([
            'gcash' =>  $account->gcash,
            'loads' => $params
        ]);

        return $params;

    }

}