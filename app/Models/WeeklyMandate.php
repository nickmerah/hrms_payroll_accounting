<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class WeeklyMandate extends Model
{
    
   protected $table = 'wmandate';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['tdate',	 	'beneficiary',	'acctno',	'bank_cash','amount','remarks'];

  

     
    
}
