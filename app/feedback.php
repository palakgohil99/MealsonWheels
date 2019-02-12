<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
	protected $table="feedback";
	protected $fillable=[
		"feed_id",
		"uid",
		"item_id",
		"comment",
		"date",
		"created_at",
		"updated_at"
	];

}
