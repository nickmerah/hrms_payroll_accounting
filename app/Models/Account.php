<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
 
	protected $table = 'auser';
    public $timestamps = false;
	protected $primaryKey = 'uid';
    protected $fillable = ['username', 'groupcat', 'password', 'registered_date',  'user_status' ];
	
	
}  
