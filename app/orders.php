<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $tabel="orders";
    protected $fillable=[
    	"o_d_id",
    	"uid",
    	"del_boy_id",
    	"status",
    	"date",
    	"address",
    	"created_at",
    	"updated_at"
    ];
}
