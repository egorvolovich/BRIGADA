<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPayments extends Model
{
    protected $table = 'user_payments';

    public function type(){
        return $this->hasOne(Payments::class);
    }
}
