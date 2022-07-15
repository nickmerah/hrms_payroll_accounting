<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Cashrecon extends Model
{
    
   protected $table = 'reconciliation';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['rdate',	'particulars',	'pvsno',	'rvno',	'chequeno', 	'memoamt',  	'debit',	'credit',	'cumbalance',	'acctcode' ];

  

     
    
}
