<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table="admin";
    protected $fillable=[
    	"a_id",
    	"password",
    	"created_at",
    	"updated_at",
    	
    ];
}
