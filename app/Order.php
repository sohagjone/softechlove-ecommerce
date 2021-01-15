<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Order extends Model
{
   public function orderRelationTocustomer()
   {
   	  return $this->hasOne('App\Customer', 'id', 'customer_id');
   }
}
