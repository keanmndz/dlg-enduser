<?php

namespace DLG;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $timestamps = false;

    public function users()
    {
    	return $this->belongsTo('DLG\Users','user_id');
    }

    public function customers()
    {
    	return $this->belongsTo('DLG\Customers','customer_id');
    }

    public function order_list()
    {
    	return $this->hasMany('DLG\Order_list','order_list_id');
    }
}
