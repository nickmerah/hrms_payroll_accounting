<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Voting extends Model
{
    
   protected $table = 'votting';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['headno','subheadno',	'authamt',	'services','expenditures','vdate','pvno','payee','payment','cum'
	,'balance','particulars','remark'];
		
}