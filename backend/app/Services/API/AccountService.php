<?php

namespace App\Services\API;

use App\Exceptions\AccountNotCreatedFoundException;
use App\Models\account;
use DB;

class AccountService
{

    /**
     * @var App\Models\account
     */
    protected $account;

    
    /**
     * AccountService constructor.
     *
     * @param App\Models\account $account
     */
    public function __construct(account $account)
    {
        $this->account = $account;
    }

    public function create(array $params)
    {
        try {
            $total = account::
            orderBy('id', 'DESC')
            ->first();  

            if($total == NULL)
            {
                $total=0;
                $updateGcash = $total + $params['gcash'];
                $updateLoad = $total + $params['wallet'];
            } else {
                $updateGcash = $total->gcash + $params['gcash'];
                $updateLoad = $total->loads + $params['wallet'];
            }

            $account = account::create([
                'gcash' =>  $updateGcash,
                'loads' => $updateLoad
            ]);

            if (!($account)) {
                throw new AccountNotCreatedFoundException;
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            throw $e;
        }

        return $account;
    }

}