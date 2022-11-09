<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;

    protected $fillable = ['gcash', 'loads'];
    protected $dateFormat = 'Y/m/d H:i:s';
    
}
