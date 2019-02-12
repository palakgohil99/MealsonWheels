<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //Add table name here
    protected $table="category";
    protected $fillable=[
    	"cat_id",
    	"cat_name"
    ];
}
