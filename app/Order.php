<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable=[
        'user_id',
        'client_id',
        'date'
    ];

    public function user()
    {
       return $this->belongsTo('App\User', 'user_id','id');
    }

    public function client()
    {
       return $this->belongsTo('App\Client', 'client_id','id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product', 'order__products','order_id','product_id')->withPivot('id');
    }
}
