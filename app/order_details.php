<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $tabel="orders";
    protected $fillable=[
    	"o_d_id",
    	"order_id",
    	"item_id",
    	"quantity",
    	"created_at",
    	"updated_at"
    ];
}
