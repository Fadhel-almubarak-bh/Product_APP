<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $connection = 'mysql2';
    protected $primaryKey = 'customerNumber'; 

    public function orders()
{
    return $this->hasMany(Order::class, 'customerNumber', 'customerNumber');
}

}
