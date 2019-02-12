<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table="menu";
    protected $fillable=[
    	"item_id",
    	"cat_id",
    	"item_name",
    	"price",
    	"description",
    	"created_at",
    	"updated_at"
    ];
}
