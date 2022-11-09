<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['loads', 'options', 'method', 'totals', 'customer_id'];

    public function addCustomer()
    {
        return $this->hasMany(Customer::class);
    }
    
}
