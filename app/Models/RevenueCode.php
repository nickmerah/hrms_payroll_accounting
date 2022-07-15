<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class RevenueCode extends Model
{
    
   protected $table = 'revenuecode';
    public $timestamps = false;
	protected $primaryKey = 'rid';
    protected $fillable = ['rcode',	'rname',	'rcat',	'rgoupcode'];

  

     
    
}
