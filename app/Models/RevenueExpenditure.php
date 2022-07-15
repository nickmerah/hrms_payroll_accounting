<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class RevenueExpenditure extends Model
{
    
   protected $table = 'revenue_expenditure';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['rdate',	'rcode',	'description',	'appbudget',	'mtarget', 	'actualrev_exp'];

  

     
    
}
