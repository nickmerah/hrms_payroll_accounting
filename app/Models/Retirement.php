<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Retirement extends Model
{
    
   protected $table = 'retirement';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['appdate', 'dept',	'itemno',	'description',	'rcode',	 	'amount',	'pvno'];

 				 							
}							
