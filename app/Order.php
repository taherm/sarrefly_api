<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'id', 'receiver_name', 'receiver_mobile', 'receiver_address', 'civil_id', 'country', 'amount', 'charges', 'order_type', 'saved', 'status', 'created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
