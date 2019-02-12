<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table="user";
    protected $fillable=[
    	"uid",
    	"password",
    	"name",
    	"email",
    	"contact",
    	"gender",
    	"address",
    	"address2",
    	"pincode",
    	"created_at",
    	"updated_at"
    ];

}
