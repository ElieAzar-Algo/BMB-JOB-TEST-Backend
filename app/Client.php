<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table="clients";
    protected $fillable=[
        'name',
        'address',
        'email',
        'phone'
    ];

    public function order()
    {
        return $this->hasMany('App\Order', 'client_id','id');
    }
}
