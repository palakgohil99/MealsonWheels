<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery_boy extends Model
{
    protected $table="delivery_boy";
    protected $fillable=[
    	"a_id",
    	"password",
    	"name",
    	"email",
    	"contact",
    	"created_at",
    	"updated_at"
    ];
}
