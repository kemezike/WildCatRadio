<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
	protected $fillable = [
        'user_id','message',
    ];
    
    public function user()
	{
		return $this->belongsTo(User::class);
	}}
