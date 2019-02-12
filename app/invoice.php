<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table="invoice";
    protected $fillable=[
    	"inv_no",
    	"order_id",
    	"o_d_id",
    	"amount",
    	"p_t_id",
    	"created_at",
    	"updated_at"
    ];
}
