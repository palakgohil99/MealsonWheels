<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_type extends Model
{
    protected $table="payment_type";
    protected $fillable=[
    	"p_t_id",
    	"p_type",
    	"created_at",
    	"updated_at",
    ];
}
